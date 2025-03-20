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
                        <a href="" class="file-download">
                            <i class='bx bx-cloud-download'></i>
                        </a>
                        <button data-bs-toggle="modal" data-bs-target="#editFile" class="file-download">
                            <i class='bx bx-edit-alt'></i>
                        </button>
                        <button data-bs-toggle="modal" data-bs-target="#deleteFile" href="" class="file-delete">
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => ['action' => 'update','target' => 'addFile']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => 'update','target' => 'addFile']); ?>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama File</label>
                <input class="form-control">
            </div>
        </div>
        <div class="row g-2">
            <div class="col mb-0">
                <label for="dobBasic" class="form-label">Tanggal</label>
                <input type="date" id="dobBasic" class="form-control" placeholder="DD / MM / YY" />
            </div>
            <div class="col mb-0">
                <label for="dobBasic" class="form-label">Upload File</label>
                <input type="file" id="dobBasic" class="form-control" />
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
<?php endif; ?>
<?php /**PATH D:\PROJ\Laravel\JurnalTrackingApp\resources\views/livewire/order-detail/file-history-list.blade.php ENDPATH**/ ?>