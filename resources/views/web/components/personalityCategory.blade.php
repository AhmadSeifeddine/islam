<div class="categories-section gold py-5" style="background-color: var(--background);">
    <div class="container">
        <!-- Header -->
        <div class="text-center mb-5 header-content">
            <h1 class="main-title gold">
                تصنيف الشخصيات
                <div class="elegant-underline"></div>
            </h1>
            <p class="text elegant-subtitle">اختر التصنيف المناسب للشخصيات التي تبحث عنها</p>
        </div>

        <!-- Filters Section -->
        <div class="container-fluid py-4">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="position-relative">
                        <select class="form-select form-select-lg border border-2 shadow-sm rounded-3 bg-transparent"
                            style="height: 60px;">
                            <option value="all">جميع التصنيفات</option>
                            <option value="religious">شخصيات دينية</option>
                            <option value="non-religious">شخصيات غير دينية</option>
                        </select>
                        <i
                            class="fas fa-chevron-down position-absolute top-50 end-0 translate-middle-y me-3 text-warning"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="position-relative">
                        <select class="form-select form-select-lg border border-2 shadow-sm rounded-3 bg-transparent"
                            style="height: 60px;">
                            <option value="all">جميع التوصيات</option>
                            <option value="recommended">موصى به</option>
                            <option value="not-recommended">غير موصى به</option>
                        </select>
                        <i
                            class="fas fa-chevron-down position-absolute top-50 end-0 translate-middle-y me-3 text-warning"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="position-relative">
                        <select class="form-select form-select-lg border border-2 shadow-sm rounded-3 bg-transparent"
                            style="height: 60px;">
                            <option value="all">الحالة</option>
                            <option value="alive">على قيد الحياة</option>
                            <option value="deceased">متوفى</option>
                        </select>
                        <i
                            class="fas fa-chevron-down position-absolute top-50 end-0 translate-middle-y me-3 text-warning"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <button
                        class="btn btn-warning btn-lg w-100 fw-bold rounded-3 shadow-sm d-flex align-items-center justify-content-center"
                        style="height: 60px;">
                        <i class="fas fa-filter me-2"></i>
                        <span>تطبيق الفلتر</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Accordion -->
        <div class="accordion custom-accordion" id="personalitiesAccordion">
            <!-- Religious Category -->
            <div class="card shadow-lg border-0 accordion-item category-container mb-4">
                <div class="category-wrapper" data-bs-toggle="collapse" data-bs-target="#religiousCollapse"
                    role="button">
                    <div class="main-category text-center">
                        <div class="main-icon-wrapper mb-5">
                            <i class="bi bi-moon-fill fs-1 text-success"></i>
                            <div class="icon-ring"></div>
                        </div>
                        <h2 class="gold display-6 mb-3">الشخصيات الدينية</h2>
                        <p class="text fs-5">علماء وفقهاء ودعاة الإسلام عبر العصور</p>
                    </div>
                </div>

                <div id="religiousCollapse" class="collapse">
                    <div class="row g-4 mt-4">
                        <!-- Religious Character 1 -->
                        <div class="col-lg-6 mb-5 px-10">
                            <div class="card shadow-lg border-0 bg-warning bg-opacity-10">
                                <div class="card-body p-5">
                                    <div class="row g-5 align-items-stretch">
                                        <div class="col-md-4">
                                            <img src="{{ asset('vendor/img/logo/3.jpg') }}"
                                                class="img-fluid h-100 w-100" alt="الإمام الشافعي"
                                                style="object-fit: contain;">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="d-flex flex-column h-100">
                                                <div class="mb-5">
                                                    <div class="mb-4">
                                                        <span
                                                            class="text-primary fw-bold fs-7 mb-2 d-block">الإسم</span>
                                                        <h2 class="display-6 fw-bolder mb-0">الإمام الشافعي</h2>
                                                    </div>
                                                    <div
                                                        class="bg-light bg-opacity-75 rounded-4 p-4 mt-4 border-start border-5 border-success">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <span
                                                                    class="text-success fs-8 fw-bold d-block">توصية</span>
                                                                <span class="text-decoration-none fs-6 fw-bold">موصى
                                                                    به</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-5">
                                                    <div class="row g-4">
                                                        <div class="col-6">
                                                            <div
                                                                class="bg-success bg-opacity-10 rounded-4 p-4 h-100 border-start border-3 border-success">
                                                                <div class="text-success fw-semibold mb-2">تاريخ
                                                                    الولادة:</div>
                                                                <div class="fw-bold">150هـ</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div
                                                                class="bg-danger bg-opacity-10 rounded-4 p-4 h-100 border-start border-3 border-danger">
                                                                <div class="text-danger fw-semibold mb-2">تاريخ الوفاة:
                                                                </div>
                                                                <div class="fw-bold">204هـ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-auto d-flex justify-content-between align-items-center">
                                                    <button class="btn-bg-logo">عرض الشخصية</button>
                                                    <div class="d-flex gap-2">
                                                        <button class="btn btn-light action-btn p-3 rounded-3"
                                                            data-action="readLater" data-bs-toggle="tooltip"
                                                            title="قراءة لاحقاً">
                                                            <i class="fas fa-bookmark fs-5"></i>
                                                        </button>
                                                        <button class="btn btn-light action-btn p-3 rounded-3"
                                                            data-action="favorite" data-bs-toggle="tooltip"
                                                            title="إضافة للمفضلة">
                                                            <i class="fas fa-heart fs-5"></i>
                                                        </button>
                                                        <button class="btn btn-light action-btn p-3 rounded-3"
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


                        <!-- Religious Character 2 -->
                        <div class="col-lg-6 mb-5 px-10">
                            <div class="card shadow-lg border-0 bg-warning bg-opacity-10">
                                <div class="card-body p-5">
                                    <div class="row g-5 align-items-stretch">
                                        <div class="col-md-4">
                                            <img src="{{ asset('vendor/img/logo/3.jpg') }}"
                                                class="img-fluid h-100 w-100" alt="الإمام البخاري"
                                                style="object-fit: contain;">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="d-flex flex-column h-100">
                                                <div class="mb-5">
                                                    <div class="mb-4">
                                                        <span
                                                            class="text-primary fw-bold fs-7 mb-2 d-block">الإسم</span>
                                                        <h2 class="display-6 fw-bolder mb-0">الإمام البخاري</h2>
                                                    </div>
                                                    <div
                                                        class="bg-light bg-opacity-75 rounded-4 p-4 mt-4 border-start border-5 border-success">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <span
                                                                    class="text-success fs-8 fw-bold d-block">توصية</span>
                                                                <span class="text-decoration-none fs-6 fw-bold">موصى
                                                                    به</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-5">
                                                    <div class="row g-4">
                                                        <div class="col-6">
                                                            <div
                                                                class="bg-success bg-opacity-10 rounded-4 p-4 h-100 border-start border-3 border-success">
                                                                <div class="text-success fw-semibold mb-2">تاريخ
                                                                    الولادة:</div>
                                                                <div class="fw-bold">194هـ</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div
                                                                class="bg-danger bg-opacity-10 rounded-4 p-4 h-100 border-start border-3 border-danger">
                                                                <div class="text-danger fw-semibold mb-2">تاريخ الوفاة:
                                                                </div>
                                                                <div class="fw-bold">256هـ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-auto d-flex justify-content-between align-items-center">
                                                    <button class="btn-bg-logo">عرض الشخصية</button>
                                                    <div class="d-flex gap-2">
                                                        <button class="btn btn-light action-btn p-3 rounded-3"
                                                            data-action="readLater" data-bs-toggle="tooltip"
                                                            title="قراءة لاحقاً">
                                                            <i class="fas fa-bookmark fs-5"></i>
                                                        </button>
                                                        <button class="btn btn-light action-btn p-3 rounded-3"
                                                            data-action="favorite" data-bs-toggle="tooltip"
                                                            title="إضافة للمفضلة">
                                                            <i class="fas fa-heart fs-5"></i>
                                                        </button>
                                                        <button class="btn btn-light action-btn p-3 rounded-3"
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

            <!-- Non-Religious Category -->
            <div class="card shadow-lg border-0 accordion-item category-container">
                <div class="category-wrapper" data-bs-toggle="collapse" data-bs-target="#nonReligiousCollapse"
                    role="button">
                    <div class="main-category text-center">
                        <div class="main-icon-wrapper mb-5">
                            <i class="bi bi-person-fill fs-1 text-danger"></i>
                            <div class="icon-ring"></div>
                        </div>
                        <h2 class="gold display-6 mb-3">الشخصيات غير الدينية</h2>
                        <p class="text fs-5">مفكرون وعلماء في مختلف المجالات</p>
                    </div>
                </div>

                <div id="nonReligiousCollapse" class="collapse">
                    <div class="row g-4 mt-4">
                        <!-- Non-Religious Character 1 -->
                        <div class="col-lg-6 mb-5 px-10">
                            <div class="card shadow-lg border-0 bg-warning bg-opacity-10">
                                <div class="card-body p-5">
                                    <div class="row g-5 align-items-stretch">
                                        <div class="col-md-4">
                                            <img src="{{ asset('vendor/img/logo/3.jpg') }}"
                                                class="img-fluid h-100 w-100" alt="ابن سينا"
                                                style="object-fit: contain;">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="d-flex flex-column h-100">
                                                <div class="mb-5">
                                                    <div class="mb-4">
                                                        <span
                                                            class="text-primary fw-bold fs-7 mb-2 d-block">الإسم</span>
                                                        <h2 class="display-6 fw-bolder mb-0">ابن سينا</h2>
                                                    </div>
                                                    <div
                                                        class="bg-light bg-opacity-75 rounded-4 p-4 mt-4 border-start border-5 border-success">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <span
                                                                    class="text-success fs-8 fw-bold d-block">توصية</span>
                                                                <span class="text-decoration-none fs-6 fw-bold">موصى
                                                                    به</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-5">
                                                    <div class="row g-4">
                                                        <div class="col-6">
                                                            <div
                                                                class="bg-success bg-opacity-10 rounded-4 p-4 h-100 border-start border-3 border-success">
                                                                <div class="text-success fw-semibold mb-2">تاريخ
                                                                    الولادة:</div>
                                                                <div class="fw-bold">370هـ</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div
                                                                class="bg-danger bg-opacity-10 rounded-4 p-4 h-100 border-start border-3 border-danger">
                                                                <div class="text-danger fw-semibold mb-2">تاريخ الوفاة:
                                                                </div>
                                                                <div class="fw-bold">428هـ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-auto d-flex justify-content-between align-items-center">
                                                    <button class="btn-bg-logo">عرض الشخصية</button>
                                                    <div class="d-flex gap-2">
                                                        <button class="btn btn-light action-btn p-3 rounded-3"
                                                            data-action="readLater" data-bs-toggle="tooltip"
                                                            title="قراءة لاحقاً">
                                                            <i class="fas fa-bookmark fs-5"></i>
                                                        </button>
                                                        <button class="btn btn-light action-btn p-3 rounded-3"
                                                            data-action="favorite" data-bs-toggle="tooltip"
                                                            title="إضافة للمفضلة">
                                                            <i class="fas fa-heart fs-5"></i>
                                                        </button>
                                                        <button class="btn btn-light action-btn p-3 rounded-3"
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

                        <!-- Non-Religious Character 2 -->
                        <div class="col-lg-6 mb-5 px-10">
                            <div class="card shadow-lg border-0 bg-warning bg-opacity-10">
                                <div class="card-body p-5">
                                    <div class="row g-5 align-items-stretch">
                                        <div class="col-md-4">
                                            <img src="{{ asset('vendor/img/logo/3.jpg') }}"
                                                class="img-fluid h-100 w-100" alt="الخوارزمي"
                                                style="object-fit: contain;">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="d-flex flex-column h-100">
                                                <div class="mb-5">
                                                    <div class="mb-4">
                                                        <span
                                                            class="text-primary fw-bold fs-7 mb-2 d-block">الإسم</span>
                                                        <h2 class="display-6 fw-bolder mb-0">الخوارزمي</h2>
                                                    </div>
                                                    <div
                                                        class="bg-light bg-opacity-75 rounded-4 p-4 mt-4 border-start border-5 border-danger">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <span
                                                                    class="text-danger fs-8 fw-bold d-block">توصية</span>
                                                                <span class="text-decoration-none fs-6 fw-bold">غير موصى
                                                                    به</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-5">
                                                    <div class="row g-4">
                                                        <div class="col-6">
                                                            <div
                                                                class="bg-success bg-opacity-10 rounded-4 p-4 h-100 border-start border-3 border-success">
                                                                <div class="text-success fw-semibold mb-2">تاريخ
                                                                    الولادة:</div>
                                                                <div class="fw-bold">164هـ</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div
                                                                class="bg-danger bg-opacity-10 rounded-4 p-4 h-100 border-start border-3 border-danger">
                                                                <div class="text-danger fw-semibold mb-2">تاريخ الوفاة:
                                                                </div>
                                                                <div class="fw-bold">235هـ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-auto d-flex justify-content-between align-items-center">
                                                    <div class="d-flex gap-2">
                                                        <button class="btn btn-light action-btn p-3 rounded-3"
                                                            data-action="readLater" data-bs-toggle="tooltip"
                                                            title="قراءة لاحقاً">
                                                            <i class="fas fa-bookmark fs-5"></i>
                                                        </button>
                                                        <button class="btn btn-light action-btn p-3 rounded-3"
                                                            data-action="favorite" data-bs-toggle="tooltip"
                                                            title="إضافة للمفضلة">
                                                            <i class="fas fa-heart fs-5"></i>
                                                        </button>
                                                        <button class="btn btn-light action-btn p-3 rounded-3"
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
    </div>
