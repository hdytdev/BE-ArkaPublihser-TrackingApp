<?php
use function Livewire\Volt\{mount, state, rules};
use App\Services\CustomerService;
use App\Services\interface\CustomerServiceInterface;
state(['id' => null]);
state(['data' => null]);
state([
    'nama' => null,
    'no_telp' => null,
    'asal_daerah' => null,
    'instansi' => null,
    'email' => null,
    'jabatan' => null,
]);

mount(function (CustomerServiceInterface $customerService) {
    if (null != $this->id && ($data = $customerService->findById($this->id))) {
        $this->data = $data;
        $this->nama = $data->nama;
        $this->no_telp = $data->no_telp;
        $this->asal_daerah = $data->asal_daerah;
        $this->instansi = $data->instansi;
        $this->email = $data->email;
        $this->jabatan = $data->jabatan;
    }
});

$save = function (CustomerService $customerService) {
    $rules = [
        'nama' => 'required|max:80',
        'no_telp' => 'required|min:12|max:12',
        'asal_daerah' => 'required|max:120',
        'instansi' => 'required|max:120',
        'email' => 'required',
        'jabatan' => 'required|max:20',
    ];

    if ($this->email == $this->data->email) {
        $data = $this->validate($rules);
    } else {
        $rules['email'] = '|unique:customers,email';
        $data = $this->validate($rules);
    }
    if (!$this->data) {
        if ($customerService->create($data)) {
            $this->dispatch('saved', true);
            $this->reset();
        } else {
            $this->dispatch('saved', false);
        }
    } else {
        $this->data->update($data);
        $this->dispatch('saved', true);
    }
};

?>
@script
    <script>
        $wire.on('saved', (v) => {
            if (v) {
                Swal.fire({
                    icon: "success",
                    text: "Data berhasil ditambahkan"
                }).then(() => {
                    Swal.fire({
                        icon: "question",
                        showCancelButton: true,
                        confirmButtonText: "Ya! Tambah Yang lain",
                        cancelButtonText: "Tidak! Terimakasih",
                        text: "Apakah Ingin menambahkan data lagi?",
                    }).then((e) => {
                        if (!e.isConfirmed) {
                            window.location.href = "{{ route('customer.index') }}"
                        }
                    })
                })
            } else {
                Swal.fire({
                    icon: "error",
                    text: "Data Gagal ditambahkan"
                })
            }
        })
    </script>
@endscript
<div>
    <div class="page-title pt-3 mb-1">
        <h4>{{ $data ? 'Edit' : 'Tambah' }} Customer</h4>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 order-1">
            <div class="row">
                <div class="col-md-12">
                    <x-card title="{{ $data ? 'Edit' : 'Tambah' }} Customer">
                        <form wire:submit.prevent="save" class="row px-4">
                            <div class="col-md-6">
                                <x-input placeholder="Nama Customer" label="Nama Customer" name="nama"
                                    type="text" />
                                <x-input type="tel" placeholder="Nomor Telepon" label="Nomor Telepon" name="no_telp"
                                    type="text" />
                                <x-input label="Alamat Email" name="email" type="email" />
                            </div>
                            <div class="col-md-6">
                                <x-input label="Asal Daerah" name="asal_daerah" type="text" />
                                <x-input label="Instansi" name="instansi" type="text" />
                                <x-input label="Jabatan" name="jabatan" type="text" />
                                <div class="d-flex justify-content-between align-items-center">
                                    <i class="d-none d-md-block">
                                        <small> <b>Note:</b>Tekan <kbd>ENTER</kbd> untuk menyimpan atau klik submit</small>
                                    </i>
                                    <div class="mt-2 d-flex justify-content-end">

                                        <button type="submit" class="btn btn-primary me-2">
                                            <div wire:loading class="spinner-border spinner-border-sm" role="status">
                                            </div>
                                            <span wire:loading.class="d-none">Submit</span>
                                        </button>
                                        <a href="{{ route('customer.index') }}"
                                            class="btn btn-outline-secondary btn-link">Cancel</a>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </x-card>
                </div>
            </div>
        </div>
    </div>
</div>
