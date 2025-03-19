<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'src' => null,
    'size' => 'base',
]));

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

foreach (array_filter(([
    'src' => null,
    'size' => 'base',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
$classes = Flux::classes()
    ->add('overflow-hidden')
    ->add(match ($size) {
        'base' => 'size-10 rounded-sm',
        'sm' => 'size-8 rounded-sm',
        'xs' => 'size-6 rounded-sm',
    });
?>

<div <?php echo e($attributes->class($classes)); ?> data-flux-avatar>
    <img src="<?php echo e($src); ?>" alt="" />
</div>

<?php /**PATH D:\PROJ\Laravel\JurnalTrackingApp\vendor\livewire\flux\stubs\resources\views\flux\avatar.blade.php ENDPATH**/ ?>