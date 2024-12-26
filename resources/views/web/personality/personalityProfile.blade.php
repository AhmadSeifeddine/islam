@extends('web.layout.master')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/components/personalityProfile.css') }}">
@endpush


@section('section')


@include('web.personality.components.personalityProfile')
@endsection


@push('scripts')

@endpush
