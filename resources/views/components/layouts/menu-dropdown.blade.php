@props(['name' => null, "icon" => null])
<li class="menu-item">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
        @if ($icon)
            <i class="menu-icon {{$icon}}"></i>
        @endif
        <div>{{$name}}</div>

    </a>
    <ul class="menu-sub">
        {{$submenu}}
    </ul>
</li>