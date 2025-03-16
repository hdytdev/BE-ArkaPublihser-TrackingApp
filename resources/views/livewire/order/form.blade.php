<?php

use function Livewire\Volt\{mount, state, computed};
use App\Services\interface\JournalServiceInterface;
use App\Services\interface\CustomerServiceInterface;
state([
    'journal' => [],
    'customers' => [],
]);

$cekJournal = computed(fn(): bool => $this->journal && $this->journal->count() > 0);

mount(function (JournalServiceInterface $journalService, CustomerServiceInterface $customerService) {
    $this->journal = $journalService->all();
    $this->customers = $journalService->all();
});

?>

<div class="row px-4">
    <div class="col-md-6">
        <div class="card-body px-0">
            <div class="mb-3">
                <label for="exampleDataList" class="form-label">Nama Jurnal</label>
                <select class="form-control" name="" id="">
                    @if ($this->cekJournal)
                        @foreach ($journal as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    @else
                        <option value="">-</option>
                    @endif
                </select>
                @if (false == $this->cekJournal)
                    <div class="form-text text-warning">
                        <i><small>Journal belum ditambahkan! klik <a href="{{ route('journal.add') }}">Tambah Jurnal</a>
                            </small></i>
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Judul Artikel</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" />
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Penulis</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" />
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Submit</label>
                <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" />
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Estimasi Publish</label>
                <input class="form-control" type="month" value="2021-06" id="html5-month-input" />
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label mb-0">Tanggal Publish</label>
                <p class="form-notes mb-2"><span class="text-danger">*</span>kosongkan jika belum publish
                </p>
                <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" />
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Upload Artikel</label>
                <input class="form-control" type="file" id="formFile" />
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card-body px-0">
            <div class="mb-3">
                <label for="" class="form-label">Nama Customer</label>
                <input class="form-control" list="datalistOptions" id="exampleDataList"
                    placeholder="type to search..." />
                <datalist id="datalistOptions">
                    <option value="San Francisco"></option>
                    <option value="New York"></option>
                    <option value="Seattle"></option>
                    <option value="Los Angeles"></option>
                    <option value="Chicago"></option>
                </datalist>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tanggal Pesanan</label>
                <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Paket</label>
                <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                    <option selected>Pilih paket</option>
                    <option value="1">Ekonomis</option>
                    <option value="2">Reguler</option>
                    <option value="3">Exclusive</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Status Publikasi</label>
                <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
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
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label mb-0">Link Publish</label>
                <p class="form-notes mb-2"><span class="text-danger">*</span>kosongkan jika belum publish
                </p>
                <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" />
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label mb-0">Upload LoA</label>
                <p class="form-notes mb-2"><span class="text-danger">*</span>kosongkan jika belum publish
                </p>
                <input class="form-control" type="file" id="formFile" />
            </div>
            <div class="mt-2 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
            </div>
        </div>
    </div>
</div>
