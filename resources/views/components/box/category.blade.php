{{-- @props(['rate' => null]) --}}

<?php
//     $style = "";

//     if (!is_null($rate)) {
//     switch ($rate) {

//         case '10':
//         $style = "luxurious";
//         break;

//         case '9':
//         case '8':
//         case '7':
//             $style = "bg-success text-success";
//             break;

//         case '6':
//         case '5':
//             $style = "bg-warning text-warning";
//             break;

//         default:
//             $style = "bg-danger text-danger";
//             break;
//     }
// }

?>

<div
{{ $attributes->merge([
    'class' => trim(
        ($class ?? '') .
            'category fw-bold py-2 px-3 bg-primary bg-opacity-10 rounded-2 text-primary fs-8 fw-bolder' . ' '
    ),
]) }}>
  {{ $slot }}
</div>
