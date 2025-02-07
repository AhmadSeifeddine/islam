@props(['data', 'text' =>''])

<?php
    if ($text == 'birthDate') {
        # code...
    }
?>

<div {{ $attributes->merge([
    'class' => trim(
        ($class ?? '') .
            'bg-success bg-opacity-10 d-flex flex-column py-2 px-3 rounded-3 border-start border-3 border-success',
    ),
]) }}>
    <span class="text-success fs-8 fw-semibold">{{ $text }}</span>
    <span class="fw-bold {{ $text == "الكاتب" ? 'fs-5' : 'fs-7' }}">{{ $data }}</span>
</div>
