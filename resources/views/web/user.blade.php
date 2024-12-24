@extends('web.layout.master')

@push('styles')
    <link href="{{ url('vendor/css/slider.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endpush


@section('section')
    <div class="landing-vh d-flex flex-column flex-column-fluid justify-content-center align-items-center">
        @include('web.components.landing')
    </div>

    @include('web.components.books')
    @include('web.components.personalities')
    @include('web.components.youtube')
    @include('web.components.aboutUs')
    @include('web.components.faq')
    @include('web.components.contact')
@endsection


@push('scripts')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/web/slider.js') }}"></script>
@endpush
