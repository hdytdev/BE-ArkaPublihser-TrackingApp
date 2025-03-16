<?php
use function Laravel\Folio\{name};

name("customer.edit");


?>
<x-app-layout>

    @livewire("customer.form",[
        'id' => $id,
    ])

</x-app-layout>
