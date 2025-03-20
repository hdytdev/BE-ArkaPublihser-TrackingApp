<!-- Dashboard -->
<x-layouts.nav-link icon="tf-icons bx bx-home-circle" link="{{ route('admin.home') }}">Dashboard</x-layouts.nav-link>
<x-menu-header>Orders</x-menu-header>
<x-layouts.nav-link icon="tf-icons bx bx-add-to-queue" link="{{route('admin.order.new')}}">Tambah
    Order</x-layouts.nav-link>
<x-layouts.menu-dropdown name="Menu Order" icon="tf-icons bx bx-list-ul">
    <x-slot name="submenu">
        <x-layouts.nav-link link="{{route('admin.order')}}">Daftar Order</x-layouts.nav-link>
        <x-layouts.nav-link link="">Invoice Maker</x-layouts.nav-link>
    </x-slot>
</x-layouts.menu-dropdown>
<x-layouts.nav-link icon="tf-icons bx bx-group" link="{{route('admin.customer')}}">Daftar Customer</x-layouts.nav-link>
<x-menu-header>Journals</x-menu-header>
<x-layouts.nav-link icon=" tf-icons bx bx-book-add" link="{{route('admin.journal.new')}}">Tambah
    Jurnal</x-layouts.nav-link>
<x-layouts.menu-dropdown name="Daftar Jurnal" icon="tf-icons bx bx-list-ul">
    <x-slot name="submenu">
        <x-layouts.nav-link link="{{route('admin.journal', ['category' => 'internal'])}}">Journal
            Internal</x-layouts.nav-link>
        <x-layouts.nav-link link="{{route('admin.journal', ['category' => 'external'])}}">Journal
            External</x-layouts.nav-link>
        <x-layouts.nav-link link="{{route('admin.journal', ['category' => 'scopus'])}}">Journal
            Scopus</x-layouts.nav-link>
    </x-slot>
</x-layouts.menu-dropdown>
<!-- Misc -->
<x-menu-header>Manage Admin</x-menu-header>
<x-layouts.nav-link icon=" tf-icons bx bx-user" link="">User Management</x-layouts.nav-link>
<x-layouts.nav-link icon=" tf-icons bx bx-cog" link="">Pengaturan</x-layouts.nav-link>