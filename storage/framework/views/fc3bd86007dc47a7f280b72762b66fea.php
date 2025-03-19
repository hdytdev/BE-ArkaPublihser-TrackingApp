<div>
     <?php $__env->slot('pageTitle', null, []); ?> 
        <div class="page-title pt-3 mb-1 d-flex justify-content-between align-items-center mb-4">
            <h4 class="mb-0">Daftar Jurnal Internal</h4>
            <a wire:navigate href="<?php echo e(route('admin.journal.new')); ?>" class="btn btn-primary px-3 all-order_btn-search w-auto">
                <span class="align-middle">Tambah Jurnal</span>
            </a>
        </div>
     <?php $__env->endSlot(); ?>

    <div class="row">
        <div class="col-lg-12 col-md-4 order-1">
            <!-- Responsive Table -->
            <div class="card">
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr class="text-nowrap">
                                <th>No</th>
                                <th>ISSN</th>
                                <th>Nama Jurnal</th>
                                <th>Publisher</th>
                                <th>APC Charge</th>
                                <th>Lama Proses</th>
                                <th>Index</th>
                                <th>Kategori</th>
                                <th>Link Jurnal</th>
                                <th>Akreditasi</th>
                                <th>Focus</th>
                                <th>Scope</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--[if BLOCK]><![endif]--><?php if($journals && $journals->count() > 0): ?>
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $journals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row"><?php echo e($journals->firstItem() + $loop->iteration-1); ?></th>
                                        <td><?php echo e($item->issn); ?></td>
                                        <td><?php echo e($item->name); ?></td>
                                        <th><?php echo e($item->publisher); ?></th>
                                        <td><?php echo e($item->apc_charge); ?></td>
                                        <td><?php echo e($item->processing_time); ?></td>
                                        <td><?php echo e($item->index); ?></td>
                                        <td><?php echo e($item->category); ?></td>
                                        <td><?php echo e($item->journal_link); ?></td>
                                        <td><?php echo e($item->accreditation); ?></td>
                                        <td><?php echo e($item->focus); ?></td>
                                        <td><?php echo e($item->scope); ?></td>
                                        <th>
                                          <button
                                            wire:click="delete('<?php echo e($item->id); ?>')"
                                          wire:konfirmasi="Apakah anda yakin?"
                                          class="btn btn-sm btn-danger">
                                            Hapus
                                          </button>
                                          <a
                                            wire:navigate

                                            href="<?php echo e(route('admin.journal.edit',['id'=>$item->id])); ?>"

                                          class="btn btn-sm btn-warning">
                                            Edit
                                          </a>
                                        </th>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                            <?php else: ?>
                                <tr>
                                    <td class="text-center" colspan="10">Tidak ada data</td>
                                </tr>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </tbody>
                    </table>
                </div>
                <div class="all-order_card-footer">

                    <!--[if BLOCK]><![endif]--><?php if($journals): ?>
                        <?php echo e($journals->links('livewire::bootstrap')); ?>

                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                </div>
            </div>
        </div>
    </div>


</div>
<?php /**PATH D:\PROJ\Laravel\JurnalTrackingApp\resources\views/livewire/journal-list.blade.php ENDPATH**/ ?>