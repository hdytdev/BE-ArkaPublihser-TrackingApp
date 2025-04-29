<div class="card">
    <div class="card-header">
        <div class="card-title mb-0">
            <i class='bx bx-notepad'></i>
            <span>
                Notes
            </span>
        </div>
        <div class="card-body m-0 p-0">
            <div wire:loading class="spinner-border align-middle mt-4  text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div wire:loading.class='d-none' class="accordion mt-3" id="accordionExample">
                <!--[if BLOCK]><![endif]--><?php if($notes && $notes->count() < 1): ?> <p class="alert alert-info">
                    Belum ada notes
                    </p>
                    <?php else: ?>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card accordion-item detail-order_accordion-item">
                        <h2 class="accordion-header" id="<?php echo e($loop->iteration); ?>-<?php echo e($item->id); ?>">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#accordion-<?php echo e($loop->iteration); ?>" aria-expanded="false"
                                aria-controls="accordionTwo">
                                <?php echo e($item->createdAtFormated ?? ''); ?>

                            </button>
                        </h2>
                        <div wire:ignore.self id="accordion-<?php echo e($loop->iteration); ?>" class="accordion-collapse collapse"
                            aria-labelledby="<?php echo e($loop->iteration); ?>-<?php echo e($item->id); ?>" data-bs-parent="#accordionExample">
                            <div class="accordion-body journal-notes">
                                <div class="d-flex notes-item">
                                    <h6>Progress:</h6>
                                    <h6 style="color:<?php echo e($item->orderStatus->color); ?>">
                                        <?php echo e($item->orderStatus->name); ?>

                                    </h6>
                                </div>
                                <div class="d-flex notes-item">
                                    <h6>Notes:</h6>
                                    <p><?php echo e($item->note); ?></p>
                                </div>
                                <span wire:loading wire:target="delete('<?php echo e($item->id); ?>')">Deleting</span>
                                <div class="notes-control d-flex justify-content-end">
                                    <button wire:click="edit('<?php echo e($item->id); ?>')" data-bs-toggle="modal"
                                        data-bs-target="#editNote"
                                        class="btn btn-edit text-primary d-flex items-center">
                                        <i class='bx bx-edit-alt'></i>
                                        <span>Edit</span>
                                    </button>
                                    <button wire:konfirmasi="apakah anda yakin" wire:click="delete('<?php echo e($item->id); ?>')"
                                        class="btn btn-delete text-danger d-flex items-center">
                                        <i class='bx bx-trash'></i>
                                        <span>Delete</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
            <div class="d-flex justify-content-end mt-3">
                <button data-bs-toggle="modal" data-bs-target="#addNote"
                    class="btn btn-primary text-sm d-flex align-items-center gap-10">
                    <span>Tambah Notes</span>
                    <i class='bx bx-add-to-queue'></i>
                </button>
            </div>
        </div>
    </div>


    <?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => ['action' => 'add','target' => 'addNote','title' => 'Tambah Notes']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => 'add','target' => 'addNote','title' => 'Tambah Notes']); ?>
        <div class="row">
            <div class="col mb-3">
                <label for="nameBasic" class="form-label">Notes</label>
                <textarea placeholder="Ketikan notes apapaun" required wire:model="add_notes"
                    class="form-control"></textarea>
            </div>
        </div>
        <div class="row g-2">
            <div class="col mb-0">
                <label class="form-label">Status</label>
                <select required wire:model="add_status_id" class="form-select" id="exampleFormControlSelect1"
                    aria-label="Default select example">
                    <option selected>Pilih status</option>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->statusess; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($status->id); ?>"><?php echo e($status->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </select>
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



</div><?php /**PATH D:\MyProjects\P-007-TRACKING-APP\resources\views/livewire/order-detail/notes-list.blade.php ENDPATH**/ ?>