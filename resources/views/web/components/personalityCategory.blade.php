<<<<<<< Updated upstream
=======
<div class="categories-section d-flex flex-column flex-column-fluid justify-content-center align-items-center"
    style="background-color: var(--background);">
    <div class="container">
        <!-- Refined Header -->
        <div class="text-center mb-5 header-content">
            <h1 class="main-title">
                تصنيف الشخصيات
                <div class="elegant-underline"></div>
            </h1>
            <p class="elegant-subtitle">اختر التصنيف المناسب للشخصيات التي تبحث عنها</p>
        </div>

        <!-- Categories Grid -->
        <div class="row mt-10 g-5">
            <!-- Religious Category -->
            <div class="category-container col-12 col-lg-6 fade-in islamic_pers">
                <button class="category-wrapper w-100 p-5 rounded-4">
                    <div class="premium-glow"></div>
                    <div class="card-shine"></div>
                    <div class="main-category text-center d-flex flex-column gap-4">
                        <div class="main-icon-wrapper w-60px h-60px d-flex align-items-center justify-content-center">
                            <i class="bi bi-book-fill fs-2"></i>
                            <div class="icon-ring"></div>
                        </div>
                        <div>
                            <h2 class="text-warning display-6">الشخصيات الدينية</h2>
                            <p class="text-white-50 fs-5">علماء وفقهاء ودعاة الإسلام عبر العصور</p>
                        </div>
                    </div>
                </button>
            </div>

            <div class="category-container col-12 col-lg-6 fade-in not_islamic_pers">
                <button class="category-wrapper w-100 p-5 rounded-4">
                    <div class="premium-glow"></div>
                    <div class="card-shine"></div>
                    <div class="main-category text-center d-flex flex-column gap-4">
                        <div class="main-icon-wrapper w-60px h-60px d-flex align-items-center justify-content-center">
                            <i class="bi bi-lightbulb-fill fs-2"></i>
                            <div class="icon-ring"></div>
                        </div>
                        <div>
                            <h2 class="text-warning display-6">الشخصيات غير الدينية</h2>
                            <p class="text-white-50 fs-5">مفكرون وعلماء في مختلف المجالات</p>
                        </div>
                    </div>
                </button>
            </div>
        </div>

        <div class="islamic_filter mt-10 options-animate hidden
            d-flex align-items-center flex-wrap justify-content-center justify-content-lg-between gap-4">
            <div class="d-flex align-items-center flex-wrap justify-content-center justify-content-lg-between gap-4">
                <button class="premium-btn bg-success text-success bg-opacity-10 rounded-3 py-3 px-4 text-center">
                    الكل
                </button>
                <button class="premium-btn bg-success text-success bg-opacity-10 rounded-3 py-3 px-4 text-center">
                    شخصيات موصى بها
                </button>
                <button class="premium-btn bg-danger text-danger bg-opacity-10 rounded-3 py-3 px-4 text-center">
                    شخصيات غير موصى بها
                </button>
                <select name="" id="" class="px-4 py-2 rounded-3">
                    <option value="">الكل</option>
                    <option value="">السلف</option>
                    <option value="">المتقدمين</option>
                    <option value="">المعاصرين</option>
                </select>
                <select name="" id="" class="px-4 py-2 rounded-3">
                    <option value="">الجنسية</option>
                </select>
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

        <div class="not_islamic_filter mt-10 options-animate hidden
            d-flex align-items-center flex-wrap justify-content-center justify-content-lg-between gap-4">
            <div class="d-flex align-items-center flex-wrap justify-content-center justify-content-lg-between gap-4">
                <select name="" id="" class="px-4 py-2 rounded-3">
                    <option value="">الكل</option>
                    <option value="">السلف</option>
                    <option value="">المتقدمين</option>
                    <option value="">المعاصرين</option>
                </select>
                <select name="" id="" class="px-4 py-2 rounded-3">
                    <option value="">الجنسية</option>
                </select>
            </div>
            <div class="box_search position-relative">
                <div class="position-absolute h-100 px-3 d-flex align-items-center justify-content-center">
                    <i class="bi bi-search fs-4"></i>
                </div>
                <!--begin::Input-->
                <input type="text"
                    class="search-input form-control form-control border w--290px w-md-400px h-lg-45px  pe-10"
                    name="search" value="" placeholder="البحث..." data-kt-search-element="input">
                <!--end::Input-->
            </div>
        </div>

        <div class="filtered_content d-none mt-5">
            <hr>

            <div class="row g-5 g-lg-8">
                <!-- First Card -->
                <div class="col-12 col-xl-6">
                    <div class="card shadow-lg border-0">
                        <div class="card-body">
                            <div class="row g-5 g-md-3">
                                <!-- Header Section -->
                                <div class="header d-flex justify-content-end">
                                    <div class="bg-danger bg-opacity-10 rounded-3 p-3 text-center h-100">
                                        <h6 class="text-danger mb-0">
                                            لا ننصح به
                                        </h6>
                                    </div>
                                </div>

                                <div class="col-12 col-md-5">
                                    <div class="h-100 d-flex align-items-center justify-content-center py-2 py-md-0 px-0 px-md-2"
                                        style="background: rgba(0, 0, 0, 0.2)">
                                        <img src="{{ asset('vendor/img/logo/3.jpg') }}" alt="صورة الشخصية"
                                            class="w-150px h-150px w-md-200px h-md-200px"
                                            style="object-fit: cover; border-radius: 50%; overflow: hidden;">
                                    </div>
                                </div>

                                <div class="col-16 col-md-7">
                                    <div class="d-flex flex-column gap-4 me-0 me-lg-4">
                                        <div class="d-flex flex-column gap-1">
                                            <span class="text-primary fw-bold fs-7 d-block">
                                                الإسم
                                            </span>
                                            <h5 class="display-6 fw-bolder fs-1">محمد متولي الشعراوي</h5>
                                        </div>

                                        <div class="d-flex flex-column gap-2">
                                            <div class="">
                                                <div
                                                    class="bg-success bg-opacity-10 rounded-4 p-4 h-100 border-start border-3 border-success">
                                                    <div class="text-success fw-semibold mb-2">
                                                        تاريخ الولادة:
                                                    </div>
                                                    <div class="fw-bold">1329هـ</div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="bg-danger bg-opacity-10 rounded-4 p-4 h-100 border-start border-3 border-danger">
                                                    <div class="text-danger fw-semibold mb-2">
                                                        تاريخ الوفاة:
                                                    </div>
                                                    <div class="fw-bold">1419هـ</div>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Actions -->
                                        <div
                                            class="mt-auto d-flex justify-content-between flex-wrap gap-2 align-items-center">
                                            <button class="btn-bg-logo">عرض الشخصية</button>

                                            <div class="d-flex gap-2">
                                                <button class="btn btn-light action-btn p-3 rounded-3 text-center"
                                                    data-action="readLater" data-bs-toggle="tooltip"
                                                    title="قراءة لاحقاً">
                                                    <i class="fas fa-bookmark fs-5"></i>
                                                </button>
                                                <button class="btn btn-light action-btn p-3 rounded-3 text-center"
                                                    data-action="favorite" data-bs-toggle="tooltip"
                                                    title="إضافة للمفضلة">
                                                    <i class="fas fa-heart fs-5"></i>
                                                </button>
                                                <button class="btn btn-light action-btn p-3 rounded-3 text-center"
                                                    data-action="collection" data-bs-toggle="tooltip"
                                                    title="إضافة إلى مجموعة">
                                                    <i class="fas fa-folder-plus fs-5"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-xl-6">
                    <div class="card shadow-lg border-0">
                        <div class="card-body">
                            <div class="row g-5 g-md-3">
                                <!-- Header Section -->
                                <div class="header d-flex justify-content-end">
                                    <div class="bg-danger bg-opacity-10 rounded-3 p-3 text-center h-100">
                                        <h6 class="text-danger mb-0">
                                            لا ننصح به
                                        </h6>
                                    </div>
                                </div>

                                <div class="col-12 col-md-5">
                                    <div class="h-100 d-flex align-items-center justify-content-center py-2 py-md-0 px-0 px-md-2"
                                        style="background: rgba(0, 0, 0, 0.2)">
                                        <img src="{{ asset('vendor/img/logo/3.jpg') }}" alt="صورة الشخصية"
                                            class="w-150px h-150px w-md-200px h-md-200px"
                                            style="object-fit: cover; border-radius: 50%; overflow: hidden;">
                                    </div>
                                </div>

                                <div class="col-16 col-md-7">
                                    <div class="d-flex flex-column gap-4 me-0 me-lg-4">
                                        <div class="d-flex flex-column gap-1">
                                            <span class="text-primary fw-bold fs-7 d-block">
                                                الإسم
                                            </span>
                                            <h5 class="display-6 fw-bolder fs-1">محمد متولي الشعراوي</h5>
                                        </div>

                                        <div class="d-flex flex-column gap-2">
                                            <div class="">
                                                <div
                                                    class="bg-success bg-opacity-10 rounded-4 p-4 h-100 border-start border-3 border-success">
                                                    <div class="text-success fw-semibold mb-2">
                                                        تاريخ الولادة:
                                                    </div>
                                                    <div class="fw-bold">1329هـ</div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="bg-danger bg-opacity-10 rounded-4 p-4 h-100 border-start border-3 border-danger">
                                                    <div class="text-danger fw-semibold mb-2">
                                                        تاريخ الوفاة:
                                                    </div>
                                                    <div class="fw-bold">1419هـ</div>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Actions -->
                                        <div
                                            class="mt-auto d-flex justify-content-between flex-wrap gap-2 align-items-center">
                                            <button class="btn-bg-logo">عرض الشخصية</button>

                                            <div class="d-flex gap-2">
                                                <button class="btn btn-light action-btn p-3 rounded-3 text-center"
                                                    data-action="readLater" data-bs-toggle="tooltip"
                                                    title="قراءة لاحقاً">
                                                    <i class="fas fa-bookmark fs-5"></i>
                                                </button>
                                                <button class="btn btn-light action-btn p-3 rounded-3 text-center"
                                                    data-action="favorite" data-bs-toggle="tooltip"
                                                    title="إضافة للمفضلة">
                                                    <i class="fas fa-heart fs-5"></i>
                                                </button>
                                                <button class="btn btn-light action-btn p-3 rounded-3 text-center"
                                                    data-action="collection" data-bs-toggle="tooltip"
                                                    title="إضافة إلى مجموعة">
                                                    <i class="fas fa-folder-plus fs-5"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-xl-6">
                    <div class="card shadow-lg border-0">
                        <div class="card-body">
                            <div class="row g-5 g-md-3">
                                <!-- Header Section -->
                                <div class="header d-flex justify-content-end">
                                    <div class="bg-danger bg-opacity-10 rounded-3 p-3 text-center h-100">
                                        <h6 class="text-danger mb-0">
                                            لا ننصح به
                                        </h6>
                                    </div>
                                </div>

                                <div class="col-12 col-md-5">
                                    <div class="h-100 d-flex align-items-center justify-content-center py-2 py-md-0 px-0 px-md-2"
                                        style="background: rgba(0, 0, 0, 0.2)">
                                        <img src="{{ asset('vendor/img/logo/3.jpg') }}" alt="صورة الشخصية"
                                            class="w-150px h-150px w-md-200px h-md-200px"
                                            style="object-fit: cover; border-radius: 50%; overflow: hidden;">
                                    </div>
                                </div>

                                <div class="col-16 col-md-7">
                                    <div class="d-flex flex-column gap-4 me-0 me-lg-4">
                                        <div class="d-flex flex-column gap-1">
                                            <span class="text-primary fw-bold fs-7 d-block">
                                                الإسم
                                            </span>
                                            <h5 class="display-6 fw-bolder fs-1">محمد متولي الشعراوي</h5>
                                        </div>

                                        <div class="d-flex flex-column gap-2">
                                            <div class="">
                                                <div
                                                    class="bg-success bg-opacity-10 rounded-4 p-4 h-100 border-start border-3 border-success">
                                                    <div class="text-success fw-semibold mb-2">
                                                        تاريخ الولادة:
                                                    </div>
                                                    <div class="fw-bold">1329هـ</div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="bg-danger bg-opacity-10 rounded-4 p-4 h-100 border-start border-3 border-danger">
                                                    <div class="text-danger fw-semibold mb-2">
                                                        تاريخ الوفاة:
                                                    </div>
                                                    <div class="fw-bold">1419هـ</div>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Actions -->
                                        <div
                                            class="mt-auto d-flex justify-content-between flex-wrap gap-2 align-items-center">
                                            <button class="btn-bg-logo">عرض الشخصية</button>

                                            <div class="d-flex gap-2">
                                                <button class="btn btn-light action-btn p-3 rounded-3 text-center"
                                                    data-action="readLater" data-bs-toggle="tooltip"
                                                    title="قراءة لاحقاً">
                                                    <i class="fas fa-bookmark fs-5"></i>
                                                </button>
                                                <button class="btn btn-light action-btn p-3 rounded-3 text-center"
                                                    data-action="favorite" data-bs-toggle="tooltip"
                                                    title="إضافة للمفضلة">
                                                    <i class="fas fa-heart fs-5"></i>
                                                </button>
                                                <button class="btn btn-light action-btn p-3 rounded-3 text-center"
                                                    data-action="collection" data-bs-toggle="tooltip"
                                                    title="إضافة إلى مجموعة">
                                                    <i class="fas fa-folder-plus fs-5"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-xl-6">
                    <div class="card shadow-lg border-0">
                        <div class="card-body">
                            <div class="row g-5 g-md-3">
                                <!-- Header Section -->
                                <div class="header d-flex justify-content-end">
                                    <div class="bg-danger bg-opacity-10 rounded-3 p-3 text-center h-100">
                                        <h6 class="text-danger mb-0">
                                            لا ننصح به
                                        </h6>
                                    </div>
                                </div>

                                <div class="col-12 col-md-5">
                                    <div class="h-100 d-flex align-items-center justify-content-center py-2 py-md-0 px-0 px-md-2"
                                        style="background: rgba(0, 0, 0, 0.2)">
                                        <img src="{{ asset('vendor/img/logo/3.jpg') }}" alt="صورة الشخصية"
                                            class="w-150px h-150px w-md-200px h-md-200px"
                                            style="object-fit: cover; border-radius: 50%; overflow: hidden;">
                                    </div>
                                </div>

                                <div class="col-16 col-md-7">
                                    <div class="d-flex flex-column gap-4 me-0 me-lg-4">
                                        <div class="d-flex flex-column gap-1">
                                            <span class="text-primary fw-bold fs-7 d-block">
                                                الإسم
                                            </span>
                                            <h5 class="display-6 fw-bolder fs-1">محمد متولي الشعراوي</h5>
                                        </div>

                                        <div class="d-flex flex-column gap-2">
                                            <div class="">
                                                <div
                                                    class="bg-success bg-opacity-10 rounded-4 p-4 h-100 border-start border-3 border-success">
                                                    <div class="text-success fw-semibold mb-2">
                                                        تاريخ الولادة:
                                                    </div>
                                                    <div class="fw-bold">1329هـ</div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="bg-danger bg-opacity-10 rounded-4 p-4 h-100 border-start border-3 border-danger">
                                                    <div class="text-danger fw-semibold mb-2">
                                                        تاريخ الوفاة:
                                                    </div>
                                                    <div class="fw-bold">1419هـ</div>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Actions -->
                                        <div
                                            class="mt-auto d-flex justify-content-between flex-wrap gap-2 align-items-center">
                                            <button class="btn-bg-logo">عرض الشخصية</button>

                                            <div class="d-flex gap-2">
                                                <button class="btn btn-light action-btn p-3 rounded-3 text-center"
                                                    data-action="readLater" data-bs-toggle="tooltip"
                                                    title="قراءة لاحقاً">
                                                    <i class="fas fa-bookmark fs-5"></i>
                                                </button>
                                                <button class="btn btn-light action-btn p-3 rounded-3 text-center"
                                                    data-action="favorite" data-bs-toggle="tooltip"
                                                    title="إضافة للمفضلة">
                                                    <i class="fas fa-heart fs-5"></i>
                                                </button>
                                                <button class="btn btn-light action-btn p-3 rounded-3 text-center"
                                                    data-action="collection" data-bs-toggle="tooltip"
                                                    title="إضافة إلى مجموعة">
                                                    <i class="fas fa-folder-plus fs-5"></i>
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
    </div>
