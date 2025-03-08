<?php

use function Livewire\Volt\{state,mount};
use App\Customer\CustomerServiceInterface;
state(['query'=>"","customers"=>[]]);


$search = function(){
    $this->query = "Asuuu";
};
#GET DATA FROOM CUSTOMER SERVICE
mount(function(CustomerServiceInterface $customer){
    $this->customers = $customer->getFullDetail();
});

?>
<div>
    <x-page-title toolbarLink="/customer/new" toolbarTitle="Add New Customer">
        Home
    </x-page-title>
    <div class="row mb-3">
        <div class="col-lg-12 col-md-4">
            <div class="card p-4">
                <form action="" class="all-order_form-search d-flex justify-content-between w-100">
                    <div class="search-bar w-100">
                        <div>
                            <h6 class="mb-2">Nyari siapa gaiss?</h6>
                            <input wire:model="query" type="text" class="form-control" placeholder="Cari Customer">
                        </div>
                    </div>
                    {{$query}}
                    <div class="d-flex flex-direction-end align-items-end">
                        <button wire:click="search" type="button" class="btn btn-primary px-4 all-order_btn-search w-auto">Cari</button>
                    </div>
                </form>
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
                    <div class="d-flex order-controller">
                        <form action="" class="d-flex h-fit month-filter">
                            <input type="month" class="form-control h-fit">
                            <button type="submit" class="btn btn-primary h-fit text-nowrap">Filter by Month</button>
                        </form>
                    </div>
                </div>
                <div class="table-responsive text-nowrap">
                    @dd($customers)
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
                            <tr>
                                <th scope="row">1</th>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="all-order_card-footer">
                    <nav aria-label="Order Pagination">
                        <ul class="pagination order-pagination">
                            <li class="page-item">
                                <a class="page-link prev" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link next" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--/ Responsive Table -->

        </div>
    </div>
    <!-- END:CUSTOMER TABLE LIST -->
</div>
