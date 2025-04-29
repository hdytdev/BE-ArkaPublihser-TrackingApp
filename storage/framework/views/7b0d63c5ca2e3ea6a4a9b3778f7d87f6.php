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
                    <h6 class="mb-0"><?php echo e($order->article->journal->focus_and_scope); ?></h6>
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
</div><?php /**PATH D:\MyProjects\P-007-TRACKING-APP\resources\views/livewire/order-detail/detail-journal.blade.php ENDPATH**/ ?>