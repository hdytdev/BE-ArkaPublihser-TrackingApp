<div x-data="{ useManual: <?php if ((object) ('useManualInput') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('useManualInput'->value()); ?>')<?php echo e('useManualInput'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('useManualInput'); ?>')<?php endif; ?> }">
    <label for="instansi" class="form-label">Instansi</label>
    <div class="input-group">
        <template x-if="useManual">
            <input wire:model="manual_instansi" type="text" class="form-control">
        </template>
        <template x-if="!useManual">
            <select wire:model="institution_id" class="form-control" name="" id="">
                <option value="" selected>--Pilih Instansi--</option>
                <?php $__currentLoopData = $instansi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($item->id); ?>">
                        <?php echo e($item->name); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </template>
        <button x-show="useManual" class="btn btn-sm btn-primary" type="button" wire:click="simpan">
            <span>Tambah</span>
            <span wire:loading wire:target="simpan">Loading...</span>
        </button>
        <button x-show="!useManual" class="btn btn-sm btn-primary" type="button" x-on:click="useManual = !useManual">
            <span class="tf-icons bx bx-plus"></span>
        </button>

    </div>

</div><?php /**PATH D:\PROJ\Laravel\JurnalTrackingApp\resources\views\livewire\form\select-instansi.blade.php ENDPATH**/ ?>