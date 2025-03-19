<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'name' => $attributes->whereStartsWith('wire:model')->first(),
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
    'name' => $attributes->whereStartsWith('wire:model')->first(),
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
    ->add('w-full flex')
    ->add('*:data-flux-input:grow')
    ->add([
        '[&>[data-flux-input]:not(:first-child):not(:last-child)>[data-flux-group-target]:not([data-invalid])]:border-x-0',
        '[&>[data-flux-input]:first-child:not(:last-child)>[data-flux-group-target]:not([data-invalid])]:border-r-0',
        '[&>[data-flux-input]:last-child:not(:first-child)>[data-flux-group-target]:not([data-invalid])]:border-l-0',

        // Prevent sandwhiched selects (next to inputs) from causing double borders...
        '[&>*:not(:first-child):not(:last-child):not(:only-child)_[data-flux-group-target]:not([data-invalid])]:border-l-0',

        // "Weld" the borders of inputs together by overriding their border radiuses...
        '[&>[data-flux-group-target]:not(:first-child):not(:last-child)]:rounded-none',
        '[&>[data-flux-group-target]:first-child:not(:last-child)]:rounded-r-none',
        '[&>[data-flux-group-target]:last-child:not(:first-child)]:rounded-l-none',

        // "Weld" borders for sub-children of group targets (button element inside ui-select element, etc.)...
        '[&>*:not(:first-child):not(:last-child):not(:only-child)>[data-flux-group-target]]:rounded-none',
        '[&>*:first-child:not(:last-child)>[data-flux-group-target]]:rounded-r-none',
        '[&>*:last-child:not(:first-child)>[data-flux-group-target]]:rounded-l-none',

        // "Weld" borders for sub-sub-children of group targets (input element inside div inside ui-select element (combobox))...
        '[&>*:not(:first-child):not(:last-child):not(:only-child)>[data-flux-input]>[data-flux-group-target]]:rounded-none',
        '[&>*:first-child:not(:last-child)>[data-flux-input]>[data-flux-group-target]]:rounded-r-none',
        '[&>*:last-child:not(:first-child)>[data-flux-input]>[data-flux-group-target]]:rounded-l-none',
    ])
    ;
?>

<?php if (isset($component)) { $__componentOriginal33e2911d6f1e72999cb4ebd3c5d00431 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal33e2911d6f1e72999cb4ebd3c5d00431 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::with-field','data' => ['attributes' => $attributes,'name' => $name]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::with-field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name)]); ?>
    <div <?php echo e($attributes->class($classes)); ?> data-flux-input-group>
        <?php echo e($slot); ?>

    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal33e2911d6f1e72999cb4ebd3c5d00431)): ?>
<?php $attributes = $__attributesOriginal33e2911d6f1e72999cb4ebd3c5d00431; ?>
<?php unset($__attributesOriginal33e2911d6f1e72999cb4ebd3c5d00431); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal33e2911d6f1e72999cb4ebd3c5d00431)): ?>
<?php $component = $__componentOriginal33e2911d6f1e72999cb4ebd3c5d00431; ?>
<?php unset($__componentOriginal33e2911d6f1e72999cb4ebd3c5d00431); ?>
<?php endif; ?>
<?php /**PATH D:\PROJ\Laravel\JurnalTrackingApp\vendor\livewire\flux\stubs\resources\views\flux\input\group\index.blade.php ENDPATH**/ ?>