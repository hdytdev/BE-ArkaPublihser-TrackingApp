<?php
use Livewire\WithPagination;
use Livewire\Volt\Component;
use App\Interface\CustomerServiceInterface;
new class extends Component {
    use WithPagination;
    public CustomerServiceInterface $customerServiceInterface;
    public function with(CustomerServiceInterface $customerServiceInterface)
    {
        return [
            'customers' => $customerServiceInterface->getDataWithPagination(25),
        ];
    }
    public function delete($id = null, CustomerServiceInterface $customerServiceInterface)
    {
        return $customerServiceInterface->delete($id);
    }
};

?>
<div>
    <div class="row mb-3">
        <div class="col-lg-12 col-md-4">
            <div class="card p-4">
                <form action="" class="all-order_form-search d-flex justify-content-between w-100">
                    <div class="search-bar w-100">
                        <div>
                            <h6 class="mb-2">Nyari siapa gaiss?</h6>
                            <input type="text" class="form-control" placeholder="Cari Customer">
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
                            @foreach ($customers as $item)
                                <tr>
                                    <td>{{ $customers->firstItem() + $loop->iteration - 1 }}</td>
                                    <td>
                                        <span class="badge bg-primary">{{ $item->customer_id }}</span>
                                    </td>
                                    <td>{{ $item->registered_date }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->phone_number }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->regional_origin }}</td>
                                    <td>{{ $item->institution->name }}</td>
                                    <td>{{ $item->position }}</td>
                                    <td>
                                        <div class="badge bg-primary">90</div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu all-order_dropdown-menu">
                                                <a href="javascript:void(0)"
                                                    class="btn btn-edit text-primary d-flex items-center">
                                                    <i class='bx bx-edit-alt'></i>
                                                    <span>Edit</span>
                                                </a>
                                                <button wire:konfirmasi="Apakah anda yakin ingin menghapus data ini?"
                                                    wire:click="delete('{{ $item->id }}')" data-bs-toggle="modal"
                                                    data-bs-target="#deleteCustomer"
                                                    class="btn btn-delete text-danger d-flex items-center w-100">
                                                    <i class='bx bx-trash'></i>
                                                    <span>Delete</span>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="all-order_card-footer">
                    {{ $customers->links("livewire::bootstrap") }}
                </div>
            </div>
            <!--/ Responsive Table -->

        </div>
    </div>
</div>
