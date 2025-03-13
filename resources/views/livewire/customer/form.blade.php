<?php
use function Livewire\Volt\{mount, state, rules};

rules([
    'nama' => 'required',
    'no_telp' => 'required',
    'asal_daerah' => 'required',
    'instansi' => 'required',
    'email' => 'required',
    'jabatan' => 'required',
]);

state([
    'nama' => null,
    'no_telp' => null,
    'asal_daerah' => null,
    'instansi' => null,
    'email' => null,
    'jabatan' => null,
]);

mount(function () {
    
});

$save = function () {
    $this->validate();
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
                    <div class="card mb-4">
                        <h5 class="card-header pb-0">Isi Detail Customer</h5>
                        <div class="row px-4">
                            <div class="col-md-6">
                                <div class="card-body px-0">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Nama Customer</label>
                                        <input wire:model="nama" type="text" @class(['form-control', 'is-invalid' => $errors->has('nama')])
                                            id="" placeholder="" />
                                        @error('nama')
                                            <p class="invalid-feedback">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">No Telepon</label>
                                        <input @class(['form-control', 'is-invalid' => $errors->has('no_telp')]) wire:model="no_telp" type="text"
                                            class="form-control" id="" placeholder="" />
                                        @error('no_telp')
                                            <p class="invalid-feedback">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Email</label>
                                        <input @class(['form-control', 'is-invalid' => $errors->has('email')]) wire:model="email" type="text"
                                            class="form-control" id="" placeholder="" />
                                        @error('email')
                                            <p class="invalid-feedback">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body px-0">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Asal Daerah</label>
                                        <input @class(['form-control', 'is-invalid' => $errors->has('asal_daerah')]) wire:model="asal_daerah" type="text"
                                            class="form-control" id="" placeholder="" />
                                        @error('asal_daerah')
                                            <p class="invalid-feedback">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Instansi</label>
                                        <input @class(['form-control', 'is-invalid' => $errors->has('instansi')]) wire:model="instansi" type="text"
                                            class="form-control" id="" placeholder="" />
                                        @error('instansi')
                                            <p class="invalid-feedback">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Jabatan</label>
                                        <input @class(['form-control', 'is-invalid' => $errors->has('jabatan')]) wire:model="jabatan" type="text"
                                            class="form-control" id="" placeholder="" />
                                        @error('jabatan')
                                            <p class="invalid-feedback">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                    <div class="mt-2 d-flex justify-content-end">
                                        <button wire:click="save" type="submit"
                                            class="btn btn-primary me-2">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
