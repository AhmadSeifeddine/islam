@extends('web.layout.master')

@push('styles')
    <style>
        .container {
            background: none !important;
        }
    </style>
@endpush


@section('section')
    @include('web.article.components.articlesList')
@endsection


@push('scripts')
@endpush