</div>


<!-- Collection Modal -->
<div class="modal fade" id="collectionModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header justify-content-between">
                <h5 class="modal-title">إضافة إلى مجموعة</h5>
                <button type="button" class="btn-close ms-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-4">
                    <label class="form-label">المجموعات الموجودة</label>
                    <select class="form-select" id="existingCollections">
                        <option value="">اختر مجموعة</option>
                        <option value="1">كتب الحديث</option>
                        <option value="2">المراجع الأساسية</option>
                        <option value="3">كتب التفسير</option>
                    </select>
                </div>

                <div class="separatorModal pb-5">أو</div>

                <div class="mb-3">
                    <label class="form-label">إنشاء مجموعة جديدة</label>
                    <input type="text" class="form-control mb-3" placeholder="اسم المجموعة الجديدة">
                    <input type="text" class="form-control" placeholder="وصف المجموعة (اختياري)">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                <button type="button" class="btn btn-primary" id="saveCollection">حفظ</button>
            </div>
        </div>
    </div>
</div>

<style>
    .categories-section {
        min-height: 100vh;
    }

    .main-title {
        font-size: 4.5rem;
        font-weight: 800;
        -webkit-background-clip: text;
        position: relative;
        margin-bottom: 2rem;
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
    }

    .category-wrapper {
        border-radius: 2rem;
        padding: 3rem;
        position: relative;
        overflow: hidden;
        transition: all 0.5s ease;
        cursor: pointer;
    }

    .category-wrapper:hover {
        border-color: rgba(255, 215, 0, 0.3);
        transform: translateY(-5px);
    }

    .premium-glow {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, rgba(255, 215, 0, 0.5), transparent);
        animation: shimmerEffect 2s infinite;
    }

    .main-icon-wrapper {
        width: 140px;
        height: 140px;
        margin: 0 auto;
        background: rgba(255, 215, 0, 0.05);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 3.5rem;
        position: relative;
        color: #ffd700;
        border: 2px solid rgba(255, 215, 0, 0.1);
    }

    .icon-ring {
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 2px solid var(--gold);
        animation: pulseRing 2s cubic-bezier(0.455, 0.03, 0.515, 0.955) infinite;
    }

    /* Animations */
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
            transform: scale(1.2);
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

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .main-title {
            font-size: 3rem;
        }

        .elegant-subtitle {
            font-size: 1.4rem;
        }

        .category-wrapper {
            padding: 2rem;
        }

        .main-icon-wrapper {
            width: 100px;
            height: 100px;
            font-size: 2.5rem;
        }
    }

    /* Card Specific Styles */
    .card {
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card-title {
        font-size: 1.5rem;
        margin-bottom: 0.5rem;
    }

    .badge {
        font-size: 0.8rem;
        padding: 0.5em 1em;
    }

    /* Image container specific styles */
    .col-md-4 {
        display: flex;
        align-items: center;
        justify-content: center;
    }

</style>
