@props(['link' => null, 'target' => null, "icon" => null])
<li class="menu-item {{request()->fullUrlIs($link) ? 'active' : ''}}">
    <a wire:navigate href="{{$link}}" class="menu-link">
        @if ($icon)
            <i class="menu-icon tf-icons {{$icon}}"></i>
        @endif
        <div>
            {{$slot}}
        </div>
    </a>
</li>