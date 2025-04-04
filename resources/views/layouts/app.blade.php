@props(['pageTitle' => null])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? '' }}</title>
    @include('shared.layout-asset')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    @livewireScriptConfig
    @livewireStyles
    @vite([
    'resources/js/app.js',
    'resources/css/app.css'
    ])
    <link data-navigate-track href="{{ asset('assets/css/select2.css') }}" rel="stylesheet" />
    <link data-navigate-track rel="stylesheet" href="{{ asset('assets/css/select2bs.css') }}">
</head>

<body>
    <div class="alert alert-danger" wire:offline>
        Sedang Offline
    </div>
    <x-layouts.wrapper>
        <x-layouts.aside>
            <x-app-menu />
        </x-layouts.aside>
        <div class="layout-page">
            <x-layouts.navbar />
            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    @if ($pageTitle)
                    {{ $pageTitle }}
                    @else
                    @if ($title ?? false)
                    <div class="page-title py-2">
                        <h4>{{ $title }}</h4>
                    </div>
                    @endif
                    @endif
                    {{ $slot }}
                </div>
            </div>
            <x-layouts.footer />
            <div class="content-backdrop fade"></div>
        </div>
    </x-layouts.wrapper>
    @include('shared.layout-js-assets')
    <script data-navigate-track src="{{ asset('assets/js/select-2.js') }}"></script>

    <script data-navigate-track>

    </script>
</body>

</html>