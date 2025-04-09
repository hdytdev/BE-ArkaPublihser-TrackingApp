<div class="row">
    <div class="col s12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5 class="mb-0">Daftar Users</h5>
                <div class="d-flex order-controller">
                    <div>
                        <a href="<?php echo e(route('admin.user.new')); ?>" type="submit" style="color:white;"
                            class="btn btn-link btn-primary h-fit text-nowrap">
                            Add New
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-hover responsive-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($loop->index+1); ?></td>
                            <td><?php echo e($item->name); ?></td>
                            <td><?php echo e($item->email); ?></td>
                            <td><?php echo e($item->role); ?></td>
                            <td>
                                <!--[if BLOCK]><![endif]--><?php if($item->active): ?>
                                <span class="badge bg-success">Active</span>
                                <?php else: ?>
                                <span class="badge bg-danger">Inactive</span>
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                            </td>
                            <td>
                                <a href=<?php echo e(route('admin.user.edit',[ 'id'=>$item->id
                                    ])); ?> class="btn-sm btn-warning btn"><i class="material-icons">Edit</i></a>
                                <button wire:konfirmasi='Apakah anda yakin?' wire:click="delete('<?php echo e($item->id); ?>')"
                                    class="btn-sm  text-white btn-danger red btn"><i
                                        class="material-icons">Delete</i></button>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6">Tidak ada data</td>
                        </tr>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


                        <!-- Tambahkan baris lain sesuai kebutuhan -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div><?php /**PATH D:\PROJ\Laravel\JurnalTrackingApp\resources\views/livewire/user-management.blade.php ENDPATH**/ ?>