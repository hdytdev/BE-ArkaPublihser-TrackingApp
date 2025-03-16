@props(['title' => null, 'toolbarLink' => null, 'toolbarTitle'])
<div class="page-title pt-3 mb-1 d-flex justify-content-between align-items-center mb-4">
    <h4 class="mb-0">
        {{$slot ?? $title}}
    </h4>
    @if ($toolbarLink && $toolbarTitle)
        <a wire:navigate href="{{$toolbarLink}}" class="btn btn-primary px-3 all-order_btn-search w-auto">
            <span class="align-middle">{{$toolbarTitle}}</span>
        </a>
    @endif
</div>
