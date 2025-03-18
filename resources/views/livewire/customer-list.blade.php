<div>
    <x-slot name="pageTitle">
        <div class="page-title mb-1 d-flex justify-content-between align-items-center mb-4">
            <h4 class="mb-0">Daftar Customer</h4>
            <a wire:navigate href="{{ route('admin.customer.new') }}"
                class="btn btn-primary px-3 all-order_btn-search w-auto">
                <span class="align-middle">Tambah Customer</span>
            </a>
        </div>
    </x-slot>
    <div class="row mb-3">
        <div class="col-lg-12 col-md-4">
            <div class="card p-4">
                <form wire:submit="search" action=""
                    class="all-order_form-search d-flex justify-content-between w-100">
                    <div class="search-bar w-100">
                        <div>
                            <h6 class="mb-2">Nyari siapa gaiss?</h6>
                            <input wire:model.live.debounce.500ms="searchQuery" type="text" class="form-control"
                                placeholder="Cari Customer">
                        </div>
                    </div>
                    <div class="d-flex flex-direction-end align-items-end">
                        <button type="submit" class="btn btn-primary px-4 all-order_btn-search w-auto">Cari</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-4 order-1">
            <!-- Responsive Table -->
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="mb-0">Daftar Customer</h5>
                    <div class="d-flex order-controller">
                        <form action="" class="d-flex h-fit month-filter">
                            <input type="month" class="form-control h-fit">
                            <button type="submit" class="btn btn-primary h-fit text-nowrap">Filter by Month</button>
                        </form>
                    </div>
                </div>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr class="text-nowrap">
                                <th>No</th>
                                <th>Customer ID</th>
                                <th>Tanggal Registrasi</th>
                                <th>Nama Customer</th>
                                <th>No Telepon</th>
                                <th>Email</th>
                                <th>Asal Daerah</th>
                                <th>Instansi</th>
                                <th>Jabatan</th>
                                <th>Jumlah Order</th>
                                <th>Menu</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if ($customers && $customers->count() > 0)
                                @foreach ($customers as $item)
                                    <tr>
                                        <th scope="row">
                                          {{$customers->firstItem() + $loop->iteration -  1}}
                                        </th>
                                        <td>
                                            <span class="badge bg-primary">{{ $item->customer_id }}</span>
                                        </td>
                                        <td>{{ $item->registered_date }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->phone_number }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->regional_origin }}</td>
                                        <td>{{ $item->institution->name }}</td>
                                        <td>Panglima</td>
                                        <td class="text-center">
                                            <span class="badge bg-primary">{{ 12 }}</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu all-order_dropdown-menu">
                                                    <a wire:navigate href="{{route('admin.customer.edit',[
                                                    'id'=> $item->id])}}"
                                                        class="btn btn-edit text-primary d-flex items-center">
                                                        <i class='bx bx-edit-alt'></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <button wire:konfirmasi="Apakah anda yakin?"
                                                        wire:click="delete('{{ $item->id }}')"
                                                        class="btn btn-delete text-danger d-flex items-center w-100">
                                                        <i class='bx bx-trash'></i>
                                                        <span>Delete</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="12">Tidak Ada Data</td>
                                </tr>
                            @endif

                        </tbody>
                    </table>
                </div>
                <div class="all-order_card-footer">
                    {{ $customers->links('livewire::bootstrap') ?? '' }}
                </div>
            </div>
            <!--/ Responsive Table -->

        </div>
    </div>
</div>
