<div>
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
    
    <div class="modal fade" id="manageOrder" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Kelola Pesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Status Termin 1</label>
                            <select class="form-select" id="exampleFormControlSelect1"
                                aria-label="Default select example">
                                <option selected>Choose Option...</option>
                                <option value="1">PAID</option>
                                <option value="2">UNPAID</option>
                            </select>
                        </div>
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Status Termin 2</label>
                            <select class="form-select" id="exampleFormControlSelect1"
                                aria-label="Default select example">
                                <option selected>Choose Option...</option>
                                <option value="1">PAID</option>
                                <option value="2">UNPAID</option>
                            </select>
                        </div>
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Status Termin 3</label>
                            <select class="form-select" id="exampleFormControlSelect1"
                                aria-label="Default select example">
                                <option selected>Choose Option...</option>
                                <option value="1">PAID</option>
                                <option value="2">UNPAID</option>
                            </select>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label class="form-label">Upload Kwitansi</label>
                            <input type="file" class="form-control">
                        </div>
                        <div class="col mb-0">
                            <label class="form-label">Upload Invoice</label>
                            <input type="file" class="form-control">
                        </div>
                    </div>
                    <div class="row g-2 mt-2">
                        <div class="col mb-0">
                            <label class="form-label">Link Pembayaran</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Tutup
                    </button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>

        <?php
        $__scriptKey = '1433788992-0';
        ob_start();
    ?>
        <?php
        $__output = ob_get_clean();

        \Livewire\store($this)->push('scripts', $__output, $__scriptKey)
    ?>
</div>
<?php /**PATH D:\PROJ\Laravel\JurnalTrackingApp\resources\views/livewire/order-detail/order-information.blade.php ENDPATH**/ ?>