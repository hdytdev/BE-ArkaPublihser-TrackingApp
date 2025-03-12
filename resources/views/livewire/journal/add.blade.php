<?php
use Livewire\Volt\Component;
use App\Services\interface\JournalServiceInterface;
new class extends Component {
    public $name = null;
    public $apc_charge = null;
    public $long_process_time = null;
    public $index = null;
    public $focus_and_scope = null;
    public $journal_link = null;
    public $accreditation = null;
    public $category = null;
    public function rules()
    {
        return [
            'name' => 'required',
            'apc_charge' => 'required',
            'long_process_time' => 'required',
            'index' => 'required',
            'focus_and_scope' => 'required',
            'journal_link' => 'required',
            'accreditation' => 'required',
            'category' => 'required',
        ];
    }
    public function save(JournalServiceInterface $journalServiceInterface)
    {
        $validated = $this->validate();
        try {
            $journalServiceInterface->save($validated);
            $this->dispatch('notification',true);
        } catch (\Throwable $th) {
            session()->flash('error', 'Journal Gagal di tambahkan');
            $this->dispatch('notification',false);
        }
    }
};

?>
@script
    <script>
        $wire.on("notification", (e) => {
            if(e){
                Swal.fire({
                title: "Success",
                text: "Data berhasil di ditambahkan",
                icon: "success",
            })
            }else{
                Swal.fire({
                title: "Gagal!",
                text: "Data Gagal di ditambahkan",
                icon: "error",
            })
            }
        })
    </script>
@endscript
<!-- Content -->
<div>
    <div class="page-title pt-3 mb-1">
        <h4>Tambah Jurnal</h4>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 order-1">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">

                        <div class="card-header pb-0">
                            <h5 class="card-title">Isi Detail Jurnal</h5>

                        </div>

                        <form wire:submit.prevent="save" class="row  px-4">
                            <div class="col-md-6">
                                <div class="card-body px-0">
                                    <div class="mb-3">
                                        <label for="exampleDataList" class="form-label">Nama Jurnal</label>
                                        <input type="text" wire:model="name" @class([
                                            'is-invalid' => $errors->has('name'),
                                            'font-bold' => true,
                                            'form-control',
                                        ])
                                            id="" placeholder="Nama journal" />
                                        <div class="invalid-feedback">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="apc_charge" class="form-label">APC Charge</label>
                                        <input type="number" wire:model="apc_charge" @class([
                                            'is-invalid' => $errors->has('apc_charge'),
                                            'font-bold' => true,
                                            'form-control',
                                        ])
                                            id="apc_charge" placeholder="Apc Charge" />
                                        <div class="invalid-feedback">
                                            @error('apc_charge')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="accreditation" class="form-label">Akreditasi</label>
                                        <input type="text" wire:model="accreditation" @class([
                                            'is-invalid' => $errors->has('accreditation'),
                                            'font-bold' => true,
                                            'form-control',
                                        ])
                                            id="accreditation" placeholder="Akreditasi" />
                                        <div class="invalid-feedback">
                                            @error('accreditation')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="long_process_time" class="form-label">Lama Proses</label>
                                        <input type="text" wire:model="long_process_time"
                                            @class([
                                                'is-invalid' => $errors->has('long_process_time'),
                                                'font-bold' => true,
                                                'form-control',
                                            ]) id="long_process_time"
                                            placeholder="Lama prosess" />
                                        <div class="invalid-feedback">
                                            @error('long_process_time')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body px-0">
                                    <div class="mb-3">
                                        <label for="index" class="form-label">Index</label>
                                        <input type="text" wire:model="index" @class([
                                            'is-invalid' => $errors->has('index'),
                                            'font-bold' => true,
                                            'form-control',
                                        ])
                                            id="index" placeholder="Journal indexing" />
                                        <div class="invalid-feedback">
                                            @error('index')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="focus_and_scope" class="form-label">Focus And Scope</label>

                                        <input type="text" wire:model="focus_and_scope" @class([
                                            'is-invalid' => $errors->has('focus_and_scope'),
                                            'font-bold' => true,
                                            'form-control',
                                        ])
                                            id="focus_and_scope" placeholder="Focus And Scope" />
                                        <div class="invalid-feedback">
                                            @error('focus_and_scope')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Link Jurnal</label>

                                        <input type="text" wire:model="journal_link" @class([
                                            'is-invalid' => $errors->has('journal_link'),
                                            'font-bold' => true,
                                            'form-control',
                                        ])
                                            id="" placeholder="Link journal" />
                                        <div class="invalid-feedback">
                                            @error('journal_link')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Kategori Jurnal</label>
                                        <select name="category" wire:model="category" @class([
                                            'is-invalid' => $errors->has('category'),
                                            'font-bold' => true,
                                            'form-control',
                                        ])
                                            id="inputGroupSelect01">
                                            <option selected>Choose...</option>
                                            <option value="internal">Jurnal Internal</option>
                                            <option value="external">Jurnal Eksternal</option>
                                            <option value="scopus">Jurnal Scopus</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            @error('category')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mt-2 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-2">
                                            <span wire:loading="save">Loading..</span>
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->
