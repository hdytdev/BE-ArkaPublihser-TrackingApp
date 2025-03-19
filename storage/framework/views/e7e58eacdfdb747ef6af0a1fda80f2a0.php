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
                                <h6 class="mb-0">Educenter: Jurnal Ilmiah Pendidikan</h6>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <div class="journal_info-title">
                                <h6 class="mb-0">Akreditasi</h6>
                                <p class="mb-0">:</p>
                            </div>
                            <div class="journal_info-info">
                                <h6 class="mb-0">DOAJ</h6>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <div class="journal_info-title">
                                <h6 class="mb-0">Focus & Scope</h6>
                                <p class="mb-0">:</p>
                            </div>
                            <div class="journal_info-info">
                                <h6 class="mb-0">Pendidikan</h6>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <div class="journal_info-title">
                                <h6 class="mb-0">Judul Artikel</h6>
                                <p class="mb-0">:</p>
                            </div>
                            <div class="journal_info-info">
                                <h6 class="mb-0">Analisis Ketahanan Fans Liverpool Dalam Menahan Pressure Publik
                                    Karena Lama
                                    Tidak Juara EPL Sejak 1989-1990</h6>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <div class="journal_info-title">
                                <h6 class="mb-0">Nama Author</h6>
                                <p class="mb-0">:</p>
                            </div>
                            <div class="journal_info-info">
                                <h6 class="mb-0">
                                    John Wayne, John D Luffy, Johny Bravo</h6>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <div class="journal_info-title">
                                <h6 class="mb-0">Tanggal Publish</h6>
                                <p class="mb-0">:</p>
                            </div>
                            <div class="journal_info-info">
                                <h6 class="mb-0">
                                    belum terbit</h6>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <div class="journal_info-title">
                                <h6 class="mb-0">Estimasi Publish</h6>
                                <p class="mb-0">:</p>
                            </div>
                            <div class="journal_info-info">
                                <h6 class="mb-0">
                                    12 Januari 2090</h6>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <div class="journal_info-title">
                                <h6 class="mb-0">Tanggal Submit</h6>
                                <p class="mb-0">:</p>
                            </div>
                            <div class="journal_info-info">
                                <h6 class="mb-0">
                                    belum submit</h6>
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
                        <button class="btn active">
                            <i class='bx bx-link'></i>
                            <span>
                                Link Journal
                            </span>
                        </button>
                        <button class="btn inactive">
                            <i class='bx bx-link'></i>
                            <span>
                                Link Publish
                            </span>
                        </button>
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
                                    Editing Queue
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
                        <button class="btn inactive">
                            <i class='bx bx-cloud-download'></i>
                            <span>Download Kwitansi</span>
                        </button>
                        <button class="btn active">
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
            <div class="card">
                <div class="card-header">
                    <div class="card-title mb-0">
                        <i class='bx bx-notepad'></i>
                        <span>
                            Notes
                        </span>
                    </div>
                    <div class="card-body m-0 p-0">
                        <div class="accordion mt-3" id="accordionExample">
                            <div class="card accordion-item detail-order_accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button type="button" class="accordion-button collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#accordionOne"
                                        aria-expanded="false" aria-controls="accordionTwo">
                                        12-12-2025
                                    </button>
                                </h2>
                                <div id="accordionOne" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body journal-notes">
                                        <div class="d-flex notes-item">
                                            <h6>Progress:</h6>
                                            <h6>Editing</h6>
                                        </div>
                                        <div class="d-flex notes-item">
                                            <h6>Notes:</h6>
                                            <p>Mohon lakukan pembayaran termin 3 sebelum kami melanjutkan progress
                                                publikasi</p>
                                        </div>
                                        <div class="notes-control d-flex justify-content-end">
                                            <button data-bs-toggle="modal" data-bs-target="#editNote"
                                                class="btn btn-edit text-primary d-flex items-center">
                                                <i class='bx bx-edit-alt'></i>
                                                <span>Edit</span>
                                            </button>
                                            <button data-bs-toggle="modal" data-bs-target="#deleteNote"
                                                class="btn btn-delete text-danger d-flex items-center">
                                                <i class='bx bx-trash'></i>
                                                <span>Delete</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item detail-order_accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button type="button" class="accordion-button collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#accordionTwo"
                                        aria-expanded="false" aria-controls="accordionTwo">
                                        12-12-2025
                                    </button>
                                </h2>
                                <div id="accordionTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body journal-notes">
                                        <div class="d-flex notes-item">
                                            <h6>Progress:</h6>
                                            <h6>Editing</h6>
                                        </div>
                                        <div class="d-flex notes-item">
                                            <h6>Notes:</h6>
                                            <p>Mohon lakukan pembayaran termin 3 sebelum kami melanjutkan progress
                                                publikasi</p>
                                        </div>
                                        <div class="notes-control d-flex justify-content-end">
                                            <button data-bs-toggle="modal" data-bs-target="#editNote"
                                                class="btn btn-edit text-primary d-flex items-center">
                                                <i class='bx bx-edit-alt'></i>
                                                <span>Edit</span>
                                            </button>
                                            <button data-bs-toggle="modal" data-bs-target="#deleteNote"
                                                class="btn btn-delete text-danger d-flex items-center">
                                                <i class='bx bx-trash'></i>
                                                <span>Delete</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item detail-order_accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button type="button" class="accordion-button collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#accordionThree"
                                        aria-expanded="false" aria-controls="accordionThree">
                                        12-12-2025
                                    </button>
                                </h2>
                                <div id="accordionThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body journal-notes">
                                        <div class="d-flex notes-item">
                                            <h6>Progress:</h6>
                                            <h6>Editing</h6>
                                        </div>
                                        <div class="d-flex notes-item">
                                            <h6>Notes:</h6>
                                            <p>Mohon lakukan pembayaran termin 3 sebelum kami melanjutkan progress
                                                publikasi</p>
                                        </div>
                                        <div class="notes-control d-flex justify-content-end">
                                            <button data-bs-toggle="modal" data-bs-target="#editNote"
                                                class="btn btn-edit text-primary d-flex items-center">
                                                <i class='bx bx-edit-alt'></i>
                                                <span>Edit</span>
                                            </button>
                                            <button data-bs-toggle="modal" data-bs-target="#deleteNote"
                                                class="btn btn-delete text-danger d-flex items-center">
                                                <i class='bx bx-trash'></i>
                                                <span>Delete</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
            </div>
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
                        <div class="file-list d-flex justify-content-between align-items-center">
                            <div class="file-name">
                                <h6 class="mb-0">Naskah Awal</h6>
                                <p>12-2-2025</p>
                            </div>
                            <div class="file-controller d-flex">
                                <a href="" class="file-download">
                                    <i class='bx bx-cloud-download'></i>
                                </a>
                                <button data-bs-toggle="modal" data-bs-target="#editFile" class="file-download">
                                    <i class='bx bx-edit-alt'></i>
                                </button>
                                <button data-bs-toggle="modal" data-bs-target="#deleteFile" href=""
                                    class="file-delete">
                                    <i class='bx bx-trash'></i>
                                </button>
                            </div>
                        </div>
                        <div class="file-list d-flex justify-content-between align-items-center">
                            <div class="file-name">
                                <h6 class="mb-0">Naskah Awal</h6>
                                <p>12-2-2025</p>
                            </div>
                            <div class="file-controller d-flex">
                                <a href="" class="file-download">
                                    <i class='bx bx-cloud-download'></i>
                                </a>
                                <button data-bs-toggle="modal" data-bs-target="#editFile" class="file-download">
                                    <i class='bx bx-edit-alt'></i>
                                </button>
                                <button data-bs-toggle="modal" data-bs-target="#deleteFile" href=""
                                    class="file-delete">
                                    <i class='bx bx-trash'></i>
                                </button>
                            </div>
                        </div>
                        <div class="file-list d-flex justify-content-between align-items-center">
                            <div class="file-name">
                                <h6 class="mb-0">Naskah Awal</h6>
                                <p>12-2-2025</p>
                            </div>
                            <div class="file-controller d-flex">
                                <a href="" class="file-download">
                                    <i class='bx bx-cloud-download'></i>
                                </a>
                                <button data-bs-toggle="modal" data-bs-target="#editFile" class="file-download">
                                    <i class='bx bx-edit-alt'></i>
                                </button>
                                <button data-bs-toggle="modal" data-bs-target="#deleteFile" href=""
                                    class="file-delete">
                                    <i class='bx bx-trash'></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        <button data-bs-toggle="modal" data-bs-target="#addFile"
                            class="btn btn-primary text-sm d-flex align-items-center gap-10">
                            <span>Tambah File</span>
                            <i class='bx bx-add-to-queue'></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\PROJ\Laravel\JurnalTrackingApp\resources\views/livewire/order-detail.blade.php ENDPATH**/ ?>