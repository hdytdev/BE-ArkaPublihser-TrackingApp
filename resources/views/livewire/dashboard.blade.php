<div>
    <div class="row" style="row-gap: 20px">
        <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="dash-icon flex-shrink-0">
                            <img src="https://res.cloudinary.com/dununt4ev/image/upload/v1739850521/icon-dashboard-order_wtpeqj.png"
                                alt="chart success" class="rounded" />
                        </div>
                    </div>
                    <h3 class="card-title mb-2 text-lora fw-semibold">{{ $data['order']['total'] }}</h3>
                    <span class="fw-semibold d-block mb-1">Total Order</span>
                    @if ($data['order']['type'] === 'NAIK')
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +{{
                        $data['order']['persentase'] }}%</small>
                    @else
                    <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> {{
                        $data['order']['persentase'] }}%</small>
                    @endif
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
                    <h3 class="card-title mb-2 text-lora fw-semibold">{{ $data['jurnal'] }}</h3>
                    <span class="fw-semibold d-block mb-1"> Jurnal</span>
                    {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +1.80%</small> --}}
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
                    <h3 class="card-title mb-2 text-lora fw-semibold">{{ $data['customer'] }}</h3>
                    <span class="fw-semibold d-block mb-1"> Customer</span>
                    {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +1.80%</small> --}}
                </div>
            </div>
        </div>
        {{-- <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="dash-icon flex-shrink-0">
                            <img src="https://res.cloudinary.com/dununt4ev/image/upload/v1739850520/icon-dashboard-marketing_jtzzbf.png"
                                alt="chart success" class="rounded" />
                        </div>
                    </div>
                    <h3 class="card-title mb-2 text-lora fw-semibold">3</h3>
                    <span class="fw-semibold d-block mb-1"> Marketing</span>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +1.80%</small>
                </div>
            </div>
        </div> --}}
        {{-- <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="dash-icon flex-shrink-0">
                            <img src="https://res.cloudinary.com/dununt4ev/image/upload/v1739850521/icon-dashboard-afiliasi_tpuqjp.png"
                                alt="chart success" class="rounded" />
                        </div>
                    </div>
                    <h3 class="card-title mb-2 text-lora fw-semibold">2</h3>
                    <span class="fw-semibold d-block mb-1"> Afiliasi</span>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +1.80%</small>
                </div>
            </div>
        </div> --}}
        <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="dash-icon flex-shrink-0">
                            <img src="https://res.cloudinary.com/dununt4ev/image/upload/v1739850521/icon-dashboard-new_eqsb2s.png"
                                alt="chart success" class="rounded" />
                        </div>
                    </div>
                    <h3 class="card-title mb-2 text-lora fw-semibold">{{ $data['order']['new'] }}</h3>
                    <span class="fw-semibold d-block mb-1">Order Baru</span>
                    {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +12.80%</small> --}}
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
</div>