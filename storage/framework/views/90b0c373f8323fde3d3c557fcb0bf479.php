<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['link' => null, 'target' => null, "icon" => null]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['link' => null, 'target' => null, "icon" => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<li class="menu-item <?php echo e(request()->fullUrlIs($link) ? 'active' : ''); ?>">
    <a wire:navigate href="<?php echo e($link); ?>" class="menu-link">
        <?php if($icon): ?>
            <i class="menu-icon tf-icons <?php echo e($icon); ?>"></i>
        <?php endif; ?>
        <div>
            <?php echo e($slot); ?>

        </div>
    </a>
</li><?php /**PATH D:\PROJ\Laravel\JurnalTrackingApp\resources\views\components\layouts\nav-link.blade.php ENDPATH**/ ?>