@props(['href' => '', 'class' => ''])

<style>
    a.active {
        color: var(--gold) !important;
    }
</style>

<div class="menu-item px-3">
    <a href="{{ route($href) }}"
        {{ $attributes->merge([
            'class' => trim(($class ?? '') . 'text-hover menu-link fs-5 fw-bold px-3 py-2' . ' '
            .  (request()->routeIs($href) ? 'active' : '')),
        ]) }}
        style="color: inherit; transition: all 0.3s;"
    >
        {{ $slot }}
    </a>
</div>
