<div class="mb-0">
    <label for="exampleDataList" class="form-label">Nama Jurnal</label>
    <select wire:ignore class="form-control select_journal">
        <option value="">-- Select Journal ---</option>
        <?php $__currentLoopData = $journals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
        <?php
        $__scriptKey = '3049120830-1';
        ob_start();
    ?>
        <script>
            $(document).ready(function() {
                $('.select_journal').select2({
                    theme: "bootstrap-5"
                });
                $('.select_journal').on('select2:select', (e) => {
                    $wire.$set("journal_id", e.params.data.id)
                })
                Livewire.hook('morph.updating', ({
                    el,
                    component,
                    toEl,
                    skip,
                    childrenOnly
                }) => {
                    attr = toEl.getAttribute('class')
                    if (String(attr).includes('select_journal')) {
                        $(el).select2({
                            theme: "bootstrap-5"
                        })
                    }
                })
            })
        </script>
        <?php
        $__output = ob_get_clean();

        \Livewire\store($this)->push('scripts', $__output, $__scriptKey)
    ?>
</div><?php /**PATH D:\PROJ\Laravel\JurnalTrackingApp\resources\views\livewire\form\select-journal.blade.php ENDPATH**/ ?>