<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['disabled'=>false]));

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

foreach (array_filter((['disabled'=>false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<div class="mb-3">
  <label class="<?php echo \Illuminate\Support\Arr::toCssClasses([ 'form-label' , 'text-danger'=> $errors->has($name)
    ]); ?>" for="<?php echo e($name); ?>" class="form-label"><?php echo e($label); ?></label>
  <!--[if BLOCK]><![endif]--><?php if(isset($note)): ?>
  <p class="form-notes mb-2">
    <?php echo e($note); ?>

  </p>
  <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
  <input wire:loading.attr='disabled' <?php if($disabled): echo 'disabled'; endif; ?> wire:model="<?php echo e($name); ?>" type="<?php echo e($type); ?>" name="<?php echo e($name); ?>"
    id="<?php echo e($name); ?>" class="form-control <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
    placeholder="<?php echo e(empty($placeholder) ? $label : $placeholder); ?>" value="<?php echo e(old($name)); ?>" />
  <!--[if BLOCK]><![endif]--><?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
  <div class="invalid-feedback"><?php echo e($message); ?></div>
  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
</div><?php /**PATH D:\PROJ\Laravel\JurnalTrackingApp\resources\views/components/form/input.blade.php ENDPATH**/ ?>