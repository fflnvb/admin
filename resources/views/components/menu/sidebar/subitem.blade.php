<li class="nav-item ms-2">
    <a href="{{ route($subitem['route']) }}"
        class="nav-link
        {{ $active ? 'bg-light bg-opacity-10' : '' }}">
        <i class="bi-{{ $subitem['icon'] }} me-2" style="font-size: 1.2rem"></i>
        {{ $subitem['name'] }}
    </a>
</li>
