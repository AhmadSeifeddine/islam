<a
    {{ $attributes->merge([
        'class' => trim(
            ($class ?? '') .
            'btn-bg-logo'
        ),
        ])
    }}
>
    {{ $slot }}
</a>
