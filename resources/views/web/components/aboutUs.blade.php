<style>
    .about_us,
    .who_are_we {
        position: relative;
        transition: all 0.3s;
    }

    .about_us svg,
    .who_are_we svg {
        transition: all 0.3s ease-in-out;
    }

    .about_us:hover svg,
    .who_are_we:hover svg {
        transform: translateX(-8px);
    }

    [data-bs-theme="dark"] .about_us:hover,
    [data-bs-theme="dark"] .who_are_we:hover {
        background-color: hsl(0, 0%, 10%);
    }

    [data-bs-theme="light"] .about_us:hover,
    [data-bs-theme="light"] .who_are_we:hover {
        background-color: hsl(0, 0%, 90%);
    }

    .absolute_border {
        position: absolute;
        top: 0;
        left: 0;
        border-top: 5px solid var(--gold);
        border-left: 5px solid var(--gold);
        border-top-left-radius: 1px;
    }

    .about_us h3,
    .who_are_we h3 {
        font-size: 3rem;
        color: var(--gold);
        fill: var(--gold);
    }

    .about_us p,
    .who_are_we p {
        letter-spacing: 0.5px;
        text-align: justify;
    }

    @media (max-width: 991px) {
        .about_us svg,
        .who_are_we svg {
            transition: all 0.3s ease-in-out;
            animation: svgTransform 1.2s infinite alternate;
        }

        @keyframes svgTransform {
            from {
                transform: translateX(0px);
            }

            to {
                transform: translateX(-8px);
            }
        }
    }

    /* .calligraphy-path {
        animation: draw 3s infinite alternate;
    }

    .arabic-text {
        animation: fade 2s infinite alternate;
    }

    @keyframes draw {
        from {
            stroke-dasharray: 0 1000;
        }

        to {
            stroke-dasharray: 1000 0;
        }
    }

    @keyframes fade {
        from {
            opacity: 0.5;
        }

        to {
            opacity: 1;
        }
    } */

</style>

<section class="about_us_section mb-20 pb-10">
    <div class="container blur_bg_color d-flex align-items-center flex-wrap flex-lg-nowrap gap-10">
        <div class="about_us p-5 rounded-3">
            <h3 class="pb-5">
                <svg width="30" height="30" style="enable-background:new 0 0 512 512;" version="1.1"
                    viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <polygon points="352,128.4 319.7,96 160,256 160,256 160,256 319.7,416 352,383.6 224.7,256 " />
                </svg>
                معلومات عنا
            </h3>
            <p class="fs-4 fw-semibold">مرحباً بك في عالم اللغة العربية الجميل! تعتبر اللغة العربية من أقدم وأغنى
                اللغات في العالم، حيث يتحدث بها
                أكثر من ٤٠٠ مليون شخص. تتميز هذه اللغة بجمال خطها وثراء مفرداتها وعمق معانيها، كما أنها لغة القرآن
                الكريم والتراث الإسلامي. على مر التاريخ، قدمت الحضارة العربية إسهامات عظيمة في مجالات العلوم
                والفلسفة
                والأدب والفنون، وما زالت هذه اللغة تلعب دوراً مهماً في الثقافة العالمية المعاصرة.
            </p>
            <div class="absolute_border w-50px h-50px"></div>
        </div>
        {{-- <div class="col-6 d-flex align-items-center justify-content-center">
                <svg width="300" height="300" viewBox="0 0 400 300">
                    <!-- Decorative Arabic Calligraphy Pattern -->
                    <path d="M50,150 C100,100 150,200 200,150 S250,100 300,150" fill="none" stroke="goldenrod"
                        stroke-width="3" class="calligraphy-path" />

                    <!-- Arabic Letter Decorations -->
                    <text x="150" y="150" font-family="Arial" font-size="40" fill="goldenrod" class="arabic-text">
                        ع
                    </text>
                </svg>
            </div>
            <div class="col-6 d-flex align-items-center justify-content-center">
                <svg width="300" height="300" viewBox="0 0 400 300">
                    <!-- Decorative Arabic Calligraphy Pattern -->
                    <path d="M50,150 C100,100 150,200 200,150 S250,100 300,150" fill="none" stroke="goldenrod"
                        stroke-width="3" class="calligraphy-path" />

                    <!-- Arabic Letter Decorations -->
                    <text x="150" y="150" font-family="Arial" font-size="40" fill="goldenrod" class="arabic-text">
                        ع
                    </text>
                </svg>
            </div> --}}
        <div class="who_are_we p-5 rounded-3">
            <h3 class="pb-5">
                <svg width="30" height="30" style="enable-background:new 0 0 512 512;" version="1.1"
                    viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <polygon points="352,128.4 319.7,96 160,256 160,256 160,256 319.7,416 352,383.6 224.7,256 " />
                </svg>
                من نحن
            </h3>
            <p class="fs-4 fw-semibold">مرحباً بك في عالم اللغة العربية الجميل! تعتبر اللغة العربية من أقدم وأغنى
                اللغات في العالم، حيث يتحدث بها
                أكثر من ٤٠٠ مليون شخص. تتميز هذه اللغة بجمال خطها وثراء مفرداتها وعمق معانيها، كما أنها لغة القرآن
                الكريم والتراث الإسلامي. على مر التاريخ، قدمت الحضارة العربية إسهامات عظيمة في مجالات العلوم
                والفلسفة
                والأدب والفنون، وما زالت هذه اللغة تلعب دوراً مهماً في الثقافة العالمية المعاصرة.
            </p>
            <div class="absolute_border w-50px h-50px"></div>
        </div>
    </div>
</section>
