@extends('web.layouts.master')

@push('styles')
    <link href="{{ url('vendor/css/slider.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="{{ asset('css/components/faq.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/components/landing.css') }}" rel="stylesheet" type="text/css" />
@endpush


@section('section')
    <div class="landing-vh d-flex flex-column flex-column-fluid justify-content-center align-items-center">
        <div class="container-fluid px-0">
            <div class="row g-0 justify-content-center">
                <div class="col-12 col-xl-8">
                    <!-- Main Content -->
                    <div class="text-center position-relative py-5">
                        <!-- Islamic Pattern Background -->
                        <div class="pattern-overlay"></div>

                        <!-- Decorative Border -->
                        <div class="islamic-border">
                            <!-- Corner Ornaments -->
                            <div class="corner-ornament top-left"></div>
                            <div class="corner-ornament top-right"></div>
                            <div class="corner-ornament bottom-left"></div>
                            <div class="corner-ornament bottom-right"></div>

                            <!-- Primary Heading -->
                            <div class="mb-5 position-relative">
                                <div class="ayah-wrapper">
                                    <!-- Side Decorations -->
                                    <div class="side-decoration left">
                                        <div class="decoration-line"></div>
                                        <div class="decoration-dot"></div>
                                        <div class="decoration-line"></div>
                                    </div>
                                    <div class="side-decoration right">
                                        <div class="decoration-line"></div>
                                        <div class="decoration-dot"></div>
                                        <div class="decoration-line"></div>
                                    </div>

                                    <h1 class="display-2 mb-4 reveal-text" style="color: var(--gold);">
                                        <span class="huge-font fw-bold main-text">
                                            وَاتَّقُوا اللَّهَ لَعَلَّكُمْ تُفْلِحُونَ
                                        </span>
                                    </h1>
                                </div>
                            </div>

                            <!-- Enhanced Separator -->
                            <div class="separator-container">
                                <div class="line shine-effect"></div>
                                <div class="ornament-container">
                                    <div class="ornament-outer"></div>
                                    <div class="ornament-inner">
                                        <span class="dot"></span>
                                    </div>
                                </div>
                                <div class="line shine-effect"></div>
                            </div>

                            <!-- Secondary Text -->
                            <div class="secondary-text-container fade-in-up">
                                <p class="lead mb-0" style="color: var(--text);">
                                    <span class="big-font fw-normal">
                                        لا نجاة إلا بالإعتصام بالقرآن والسنة بفهم سلف الأمة
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('web.landing.components.books')
    @include('web.landing.components.personalities')
    @include('web.landing.components.youtube')
    @include('web.landing.components.aboutUs')
    @include('web.landing.components.faq')
    @include('web.landing.components.contact')
@endsection


@push('scripts')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/web/slider.js') }}"></script>
@endpush
