@props(['rate' => null])

<?php
$style = '';

if (!is_null($rate)) {
    switch ($rate) {
        case '10':
            $style = 'ruby-luxurious';
            break;
        case '9':
            $style = 'silver-luxurious';
            break;
        case '8':
        case '7':
            $style = 'bg-success text-success';
            break;
        case '6':
        case '5':
            $style = 'bg-warning text-warning';
            break;
        default:
            $style = 'bg-danger text-danger';
            break;
    }
}
?>

<style>
    .ruby-luxurious {
        background: linear-gradient(135deg, var(--gold-color) 0%, #FFA500 100%) !important;
        position: relative;
        color: #000 !important;
        font-weight: bolder;
        overflow: hidden;
        box-shadow: 0 10px 20px rgba(255, 215, 0, 0.3);
        transition: all 0.3s ease-in-out;
        border: 1px solid rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(5px);
        transform-style: preserve-3d;
        perspective: 1000px;
    }

    .silver-luxurious {
        background-color: #0d6efd !important;
        position: relative;
        color: #000 !important;
        font-weight: bolder;
        overflow: hidden;
        box-shadow: 0 10px 20px rgba(192, 192, 192, 0.3);
        background: linear-gradient(135deg, #0d6efd 0%, #0d6efd 100%) !important;
        transition: all 0.3s ease-in-out;
    }

    .rate-shine {
        position: absolute;
        top: 0;
        width: 150%;
        height: 100%;
        transition: 0.5s;
        background: linear-gradient(90deg,
                transparent 0%,
                rgba(255, 255, 255, 0.4) 50%,
                transparent 100%);
        animation: rateShine 3s infinite cubic-bezier(0.4, 0, 0.2, 1);
        transform: skewX(-20deg);
    }

    .ruby-sparkle {
        position: absolute;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle at 30% 30%,
            rgba(255,255,255,0.5) 0%,
            transparent 25%);
        animation: rubySparkle 4s infinite ease-in-out;
        pointer-events: none;
    }

    .ruby-glow {
        position: absolute;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle at center,
            rgba(224, 17, 95, 0.5) 0%,
            transparent 70%);
        filter: blur(10px);
        animation: rubyGlow 5s infinite alternate;
    }

    @keyframes rateShine {
        0% {
            left: -150%;
            opacity: 0;
        }
        10% {
            opacity: 1;
        }
        90% {
            opacity: 1;
        }
        100% {
            left: 100%;
            opacity: 0;
        }
    }

    @keyframes rubySparkle {
        0%, 100% {
            opacity: 0;
            transform: scale(0.5) rotate(0deg);
        }
        30%, 70% {
            opacity: 1;
            transform: scale(1) rotate(180deg);
        }
    }

    @keyframes rubyRotate {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }

    @keyframes facetShimmer {
        0%, 100% {
            opacity: 0.3;
            transform: skewX(-20deg) translateX(-100%);
        }
        50% {
            opacity: 0.6;
            transform: skewX(-20deg) translateX(100%);
        }
    }

    @keyframes depthShift {
        0% {
            background-position: 0 0;
        }
        100% {
            background-position: 50px 50px;
        }
    }

    @keyframes rubyGlow {
        0%, 100% {
            opacity: 0.5;
            transform: scale(1);
        }
        50% {
            opacity: 0.8;
            transform: scale(1.1);
        }
    }
</style>

<div
    {{ $attributes->merge([
        'class' => trim(
            ($class ?? '') .
                'rate fw-bold py-2 px-3 bg-primary bg-opacity-10 rounded-2 text-primary fs-8 fw-bolder' .
                ' ' .
                $style,
        ),
    ]) }}>
    <div class="{{ ($style == 'ruby-luxurious' || $style == 'silver-luxurious') ? 'rate-shine' : 'hidden'}}"></div>
    @if($style == 'ruby-luxurious')
        <div class="ruby-depth"></div>
        <div class="ruby-facet"></div>
        <div class="ruby-sparkle"></div>
        <div class="ruby-glow"></div>
    @endif
    10 / {{ $rate }}
</div>
