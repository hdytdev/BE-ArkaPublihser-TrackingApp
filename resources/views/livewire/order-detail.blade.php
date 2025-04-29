<div>

    <div class="row">
        <div class="col-lg-8">
            <livewire:order-detail.detail-journal :order="$order" />
            <livewire:order-detail.order-information :order_id="$order->id" />
        </div>
        <div class="col-lg-4">
            <livewire:order-detail.notes-list :order_id="$order->id" />
            <livewire:order-detail.file-history-list :article_id="$order->article->id" />
        </div>
    </div>
</div>