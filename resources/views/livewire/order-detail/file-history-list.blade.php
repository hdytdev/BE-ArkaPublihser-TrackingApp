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
                        <a href="{{asset('storage')}}/{{$file->file_url}}" class="file-download">
                            <i class='bx bx-cloud-download'></i>
                        </a>
                        <button data-bs-toggle="modal" data-bs-target="#editFile" class="file-download">
                            <i class='bx bx-edit-alt'></i>
                        </button>
                        <button data-bs-toggle="modal" data-bs-target="#deleteFile" href="" class="file-delete">
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

    <x-modal action="update" target="addFile">
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama File</label>
                <input class="form-control">
            </div>
        </div>
        <div class="row g-2">
            <div class="col mb-0">
                <label for="dobBasic" class="form-label">Tanggal</label>
                <input type="date" id="dobBasic" class="form-control" placeholder="DD / MM / YY" />
            </div>
            <div class="col mb-0">
                <label for="dobBasic" class="form-label">Upload File</label>
                <input type="file" id="dobBasic" class="form-control" />
            </div>
        </div>
    </x-modal>
