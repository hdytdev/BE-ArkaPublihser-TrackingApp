<div>
    <x-slot name="pageTitle">
        <div class="page-title pt-3 mb-1 d-flex justify-content-between align-items-center mb-4">
            <h4 class="mb-0">Daftar Jurnal Internal</h4>
            <a href="add-journal.html" class="btn btn-primary px-3 all-order_btn-search w-auto">
                <span class="align-middle">Tambah Jurnal</span>
            </a>
        </div>
    </x-slot>

    <div class="row">
        <div class="col-lg-12 col-md-4 order-1">
            <!-- Responsive Table -->
            <div class="card">
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr class="text-nowrap">
                                <th>No</th>
                                <th>ISSN</th>
                                <th>Nama Jurnal</th>
                                <th>Publisher</th>
                                <th>APC Charge</th>
                                <th>Lama Proses</th>
                                <th>Index</th>
                                <th>Kategori</th>
                                <th>Link Jurnal</th>
                                <th>Akreditasi</th>
                                <th>Focus</th>
                                <th>Scope</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($journals && $journals->count() > 0)
                                @foreach ($journals as $item)
                                    <tr>
                                        <th scope="row">{{ $journals->firstItem() + $loop->iteration-1 }}</th>
                                        <td>{{ $item->issn }}</td>
                                        <td>{{ $item->name }}</td>
                                        <th>{{ $item->publisher }}</th>
                                        <td>{{ $item->apc_charge }}</td>
                                        <td>{{ $item->processing_time }}</td>
                                        <td>{{ $item->index }}</td>
                                        <td>{{ $item->category }}</td>
                                        <td>{{ $item->journal_link }}</td>
                                        <td>{{ $item->accreditation }}</td>
                                        <td>{{ $item->focus }}</td>
                                        <td>{{ $item->scope }}</td>
                                        <th>
                                          <button
                                            wire:click="delete('{{$item->id}}')"
                                          wire:konfirmasi="Apakah anda yakin?"
                                          class="btn btn-sm btn-danger">
                                            Hapus
                                          </button>
                                        </th>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td class="text-center" colspan="10">Tidak ada data</td>
                                </tr>
                            @endempty
                        </tbody>
                    </table>
                </div>
                <div class="all-order_card-footer">

                    @if ($journals)
                        {{ $journals->links('livewire::bootstrap') }}
                    @endif

                </div>
            </div>
        </div>
    </div>


</div>
