<div>
    <div class="card mt-4">
        <div class="card-header d-flex justify-content-between">
            <h5 class="card-title mb-0">
                <i class='bx bx-info-circle'></i>
                <span>Informasi Pesanan</span>
            </h5>
            <button data-bs-toggle="modal" data-bs-target="#manageOrder"
                class="btn btn-primary text-sm d-flex align-items-center gap-10">
                <span>Kelola Pesanan</span>
                <i class='bx bx-cog'></i>
            </button>
        </div>
        <div class="card-body m-0">
            <ul class="journal_info-list">
                <li class="d-flex align-items-start">
                    <div class="journal_info-title">
                        <h6 class="mb-0">ID Pesanan</h6>
                        <p class="mb-0">:</p>
                    </div>

                    <div class="journal_info-info">
                        <h6 class="mb-0">{{ $order->order_number }}</h6>
                    </div>
                </li>
                <li class="d-flex align-items-start">
                    <div class="journal_info-title">
                        <h6 class="mb-0">Nama Pemesan</h6>
                        <p class="mb-0">:</p>
                    </div>
                    <div class="journal_info-info">
                        <h6 class="mb-0">
                            {{ $order->customer->name }}
                        </h6>
                    </div>
                </li>
                <li class="d-flex align-items-start">
                    <div class="journal_info-title">
                        <h6 class="mb-0">Tanggal Pemesanan</h6>
                        <p class="mb-0">:</p>
                    </div>
                    <div class="journal_info-info">
                        <h6 class="mb-0">
                            {{ $order->created_at }}
                        </h6>
                    </div>
                </li>
                <li class="d-flex align-items-start">
                    <div class="journal_info-title">
                        <h6 class="mb-0">Paket</h6>
                        <p class="mb-0">:</p>
                    </div>
                    <div class="journal_info-info">
                        <h6 class="mb-0">
                            {{ $order->package }}
                        </h6>
                    </div>
                </li>
                <li class="d-flex align-items-start">
                    <div class="journal_info-title">
                        <h6 class="mb-0">Termin</h6>
                        <p class="mb-0">:</p>
                    </div>
                    <div class="journal_info-info">
                        <h6 class="mb-0">
                            3
                        </h6>
                    </div>
                </li>
                <li class="d-flex align-items-start">
                    <div class="journal_info-title">
                        <h6 class="mb-0">Status Pesanan</h6>
                        <p class="mb-0">:</p>
                    </div>
                    <div class="journal_info-info">
                        <h6 class="mb-0">
                            {{ $order->notes[0]->orderStatus->name }}
                        </h6>
                    </div>
                </li>
                @foreach ($order->termin as $termin)
                    <li class="d-flex align-items-start">
                        <div class="journal_info-title">
                            <h6 class="mb-0">Termin {{ $termin->term }}</h6>
                            <p class="mb-0">:</p>
                        </div>
                        <div class="journal_info-info">
                            @if ($termin->is_paid)
                                <h6 class="mb-0 text-success">
                                    PAID
                                </h6>
                            @else
                                <h6 class="mb-0 text-danger">
                                    UNPAID
                                </h6>
                            @endif
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="separator stretched-dashed"></div>
            <div class="journal-info_btn-group d-flex justify-content-end mt-4">
                <button wire:click="download_kwitansi" class="btn inactive">
                    <i class='bx bx-cloud-download'></i>
                    <span wire:loading wire:target="download_kwitansi">Loading...</span>
                    <span wire:loading.class="d-none" wire:target="download_kwitansi">Download Kwitansi</span>
                </button>
                <button wire:click="download_invoice" class="btn active">
                    <i class='bx bx-cloud-download'></i>
                    <span wire:loading wire:target="download_invoice">Loading...</span>
                    <span wire:loading.class="d-none" wire:target="download_invoice">Download Invoice</span>
                </button>
                <a href="{{ $order->payment_link }}" target="__blank" class="btn active">
                    <i class='bx bx-wallet'></i>
                    <span>
                        Lakukan Pembayaran
                    </span>
                </a href="">
            </div>
        </div>
    </div>
    <div class="modal fade" wire:ignore.self id="manageOrder" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form wire:submit.prevent="save" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Kelola Pesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-2">
                        @foreach ($order->termin as $item)
                            <div class="col mb-3">
                                <label for="nameBasic" class="form-label">Status Termin {{$item->term}}</label>
                                <select wire:model.lazy="termins.{{$item->id}}" class="form-select"
                                    id="exampleFormControlSelect1" aria-label="Default select example">
                                    <option>Choose Option...</option>
                                    <option {{ $termins[$item->id] == 1 ? 'selected' : '' }} value="1">PAID</option>
                                    <option {{ $termins[$item->id] == 0 ? 'selected' : '' }} value="0">UNPAID</option>
                                </select>
                            </div>
                        @endforeach

                    </div>
                    <div class="row g-2">
                        <div class="col-md-6" x-data="{ uploading: false, progress: 0 }"
                            x-on:livewire-upload-start="uploading = true"
                            x-on:livewire-upload-finish="uploading = false"
                            x-on:livewire-upload-cancel="uploading = false"
                            x-on:livewire-upload-error="uploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress">
                            <x-form.input label="Upload Kwitansi" name="kwitansi" type="file" class="form-control" />
                            <div x-show="uploading">
                                <div class="progress-bar progress-bar-striped" role="progressbar"
                                    x-bind:style="`width: ${progress}%`;" x-bind:aria-valuenow="progress"
                                    aria-valuemin="0" aria-valuemax="100" x-text="`${progress}%`">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" x-data="{ uploading: false, progress: 0 }"
                            x-on:livewire-upload-start="uploading = true"
                            x-on:livewire-upload-finish="uploading = false"
                            x-on:livewire-upload-cancel="uploading = false"
                            x-on:livewire-upload-error="uploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress">
                            <x-form.input label="Upload Invoice" name="invoices" type="file" class="form-control" />
                            <div x-show="uploading">
                                <div class="progress-bar progress-bar-striped" role="progressbar"
                                    x-bind:style="`width: ${progress}%`;" x-bind:aria-valuenow="progress"
                                    aria-valuemin="0" aria-valuemax="100" x-text="`${progress}%`">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2 mt-2">
                        <div class="col mb-0">
                            <label class="form-label">Link Pembayaran</label>
                            <input wire:model="payment_link" type="text" class="form-control">
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
        const modal = document.getElementById("manageOrder");
        modalORderdetail = new bootstrap.Modal(modal);

        $wire.on("hide_modal", () => modalORderdetail.hide())
    </script>

    @endscript
</div>