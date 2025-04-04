@props(['target' => null, 'action', 'title' => null])
<div x-modal="@js([
    'action' => $action,
    'target' => $target,
])" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" wire:ignore.self id="{{ $target }}"
    tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form data-form class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">
                    {{ $title }}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            <div class="modal-footer">
                <button wire:loading.attr='disabled' type="button" class="btn btn-outline-secondary"
                    data-bs-dismiss="modal">
                    Tutup
                </button>
                <button wire:loading.attr='disabled' data-btn-action type="submit"
                    class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@script


<script>
    Alpine.directive("modal", (el, { modifiers, expression }, { cleanup, effect, evaluate, evaluateLater }) => {
        const exp = evaluate(expression)
        const instance = new bootstrap.Modal(el);
        const form = el.querySelector('form[data-form]')
        console.log(form)
        function actionHandler(e) {
            e.preventDefault();
            let input = form.querySelectorAll('input,button,select');
            input.forEach((e) => {
                e.disabled = true;
            })
            $wire.call(exp.action)
        }
        form.addEventListener('submit', actionHandler)
        $wire.on('modal_close', () => {
            $wire.$refresh();
            $wire.$refresh();
            instance.hide();
        })
        $wire.on('show_modal', () => {
            instance.show()
        })
        el.addEventListener('hidden.bs.modal', async () => {
            $wire.set('on_editable', null);
        })
    })
</script>
@endscript