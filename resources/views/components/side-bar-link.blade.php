<a href="{{ $link }}" class="sidebar-link {{ $link == request()->url() ? 'active' : '' }}">
    <i class="fas {{ $icon }} fa-fw sidebar-link-icon"></i>
    {{ $name }}
</a>
