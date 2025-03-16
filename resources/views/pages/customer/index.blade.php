<?php
use function Livewire\Volt\{with, computed, state, usesPagination};
use App\Services\interface\CustomerServiceInterface;
use function Laravel\Folio\name;
name('customer.index');
#STATE FOR SEARCH
state(['search'])->url();
usesPagination('livewire::bootstrap');
//search query
$search = computed(function () {
    return $this->search;
});
//get data with search query
with(function (CustomerServiceInterface $customerServiceInterface) {
    return [
        'customers' => $customerServiceInterface->fetchAllWithSearch($this->search ?? ''),
    ];
});
//action for delete data
$delete = function ($id, CustomerServiceInterface $customerServiceInterface) {
    $deleted = $customerServiceInterface->delete($id);
    if ($deleted) {
        $this->dispatch('success', true);
    }
};
//reset search
$reset_search = function () {
    $this->search = '';
};
?>

<x-app-layout>
    <x-page-title toolbarLink="{{ route('customer.add') }}" toolbarTitle="Add New Customer">
        Home
    </x-page-title>
    @volt
        <div>
            <div class="row mb-3">
                <div class="col-lg-12 col-md-4">
                    <div class="card p-4">
                        <div class="all-order_form-search d-flex justify-content-between w-100">
                            <div class="search-bar w-100">
                                <div>
                                    <h6 class="mb-2">Nyari siapa gaiss?</h6>
                                    <input wire:loading.attr="disabled" wire:model.lazy="search" type="text"
                                        class="form-control" placeholder="Cari Customer">
                                </div>
                            </div>
                            <div class="d-flex gap-2 flex-direction-end align-items-end">
                                <button wire:loading.attr="disabled" wire:click="search" type="button"
                                    class="btn btn-primary px-4 all-order_btn-search w-auto">
                                    <span wire:loading.class="d-none">Cari</span>
                                    <div wire:target="search,reset_search" wire:loading
                                        class="spinner-border spinner-border-sm" role="status"></div>
                                </button>
                                <button wire:click="reset_search" class="btn btn-outline-secondary">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Customer Table List -->
            <div class="row">
                <div class="col-lg-12 col-md-4 order-1">
                    <!-- Responsive Table -->
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="mb-0">Daftar Customer</h5>
                            {{-- <div class="d-flex order-controller">
                                <form action="" class="d-flex h-fit month-filter">
                                    <input type="month" class="form-control h-fit">
                                    <button type="submit" class="btn btn-primary h-fit text-nowrap">Filter by
                                        Month</button>
                                </form>
                            </div> --}}
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
                                <tbody class="text-center">
                                    @if ($customers && $customers->count() < 1)
                                        <tr>
                                            <td class="text-center" colspan="12">
                                                @if ($search)
                                                    <p class="alert alert-warning">
                                                        Tidak ada data yang cocok <b>{{ $search }}</b>
                                                        <a wire:click="reset_search" href="javascript:void()">Reset</a>
                                                    </p>
                                                @else
                                                    Tidak ada data
                                                @endif

                                            </td>
                                        </tr>
                                    @else
                                        @foreach ($customers as $item)
                                            <tr>
                                                <th scope="row">
                                                    {{ $customers->firstItem() + $loop->iteration - 1 }}
                                                </th>
                                                <td>
                                                    <span class="badge bg-secondary">{{ $item->customer_id }}</span>
                                                </td>
                                                <td>{{ $item->registration_date }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->no_telp }}</td>
                                                <td>
                                                    {{ $item->email }}
                                                </td>
                                                <td>{{ $item->asal_daerah }}</td>
                                                <td>{{ $item->instansi }}</td>
                                                <td>{{ $item->jabatan }}</td>
                                                <td>
                                                    <span class="badge bg-primary">6</span>
                                                </td>
                                                <td>
                                                    <x-button-icon icon="tf-icons bx bx-trash"
                                                        wire_target="delete('{{ $item->id }}')" />
                                                    <a wire:navigate href="{{route("customer.edit",['id'=>$item->id])}}" class="btn btn-sm btn-warning">
                                                        <i class="tf-icons bx bx-pencil"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="all-order_card-footer">
                            {{ $customers->links() }}
                        </div>
                    </div>
                    <!--/ Responsive Table -->

                </div>
            </div>
            @script
                <script>
                    $wire.on('success', (e) => {
                        Swal.fire({
                            title: "Success",
                            icon: "success",
                            text: "Data berhasil dihapus"
                        })
                    })
                </script>
            @endscript


        </div>

    @endvolt
</x-app-layout>
