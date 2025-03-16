<?php

use function Laravel\Folio\name;
name('order.new');
?>
<x-app-layout>
    <x-page-title>
        New Order
    </x-page-title>
    <div class="col-lg-12 col-md-12 order-1">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header pb-0">Isi Detail Pesanan</h5>
                    @livewire('order.form')
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
