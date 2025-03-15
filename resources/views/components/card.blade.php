@props(['title'])
<div class="card mb-4">
    <h5 class="card-header">{{ $title }}</h5>
    <div class="card-body px-0">
        {{ $slot }}
    </div>
</div>
