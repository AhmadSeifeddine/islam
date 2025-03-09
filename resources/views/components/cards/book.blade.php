@props(['data', 'isSwiper' => false])

<div class="card shadow">
    <div class="card-body p-3 border-0">
        <div class="row g-6">

            {{-- ? Book Image --}}
            <div class="col-md-6 col-lg-12 col-xl-6">
                <div class="d-flex align-items-center justify-content-center w-100 py-2 py-md-0 py-lg-2 py-xl-0 bg-light rounded-3">
                    <img class="w-50 w-md-100 {{ $isSwiper ? 'w-lg-25 ' : 'w-lg-50 ' }} w-xl-100 rounded-3" src="{{ asset('vendor/img/logo/1.jpg') }}" alt="صورة الكتاب">
                </div>
            </div>

            <div class="col-md-6 col-lg-12 col-xl-6 d-flex flex-column justify-content-between">
                <div class="book_header d-flex justify-content-between align-items-start">
                    {{-- ? Book Name --}}
                    <div class="book_name">
                        <span class="text-info fw-semibold fs-8">
                            الإسم
                        </span>
                        <h2 class="fs-1 fw-bolder">{{ $data['name'] }}</h2>
                    </div>

                    {{-- ? Book Category --}}
                    <x-box.category>الحديث</x-box.category>
                </div>

                {{-- ? Book Owner --}}
                <x-box.highlight class="w-100" text="الكاتب" :data="$data['scholar']['name']" />

                {{-- ? Book Description --}}
                <div class="description mt-3">
                    <p class="fs-7 text-gray lh-lg" style="text-align: justify">{{ Str::limit($data['description'], 150) }}</p>
                </div>

                {{-- ? Book Info --}}
                <div class="d-flex align-items-center justify-content-between gap-3">
                    <x-box.highlight class="w-50" text="تاريخ النشر:" :data="$dateFormat($data['created_at'])" />

                    <x-box.highlight class="w-50" text="عدد الصفحات:" :data="$data['page_number']" />
                </div>

                {{-- ? Book Actions --}}
                <div class="d-flex justify-content-between mt-4 gap-3">
                    <x-button href="{{ route('BookShow', $data['id']) }}">عرض الكتاب</x-button>

                    <div class="d-flex gap-3 gap-xl-1">
                        <x-box.action />
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
