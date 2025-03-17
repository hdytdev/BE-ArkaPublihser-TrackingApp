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
    @livewireStyles
</head>

<body>
    <x-layouts.wrapper>
        <x-layouts.aside>
            <x-app-menu />
        </x-layouts.aside>
        <div class="layout-page">
            <x-layouts.navbar />
            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    @if ($pageTitle)
                        <div class="page-title py-2">
                            <h4>{{ $pageTitle }}</h4>
                        </div>
                    @endif
                    {{ $slot }}
                </div>
            </div>
            <x-layouts.footer />
            <div class="content-backdrop fade"></div>
        </div>
    </x-layouts.wrapper>

    @include('shared.layout-js-assets')
    @livewireScripts
    <script data-navigate-track>
        Livewire.directive('konfirmasi', ({
            el,
            directive,
            component,
            cleanup
        }) => {
            let content = directive.expression;
            async function confirmation(e) {
                e.preventDefault()
                e.stopImmediatePropagation()
                $conf = await Swal.fire({
                    showClass: {
                        popup: `
                            animate__animated
                            animate__flipInX
                            animate__faster
                            `
                    },
                    allowOutsideClick: false,
                    hideClass: {
                        popup: `animate__animated animate__flipOutX animate__faster`
                    },
                    title: "Konfirmasi",
                    text: content,
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonText: "Ya",
                    cancelButtonText: "Tidak"
                })

                if ($conf.isConfirmed) {
                    let WireCompoennt = Livewire.find(component.id)
                    if (!WireCompoennt) {
                        console.error("Livewire component not found!");
                        return;
                    }
                    let methodWithParams = el.getAttribute("wire:click");
                    let match = methodWithParams.match(/^([\w]+)\((.*)\)$/);
                    if (match) {
                        let method = match[1];
                        let params = match[2].split(',').map(param => param.trim().replace(/['"]/g,'')); // Parsing parameter
                        WireCompoennt.call(method, ...params);
                    } else {
                        WireCompoennt.call(methodWithParams);
                    }
                }

            }
            el.addEventListener('click', confirmation, {
                capture: true
            });
            cleanup(() => {
                el.removeEventListener("click", confirmation)
            })
        })
    </script>
</body>

</html>
