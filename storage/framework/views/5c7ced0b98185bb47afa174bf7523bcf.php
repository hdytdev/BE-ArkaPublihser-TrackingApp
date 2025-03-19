<!-- Dashboard -->
<?php if (isset($component)) { $__componentOriginal53d595a95a61fd6b7162a9a817bc0539 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.nav-link','data' => ['icon' => 'tf-icons bx bx-home-circle','link' => ''.e(route('admin.home')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'tf-icons bx bx-home-circle','link' => ''.e(route('admin.home')).'']); ?>Dashboard <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $attributes = $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $component = $__componentOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginal3423c1bb169b3216bd561b1d1a68830a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3423c1bb169b3216bd561b1d1a68830a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.menu-header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('menu-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Orders <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3423c1bb169b3216bd561b1d1a68830a)): ?>
<?php $attributes = $__attributesOriginal3423c1bb169b3216bd561b1d1a68830a; ?>
<?php unset($__attributesOriginal3423c1bb169b3216bd561b1d1a68830a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3423c1bb169b3216bd561b1d1a68830a)): ?>
<?php $component = $__componentOriginal3423c1bb169b3216bd561b1d1a68830a; ?>
<?php unset($__componentOriginal3423c1bb169b3216bd561b1d1a68830a); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginal53d595a95a61fd6b7162a9a817bc0539 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.nav-link','data' => ['icon' => 'tf-icons bx bx-add-to-queue','link' => ''.e(route('admin.order.new')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'tf-icons bx bx-add-to-queue','link' => ''.e(route('admin.order.new')).'']); ?>Tambah Order <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $attributes = $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $component = $__componentOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginalf370aa7357fa219e05cb9a5c7d63e02c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf370aa7357fa219e05cb9a5c7d63e02c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.menu-dropdown','data' => ['name' => 'Menu Order','icon' => 'tf-icons bx bx-list-ul']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.menu-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'Menu Order','icon' => 'tf-icons bx bx-list-ul']); ?>
     <?php $__env->slot('submenu', null, []); ?> 
        <?php if (isset($component)) { $__componentOriginal53d595a95a61fd6b7162a9a817bc0539 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.nav-link','data' => ['link' => ''.e(route('admin.order')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['link' => ''.e(route('admin.order')).'']); ?>Daftar Order <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $attributes = $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $component = $__componentOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal53d595a95a61fd6b7162a9a817bc0539 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.nav-link','data' => ['link' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['link' => '']); ?>Invoice Maker <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $attributes = $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $component = $__componentOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf370aa7357fa219e05cb9a5c7d63e02c)): ?>
