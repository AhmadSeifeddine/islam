<div class="categories-section py-20 d-flex flex-column flex-column-fluid justify-content-center align-items-center"
    style="background-color: var(--background);">
    <div class="container">
        <!-- Refined Header -->
        <div class="text-center mb-5 header-content">
            <h1 class="main-title">
                تصنيف الشخصيات
                <div class="elegant-underline"></div>
            </h1>
            <p class="text elegant-subtitle">اختر التصنيف المناسب للشخصيات التي تبحث عنها</p>
        </div>

        <!-- Categories Grid -->
        <div class="row mt-10 g-5">
            <!-- Religious Category -->
            <div class="category-container col-12 col-lg-6 fade-in islamic_pers">
                <button class="category-wrapper w-100 p-5 rounded-3">
                    <div class="card-shine"></div>
                    <div class="main-category text-center d-flex flex-column gap-4">
                        <div class="main-icon-wrapper w-60px h-60px d-flex align-items-center justify-content-center">
                            <i class="bi bi-moon-fill text-success fs-2"></i>
                            <div class="icon-ring"></div>
                        </div>
                        <div>
                            <h2 class="gold display-6">الشخصيات الدينية</h2>
                            <p class="text fs-5">علماء وفقهاء ودعاة الإسلام عبر العصور</p>
                        </div>
                    </div>
                </button>
            </div>

            <div class="category-container col-12 col-lg-6 fade-in not_islamic_pers">
                <button class="category-wrapper w-100 p-5 rounded-3">
                    <div class="card-shine"></div>
                    <div class="main-category text-center d-flex flex-column gap-4">
                        <div class="main-icon-wrapper w-60px h-60px d-flex align-items-center justify-content-center">
                            <i class="bi bi-person-fill fs-2 text-danger"></i>
                            <div class="icon-ring"></div>
                        </div>
                        <div>
                            <h2 class="gold display-6">الشخصيات غير الدينية</h2>
                            <p class="text fs-5">مفكرون وعلماء في مختلف المجالات</p>
                        </div>
                    </div>
                </button>
            </div>
        </div>

        <div class="islamic_filter mt-10 options-animate hidden
            d-flex align-items-center flex-wrap justify-content-center justify-content-lg-between gap-4">
            <div class="d-flex align-items-center flex-wrap justify-content-center justify-content-lg-between gap-4">
                <button class="premium-btn bg-success text-success bg-opacity-15 rounded-3 py-3 px-4 text-center">
                    الكل
                </button>
                <button class="premium-btn bg-success text-success bg-opacity-15 rounded-3 py-3 px-4 text-center">
                    شخصيات موصى بها
                </button>
                <button class="premium-btn bg-danger text-danger bg-opacity-15 rounded-3 py-3 px-4 text-center">
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
            <div class="box_search position-relative w-100 w-lg-300px w-xl-400px">
                <div class="position-absolute h-100 px-3 d-flex align-items-center justify-content-center">
                    <i class="bi bi-search fs-4"></i>
                </div>
                <!--begin::Input-->
                <input type="text"
                    class="search-input form-control form-control shadow border w-100 h-lg-45px pe-10"
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
            <div class="box_search position-relative w-100 w-lg-300px w-xl-400px">
                <div class="position-absolute h-100 px-3 d-flex align-items-center justify-content-center">
                    <i class="bi bi-search fs-4"></i>
                </div>
                <!--begin::Input-->
                <input type="text"
                    class="search-input form-control form-control shadow border w-100 h-lg-45px  pe-10"
                    name="search" value="" placeholder="البحث..." data-kt-search-element="input">
                <!--end::Input-->
            </div>
        </div>

        <div class="filtered_content d-none mt-5">
            <hr>

            <div class="row g-5 g-lg-8">
                <!-- First Card -->
                <div class="col-12 col-xl-6">
                    <div class="card shadow">
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
                                    <div class="h-100 d-flex align-items-center justify-content-center py-2 py-md-0 px-0 px-md-2 rounded-3"
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
                                                    class="bg-primary bg-opacity-10 rounded-3 p-4 h-100 border-start border-3 border-primary">
                                                    <div class="text-primary fw-semibold mb-2">
                                                        تاريخ الولادة:
                                                    </div>
                                                    <div class="fw-bold">1329هـ</div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="bg-primary bg-opacity-10 rounded-3 p-4 h-100 border-start border-3 border-primary">
                                                    <div class="text-primary fw-semibold mb-2">
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
                                                <button class="btn btn-light action-btn p-3 rounded-3 border" data-action="readLater"
                                                    data-bs-toggle="tooltip" title="قراءة لاحقاً">
                                                    <i class="fas fa-bookmark fs-5" style="padding: 0px"></i>
                                                </button>

                                                <button class="btn btn-light action-btn p-3 rounded-3 border" data-action="favorite"
                                                    data-bs-toggle="tooltip" title="إضافة للمفضلة">
                                                    <i class="fas fa-heart fs-5" style="padding: 0px"></i>
                                                </button>

                                                <button class="btn btn-light action-btn p-3 rounded-3 border" data-action="collection"
                                                    data-bs-toggle="tooltip" title="إضافة إلى مجموعة" data-bs-toggle="modal"
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
    </div>
</div>




