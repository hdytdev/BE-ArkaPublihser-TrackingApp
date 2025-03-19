<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['pageTitle' => null]));

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

foreach (array_filter((['pageTitle' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e($title ?? ''); ?></title>
    <?php echo $__env->make('shared.layout-asset', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    <link data-navigate-track href="<?php echo e(asset('assets/css/select2.css')); ?>" rel="stylesheet" />
    <link data-navigate-track rel="stylesheet" href="<?php echo e(asset('assets/css/select2bs.css')); ?>">
    <link data-navigate-track rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>" />
</head>

<body>
    <div class="alert alert-danger" wire:offline>
        Sedang Offline
    </div>
    <?php if (isset($component)) { $__componentOriginal1b146e3afc1ef6b4e147d23ecf53ba8e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1b146e3afc1ef6b4e147d23ecf53ba8e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.wrapper','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.wrapper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <?php if (isset($component)) { $__componentOriginalf47b3b1eddaec411eb93068acf719b05 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf47b3b1eddaec411eb93068acf719b05 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.aside','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.aside'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php if (isset($component)) { $__componentOriginal29a98ec467c86d93a8bd1580417f9f3b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal29a98ec467c86d93a8bd1580417f9f3b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app-menu','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal29a98ec467c86d93a8bd1580417f9f3b)): ?>
<?php $attributes = $__attributesOriginal29a98ec467c86d93a8bd1580417f9f3b; ?>
<?php unset($__attributesOriginal29a98ec467c86d93a8bd1580417f9f3b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal29a98ec467c86d93a8bd1580417f9f3b)): ?>
<?php $component = $__componentOriginal29a98ec467c86d93a8bd1580417f9f3b; ?>
<?php unset($__componentOriginal29a98ec467c86d93a8bd1580417f9f3b); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf47b3b1eddaec411eb93068acf719b05)): ?>
<?php $attributes = $__attributesOriginalf47b3b1eddaec411eb93068acf719b05; ?>
<?php unset($__attributesOriginalf47b3b1eddaec411eb93068acf719b05); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf47b3b1eddaec411eb93068acf719b05)): ?>
<?php $component = $__componentOriginalf47b3b1eddaec411eb93068acf719b05; ?>
<?php unset($__componentOriginalf47b3b1eddaec411eb93068acf719b05); ?>
<?php endif; ?>
        <div class="layout-page">
            <?php if (isset($component)) { $__componentOriginala9b3e504c250665e0a13110a708b1bba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala9b3e504c250665e0a13110a708b1bba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.navbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala9b3e504c250665e0a13110a708b1bba)): ?>
<?php $attributes = $__attributesOriginala9b3e504c250665e0a13110a708b1bba; ?>
<?php unset($__attributesOriginala9b3e504c250665e0a13110a708b1bba); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala9b3e504c250665e0a13110a708b1bba)): ?>
<?php $component = $__componentOriginala9b3e504c250665e0a13110a708b1bba; ?>
<?php unset($__componentOriginala9b3e504c250665e0a13110a708b1bba); ?>
<?php endif; ?>
            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <?php if($pageTitle): ?>
                        <?php echo e($pageTitle); ?>

                    <?php else: ?>
                        <?php if($title ?? false): ?>
                            <div class="page-title py-2">
                                <h4><?php echo e($title); ?></h4>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php echo e($slot); ?>

                </div>
            </div>
            <?php if (isset($component)) { $__componentOriginal2851f1e47c9108aacbab05e6d2ec4a68 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2851f1e47c9108aacbab05e6d2ec4a68 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2851f1e47c9108aacbab05e6d2ec4a68)): ?>
<?php $attributes = $__attributesOriginal2851f1e47c9108aacbab05e6d2ec4a68; ?>
<?php unset($__attributesOriginal2851f1e47c9108aacbab05e6d2ec4a68); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2851f1e47c9108aacbab05e6d2ec4a68)): ?>
<?php $component = $__componentOriginal2851f1e47c9108aacbab05e6d2ec4a68; ?>
<?php unset($__componentOriginal2851f1e47c9108aacbab05e6d2ec4a68); ?>
<?php endif; ?>
            <div class="content-backdrop fade"></div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1b146e3afc1ef6b4e147d23ecf53ba8e)): ?>
<?php $attributes = $__attributesOriginal1b146e3afc1ef6b4e147d23ecf53ba8e; ?>
<?php unset($__attributesOriginal1b146e3afc1ef6b4e147d23ecf53ba8e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1b146e3afc1ef6b4e147d23ecf53ba8e)): ?>
<?php $component = $__componentOriginal1b146e3afc1ef6b4e147d23ecf53ba8e; ?>
<?php unset($__componentOriginal1b146e3afc1ef6b4e147d23ecf53ba8e); ?>
<?php endif; ?>

    <?php echo $__env->make('shared.layout-js-assets', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

    <script data-navigate-track src="<?php echo e(asset('assets/js/select-2.js')); ?>"></script>

    <script data-navigate-track>
        Livewire.directive('konfirmasi', ({
            el,
            directive,
            component,
            cleanup
        }) => {
            let content = directive.expression;
            async function confirmation(e) {
                e.preventDefault()
                e.stopImmediatePropagation()
                $conf = await Swal.fire({
                    showClass: {
                        popup: `
                        animate__animated
                        animate__flipInX
                        animate__faster
                        `
                    },
                    allowOutsideClick: false,
                    hideClass: {
                        popup: `animate__animated animate__flipOutX animate__faster`
                    },
                    title: "Konfirmasi",
                    text: content,
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonText: "Ya",
                    cancelButtonText: "Tidak"
                })

                if ($conf.isConfirmed) {
                    let WireCompoennt = Livewire.find(component.id)
                    if (!WireCompoennt) {
                        console.error("Livewire component not found!");
                        return;
                    }
                    let methodWithParams = el.getAttribute("wire:click");
                    let match = methodWithParams.match(/^([\w]+)\((.*)\)$/);
                    if (match) {
                        let method = match[1];
                        let params = match[2].split(',').map(param => param.trim().replace(/['"]/g,
                            '')); // Parsing parameter
                        WireCompoennt.call(method, ...params);
                    } else {
                        WireCompoennt.call(methodWithParams);
                    }
                }

            }
            el.addEventListener('click', confirmation, {
                capture: true
            });
            cleanup(() => {
                el.removeEventListener("click", confirmation)
            })
        })
    </script>
</body>

</html>
<?php /**PATH D:\PROJ\Laravel\JurnalTrackingApp\resources\views\layouts\app.blade.php ENDPATH**/ ?>