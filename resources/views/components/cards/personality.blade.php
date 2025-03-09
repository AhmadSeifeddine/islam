@props(['data', 'isSwiper' => false])

<?php
    $isHavePersPhoto = $data['birth_date'] < 1000 ? 'px-2' : 'h-100';
?>

<div class="card shadow">
    <div class="card-body p-3 border-0">
        <div class="row g-6">

            {{-- ? personality Image --}}
            <div class="col-md-6 col-lg-12 col-xl-6">
                <div
                    class="d-flex align-items-center justify-content-center w-100 py-2 py-md-0 py-lg-2 py-xl-0 bg-light rounded-3 h-100">
                    @if ($data['isRecomanded'] < 5)
                        <div
                            class="position-relative w-50 w-md-100 {{ $isSwiper ? 'w-lg-25 ' : 'w-lg-50 ' }} w-xl-100 h-100">
                <div class="d-flex align-items-center justify-content-center w-100 py-2 py-md-0 py-lg-2 py-xl-0 bg-light rounded-3 h-100">
                    @if($data['isRecomanded'] < 5)
                        <div class="position-relative w-50 w-md-100 {{ $isSwiper ? 'w-lg-25 ' : 'w-lg-50 ' }} w-xl-100 {{ $isHavePersPhoto }}">
                            {{-- Base image with stronger grayscale --}}
                            <img class="w-100 h-100 rounded-3" src="{{ $data['image'] }}" alt="صورة الشخصية"
                                style="object-fit: cover; filter: grayscale(100%) brightness(0.8);">

                            {{-- Red warning overlay --}}
                            <div class="position-absolute top-0 start-0 w-100 h-100 rounded-3"
                                style="background: linear-gradient(135deg, rgba(255,0,0,0.3) 0%, rgba(255,0,0,0.1) 100%);">
                            </div>

                            {{-- Warning icon --}}
                            <div class="position-absolute top-0 end-0 p-2">
                                <i class="fas fa-exclamation-triangle text-danger"
                                    style="font-size: 1.5rem; filter: drop-shadow(2px 2px 2px rgba(0,0,0,0.5));"></i>
                            </div>

                            {{-- Warning text banner --}}
                            <div class="position-absolute bottom-0 start-0 w-100 text-center p-2"
                                style="background: rgba(220, 53, 69, 0.9); color: white; font-weight: bold; border-bottom-left-radius: 0.3rem; border-bottom-right-radius: 0.3rem;">
                                <small>لا ننصح به</small>
                            </div>
                        </div>

                    @else
                        <img class="w-50 w-md-100 {{ $isSwiper ? 'w-lg-25 ' : 'w-lg-50 ' }} w-xl-100 h-100 rounded-3"
                            src="{{ $data['image'] }}" alt="صورة الشخصية" style="object-fit: cover">
                        <img class="w-50 w-md-100 {{ $isSwiper ? 'w-lg-25 ' : 'w-lg-50 ' }} w-xl-100 rounded-3 {{ $isHavePersPhoto }}"
                            src="{{ asset('vendor/img/logo/othman.png') }}"
                            alt="صورة الشخصية"
                            style="object-fit: cover">
                    @endif
                </div>
            </div>

            <div class="col-md-6 col-lg-12 col-xl-6 d-flex flex-column justify-content-between">
                <div class="personality_header d-flex justify-content-between align-items-start">
                    {{-- ? personality Name --}}
                    <div class="personality_name">
                        <span class="text-info fw-semibold fs-8">
                            الإسم
                        </span>
                        <h2 class="mt-2 fs-1 fw-bolder">{{ $data['nickname'] }}</h2>
                    </div>

                    {{-- ? personality rate --}}
                    <x-box.rate :rate="$data['isRecomanded']" />

                </div>

                {{-- ? personality nationality --}}
                <x-box.highlight class="w-100 mt-3" text="مكان الولادة" :data="$data['nationality']" />

                {{-- ? personality Description --}}
                <div class="description mt-3">
                    <p class="fs-7 text-gray lh-lg" style="text-align: justify">
                        {{ Str::limit($data['biography'], 200) }}
                    </p>
                </div>

                {{-- ? personality Info --}}
                <div class="d-flex align-items-center justify-content-between gap-3">
                    <x-box.highlight class="w-50" text="تاريخ الولادة:" :rate="$data['isRecomanded']" :data="$data['birth_date'] ?? 'غير معروف'" />
                    <x-box.highlight class="w-50" text="تاريخ الوفاة:" :rate="$data['isRecomanded']" :data="$data['death_date'] ?? 'على قيد الحياة'" />
                </div>

                {{-- ? personality Actions --}}
                <div class="d-flex justify-content-between mt-4 gap-3">
                    <x-button href="{{ route('personalityProfile', $data['id']) }}">عرض الشخصية</x-button>

                    <div class="d-flex gap-3 gap-xl-1">
                        <x-box.action />
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
