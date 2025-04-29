<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['target' => null, 'action', 'title' => null]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['target' => null, 'action', 'title' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<div x-modal="<?php echo \Illuminate\Support\Js::from([
    'action' => $action,
    'target' => $target,
])->toHtml() ?>" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" wire:ignore.self id="<?php echo e($target); ?>"
    tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form data-form class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">
                    <?php echo e($title); ?>

                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php echo e($slot); ?>

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
    <?php
        $__scriptKey = '2301496636-0';
        ob_start();
    ?>


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
    <?php
        $__output = ob_get_clean();

        \Livewire\store($this)->push('scripts', $__output, $__scriptKey)
    ?><?php /**PATH D:\MyProjects\P-007-TRACKING-APP\resources\views/components/modal.blade.php ENDPATH**/ ?>