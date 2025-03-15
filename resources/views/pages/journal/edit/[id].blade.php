<?php
use function Laravel\Folio\{name};
name('journal.edit');
?>
<x-app-layout>

    @livewire('journal.form', [
        'journal_id' => $id,
    ])

</x-app-layout>
