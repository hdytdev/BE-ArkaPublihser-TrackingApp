import Swal from "sweetalert2";

import { Alpine, Livewire } from "../../vendor/livewire/livewire/dist/livewire.esm"
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
        let $conf = await Swal.fire({
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
                let params = match[2].split(',').map(param => param.trim().replace(/['"]/g,
                    '')); // Parsing parameter
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

window.Livewire = Livewire;
window.Alpine = Alpine;
window.Swal = Swal;
Livewire.start()