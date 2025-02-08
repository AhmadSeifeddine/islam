@props(['rate' => null])

<?php
    $style = "";

    if (!is_null($rate)) {
    switch ($rate) {

        case '10':
        $style = "bg-warning text-dark luxurious";
        break;

        case '9':
        case '8':
        case '7':
            $style = "bg-success text-success";
            break;

        case '6':
        case '5':
            $style = "bg-warning text-warning";
            break;

        default:
            $style = "bg-danger text-danger";
            break;
    }
}

?>

<style>
    .bg-gold {
        background-color: #ffd700;
    }
    .text-gold {
        color: #ffd700;
    }
    .luxurious {
        font-weight: bold;
        border: 2px solid #ffd700;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
        background: linear-gradient(135deg, #ffd700 0%, #ffecb3 100%);
        border-radius: 12px;
        padding: 12px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .luxurious:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2), 0 4px 6px rgba(0, 0, 0, 0.1);
    }
</style>

<div
{{ $attributes->merge([
    'class' => trim(
        ($class ?? '') .
            'category fw-bold py-2 px-3 bg-primary bg-opacity-10 rounded-2 text-primary fs-8 fw-bolder' . ' ' . $style
    ),
]) }}>
 10 / {{ $rate }}
</div>
