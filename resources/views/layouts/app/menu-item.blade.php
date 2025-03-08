<li class="menu-item {{ request()->fullUrlIs($link) ? "active" : "" }}">
    <a href="{{ $link }}" wire:navigate class="menu-link">
        <i class="menu-icon {{ $icon }}"></i>
        <div>{{ $text }}</div>
    </a>
</li>
