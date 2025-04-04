<div class="card mt-4">
    <div class="card-header">
        <div class="card-title mb-0">
            <i class='bx bx-file'></i>
            <span>
                File History
            </span>
        </div>
    </div>
    <div class="card-body">
        <div class="file-history">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="file-list d-flex justify-content-between align-items-center">
                <div class="file-name">
                    <h6 class="mb-0"><?php echo e($file->name); ?></h6>
                    <p><?php echo e($file->createdAtFormated); ?></p>
                </div>
                <div class="file-controller d-flex">
                    <button wire:click="download('<?php echo e($file->file_url); ?>')" class="file-download">
                        <i wire:loading.class='d-none' wire:target="download('<?php echo e($file->file_url); ?>')"
                            class='bx bx-cloud-download'></i>
                        <div wire:loading wire:target="download('<?php echo e($file->file_url); ?>')"
                            class="spinner-border  spinner-border-sm align-middle mt-4  text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </button>
                    <button data-bs-toggle="modal" data-bs-target="#editFile" class="file-download">
                        <i class='bx bx-edit-alt'></i>
                    </button>
                    <button wire:konfirmasi wire:click="delete('<?php echo e($file->id); ?>')" data-bs-toggle="modal"
                        data-bs-target="#deleteFile" href="" class="file-delete">
                        <i class='bx bx-trash'></i>
                    </button>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

        </div>
        <div class="d-flex justify-content-end mt-3">
            <button data-bs-toggle="modal" data-bs-target="#addFile"
                class="btn btn-primary text-sm d-flex align-items-center gap-10">
                <span>Tambah File</span>
                <i class='bx bx-add-to-queue'></i>
            </button>
        </div>
    </div>

    <?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => ['action' => 'new','target' => 'addFile']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => 'new','target' => 'addFile']); ?>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama File</label>
                <input wire:model='filename' class="form-control <?php $__errorArgs = ['filename'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['filename'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->

            </div>
        </div>
        <div class="row g-2">
            <div class="col-md-12" x-data="{ uploading: false, progress: 0 }"
                x-on:livewire-upload-start="uploading = true" x-on:livewire-upload-finish="uploading = false"
                x-on:livewire-upload-cancel="uploading = false" x-on:livewire-upload-error="uploading = false"
                x-on:livewire-upload-progress="progress = $event.detail.progress">
                <?php if (isset($component)) { $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96 = $attributes; } ?>
<?php $component = App\View\Components\Form\Input::resolve(['label' => 'Upload Invoice','name' => 'file','type' => 'file'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Form\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'form-control']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $attributes = $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $component = $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
                <div x-show="uploading">
                    <div class="progress-bar progress-bar-striped" role="progressbar"
                        x-bind:style="`width: ${progress}%`;" x-bind:aria-valuenow="progress" aria-valuemin="0"
                        aria-valuemax="100" x-text="`${progress}%`">
                    </div>
                </div>
            </div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $attributes = $__attributesOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__attributesOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $component = $__componentOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__componentOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?><?php /**PATH D:\PROJ\Laravel\JurnalTrackingApp\resources\views/livewire/order-detail/file-history-list.blade.php ENDPATH**/ ?>