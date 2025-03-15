<?php
use function Livewire\Volt\{mount, state, rules};
use App\Services\CustomerService;
rules([
    'nama' => 'required|max:80',
    'no_telp' => 'required|min:12|max:12',
    'asal_daerah' => 'required|max:120',
    'instansi' => 'required|max:120',
    'email' => 'required|unique:customers,email',
    'jabatan' => 'required|max:20',
]);

state([
    'nama' => null,
    'no_telp' => null,
    'asal_daerah' => null,
    'instansi' => null,
    'email' => null,
    'jabatan' => null,
]);

mount(function () {});

$save = function (CustomerService $customerService) {
    $data = $this->validate();
    $customerService->create($data);
};

?>
<div>
    <div class="page-title pt-3 mb-1">
        <h4>Tambah Customer</h4>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 order-1">
            <div class="row">
                <div class="col-md-12">
                    <x-card title="Add New Customer">
                        <div class="row px-4">
                            <div class="col-md-6">
                                <x-input placeholder="Nama Customer" label="Nama Customer" name="nama"
                                    type="text" />
                                <x-input placeholder="Nomor Telepon" label="Nomor Telepon" name="no_telp"
                                    type="text" />
                                <x-input label="Alamat Email" name="email" type="email" />
                            </div>
                            <div class="col-md-6">
                                <x-input label="Asal Daerah" name="asal_daerah" type="text" />
                                <x-input label="Instansi" name="instansi" type="text" />
                                <x-input label="Jabatan" name="jabatan" type="text" />
                                <div class="mt-2 d-flex justify-content-end">

                                    <button  wire:click="save" type="submit"
                                        class="btn btn-primary me-2">
                                        <div wire:loading class="spinner-border spinner-border-sm" role="status"></div>
                                          <span wire:loading.class="d-none">Submit</span>
                                    </button>
                                    <a href="{{route("customer.index")}}" class="btn btn-outline-secondary btn-link">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </x-card>
                </div>
            </div>
        </div>
    </div>
</div>
