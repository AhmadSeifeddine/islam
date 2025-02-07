<div {{ $attributes->merge([
    'class' => trim(
        ($class ?? '') .
            'category fw-bold py-2 px-3 bg-primary bg-opacity-10 rounded-2 text-primary fs-8',
    ),
]) }}>
    {{ $slot }}
</div>
