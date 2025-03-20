 <?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['target' => null, 'action']));

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

foreach (array_filter((['target' => null, 'action']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
 <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" wire:ignore.self id="<?php echo e($target); ?>"
     tabindex="-1" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <form wire:submit.prevent="<?php echo e($action); ?>" class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel1">Tambah Notes</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <?php echo e($slot); ?>

             </div>
             <div class="modal-footer">
                 <button wire:click="hideModal" type="button" class="btn btn-outline-secondary"
                     data-bs-dismiss="modal">
                     Tutup
                 </button>
                 <button type="submit" class="btn btn-primary">Simpan</button>
             </div>
         </form>
     </div>
 </div>
     <?php
        $__scriptKey = '2731948032-0';
        ob_start();
    ?>
     <script>
         const modal = document.getElementById("<?php echo e($target); ?>");
         var modals = {}
         modalInstance = new bootstrap.Modal(modal)
         modals['<?php echo e($target); ?>'] = modalInstance;
         //for re render
         $wire.on("re_render", () => {
             // $wire.$refresh();
             // $wire.$commit();
             if (modals) {
                 modals['<?php echo e($target); ?>'].hide()
                 modals['<?php echo e($target); ?>'].dispose();
             }
         })
         //for editable modal
         $wire.on('show_edit_modal', function() {
             modals['<?php echo e($target); ?>'].show();
         })

     </script>
     <?php
        $__output = ob_get_clean();

        \Livewire\store($this)->push('scripts', $__output, $__scriptKey)
    ?>
<?php /**PATH D:\PROJ\Laravel\JurnalTrackingApp\resources\views/components/modal.blade.php ENDPATH**/ ?>