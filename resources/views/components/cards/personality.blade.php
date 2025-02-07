@props(['data', 'isSwiper' => false])

<div class="card shadow">
    <div class="card-body p-3 border-0">
        <div class="row g-4">

            {{-- ? personality Image --}}
            <div class="col-md-6 col-lg-12 col-xl-6">
                <div class="d-flex align-items-center justify-content-center w-100 py-2 py-md-0 py-lg-2 py-xl-0 bg-light rounded-3 h-100">
                    <img class="w-50 w-md-100 {{ $isSwiper ? 'w-lg-25 ' : 'w-lg-50 ' }} w-xl-100 h-100 rounded-3" src="{{ asset($data['media'][0]->getUrl()) ?? asset('vendor/img/logo/3.jpg') }}" alt="صورة الكتاب"
                    style="object-fit: cover">
                </div>
            </div>

            <div class="col-md-6 col-lg-12 col-xl-6 d-flex flex-column justify-content-between">
                <div class="personality_header d-flex justify-content-between align-items-start">
                    {{-- ? personality Name --}}
                    <div class="personality_name">
                        <span class="text-info fw-semibold fs-8">
                            الإسم
                        </span>
                        <h2 class="mt-1 fs-1 fw-bolder">{{ $data['nickname'] }}</h2>
                    </div>

                    {{-- ? personality Category --}}
                    <x-box.category>الحديث</x-box.category>
                </div>

                {{-- ? personality Owner --}}
                <x-box.highlight class="w-100" text="الكاتب" :data="$data['isRecomanded']" />

                {{-- ? personality Description --}}
                <div class="description mt-3">
                    <p class="fs-7 text-gray lh-lg" style="text-align: justify">{{ Str::words($data['biography'], 20) }}</p>
                </div>

                {{-- ? personality Info --}}
                <div class="d-flex align-items-center justify-content-between gap-3">
                    <x-box.highlight class="w-50" text="تاريخ الولادة:" :data="$data['birth_date']" />

                    <x-box.highlight class="w-50" text="تاريخ الوفاة:" :data="$data['death_date']" />
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
