<div>

    <div class="row">
        <div class="col-lg-8">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('order-detail.detail-journal', ['order' => $order]);

$__html = app('livewire')->mount($__name, $__params, 'lw-299626613-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('order-detail.order-information', ['orderId' => $order->id,'order_id' => $order->id]);

$__html = app('livewire')->mount($__name, $__params, 'lw-299626613-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </div>
        <div class="col-lg-4">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('order-detail.notes-list', ['orderId' => $order->id,'order_id' => $order->id]);

$__html = app('livewire')->mount($__name, $__params, 'lw-299626613-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('order-detail.file-history-list', ['articleId' => $order->article->id,'article_id' => $order->article->id]);

$__html = app('livewire')->mount($__name, $__params, 'lw-299626613-3', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </div>
    </div>
</div><?php /**PATH D:\MyProjects\P-007-TRACKING-APP\resources\views/livewire/order-detail.blade.php ENDPATH**/ ?>