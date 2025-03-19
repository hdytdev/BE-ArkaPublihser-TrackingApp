<div class="mb-3">
  <label class="<?php echo \Illuminate\Support\Arr::toCssClasses([
    'form-label',
    'text-danger' => $errors->has($name)
  ]); ?>" for="<?php echo e($name); ?>" class="form-label"><?php echo e($label); ?></label>
  <input
      wire:model="<?php echo e($name); ?>"
      type="<?php echo e($type); ?>"
      name="<?php echo e($name); ?>"
      id="<?php echo e($name); ?>"
      class="form-control <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
      placeholder="<?php echo e(empty($placeholder) ? $label : $placeholder); ?>"
      value="<?php echo e(old($name)); ?>"
  />
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
</div>
<?php /**PATH D:\PROJ\Laravel\JurnalTrackingApp\resources\views/components/form/input.blade.php ENDPATH**/ ?>