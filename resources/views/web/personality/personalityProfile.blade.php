@extends('web.layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/components/personalityProfile.css') }}">

    <style>
        [data-bs-theme="dark"] .custom-tabs {
            border-bottom: 1px solid rgba(255, 255, 255, 0.12);
        }

        [data-bs-theme="light"] .custom-tabs {
            border-bottom: 1px solid rgba(0, 0, 0, 0.12);
        }

        .custom-tabs .nav-link {
            color: var(--text-secondary);
            border: 0;
            transition: all 0.3s ease;
        }

        .custom-tabs .nav-link:hover {
            color: var(--gold);
            background: rgba(255, 215, 0, 0.05);
        }

        .custom-tabs .nav-link.active {
            color: var(--gold);
            background: rgba(255, 215, 0, 0.1);
            border-bottom: 1px solid var(--gold);
        }
    </style>
@endpush


@section('section')
    <!-- Profile Container -->
    <div class="container py-20" dir="rtl">
        <!-- Profile Card -->
        <div class="mb-15">
            <div class="card p-4 shadow border-0">
                <div class="row g-5">
                    <div class="col-12 col-lg-4 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('vendor/img/logo/3.jpg') }}" alt="صورة الشخصية"
                            class="w-250px w-md-350px h-md-350px object-fit-cover rounded-circle">
                    </div>

                    <div class="col-12 col-lg-8">
                        <div class="row g-5">
                            <div class="col-12 d-flex flex-column justify-content-between gap-5">
                                <div class="person_header d-flex align-items-start justify-content-between flex-wrap gap-4">
                                    <div class="person_name">
                                        <span class="p-0 m-0 text-primary">الإسم:</span>
                                        <h1 class="display-5 fw-bold fw-light profile-name" style="letter-spacing: -1px;">
                                            يوسف القرضاوي
                                        </h1>
                                    </div>

                                    <div class="bg-danger bg-opacity-10 rounded-3 py-2 px-4 text-danger fs-6 fw-bolder">
                                        لا ننصح به
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4">
                                <div
                                    class="bg-info bg-opacity-5 rounded-3 py-3 px-4 h-100 border-start border-3 border-info">
                                    <div class="text-info fw-semibold mb-2">
                                        تاريخ الولادة:
                                    </div>
                                    <div class="fw-bold">1329هـ</div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4">
                                <div
                                    class="bg-info bg-opacity-5 rounded-3 py-3 px-4 h-100 border-start border-3 border-info">
                                    <div class="text-info fw-semibold mb-2">
                                        تاريخ الوفاة:
                                    </div>
                                    <div class="fw-bold">1419هـ</div>
                                </div>
                            </div>

                            <div class="col-12 col-md-4">
                                <div class="d-flex flex-column gap-1 bg-light rounded-3 py-3 px-4 border">
                                    <span class="text-primary fw-bold">الجنسية</span>
                                    <span class="fw-bolder fs-5">مصري</span>
                                </div>
                            </div>

                            <div class="col-12">
                                <div
                                    class="person_description p-4 bg-gradient bg-warning bg-opacity-15 rounded-3 d-flex flex-column justify-content-between gap-4 h-100">
                                    <p class="d-flex align-items-center gap-3">
                                        <svg width="22" style="enable-background:new 0 0 128 128;" version="1.1"
                                            viewBox="0 0 128 128" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" style="fill: var(--gold);">
                                            <g>
                                                <path
                                                    d="M64,1C29.3,1,1,29.3,1,64s28.3,63,63,63s63-28.3,63-63S98.7,1,64,1z M64,119C33.7,119,9,94.3,9,64S33.7,9,64,9   s55,24.7,55,55S94.3,119,64,119z"
                                                    style="fill: var(--gold);" />
                                                <rect height="40" width="10" x="60" y="54.5"
                                                    style="fill: var(--gold);" />
                                                <rect height="8" width="10" x="60" y="35.5"
                                                    style="fill: var(--gold);" />
                                            </g>
                                        </svg>
                                        <span class="fw-bold fs-2 m-0 p-0"> السيرة الذاتية: </span>
                                    </p>
                                    <p class="fs-4" style="text-align: justify">
                                        ومن لوازم هؤلاء أنهم يسرفون في التحريم ، فهم يحرمون بالأحاديث الضعيفة ، وإن كانوا
                                        يقوونها
                                        بكثرة الطرق، وهذا ليس حكما على إطلاقه أو تكون الأحاديث غير صريحة في الدلالة على
                                        التحريم
                                        ،
                                        فهم يستدلون بصريح غير صحيح ، أو بصحيح غير صريح . ولذا تراهم يكادون يُحَرِّمون على
                                        الناس
                                        كل
                                        شيء الذي يسميه الخليجيون (عكسا) وهو فعلا بمثابة انعكاس الصورة على المرآة . وعلى هذا
                                        الأساس
                                        حرموا استخدام التلفزيون ؛ لأنه يقوم على التصوير ، والتصوير كله حرام ، والسينما كلها
                                        حرام
                                        ،
                                        لأنها تقوم على التصوير . والغناء كله حرام ، ولا سيما إذا كان مع الآلات ، وخصوصا إذا
                                        كان
                                        المغني امرأة . وكشف المرأة وجهها حرام ، لأن وجهها عورة ، وتغطيته واجبة . ولا يكفي
                                        المسلمة أن
                                        تلبس الخمار الذي تغطي به رأسها وعنقها ونحرها . كما تفعل (المحجبات) في عصرنا . فهؤلاء
                                        المحجبات آثمات في نظر هؤلاء . ومن ذلك قولهم بتحريم حلق اللحية"
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabs Section -->
        <div class="nav nav-tabs custom-tabs gap-2 gap-md-4" id="contentTabs" role="tablist">
            <div class="nav-item" role="presentation">
                <button class="nav-link active px-6 px-md-10 py-4 fw-bolder" id="favorites-tab" data-bs-toggle="tab"
                    data-bs-target="#books" type="button" role="tab">الكتب</button>
            </div>
            <div class="nav-item" role="presentation">
                <button class="nav-link px-6 px-md-10 py-4 fw-bolder" id="readlater-tab" data-bs-toggle="tab"
                    data-bs-target="#videos" type="button" role="tab">فيديوهات</button>
            </div>
            <div class="nav-item" role="presentation">
                <button class="nav-link px-6 px-md-10 py-4 fw-bolder" id="collections-tab" data-bs-toggle="tab"
                    data-bs-target="#articles" type="button" role="tab">مقالات</button>
            </div>
            <div class="nav-item" role="presentation">
                <button class="nav-link px-6 px-md-10 py-4 fw-bolder" id="collections-tab" data-bs-toggle="tab"
                    data-bs-target="#quotes" type="button" role="tab">إقتباسات</button>
            </div>
        </div>

        <!-- Tabs Section -->
        <div class="tab-content pt-5 mt-2" id="contentTabsContent">
            <!-- books Tab -->
            <div class="tab-pane fade show active" id="books" role="tabpanel">
                <div class="d-flex align-items-center justify-content-between">
                    <div
                        class="d-flex align-items-center flex-wrap justify-content-center justify-content-lg-between gap-4">
                        <button
                            class="premium-btn bg-info text-info bg-opacity-10 rounded-3 py-3 px-4 text-center border-0">
                            الكل
                        </button>
                        <button
                            class="premium-btn bg-info text-info bg-opacity-10 rounded-3 py-3 px-4 text-center border-0">
                            عقيدة
                        </button>
                        <button
                            class="premium-btn bg-danger text-danger bg-opacity-10 rounded-3 py-3 px-4 text-center border-0">
                            حديث
                        </button>
                        <button
                            class="premium-btn bg-danger text-danger bg-opacity-10 rounded-3 py-3 px-4 text-center border-0">
                            فقه
                        </button>
                    </div>
                    <div class="box_search position-relative">
                        <div class="position-absolute h-100 px-3 d-flex align-items-center justify-content-center">
                            <i class="bi bi-search fs-4"></i>
                        </div>
                        <!--begin::Input-->
                        <input type="text"
                            class="search-input form-control form-control shadow border w-290px w-md-400px h-lg-45px pe-10"
                            name="search" value="" placeholder="البحث..." data-kt-search-element="input">
                        <!--end::Input-->
                    </div>
                </div>
                <div class="row g-5 mt-1">
                    <div class="col-12 col-lg-6">
                        <div class="card shadow border-0">
                            <div class="card-body p-5">
                                <div class="row g-5 align-items-stretch">
                                    <!-- Image Column -->
                                    <div class="col-sm-6 col-lg-5">
                                        <div class="position-relative h-100">
                                            <div class="card-rounded h-100" style="border-radius: 8px; overflow: hidden;">
                                                <img src="{{ asset('vendor/img/logo/2.webp') }}" alt="صورة الكتاب"
                                                    style="width: 100%; height: 100%; object-fit: cover;">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Content Column -->
                                    <div class="col-sm-6 col-lg-7">
                                        <div class="d-flex flex-column h-100">
                                            <!-- Header Section -->
                                            <div class="mb-5">
                                                <div class="mb-4">
                                                    <span class="text-primary fw-bold fs-7 d-block">
                                                        الإسم
                                                    </span>
                                                    <h2 class="display-6 fw-bolder mb-0">صحيح البخاري</h2>
                                                </div>

                                                <!-- Author Info -->
                                                <div class="bg-light bg-opacity-75 rounded-3 p-4 mt-4 border">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <span class="text-primary fs-8 fw-bold d-block">
                                                                الكاتب
                                                            </span>
                                                            <a href="#" class="text-decoration-none fs-6 fw-bold"
                                                                style="color: var(--text)">
                                                                محمد بن إسماعيل البخاري
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Book Description -->
                                            <div class="mb-5">
                                                <p class="text-gray fs-6 mb-4 lh-lg">
                                                    صحيح البخاري هو أحد أهم كتب الحديث النبوي وأصحها، جمعه الإمام محمد بن
                                                    إ��ماعيل
                                                    البخاري ويضم أحاديث صحيحة مرتبة وفق الموضوعات الفقهية. يُعد مرجعًا
                                                    رئيسيًا
                                                    في
                                                    السنة النبوية بعد القرآن الكريم.
                                                </p>

                                                <div class="row g-3">
                                                    <div class="col-6">
                                                        <div
                                                            class="bg-info bg-opacity-5 rounded-3 p-4 h-100 border-start border-3 border-info">
                                                            <div class="text-info fw-semibold mb-2">
                                                                تاريخ النشر:
                                                            </div>
                                                            <div class="fw-bold">6 فبراير 2021</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="bg-info bg-opacity-5 rounded-3 p-4 h-100 border-start border-3 border-info">
                                                            <div class="text-info fw-semibold mb-2">
                                                                عدد الصفحات:
                                                            </div>
                                                            <div class="fw-bold">7249</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Actions -->
                                            <div class="mt-auto d-flex justify-content-between align-items-center">
                                                <button class="btn-bg-logo">عرض الكتاب</button>

                                                <div class="d-flex gap-2">
                                                    <button class="btn btn-light action-btn p-3 rounded-3 border"
                                                        data-action="readLater" data-bs-toggle="tooltip"
                                                        title="قراءة لاحقاً">
                                                        <i class="fas fa-bookmark fs-5" style="padding: 0px"></i>
                                                    </button>

                                                    <button class="btn btn-light action-btn p-3 rounded-3 border"
                                                        data-action="favorite" data-bs-toggle="tooltip"
                                                        title="إضافة للمفضلة">
                                                        <i class="fas fa-heart fs-5" style="padding: 0px"></i>
                                                    </button>

                                                    <button class="btn btn-light action-btn p-3 rounded-3 border"
                                                        data-action="collection" data-bs-toggle="tooltip"
                                                        title="إضافة إلى مجموعة" data-bs-toggle="modal"
                                                        data-bs-target="#collectionModal">
                                                        <i class="fas fa-folder-plus fs-5" style="padding: 0px"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="card shadow border-0">
                            <div class="card-body p-5">
                                <div class="row g-5 align-items-stretch">
                                    <!-- Image Column -->
                                    <div class="col-sm-6 col-lg-5">
                                        <div class="position-relative h-100">
                                            <div class="card-rounded h-100" style="border-radius: 8px; overflow: hidden;">
                                                <img src="{{ asset('vendor/img/logo/2.webp') }}" alt="صورة الكتاب"
                                                    style="width: 100%; height: 100%; object-fit: cover;">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Content Column -->
                                    <div class="col-sm-6 col-lg-7">
                                        <div class="d-flex flex-column h-100">
                                            <!-- Header Section -->
                                            <div class="mb-5">
                                                <div class="mb-4">
                                                    <span class="text-primary fw-bold fs-7 d-block">
                                                        الإسم
                                                    </span>
                                                    <h2 class="display-6 fw-bolder mb-0">صحيح البخاري</h2>
                                                </div>

                                                <!-- Author Info -->
                                                <div class="bg-light bg-opacity-75 rounded-3 p-4 mt-4 border">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <span class="text-primary fs-8 fw-bold d-block">
                                                                الكاتب
                                                            </span>
                                                            <a href="#" class="text-decoration-none fs-6 fw-bold"
                                                                style="color: var(--text)">
                                                                محمد بن إسماعيل البخاري
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Book Description -->
                                            <div class="mb-5">
                                                <p class="text-gray fs-6 mb-4 lh-lg">
                                                    صحيح البخاري هو أحد أهم كتب الحديث النبوي وأصحها، جمعه الإمام محمد بن
                                                    إ��ماعيل
                                                    البخاري ويضم أحاديث صحيحة مرتبة وفق الموضوعات الفقهية. يُعد مرجعًا
                                                    رئيسيًا
                                                    في
                                                    السنة النبوية بعد القرآن الكريم.
                                                </p>

                                                <div class="row g-3">
                                                    <div class="col-6">
                                                        <div
                                                            class="bg-info bg-opacity-5 rounded-3 p-4 h-100 border-start border-3 border-info">
                                                            <div class="text-info fw-semibold mb-2">
                                                                تاريخ النشر:
                                                            </div>
                                                            <div class="fw-bold">6 فبراير 2021</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div
                                                            class="bg-info bg-opacity-5 rounded-3 p-4 h-100 border-start border-3 border-info">
                                                            <div class="text-info fw-semibold mb-2">
                                                                عدد الصفحات:
                                                            </div>
                                                            <div class="fw-bold">7249</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Actions -->
                                            <div class="mt-auto d-flex justify-content-between align-items-center">
                                                <button class="btn-bg-logo">عرض الكتاب</button>

                                                <div class="d-flex gap-2">
                                                    <button class="btn btn-light action-btn p-3 rounded-3 border"
                                                        data-action="readLater" data-bs-toggle="tooltip"
                                                        title="قراءة لاحقاً">
                                                        <i class="fas fa-bookmark fs-5" style="padding: 0px"></i>
                                                    </button>

                                                    <button class="btn btn-light action-btn p-3 rounded-3 border"
                                                        data-action="favorite" data-bs-toggle="tooltip"
                                                        title="إضافة للمفضلة">
                                                        <i class="fas fa-heart fs-5" style="padding: 0px"></i>
                                                    </button>

                                                    <button class="btn btn-light action-btn p-3 rounded-3 border"
                                                        data-action="collection" data-bs-toggle="tooltip"
                                                        title="إضافة إلى مجموعة" data-bs-toggle="modal"
                                                        data-bs-target="#collectionModal">
                                                        <i class="fas fa-folder-plus fs-5" style="padding: 0px"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- videos Tab -->
            <div class="tab-pane fade" id="videos" role="tabpanel">
                <div class="d-flex align-items-center justify-content-between">
                    <div
                        class="d-flex align-items-center flex-wrap justify-content-center justify-content-lg-between gap-4">
                        <button
                            class="premium-btn bg-info text-info bg-opacity-10 rounded-3 py-3 px-4 text-center border-0">
                            الكل
                        </button>
                        <button
                            class="premium-btn bg-info text-info bg-opacity-10 rounded-3 py-3 px-4 text-center border-0">
                            عقيدة
                        </button>
                        <button
                            class="premium-btn bg-danger text-danger bg-opacity-10 rounded-3 py-3 px-4 text-center border-0">
                            حديث
                        </button>
                        <button
                            class="premium-btn bg-danger text-danger bg-opacity-10 rounded-3 py-3 px-4 text-center border-0">
                            فقه
                        </button>
                    </div>
                    <div class="box_search position-relative">
                        <div class="position-absolute h-100 px-3 d-flex align-items-center justify-content-center">
                            <i class="bi bi-search fs-4"></i>
                        </div>
                        <!--begin::Input-->
                        <input type="text"
                            class="search-input form-control form-control border shadow w-290px w-md-400px h-lg-45px pe-10"
                            name="search" value="" placeholder="البحث..." data-kt-search-element="input">
                        <!--end::Input-->
                    </div>
                </div>
                <div class="row g-5 mt-1">
                    <!-- Card 1 -->
                    <div class="col-12 col-lg-6">
                        <div class="card shadow rounded-3 overflow-hidden h-100">
                            <!-- Video Container -->
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/Tac3WGxHvGg" title="تفسير سورة البقرة"
                                    allowfullscreen class="rounded-top"></iframe>
                            </div>

                            <!-- Content Section -->
                            <div class="card-body p-4">
                                <!-- Header Section -->
                                <div class="d-flex justify-content-between align-items-start mb-4">
                                    <div>
                                        <p class="text-muted mb-0">تم النشر: 15 رمضان 1445</p>
                                    </div>
                                </div>

                                <!-- Scholar Info -->
                                <div class="bg-light rounded-3 p-4 mb-4 border">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h5 class="fw-bold mb-1">الشيخ محمد بن شمس الدين</h5>
                                        </div>
                                    </div>
                                </div>


                                <div class="mt-5 d-flex justify-content-end align-items-center">
                                    <div class="d-flex gap-2 ms-0">
                                        <button class="btn btn-light action-btn p-3 rounded-3 border"
                                            data-action="readLater" data-bs-toggle="tooltip" title="قراءة لاحقاً">
                                            <i class="fas fa-bookmark fs-5" style="padding: 0px"></i>
                                        </button>
                                        <button class="btn btn-light action-btn p-3 rounded-3 border"
                                            data-action="favorite" data-bs-toggle="tooltip" title="إضافة للمفضلة">
                                            <i class="fas fa-heart fs-5" style="padding: 0px"></i>
                                        </button>
                                        <button class="btn btn-light action-btn p-3 rounded-3 border"
                                            data-action="collection" data-bs-toggle="tooltip" title="إضافة إلى مجموعة">
                                            <i class="fas fa-folder-plus fs-5" style="padding: 0px"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-12 col-lg-6">
                        <div class="card shadow rounded-3 overflow-hidden h-100">
                            <!-- Video Container -->
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/Tac3WGxHvGg" title="تفسير سورة البقرة"
                                    allowfullscreen class="rounded-top"></iframe>
                            </div>

                            <!-- Content Section -->
                            <div class="card-body p-4">
                                <!-- Header Section -->
                                <div class="d-flex justify-content-between align-items-start mb-4">
                                    <div>
                                        <p class="text-muted mb-0">تم النشر: 15 رمضان 1445</p>
                                    </div>
                                </div>

                                <!-- Scholar Info -->
                                <div class="bg-light rounded-3 p-4 mb-4 border">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h5 class="fw-bold mb-1">الشيخ محمد بن شمس الدين</h5>
                                        </div>
                                    </div>
                                </div>


                                <div class="mt-5 d-flex justify-content-end align-items-center">
                                    <div class="d-flex gap-2 ms-0">
                                        <button class="btn btn-light action-btn p-3 rounded-3 border"
                                            data-action="readLater" data-bs-toggle="tooltip" title="قراءة لاحقاً">
                                            <i class="fas fa-bookmark fs-5" style="padding: 0px"></i>
                                        </button>
                                        <button class="btn btn-light action-btn p-3 rounded-3 border"
                                            data-action="favorite" data-bs-toggle="tooltip" title="إضافة للمفضلة">
                                            <i class="fas fa-heart fs-5" style="padding: 0px"></i>
                                        </button>
                                        <button class="btn btn-light action-btn p-3 rounded-3 border"
                                            data-action="collection" data-bs-toggle="tooltip" title="إضافة إلى مجموعة">
                                            <i class="fas fa-folder-plus fs-5" style="padding: 0px"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- articles Tab -->
            <div class="tab-pane fade" id="articles" role="tabpanel">
                <div class="row g-5">
                    <div class="col-12">
                        <div class="card shadow border-0 quote-card p-4 text-white">
                            <div style="position: relative; z-index: 1;">
                                <i class="fas fa-quote-right mb-4 d-block"
                                    style="font-size: 2rem; color: var(--gold); opacity: 0.4;"></i>
                                <p class="text fs-4  mb-4" style="line-height: 1.6;">
                                    " ومن لوازم هؤلاء أنهم يسرفون في التحريم ، فهم يحرمون بالأحاديث الضعيفة ، وإن كانوا
                                    يقوونها
                                    بكثرة الطرق، وهذا ليس حكما على إطلاقه أو تكون الأحاديث غير صريحة في الدلالة على التحريم
                                    ،
                                    فهم يستدلون بصريح غير صحيح ، أو بصحيح غير صريح . ولذا تراهم يكادون يُحَرِّمون على الناس
                                    كل
                                    شيء ، فالتصوير كله حرام ، حتى التصوير الفوتوغرافي، الذي يسميه الخليجيون (عكسا) وهو فعلا
                                    بمثابة انعكاس الصورة على المرآة . وعلى هذا الأساس حرموا استخدام التلفزيون ؛ لأنه يقوم
                                    على
                                    التصوير ، والتصوير كله حرام ، والسينما كلها حرام ، لأنها تقوم على التصوير . والغناء كله
                                    حرام
                                    ، ولا سيما إذا كان مع الآلات ، وخصوصا إذا كان المغني امرأة . وكشف المرأة وجهها حرام ،
                                    لأن
                                    وجهها عورة ، وتغطيته واجبة . ولا يكفي المسلمة أن تلبس الخمار الذي تغطي به رأسها وعنقها
                                    ونحرها . كما تفعل (المحجبات) في عصرنا . فهؤلاء المحجبات آثمات في نظر هؤلاء . ومن ذلك
                                    قولهم
                                    بتحريم حلق اللحية"
                                </p>
                                <div class="d-flex align-items-center">

                                    <h3 class="gold">
                                        موقف الإسلام من العقل والعلم | يوسف القرضاوي </>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card shadow border-0 quote-card p-4 text-white">
                            <div style="position: relative; z-index: 1;">
                                <i class="fas fa-quote-right mb-4 d-block"
                                    style="font-size: 2rem; color: var(--gold); opacity: 0.4;"></i>
                                <p class="text fs-4 mb-4" style="line-height: 1.6;">
                                    "والآن نضرب مثلاً بحديث دار حوله الجدل، وهو ثابت في الصحيحين وهو حديث: «إن الله خلق آدم
                                    على
                                    صورته» فهذا قد يقرأه المسلم وبرد الضمير في صورته» إلى الله، ويفهم منه ما فهمه المشبهة
                                    المجسمة أن آدم مخلوق على صورة الرحمن من الناحية الحسية، وأن له أبعاضًا وأعضاء وأبعادًا،
                                    طولاً وعرضًا وارتفاعًا وأنه متميز ومحدود... إلخ. فيرفض الحديث ويعتبره خرافة أدخلت على
                                    المحدثين، فقبلوها ولم يمحصوها كما ينبغي. ولكن هذا الفهم للحديث ليس بلازم، وتعيينه أنه
                                    التفسير الوحيد لمعنى الحديث خطأ. فالحديث يحتمل أوجها أخرى كلها صحیح مقبول : منها: أن
                                    يكون
                                    الضمير في قوله : على صورته عائدًا إلى لفظ الجلالة، وهو هنا يعود إلى آدم، وهو أقرب مذكور"
                                </p>
                                <div class="d-flex align-items-center">

                                    <h3 class="gold">
                                        المرجعية العُليا في الإسلام | يوسف القرضاوي </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- quotes Tab -->
            <div class="tab-pane fade" id="quotes" role="tabpanel">
                <div class="row g-5">
                    <div class="col-12">
                        <div class="card shadow border-0 quote-card p-4 text-white">
                            <div style="position: relative; z-index: 1;">
                                <i class="fas fa-quote-right mb-4 d-block"
                                    style="font-size: 2rem; color: var(--gold); opacity: 0.4;"></i>
                                <p class="text fs-4  mb-4" style="line-height: 1.6;">
                                    " ومن لوازم هؤلاء أنهم يسرفون في التحريم ، فهم يحرمون بالأحاديث الضعيفة ، وإن كانوا
                                    يقوونها
                                    بكثرة الطرق، وهذا ليس حكما على إطلاقه أو تكون الأحاديث غير صريحة في الدلالة على التحريم
                                    ،
                                    فهم يستدلون بصريح غير صحيح ، أو بصحيح غير صريح . ولذا تراهم يكادون يُحَرِّمون على الناس
                                    كل
                                    شيء ، فالتصوير كله حرام ، حتى التصوير الفوتوغرافي، الذي يسميه الخليجيون (عكسا) وهو فعلا
                                    بمثابة انعكاس الصورة على المرآة . وعلى هذا الأساس حرموا استخدام التلفزيون ؛ لأنه يقوم
                                    على
                                    التصوير ، والتصوير كله حرام ، والسينما كلها حرام ، لأنها تقوم على التصوير . والغناء كله
                                    حرام
                                    ، ولا سيما إذا كان مع الآلات ، وخصوصا إذا كان المغني امرأة . وكشف المرأة وجهها حرام ،
                                    لأن
                                    وجهها عورة ، وتغطيته واجبة . ولا يكفي المسلمة أن تلبس الخمار الذي تغطي به رأسها وعنقها
                                    ونحرها . كما تفعل (المحجبات) في عصرنا . فهؤلاء المحجبات آثمات في نظر هؤلاء . ومن ذلك
                                    قولهم
                                    بتحريم حلق اللحية"
                                </p>
                                <div class="d-flex align-items-center">

                                    <h3 class="gold">
                                        موقف الإسلام من العقل والعلم | يوسف القرضاوي </>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card shadow border-0 quote-card p-4 text-white">
                            <div style="position: relative; z-index: 1;">
                                <i class="fas fa-quote-right mb-4 d-block"
                                    style="font-size: 2rem; color: var(--gold); opacity: 0.4;"></i>
                                <p class="text fs-4 mb-4" style="line-height: 1.6;">
                                    "والآن نضرب مثلاً بحديث دار حوله الجدل، وهو ثابت في الصحيحين وهو حديث: «إن الله خلق آدم
                                    على
                                    صورته» فهذا قد يقرأه المسلم وبرد الضمير في صورته» إلى الله، ويفهم منه ما فهمه المشبهة
                                    المجسمة أن آدم مخلوق على صورة الرحمن من الناحية الحسية، وأن له أبعاضًا وأعضاء وأبعادًا،
                                    طولاً وعرضًا وارتفاعًا وأنه متميز ومحدود... إلخ. فيرفض الحديث ويعتبره خرافة أدخلت على
                                    المحدثين، فقبلوها ولم يمحصوها كما ينبغي. ولكن هذا الفهم للحديث ليس بلازم، وتعيينه أنه
                                    التفسير الوحيد لمعنى الحديث خطأ. فالحديث يحتمل أوجها أخرى كلها صحیح مقبول : منها: أن
                                    يكون
                                    الضمير في قوله : على صورته عائدًا إلى لفظ الجلالة، وهو هنا يعود إلى آدم، وهو أقرب مذكور"
                                </p>
                                <div class="d-flex align-items-center">

                                    <h3 class="gold">
                                        المرجعية العُليا في الإسلام | يوسف القرضاوي </h3>
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
