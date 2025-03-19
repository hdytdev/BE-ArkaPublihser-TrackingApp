<div class="card">
    <div class="card-header">
        <div class="card-title mb-0">
            <i class='bx bx-notepad'></i>
            <span>
                Notes
            </span>
        </div>
        <div class="card-body m-0 p-0">
            <div class="accordion mt-3" id="accordionExample">
                @if($notes && $notes->count() < 1)
                    <p class="alert alert-info">
                        Belum ada notes
                    </p>
                @else
                    @foreach ($notes as $item)
                        <div class="card accordion-item detail-order_accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#accordion-{{ $loop->iteration }}" aria-expanded="false"
                                    aria-controls="accordionTwo">
                                    {{ $item->createdAtFormated ?? '' }}
                                </button>
                            </h2>
                            <div id="accordion-{{ $loop->iteration }}" class="accordion-collapse collapse"
                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body journal-notes">
                                    <div class="d-flex notes-item">
                                        <h6>Progress:</h6>
                                        <h6 style="color:{{ $item->orderStatus->color }}">
                                            {{ $item->orderStatus->name }}</h6>
                                    </div>
                                    <div class="d-flex notes-item">
                                        <h6>Notes:</h6>
                                        <p>{{ $item->note }}</p>
                                    </div>
                                    <span wire:loading wire:target="delete('{{ $item->id }}')">Deleting</span>
                                    <div class="notes-control d-flex justify-content-end">
                                        <button data-bs-toggle="modal" data-bs-target="#editNote"
                                            class="btn btn-edit text-primary d-flex items-center">
                                            <i class='bx bx-edit-alt'></i>
                                            <span>Edit</span>
                                        </button>
                                        <button wire:konfirmasi="apakah anda yakin"
                                            wire:click="delete('{{ $item->id }}')"
                                            class="btn btn-delete text-danger d-flex items-center">
                                            <i class='bx bx-trash'></i>
                                            <span>Delete</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="d-flex justify-content-end mt-3">
                <button data-bs-toggle="modal" data-bs-target="#addNote"
                    class="btn btn-primary text-sm d-flex align-items-center gap-10">
                    <span>Tambah Notes</span>
                    <i class='bx bx-add-to-queue'></i>
                </button>
            </div>
        </div>
    </div>


    <div class="modal fade" wire:ignore id="addNote" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form wire:submit.prevent="add" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Tambah Notes</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Notes</label>
                            <textarea required wire:model="add_notes" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label class="form-label">Status</label>
                            <select required wire:model="add_status_id" class="form-select"
                                id="exampleFormControlSelect1" aria-label="Default select example">
                                <option selected>Pilih status</option>
                                @foreach ($this->statusess as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col mb-0">
                            <label for="dobBasic" class="form-label">Tanggal</label>
                            <input required wire:model="add_date" type="date" id="dobBasic" class="form-control"
                                placeholder="DD / MM / YY" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Tutup
                    </button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>


    @script
        <script>
            $wire.on("re_render", () => {
                $wire.$refresh();
                $wire.$commit();
            })
        </script>
    @endscript

</div>
