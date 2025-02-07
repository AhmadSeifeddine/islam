@props(['route', 'permission', 'title'])

@permission($permission)
    <a href="{{ route($route) }}" class="btn btn-primary">
        <i class="fas fa-lock-open me-1"></i>
        {{ $title }}
    </a>
@else
    <a href="{{ route($route) }}" class="btn btn-danger disabled">
        <i class="fas fa-lock me-1"></i>
        <span style="filter: blur(1px)">{{ $title }}</span>
    </a>
@endpermission
