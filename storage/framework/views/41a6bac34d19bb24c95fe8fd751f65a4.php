<div>
  <div class="row mb-3">
    <div class="col-lg-12 col-md-4">
      <div class="card p-4">
        <form action="" class="all-order_form-search d-flex w-100">
          <div class="search-bar">
            <div>
              <h6 class="mb-2">Nyari apa gaiss?</h6>
              <input type="text" class="form-control" placeholder="Cari Order">
            </div>
          </div>
          <div class="search-controller d-flex">
            <div class="w-100">
              <h6 class="mb-2">Status Publikasi</h6>
              <select class="form-select" id="inputGroupSelect01">
                <option selected>Choose...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="w-100">
              <h6 class="mb-2">Status Pembayaran</h6>
              <select class="form-select" id="inputGroupSelect01">
                <option selected>Choose...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="d-flex flex-direction-end align-items-end">
              <button type="submit" class="btn btn-primary px-4 all-order_btn-search w-auto">Cari</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12 col-md-4 order-1">
      <!-- Responsive Table -->
      <div class="card">
        <div class="card-header d-flex justify-content-between">
          <h5 class="mb-0">Daftar Order</h5>
          <div class="d-flex order-controller">
            <form action="" class="d-flex h-fit month-filter">
              <input type="month" class="form-control h-fit">
              <button type="submit" class="btn btn-primary h-fit text-nowrap">Filter by Month</button>
            </form>
          </div>
        </div>
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead>
              <tr class="text-nowrap">
                <th>No</th>
                <th>TRX ID</th>
                <th>Nama Jurnal</th>
                <th>Nama Customer</th>
                <th>Tanggal Pesanan</th>
                <th>Paket</th>
                <th>Status Publikasi</th>
                <th>Status Pembayaran</th>
                <th>Menu</th>
              </tr>
            </thead>
            <tbody>


              <!--[if BLOCK]><![endif]--><?php if(!empty($orders)): ?>
              <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <th scope="row">1</th>
            <td><?php echo e($item->order_number); ?></td>
            <td>
            <?php echo e($item->article->title); ?>

            </td>
            <td>
            <?php echo e($item->customer->name); ?>

            </td>
            <td>
            <?php echo e($item->created_at); ?>

            </td>
            <td>
            <?php echo e($item->package); ?>

            </td>
            <td><?php echo e($item->notes[0]?->orderStatus?->name); ?></td>
            <td>
            <!--[if BLOCK]><![endif]--><?php if($item->statusPembayaran): ?>
        <span class="badge bg-success">Berhasil</span>
      <?php else: ?>
    <span class="badge bg-warning">Pending</span>

  <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </td>
            <td>
            <div class="dropdown">
            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
              <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu all-order_dropdown-menu">
              <a href="<?php echo e(route('admin.order.detail', [
          'order_id' => $item->id
        ])); ?>" class="btn btn-detail text-primary d-flex items-center">
              <i class='bx bx-info-circle'></i>
              <span>Lihat Detail</span>
              </a>
              <a href="edit-order.html" class="btn btn-edit text-primary d-flex items-center">
              <i class='bx bx-edit-alt'></i>
              <span>Edit</span>
              </a>
              <button data-bs-toggle="modal" data-bs-target="#deleteOrder"
              class="btn btn-delete text-danger d-flex items-center w-100 w-100">
              <i class='bx bx-trash'></i>
              <span>Delete</span>
              </button>
            </div>
            </div>
            </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            </tbody>
          </table>
        </div>
        <div class="all-order_card-footer">
          <?php echo e($orders->links("livewire::bootstrap")); ?>

        </div>
      </div>
      <!--/ Responsive Table -->
    </div>
  </div>
</div><?php /**PATH D:\PROJ\Laravel\JurnalTrackingApp\resources\views/livewire/order-lists.blade.php ENDPATH**/ ?>