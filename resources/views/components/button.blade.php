<style>
    .btn-bg-logo {
        background: linear-gradient(135deg, var(--gold-color) 0%, #FFA500 100%) !important;
        color: #000;
        text-decoration: none !important;
        border-radius: 10px;
        text-transform: uppercase;
        box-shadow: 0 10px 20px rgba(255, 215, 0, 0.3);
        transition: all 0.5s ease-in-out;
        position: relative;
        font-weight: bolder;
        overflow: hidden;
        transform: translateY(0);
        border: 0 !important;
        width: auto;
        min-width: 100px;
        font-size: clamp(0.875rem, 2vw, 1rem);
        line-height: 1.5;
        white-space: nowrap;
        cursor: pointer;
    }

    .btn-bg-logo:before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: all 0.5s ease-in-out;
    }

    .btn-bg-logo:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 25px rgba(255, 215, 0, 0.4);
        border-color: rgba(255, 215, 0, 0.5);
        transition: transform 0.3s ease-in-out;
    }

    .btn-bg-logo:hover:before {
        left: 100%;
    }

    .btn-bg-logo:active {
        transform: translateY(1px);
        box-shadow: 0 5px 15px rgba(255, 215, 0, 0.2);
    }

    /* ========== @Media ========== */
    @media (hover: none) {
        .btn-bg-logo:hover {
            transform: none;
            box-shadow: 0 10px 20px rgba(255, 215, 0, 0.3);
        }
    }

</style>

<a
{{ $attributes->merge([
    'class' => trim(($class ?? '') . 'btn-bg-logo d-flex align-items-center justify-content-center px-5 py-3'),
]) }}>
    {{ $slot }}
</a>
