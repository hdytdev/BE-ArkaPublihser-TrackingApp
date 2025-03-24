<div x-data="{ useManual: <?php if ((object) ('useManualInput') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('useManualInput'->value()); ?>')<?php echo e('useManualInput'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('useManualInput'); ?>')<?php endif; ?> }">
    <label for="position_id" class="form-label">Instansi</label>
    <div class="input-group">
        <template x-if="useManual">
            <input wire:model="new_name" type="text" class="form-control">
        </template>
        <template x-if="!useManual">
            <select wire:model="position_id" class="form-control" name="" id="">
                <option value="" selected>--Pilih Position--</option>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $positions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($item->id); ?>">
                        <?php echo e($item->name); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
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

</div><?php /**PATH D:\PROJ\Laravel\JurnalTrackingApp\resources\views/livewire/form/select-position.blade.php ENDPATH**/ ?>