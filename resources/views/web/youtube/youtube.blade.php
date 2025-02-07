@extends('web.layouts.master')

@push('styles')
@endpush


@section('section')
    <div class="container" dir="rtl">
        <x-title title="فيديوهات" coloredTitle="مختارة"
            subTitle="كتشف مجموعة متميزة من المحاضرات والدروس الإسلامية من علماء ودعاة موثوقين" />

        <!-- Youtube Grid -->
        <div class="row g-6 mb-5">
            <!-- Youtube Card Template (repeated for each Youtube) -->
            @foreach ($data as $item)
                <div class="col-lg-6 col-md-12">
                    <x-cards.youtube :data="$item" />
                </div>
            @endforeach
        </div>
    </div>
@endsection


@push('scripts')
@endpush
