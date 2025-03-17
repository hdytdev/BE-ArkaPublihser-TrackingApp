<!-- Dashboard -->
<x-layouts.nav-link icon="tf-icons bx bx-home-circle" link="{{ route('admin.home') }}">Dashboard</x-layouts.nav-link>
<x-menu-header>Orders</x-menu-header>
<x-layouts.nav-link icon="tf-icons bx bx-add-to-queue" link="">Tambah Order</x-layouts.nav-link>
<x-layouts.menu-dropdown name="Menu Order" icon="tf-icons bx bx-list-ul">
    <x-slot name="submenu">
        <x-layouts.nav-link link="">Daftar Order</x-layouts.nav-link>
        <x-layouts.nav-link link="">Invoice Maker</x-layouts.nav-link>
    </x-slot>
</x-layouts.menu-dropdown>
<x-layouts.nav-link icon="tf-icons bx bx-group" link="">Daftar Customer</x-layouts.nav-link>
<x-menu-header>Journals</x-menu-header>
<x-layouts.nav-link icon=" tf-icons bx bx-book-add" link="">Tambah Jurnal</x-layouts.nav-link>
<x-layouts.menu-dropdown name="Daftar Jurnal" icon="tf-icons bx bx-list-ul">
    <x-slot name="submenu">
        <x-layouts.nav-link link="">Journal Internal</x-layouts.nav-link>
        <x-layouts.nav-link link="">Journal External</x-layouts.nav-link>
        <x-layouts.nav-link link="">Journal Scopus</x-layouts.nav-link>
    </x-slot>
</x-layouts.menu-dropdown>
<!-- Misc -->
<x-menu-header>Manage Admin</x-menu-header>
<x-layouts.nav-link icon=" tf-icons bx bx-user" link="">User Management</x-layouts.nav-link>
<x-layouts.nav-link icon=" tf-icons bx bx-cog" link="">Pengaturan</x-layouts.nav-link>