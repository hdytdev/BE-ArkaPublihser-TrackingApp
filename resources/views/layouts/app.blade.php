<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('assets') }}/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>{{ $title ?? config('app.name') }}</title>
    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon"
        href="https://res.cloudinary.com/dununt4ev/image/upload/v1739501551/logo-arkapublisher_2_lvjyiz.png" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/css/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/demo.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/libs/apex-charts/apex-charts.css" />
    <!-- Custome CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/custom.css" />
    <script data-navigate-track src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
    <script data-navigate-track src="{{ asset('assets') }}/vendor/js/helpers.js"></script>
    <script data-navigate-track src="{{ asset('assets') }}/js/config.js"></script>
    <style>
        .layout-navbar-fixed body:not(.modal-open) .layout-content-navbar .layout-navbar,
        .layout-menu-fixed body:not(.modal-open) .layout-content-navbar .layout-navbar,
        .layout-menu-fixed-offcanvas body:not(.modal-open) .layout-content-navbar .layout-navbar {
            z-index: 99 !important;
        }

        .layout-navbar-fixed body:not(.modal-open) .layout-content-navbar .layout-menu,
        .layout-menu-fixed body:not(.modal-open) .layout-content-navbar .layout-menu,
        .layout-menu-fixed-offcanvas body:not(.modal-open) .layout-content-navbar .layout-menu {
            z-index: 99!important;
        }
    </style>
</head>

<body>

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts.app.sidebar')
            <div class="layout-page">
                @include('layouts.app.navbar')
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        {{ $slot }}
                    </div>
                    @include('layouts.app.footer')
                    <div class="content-backdrop fade"></div>
                </div>
            </div>

        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script data-navigate-track src="{{ asset('assets/') }}/vendor/libs/jquery/jquery.js"></script>
    <script data-navigate-track src="{{ asset('assets/') }}/vendor/libs/popper/popper.js"></script>
    <script data-navigate-track src="{{ asset('assets/') }}/vendor/js/bootstrap.js"></script>
    <script data-navigate-track src="{{ asset('assets/') }}/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script data-navigate-track src="{{ asset('assets/') }}/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script data-navigate-track src="{{ asset('assets/') }}/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script data-navigate-track src="{{ asset('assets/') }}/js/main.js"></script>

    <!-- Page JS -->
    <script data-navigate-track src="{{ asset('assets/') }}/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script data-navigate-track async defer src="https://buttons.github.io/buttons.js"></script>

</body>

</html>
