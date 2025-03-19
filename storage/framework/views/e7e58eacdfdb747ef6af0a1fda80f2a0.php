<div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class='bx bx-info-circle'></i>
                        <span>Informasi Jurnal</span>
                    </h5>
                </div>
                <div class="card-body m-0">
                    <ul class="journal_info-list">
                        <li class="d-flex align-items-start">
                            <div class="journal_info-title">
                                <h6 class="mb-0">Nama Jurnal</h6>
                                <p class="mb-0">:</p>
                            </div>
                            <div class="journal_info-info">
                                <h6 class="mb-0"><?php echo e($order->article->journal->journalFullName); ?></h6>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <div class="journal_info-title">
                                <h6 class="mb-0">Akreditasi</h6>
                                <p class="mb-0">:</p>
                            </div>
                            <div class="journal_info-info">
                                <h6 class="mb-0"><?php echo e($order->article->journal->accreditation); ?></h6>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <div class="journal_info-title">
                                <h6 class="mb-0">Focus & Scope</h6>
                                <p class="mb-0">:</p>
                            </div>
                            <div class="journal_info-info">
                                <h6 class="mb-0"><?php echo e($order->article->journal->focusAndScope); ?></h6>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <div class="journal_info-title">
                                <h6 class="mb-0">Judul Artikel</h6>
                                <p class="mb-0">:</p>
                            </div>
                            <div class="journal_info-info">
                                <h6 class="mb-0">
                                    <?php echo e($order->article->title); ?>

                                </h6>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <div class="journal_info-title">
                                <h6 class="mb-0">Nama Author</h6>
                                <p class="mb-0">:</p>
                            </div>
                            <div class="journal_info-info">
                                <h6 class="mb-0">
                                <?php echo e($order->article->authors); ?>

                                </h6>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <div class="journal_info-title">
                                <h6 class="mb-0">Tanggal Publish</h6>
                                <p class="mb-0">:</p>
                            </div>
                            <div class="journal_info-info">
                                <h6 class="mb-0"><?php echo e($order->article->publish_date); ?></h6>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <div class="journal_info-title">
                                <h6 class="mb-0">Estimasi Publish</h6>
                                <p class="mb-0">:</p>
                            </div>
                            <div class="journal_info-info">
                                <h6 class="mb-0"><?php echo e($order->article->estimated_publish_date); ?></h6>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <div class="journal_info-title">
                                <h6 class="mb-0">Tanggal Submit</h6>
                                <p class="mb-0">:</p>
                            </div>
                            <div class="journal_info-info">
                                <h6 class="mb-0"><?php echo e($order->article->submit_date); ?></h6>
                            </div>
                        </li>
                    </ul>
                    <div class="separator stretched-dashed"></div>
                    <div class="journal-info_btn-group d-flex justify-content-end mt-4">
                        <button class="btn active">
                            <i class='bx bx-cloud-download'></i>
                            <span>Download Article</span>
                        </button>
                        <button class="btn inactive">
                            <i class='bx bx-cloud-download'></i>
                            <span>Download LoA</span>
                        </button>
                        <a href="<?php echo e($order->article->journal->journal_link); ?>" class="btn inactive">
                            <i class='bx bx-link'></i>
                            <span>
                                Link Journal
                            </span>
                        </a>
                        <a href="<?php echo e($order->article->journal->journal_link); ?>" class="btn inactive">
                            <i class='bx bx-link'></i>
                            <span>
                                Link Publish
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title mb-0">
                        <i class='bx bx-info-circle'></i>
                        <span>Informasi Pesanan</span>
                    </h5>
                    <button data-bs-toggle="modal" data-bs-target="#manageOrder"
                        class="btn btn-primary text-sm d-flex align-items-center gap-10">
                        <span>Kelola Pesanan</span>
                        <i class='bx bx-cog'></i>
                    </button>
                </div>
                <div class="card-body m-0">
                    <ul class="journal_info-list">
                        <li class="d-flex align-items-start">
                            <div class="journal_info-title">
                                <h6 class="mb-0">ID Pesanan</h6>
                                <p class="mb-0">:</p>
                            </div>
                            <div class="journal_info-info">
                                <h6 class="mb-0"><?php echo e($order->order_number); ?></h6>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <div class="journal_info-title">
                                <h6 class="mb-0">Nama Pemesan</h6>
                                <p class="mb-0">:</p>
                            </div>
                            <div class="journal_info-info">
                                <h6 class="mb-0">
                                    <?php echo e($order->customer->name); ?>

                                </h6>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <div class="journal_info-title">
                                <h6 class="mb-0">Tanggal Pemesanan</h6>
                                <p class="mb-0">:</p>
                            </div>
                            <div class="journal_info-info">
                                <h6 class="mb-0">
                                    <?php echo e($order->created_at); ?>

                                </h6>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <div class="journal_info-title">
                                <h6 class="mb-0">Paket</h6>
                                <p class="mb-0">:</p>
                            </div>
                            <div class="journal_info-info">
                                <h6 class="mb-0">
                                    <?php echo e($order->package); ?>

                                </h6>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <div class="journal_info-title">
                                <h6 class="mb-0">Termin</h6>
                                <p class="mb-0">:</p>
                            </div>
                            <div class="journal_info-info">
                                <h6 class="mb-0">
                                    3
                                </h6>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <div class="journal_info-title">
                                <h6 class="mb-0">Status Pesanan</h6>
                                <p class="mb-0">:</p>
                            </div>
                            <div class="journal_info-info">
                                <h6 class="mb-0">
                                    <?php echo e($order->notes[0]->orderStatus->name); ?>

                                </h6>
                            </div>
                        </li>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $order->termin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $termin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="d-flex align-items-start">
                                <div class="journal_info-title">
                                    <h6 class="mb-0">Termin <?php echo e($termin->term); ?></h6>
                                    <p class="mb-0">:</p>
                                </div>
                                <div class="journal_info-info">
                                    <!--[if BLOCK]><![endif]--><?php if($termin->is_paid): ?>
                                        <h6 class="mb-0 text-success">
                                            PAID
                                        </h6>
                                    <?php else: ?>
                                        <h6 class="mb-0 text-danger">
                                            UNPAID
                                        </h6>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </ul>
                    <div class="separator stretched-dashed"></div>
                    <div class="journal-info_btn-group d-flex justify-content-end mt-4">
                        <button wire:click="download_kwitansi" class="btn inactive">
                            <i class='bx bx-cloud-download'></i>
                            <span>Download Kwitansi</span>
                        </button>
                        <button wire:click="download_invoice" class="btn active">
                            <i class='bx bx-cloud-download'></i>
                            <span>Download Invoice</span>
                        </button>
                        <button class="btn active">
                            <i class='bx bx-wallet'></i>
                            <span>
                                Lakukan Pembayaran
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('journal-detail.notes-list', ['orderId' => $order->id,'order_id' => $order->id]);

$__html = app('livewire')->mount($__name, $__params, 'lw-2136502880-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('journal-detail.file-history-list', ['articleId' => $order->article->id,'article_id' => $order->article->id]);

$__html = app('livewire')->mount($__name, $__params, 'lw-2136502880-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </div>
    </div>
</div>
<?php /**PATH D:\PROJ\Laravel\JurnalTrackingApp\resources\views/livewire/order-detail.blade.php ENDPATH**/ ?>