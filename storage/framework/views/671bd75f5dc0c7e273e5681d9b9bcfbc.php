<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve(['title' => 'Home','pageTitle' => 'Home'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="row gutter-costum">
        <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="dash-icon flex-shrink-0">
                            <img src="https://res.cloudinary.com/dununt4ev/image/upload/v1739850521/icon-dashboard-order_wtpeqj.png"
                                alt="chart success" class="rounded" />
                        </div>
                    </div>
                    <h3 class="card-title mb-2 text-lora fw-semibold">1235</h3>
                    <span class="fw-semibold d-block mb-1">Total Order</span>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="dash-icon flex-shrink-0">
                            <img src="https://res.cloudinary.com/dununt4ev/image/upload/v1739850521/icon-dashboard-journal_n21m2c.png"
                                alt="chart success" class="rounded" />
                        </div>
                    </div>
                    <h3 class="card-title mb-2 text-lora fw-semibold">95</h3>
                    <span class="fw-semibold d-block mb-1">Total Jurnal</span>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +1.80%</small>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="dash-icon flex-shrink-0">
                            <img src="https://res.cloudinary.com/dununt4ev/image/upload/v1739850520/icon-dashboard-customer_o1ppn8.png"
                                alt="chart success" class="rounded" />
                        </div>
                    </div>
                    <h3 class="card-title mb-2 text-lora fw-semibold">1195</h3>
                    <span class="fw-semibold d-block mb-1">Total Customer</span>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +1.80%</small>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="dash-icon flex-shrink-0">
                            <img src="https://res.cloudinary.com/dununt4ev/image/upload/v1739850520/icon-dashboard-marketing_jtzzbf.png"
                                alt="chart success" class="rounded" />
                        </div>
                    </div>
                    <h3 class="card-title mb-2 text-lora fw-semibold">3</h3>
                    <span class="fw-semibold d-block mb-1">Total Marketing</span>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +1.80%</small>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="dash-icon flex-shrink-0">
                            <img src="https://res.cloudinary.com/dununt4ev/image/upload/v1739850521/icon-dashboard-afiliasi_tpuqjp.png"
                                alt="chart success" class="rounded" />
                        </div>
                    </div>
                    <h3 class="card-title mb-2 text-lora fw-semibold">2</h3>
                    <span class="fw-semibold d-block mb-1">Total Afiliasi</span>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +1.80%</small>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="dash-icon flex-shrink-0">
                            <img src="https://res.cloudinary.com/dununt4ev/image/upload/v1739850521/icon-dashboard-new_eqsb2s.png"
                                alt="chart success" class="rounded" />
                        </div>
                    </div>
                    <h3 class="card-title mb-2 text-lora fw-semibold">35</h3>
                    <span class="fw-semibold d-block mb-1">Order Baru</span>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +12.80%</small>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="dash-icon flex-shrink-0">
                            <img src="https://res.cloudinary.com/dununt4ev/image/upload/v1739850521/icon-dashboard-process_wojeff.png"
                                alt="chart success" class="rounded" />
                        </div>
                    </div>
                    <h3 class="card-title mb-2 text-lora fw-semibold">405</h3>
                    <span class="fw-semibold d-block mb-1">Order Diproses</span>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +20.80%</small>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="dash-icon flex-shrink-0">
                            <img src="https://res.cloudinary.com/dununt4ev/image/upload/v1739850520/icon-dashboard-done_iq4th9.png"
                                alt="chart success" class="rounded" />
                        </div>
                    </div>
                    <h3 class="card-title mb-2 text-lora fw-semibold">535</h3>
                    <span class="fw-semibold d-block mb-1">Order Selesai</span>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +12.80%</small>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="dash-icon flex-shrink-0">
                            <img src="https://res.cloudinary.com/dununt4ev/image/upload/v1739850520/icon-dashboard-cancel_o8kbsr.png"
                                alt="chart success" class="rounded" />
                        </div>
                    </div>
                    <h3 class="card-title mb-2 text-lora fw-semibold">35</h3>
                    <span class="fw-semibold d-block mb-1">Order Batal</span>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="dash-icon flex-shrink-0">
                            <img src="https://res.cloudinary.com/dununt4ev/image/upload/v1739850520/icon-dashboard-internal_ymuu0b.png"
                                alt="chart success" class="rounded" />
                        </div>
                    </div>
                    <h3 class="card-title mb-2 text-lora fw-semibold">11</h3>
                    <span class="fw-semibold d-block mb-1">Jurnal Internal</span>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="dash-icon flex-shrink-0">
                            <img src="https://res.cloudinary.com/dununt4ev/image/upload/v1739850520/icon-dashboard-eksternal_ap3cet.png"
                                alt="chart success" class="rounded" />
                        </div>
                    </div>
                    <h3 class="card-title mb-2 text-lora fw-semibold">93</h3>
                    <span class="fw-semibold d-block mb-1">Eksternal</span>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="dash-icon flex-shrink-0">
                            <img src="https://res.cloudinary.com/dununt4ev/image/upload/v1739850520/icon-dashboard-scopus_ccncjb.png"
                                alt="chart success" class="rounded" />
                        </div>
                    </div>
                    <h3 class="card-title mb-2 text-lora fw-semibold">35</h3>
                    <span class="fw-semibold d-block mb-1">Jurnal Scopus</span>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH D:\PROJ\Laravel\JurnalTrackingApp\resources\views\admin\dashboard.blade.php ENDPATH**/ ?>