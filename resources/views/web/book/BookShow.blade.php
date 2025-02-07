@extends('web.layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/components/bookShow.css', true) }}">
@endpush


@section('section')
    <!-- bookShow Container -->
    <div class="container" dir="rtl">
        <!-- bookShow Card -->
        <div class="">
            <div class="card p-3 shadow border-0">
                <div class="row g-4">
                    {{-- ? Book Image --}}
                    <div class="col-12 col-xl-4">
                        <div
                            class="d-flex align-items-center justify-content-center w-100 py-2 py-xl-0 bg-light rounded-3">
                            <img class="w-50 w-md-25 w-xl-100 rounded-3" src="{{ asset('vendor/img/logo/1.jpg') }}"
                                alt="صورة الكتاب">
                        </div>
                    </div>

                    <div class="col-12 col-xl-8 d-flex flex-column justify-content-between gap-5">
                        <div class="d-flex align-items-start justify-content-between flex-wrap gap-4">
                            {{-- ? Book Name --}}
                            <div class="book_name">
                                <span class="p-0 m-0 text-info fs-8">المصنَّف:</span>
                                <h1 class="display-5 fw-bolder">
                                    {{ $book[0]['name'] }}
                                </h1>
                            </div>

                            {{-- ? Book Category --}}
                            <div class="book_category py-2 px-3 fw-bold bg-primary bg-opacity-10 rounded-2 text-primary fs-8">
                                الحديث
                            </div>
                        </div>

                        <div class="row g-3">
                            {{-- ? Book Owner --}}
                            <div class="col-12 col-md-5">
                                <div class="d-flex flex-column gap-1 bg-light rounded-3 py-3 px-4 border">
                                    <span class="text-primary fw-bold">المصنِّف:</span>
                                    <span class="fw-bolder fs-5">{{ $book[0]['scholar']['name'] }}</span>
                                </div>
                            </div>

                            {{-- ? Book Info --}}
                            <div class="col-12 col-md-7">
                                <div class="row g-3 g-md-2">
                                    <div class="col-12 col-md-4">
                                        <div
                                            class="bg-primary bg-opacity-10 rounded-3 py-3 px-4 h-100 border-start border-3 border-primary w-100">
                                            <div class="text-primary fw-semibold mb-2">
                                                عدد الصفحات:
                                            </div>
                                            <div class="fw-bold">1329</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div
                                            class="bg-primary bg-opacity-10 rounded-3 py-3 px-4 h-100 border-start border-3 border-primary w-100">
                                            <div class="text-primary fw-semibold mb-2">
                                                القرآءات:
                                            </div>
                                            <div class="fw-bold">2459</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div
                                            class="bg-primary bg-opacity-10 rounded-3 py-3 px-4 h-100 border-start border-3 border-primary w-100">
                                            <div class="text-primary fw-semibold mb-2">
                                                التنزيلات:
                                            </div>
                                            <div class="fw-bold">1529</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- ? Book Description --}}
                        <div
                            class="book_description p-4 bg-warning bg-opacity-10 rounded-3 d-flex flex-column justify-content-between gap-1 h-100">
                            <p class="d-flex align-items-center gap-3">
                                <svg width="22" style="enable-background:new 0 0 128 128;" version="1.1"
                                    viewBox="0 0 128 128" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" style="fill: var(--gold);">
                                    <g>
                                        <path
                                            d="M64,1C29.3,1,1,29.3,1,64s28.3,63,63,63s63-28.3,63-63S98.7,1,64,1z M64,119C33.7,119,9,94.3,9,64S33.7,9,64,9   s55,24.7,55,55S94.3,119,64,119z"
                                            style="fill: var(--gold);" />
                                        <rect height="40" width="10" x="60" y="54.5" style="fill: var(--gold);" />
                                        <rect height="8" width="10" x="60" y="35.5" style="fill: var(--gold);" />
                                    </g>
                                </svg>
                                <span class="fw-bold fs-2 m-0 p-0"> معلومات عن الكتاب : </span>
                            </p>
                            <p class="fs-5 lh-lg" style="text-align: justify">
                                صحيح البخاري هو أحد أهم كتب الحديث النبوي وأصحها، جمعه الإمام محمد بن
                                إسماعيل
                                البخاري ويضم أحاديث صحيحة مرتبة وفق الموضوعات الفقهية. يُعد مرجعًا رئيسيًا
                                في
                                السنة النبوية بعد القرآن الكريم.
                                صحيح البخاري هو أحد أهم كتب الحديث النبوي وأصحها، جمعه الإمام محمد بن
                                إسماعيل
                                البخاري ويضم أحاديث صحيحة مرتبة وفق الموضوعات الفقهية. يُعد مرجعًا رئيسيًا
                                في
                                السنة النبوية بعد القرآن الكريم.
                                صحيح البخاري هو أحد أهم كتب الحديث النبوي وأصحها، جمعه الإمام محمد بن
                                إسماعيل
                                البخاري ويضم أحاديث صحيحة مرتبة وفق الموضوعات الفقهية. يُعد مرجعًا رئيسيًا
                                في

                                {{-- {{ $book[0]['decription'] }} --}}
                            </p>
                        </div>

                        {{-- ? Book Actions --}}
                        <div class="row g-3">
                            <div class="col-12 col-md-6 col-lg-5 fade-in">
                                <a href="">
                                    <button
                                        class="category-wrapper d-flex align-items-center justify-content-center flex-column gap-3 w-100 h-100 py-2 rounded-3">
                                        <div class="card-shine"></div>
                                        <div
                                            class="main-icon-wrapper w-45px h-45px d-flex align-items-center justify-content-center">
                                            <i class="bi bi-book fs-2" style="color: var(--gold)"></i>
                                            <div class="icon-ring"></div>
                                        </div>
                                        <h1 class="gold">قرآءة</h1>
                                    </button>
                                </a>
                            </div>
                            <div class="col-12 col-md-6 col-lg-5 fade-in">
                                <button
                                    class="category-wrapper d-flex align-items-center justify-content-center flex-column gap-3 w-100 h-100 py-2 rounded-3">
                                    <div class="card-shine"></div>
                                    <div
                                        class="main-icon-wrapper w-45px h-45px d-flex align-items-center justify-content-center">
                                        <i class="bi bi-download fs-2" style="color: var(--gold)"></i>
                                        <div class="icon-ring"></div>
                                    </div>
                                    <h1 class="gold">تحميل</h1>
                                </button>
                            </div>

                            <div
                                class="col-12 col-lg-2 d-flex flex-lg-column justify-content-between justify-content-lg-center align-items-center gap-4">
                                <div class="d-flex flex-wrap gap-3 gap-lg-1 justify-content-between w-lg-100">
                                    <button class="btn btn-light py-3 px-4 py-lg-2 px-lg-3 action-btn rounded-3 border"
                                        data-action="readLater" style="width: fit-content; height: fit-content;"
                                        data-bs-toggle="tooltip" title="قراءة لاحقاً">
                                        <i class="fas fa-bookmark fs-6" style="padding: 0px"></i>
                                    </button>

                                    <button class="btn btn-light py-3 px-4 py-lg-2 px-lg-3 action-btn rounded-3 border"
                                        data-action="favorite" style="width: fit-content; height: fit-content;"
                                        data-bs-toggle="tooltip" title="إضافة للمفضلة">
                                        <i class="fas fa-heart fs-6" style="padding: 0px"></i>
                                    </button>

                                    <button class="btn btn-light py-3 px-4 py-lg-2 px-lg-3 action-btn rounded-3 border"
                                        data-action="collection" style="width: fit-content; height: fit-content;"
                                        data-bs-toggle="tooltip" title="إضافة إلى مجموعة" data-bs-toggle="modal"
                                        data-bs-target="#collectionModal">
                                        <i class="fas fa-folder-plus fs-6" style="padding: 0px"></i>
                                    </button>
                                </div>
                                <div
                                    class="d-flex flex-column align-items-center gap-1 bg-light py-1 px-3 border rounded-3 text-muted fs-8 w-lg-100">
                                    <span>تاريخ النشر:</span>
                                    <span class="fw-bolder">22 رمضان 1447</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
@endpush
