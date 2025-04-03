<div class="card mt-4">
    <div class="card-header">
        <div class="card-title mb-0">
            <i class='bx bx-file'></i>
            <span>
                File History
            </span>
        </div>
    </div>
    <div class="card-body">
        <div class="file-history">
            @foreach ($files as $file)
            <div class="file-list d-flex justify-content-between align-items-center">
                <div class="file-name">
                    <h6 class="mb-0">{{ $file->name }}</h6>
                    <p>{{ $file->createdAtFormated }}</p>
                </div>
                <div class="file-controller d-flex">
                    <button wire:click="download('{{ $file->file_url }}')" class="file-download">
                        <i wire:loading.class='d-none' wire:target="download('{{ $file->file_url }}')"
                            class='bx bx-cloud-download'></i>
                        <div wire:loading wire:target="download('{{ $file->file_url }}')"
                            class="spinner-border  spinner-border-sm align-middle mt-4  text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </button>
                    <button data-bs-toggle="modal" data-bs-target="#editFile" class="file-download">
                        <i class='bx bx-edit-alt'></i>
                    </button>
                    <button wire:konfirmasi wire:click="delete('{{ $file->id }}')" data-bs-toggle="modal"
                        data-bs-target="#deleteFile" href="" class="file-delete">
                        <i class='bx bx-trash'></i>
                    </button>
                </div>
            </div>
            @endforeach

        </div>
        <div class="d-flex justify-content-end mt-3">
            <button data-bs-toggle="modal" data-bs-target="#addFile"
                class="btn btn-primary text-sm d-flex align-items-center gap-10">
                <span>Tambah File</span>
                <i class='bx bx-add-to-queue'></i>
            </button>
        </div>
    </div>

    <x-modal action="new" target="addFile">
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama File</label>
                <input wire:model='filename' class="form-control @error('filename') is-invalid @enderror">

                @error('filename')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror

            </div>
        </div>
        <div class="row g-2">
            <div class="col-md-12" x-data="{ uploading: false, progress: 0 }"
                x-on:livewire-upload-start="uploading = true" x-on:livewire-upload-finish="uploading = false"
                x-on:livewire-upload-cancel="uploading = false" x-on:livewire-upload-error="uploading = false"
                x-on:livewire-upload-progress="progress = $event.detail.progress">
                <x-form.input label="Upload Invoice" name="file" type="file" class="form-control" />
                <div x-show="uploading">
                    <div class="progress-bar progress-bar-striped" role="progressbar"
                        x-bind:style="`width: ${progress}%`;" x-bind:aria-valuenow="progress" aria-valuemin="0"
                        aria-valuemax="100" x-text="`${progress}%`">
                    </div>
                </div>
            </div>
        </div>
    </x-modal>