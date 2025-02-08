@props(['data', 'text' => '', 'rate' => null])

<?php
    $style = 'bg-opacity-75 border-info text-info';

    if ($text === 'تاريخ الوفاة:' || $text === 'تاريخ الولادة:') {
        if ($text === 'تاريخ الولادة:') {
            if ($rate > 4) {
                $style = 'bg-success bg-opacity-10 border-success text-success';
            } else {
                $style = 'bg-danger bg-opacity-10 border-danger text-danger';
            }
        } elseif ($text === 'تاريخ الوفاة:') {
            if ($rate > 4) {
                if ($data == 'على قيد الحياة')   {
                    $style = 'bg-primary bg-opacity-10 border-primary text-primary';
                } else {
                    $style = 'bg-danger bg-opacity-10 border-danger text-danger';
                }
            } else {
                if ($data == 'على قيد الحياة')   {
                    $style = 'bg-danger bg-opacity-10 border-danger text-danger';
                } else {
                    $style = 'bg-success bg-opacity-10 border-success text-success';
                }
            }
        }
    }
?>

<div {{ $attributes->merge([
    'class' => trim(($class ?? '') . 'bg-light d-flex flex-column py-2 px-3 rounded-3 border-start fw-bold border-3' . ' ' . $style),
]) }}>
    <span class="fs-8 fw-semibold">{{ $text }}</span>
    <span class="theme-dark-show fw-bolder mt-1 text-white {{ $text === 'الكاتب' ? 'fs-5' : 'fs-7' }}">{{ $data }}</span>
    <span class="theme-light-show fw-bolder mt-1 text-dark {{ $text === 'الكاتب' ? 'fs-5' : 'fs-7' }}">{{ $data }}</span>
</div>
