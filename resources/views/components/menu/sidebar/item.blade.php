<li class="nav-item">
    <a href="{{ route($item['route']) }}"
        class="nav-link text-white d-flex align-items-center {{ $active ? 'bg-light bg-opacity-10' : '' }}">
        <i class="bi-{{ $item['icon'] }} me-2" style="font-size: 1.2rem"></i>
        {{ $item['name'] }}
        @if($badge)
            &nbsp;<span class="badge rounded-pill text-bg-primary bg-opacity-100">{{ $badge }}</span>
        @endif
    </a>
</li>
@if(isset($item['subitems']) && $extended)
    @foreach($item['subitems'] as $subitem)
        <x-admin::menu.sidebar.subitem :subitem="$subitem" />
    @endforeach
@endif