</div>

<style>
    /* Refined Base Styles */
    .categories-section {
        background: #000000;
        padding-block: 40px;
        position: relative;
        overflow: hidden;
    }

    /* Enhanced Header */
    .main-title {
        font-size: 4.5rem;
        font-weight: 800;
        background: linear-gradient(135deg, var(--gold) 0%, var(--gold) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        position: relative;
        text-shadow: 0 0 30px rgba(255, 215, 0, 0.3);
    }

    .elegant-underline {
        height: 3px;
        width: 0;
        background: linear-gradient(90deg, transparent, var(--gold), transparent);
        position: absolute;
        bottom: -10px;
        left: 0;
        animation: expandLine 1.5s ease forwards;
    }

    .elegant-subtitle {
        font-size: 1.8rem;
        margin-top: 2rem;
        font-weight: 300;
        letter-spacing: 1px;
    }

    /* Enhanced Category Container */
    .category-wrapper {
        background: rgba(20, 20, 40, 0.5);
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(255, 215, 0, 0.1);
        transition: all 0.5s ease;
        cursor: pointer !important;
    }

    .category-wrapper-clicked {
        /* background: radial-gradient(circle, rgba(20, 20, 40, 0.6) 0%, rgba(20, 20, 40, 0.3) 50%, rgba(20, 20, 40, 0.6) 100%); */
        background: rgba(20, 20, 40, 1);
    }

    .category-wrapper div,
    .category-wrapper h2,
    .category-wrapper p {
        cursor: pointer !important;
    }

    .text-warning {
        color: var(--gold) !important;
    }

    .category-wrapper:hover {
        transform: translateY(-10px);
    }

    .card-shine {
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg,
                transparent,
                rgba(255, 255, 255, 0.2),
                transparent);
        transition: 0.5s;
    }

    .category-wrapper:hover .card-shine {
        left: 100%;
        transition: 0.5s;
    }

    .premium-glow {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 3px;
        background: linear-gradient(90deg,
                transparent,
                rgba(255, 215, 0, 0.5),
                transparent);
        animation: shimmerEffect 2s infinite;
    }

    /* Refined Icon Styles */
    .main-icon-wrapper {
        margin: 0 auto;
        background: rgba(255, 215, 0, 0.05);
        position: relative;
        color: var(--gold);
        border: 2px solid rgba(255, 215, 0, 0.1);
        border-radius: 50%;
    }

    .icon-ring {
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 2px solid rgba(255, 215, 0, 0.2);
        animation: pulseRing 2s cubic-bezier(0.455, 0.03, 0.515, 0.955) infinite;
    }

    /* Enhanced Buttons */
    .premium-btn {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        font-size: 1.1rem;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .premium-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        border-color: rgba(255, 215, 0, 0.3);
    }

    .premium-btn::after {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
        transform: scale(0);
        transition: transform 0.5s ease;
    }

    .premium-btn:hover::after {
        transform: scale(1);
    }

    /* Premium Separator */
    .premium-separator {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100%;
        position: relative;
        padding: 2rem 0;
    }

    .separator-line {
        width: 2px;
        height: 100%;
        background: linear-gradient(180deg,
                transparent,
                rgba(255, 215, 0, 0.3),
                transparent);
    }

    .separator-circle {
        width: 50px;
        height: 50px;
        background: rgba(255, 215, 0, 0.05);
        border: 2px solid rgba(255, 215, 0, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        animation: glowPulse 2s infinite alternate;
    }

    /* Refined Animations */
    @keyframes expandLine {
        to {
            width: 100%;
        }
    }

    @keyframes pulseRing {
        0% {
            transform: scale(1);
            opacity: 1;
        }

        50% {
            transform: scale(1.3);
            opacity: 0.5;
        }

        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    @keyframes shimmerEffect {
        0% {
            transform: translateX(-100%);
        }

        100% {
            transform: translateX(100%);
        }
    }

    @keyframes glowPulse {
        0% {
            box-shadow: 0 0 10px rgba(255, 215, 0, 0.2);
        }

        100% {
            box-shadow: 0 0 20px rgba(255, 215, 0, 0.4);
        }
    }

    .success {
        color: #00ff9d;
    }

    .danger {
        color: #ff4d4d;
    }

    .info {
        color: #4deefd;
    }

    .primary {
        color: #4d79ff;
    }

    .premium-btn.success:hover {
        background: rgba(0, 255, 157, 0.1);
    }

    .premium-btn.danger:hover {
        background: rgba(255, 77, 77, 0.1);
    }

    .premium-btn.info:hover {
        background: rgba(77, 238, 253, 0.1);
    }

    .premium-btn.primary:hover {
        background: rgba(77, 121, 255, 0.1);
    }

    .options-animate {
        transform: translate3d(0, 0, 0);
        transition:
            transform 1s cubic-bezier(0.23, 1, 0.32, 1),
            opacity 0.4s cubic-bezier(0.215, 0.61, 0.355, 1),
            filter 0.4s cubic-bezier(0.215, 0.61, 0.355, 1);
        position: absolute;
        width: 100%;
        backface-visibility: hidden;
        perspective: 1000px;
        will-change: transform, opacity, filter;
        transform-style: preserve-3d;
    }

    .options-animate.hidden {
        opacity: 0;
        visibility: hidden;
        transform: translate3d(0, -20px, 0) scale3d(0.97, 0.97, 1);
        pointer-events: none;
        filter: blur(2px) brightness(1.1);
    }

    .options-animate.visible {
        opacity: 1;
        visibility: visible;
        transform: translate3d(0, 0, 0) scale3d(1, 1, 1);
        pointer-events: auto;
        position: relative;
        filter: blur(0) brightness(1);
    }


    /* Responsive Enhancements */
    @media (max-width: 991px) {
        .main-title {
            font-size: 3rem;
        }
    }

</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Select necessary DOM elements
        const islamicBtn = document.querySelector('.islamic_pers button');
        const nonIslamicBtn = document.querySelector('.not_islamic_pers button');
        const islamic_filter = document.querySelector('.islamic_filter');
        const not_islamic_filter = document.querySelector('.not_islamic_filter');
        const filtered_content = document.querySelector('.filtered_content');

        // Function to toggle visibility between Islamic and non-Islamic filters
        const toggleFilters = (showIslamic) => {
            // Update filter visibility
            islamic_filter.classList.toggle('hidden', !showIslamic);
            islamic_filter.classList.toggle('visible', showIslamic);
            not_islamic_filter.classList.toggle('hidden', showIslamic);
            not_islamic_filter.classList.toggle('visible', !showIslamic);

            // Ensure filtered content is always shown
            filtered_content.classList.remove('d-none');

            // Update button child visibility
            islamicBtn.firstElementChild.classList.toggle('d-none', !showIslamic);
            nonIslamicBtn.firstElementChild.classList.toggle('d-none', showIslamic);

            // Update button styles for clicked state
            islamicBtn.classList.toggle('category-wrapper-clicked', showIslamic);
            nonIslamicBtn.classList.toggle('category-wrapper-clicked', !showIslamic);
        };

        // Attach event listeners
        islamicBtn.addEventListener('click', () => toggleFilters(true));
        nonIslamicBtn.addEventListener('click', () => toggleFilters(false));
    });

</script>
>>>>>>> Stashed changes
