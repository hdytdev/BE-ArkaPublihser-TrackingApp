<div>
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header pb-0">Isi Detail Pesanan</h5>
            <div class="row px-4">
                <div class="col-md-6">
                    <div class="card-body px-0">
                        <div class="mb-3">
                            <livewire:form.select-journal wire:model="journal_id" />
                            @error('journal_id')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        <x-form.input name="title" label="Judul Artikel" />
                        <x-form.input name="authors" label="Author" />
                        <x-form.input type="date" name="publish_date" label="Tanggal Publish">

                            <x-slot name="note">
                                <span class="text-danger">*</span>kosongkan jika belum publish
                            </x-slot>

                        </x-form.input>
                        <x-form.input type="date" name="submission_date" label="Tanggal Submit" />
                        <x-form.input type="date" name="estimated_publish_date" label="Estimasi Publish" />
                        <x-form.input type="file" name="article_file" label="File Artikel" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body px-0">
                        <div class="mb-3">
                            <livewire:form.select-customer wire:model="customer_id" />
                            @error('customer_id')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Paket</label>
                            <select wire:model="package"
                                class="form-select {{ $errors->has('package') ? 'is-invalid' : '' }}"
                                id="exampleFormControlSelect1" aria-label="Default select example">
                                <option selected value="">Pilih paket</option>
                                <option value="ekonomis">Ekonomis</option>
                                <option value="reguler">Reguler</option>
                                <option value="exclusive">Exclusive</option>
                            </select>
                            @error('package')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- <div class="mb-3">
                            <label for="" class="form-label">Status Publikasi</label>
                            <select class="form-select" id="exampleFormControlSelect1"
                                aria-label="Default select example">
                                <option selected>Pilih status</option>
                                <option value="1">Screening</option>
                                <option value="2">Editing Queue</option>
                                <option value="3">Editing</option>
                                <option value="4">Submitted</option>
                                <option value="5">Review</option>
                                <option value="6">Author Revision</option>
                                <option value="7">LoA Rises</option>
                                <option value="8">Copy Editing</option>
                                <option value="9">Published</option>
                            </select>
                        </div> --}}
                        <x-form.input type="texts" name="publish_link" label="Publish Link">
                            <x-slot name="note">
                                <span class="text-danger">*</span>kosongkan jika belum publish
                            </x-slot>
                        </x-form.input>
                        <x-form.input type="file" name="loa_file" label="Loa File">
                            <x-slot name="note">
                                <span class="text-danger">*</span>kosongkan jika belum publish
                            </x-slot>
                        </x-form.input>
                        <div class="mt-2 d-flex justify-content-end">
                            <button wire:click="cek" type="submit" class="btn btn-primary me-2">Submit</button>
                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
