<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo logo-ap">
                <img src="https://res.cloudinary.com/dununt4ev/image/upload/v1739280606/logoArkaPublisher_dipqix.png">
            </span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        @include('layouts.app.menu-item', [
            'link' => route('authed.dashboard'),
            'text' => 'Dashboard',
            'icon' => 'tf-icons bx bx-home-circle',
        ])
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Orders</span>
        </li>
        @include('layouts.app.menu-item', [
            'link' => route('auth.loginr
            '),
            'text' => 'Tambah Order',
            'icon' => 'tf-icons bx bx-add-to-queue',
        ])
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-list-ul"></i>
                <div>Menu Order</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="all-order.html" class="menu-link">
                        <div>Daftar Order</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="invoice-maker.html" class="menu-link">
                        <div>Invoice Maker</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="daftar-customer.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div>Daftar Customer</div>
            </a>
        </li>
        <!-- Components -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Journals</span></li>
        <!-- Cards -->
        <li class="menu-item">
            <a href="add-journal.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-book-add"></i>
                <div>Tambah Jurnal</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-list-ul"></i>
                <div>Daftar Jurnal</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="daftar-jurnal-internal.html" class="menu-link">
                        <div>Jurnal Internal</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="daftar-jurnal-eksternal.html" class="menu-link">
                        <div>Jurnal Eksternal</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="daftar-jurnal-scopus.html" class="menu-link">
                        <div>Jurnal Scopus</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Misc -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Menu Admin</span></li>
        <li class="menu-item">
            <a href="account-management.html" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user-account"></i>
                <div>Account Management</div>
            </a>
        </li>
    </ul>
</aside>
