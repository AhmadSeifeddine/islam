@extends('web.layout.master')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/components/personalityCategory.css') }}">
@endpush


@section('section')


    @include('web.personality.components.personalityCategory')
@endsection


@push('scripts')
<script src="{{ asset('js/web/personalityCategory.js') }}"></script>
@endpush