<?php $attributes = $__attributesOriginalf370aa7357fa219e05cb9a5c7d63e02c; ?>
<?php unset($__attributesOriginalf370aa7357fa219e05cb9a5c7d63e02c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf370aa7357fa219e05cb9a5c7d63e02c)): ?>
<?php $component = $__componentOriginalf370aa7357fa219e05cb9a5c7d63e02c; ?>
<?php unset($__componentOriginalf370aa7357fa219e05cb9a5c7d63e02c); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginal53d595a95a61fd6b7162a9a817bc0539 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.nav-link','data' => ['icon' => 'tf-icons bx bx-group','link' => ''.e(route('admin.customer')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'tf-icons bx bx-group','link' => ''.e(route('admin.customer')).'']); ?>Daftar Customer <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $attributes = $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $component = $__componentOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginal3423c1bb169b3216bd561b1d1a68830a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3423c1bb169b3216bd561b1d1a68830a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.menu-header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('menu-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Journals <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3423c1bb169b3216bd561b1d1a68830a)): ?>
<?php $attributes = $__attributesOriginal3423c1bb169b3216bd561b1d1a68830a; ?>
<?php unset($__attributesOriginal3423c1bb169b3216bd561b1d1a68830a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3423c1bb169b3216bd561b1d1a68830a)): ?>
<?php $component = $__componentOriginal3423c1bb169b3216bd561b1d1a68830a; ?>
<?php unset($__componentOriginal3423c1bb169b3216bd561b1d1a68830a); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginal53d595a95a61fd6b7162a9a817bc0539 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.nav-link','data' => ['icon' => ' tf-icons bx bx-book-add','link' => ''.e(route('admin.journal.new')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => ' tf-icons bx bx-book-add','link' => ''.e(route('admin.journal.new')).'']); ?>Tambah Jurnal <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $attributes = $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $component = $__componentOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginalf370aa7357fa219e05cb9a5c7d63e02c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf370aa7357fa219e05cb9a5c7d63e02c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.menu-dropdown','data' => ['name' => 'Daftar Jurnal','icon' => 'tf-icons bx bx-list-ul']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.menu-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'Daftar Jurnal','icon' => 'tf-icons bx bx-list-ul']); ?>
     <?php $__env->slot('submenu', null, []); ?> 
        <?php if (isset($component)) { $__componentOriginal53d595a95a61fd6b7162a9a817bc0539 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.nav-link','data' => ['link' => ''.e(route('admin.journal',['category'=>'internal'])).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['link' => ''.e(route('admin.journal',['category'=>'internal'])).'']); ?>Journal Internal <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $attributes = $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $component = $__componentOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal53d595a95a61fd6b7162a9a817bc0539 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.nav-link','data' => ['link' => ''.e(route('admin.journal',['category'=>'external'])).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['link' => ''.e(route('admin.journal',['category'=>'external'])).'']); ?>Journal External <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $attributes = $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $component = $__componentOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal53d595a95a61fd6b7162a9a817bc0539 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.nav-link','data' => ['link' => ''.e(route('admin.journal',['category'=>'scopus'])).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['link' => ''.e(route('admin.journal',['category'=>'scopus'])).'']); ?>Journal Scopus <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $attributes = $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $component = $__componentOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf370aa7357fa219e05cb9a5c7d63e02c)): ?>
<?php $attributes = $__attributesOriginalf370aa7357fa219e05cb9a5c7d63e02c; ?>
<?php unset($__attributesOriginalf370aa7357fa219e05cb9a5c7d63e02c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf370aa7357fa219e05cb9a5c7d63e02c)): ?>
<?php $component = $__componentOriginalf370aa7357fa219e05cb9a5c7d63e02c; ?>
<?php unset($__componentOriginalf370aa7357fa219e05cb9a5c7d63e02c); ?>
<?php endif; ?>
<!-- Misc -->
<?php if (isset($component)) { $__componentOriginal3423c1bb169b3216bd561b1d1a68830a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3423c1bb169b3216bd561b1d1a68830a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.menu-header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('menu-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Manage Admin <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3423c1bb169b3216bd561b1d1a68830a)): ?>
<?php $attributes = $__attributesOriginal3423c1bb169b3216bd561b1d1a68830a; ?>
<?php unset($__attributesOriginal3423c1bb169b3216bd561b1d1a68830a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3423c1bb169b3216bd561b1d1a68830a)): ?>
<?php $component = $__componentOriginal3423c1bb169b3216bd561b1d1a68830a; ?>
<?php unset($__componentOriginal3423c1bb169b3216bd561b1d1a68830a); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginal53d595a95a61fd6b7162a9a817bc0539 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.nav-link','data' => ['icon' => ' tf-icons bx bx-user','link' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => ' tf-icons bx bx-user','link' => '']); ?>User Management <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $attributes = $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $component = $__componentOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginal53d595a95a61fd6b7162a9a817bc0539 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.nav-link','data' => ['icon' => ' tf-icons bx bx-cog','link' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => ' tf-icons bx bx-cog','link' => '']); ?>Pengaturan <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $attributes = $__attributesOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__attributesOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539)): ?>
<?php $component = $__componentOriginal53d595a95a61fd6b7162a9a817bc0539; ?>
<?php unset($__componentOriginal53d595a95a61fd6b7162a9a817bc0539); ?>
<?php endif; ?><?php /**PATH D:\PROJ\Laravel\JurnalTrackingApp\resources\views\components\app-menu.blade.php ENDPATH**/ ?>