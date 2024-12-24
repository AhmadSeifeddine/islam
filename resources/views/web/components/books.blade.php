<div class="container mb-20 pb-10">
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center mb-5">
            <h2 class="display-3 fw-bold mb-4">مقترحات <span class="gold">الكتب</span></h2>
            <p class="lead text-body-secondary">نسعى جاهدين لإثراء المحتوى العربي وتسهيل الوصول إلى المعرفة لكل
                متحدثي اللغة العربية</p>
        </div>
    </div>

    <!-- Swiper -->
    <div class="swiper booksSwiper">
        <div class="swiper-wrapper">
            <!-- First Card -->
            <div class="swiper-slide">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-5">
                        <div class="row g-5 align-items-stretch">
                            <!-- Image Column -->
                            <div class="col-sm-6">
                                <div class="position-relative h-100">
                                    <div class="card-rounded h-100" style="border-radius: 8px; overflow: hidden;">
                                        <img src="{{ asset('vendor/img/logo/1.jpg') }}" alt="صورة الكتاب"
                                            style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                </div>
                            </div>

                            <!-- Content Column -->
                            <div class="col-sm-6">
                                <div class="d-flex flex-column h-100">
                                    <!-- Header Section -->
                                    <div class="mb-5">
                                        <div class="mb-4">
                                            <span class="text-primary fw-bold fs-7 mb-2 d-block">
                                                الإسم
                                            </span>
                                            <h2 class="display-6 fw-bolder mb-0">صحيح البخاري</h2>
                                        </div>

                                        <!-- Author Info -->
                                        <div
                                            class="bg-light bg-opacity-75 rounded-4 p-4 mt-4 border-start border-5 border-primary">
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
                                            إسماعيل
                                            البخاري ويضم أحاديث صحيحة مرتبة وفق الموضوعات الفقهية. يُعد مرجعًا رئيسيًا
                                            في
                                            السنة النبوية بعد القرآن الكريم.
                                        </p>

                                        <div class="row g-4">
                                            <div class="col-6">
                                                <div
                                                    class="bg-success bg-opacity-10 rounded-4 p-4 h-100 border-start border-3 border-success">
                                                    <div class="text-success fw-semibold mb-2">
                                                        تاريخ النشر:
                                                    </div>
                                                    <div class="fw-bold">6 فبراير 2021</div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div
                                                    class="bg-danger bg-opacity-10 rounded-4 p-4 h-100 border-start border-3 border-danger">
                                                    <div class="text-danger fw-semibold mb-2">
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
                                            <button class="btn btn-light action-btn p-3 rounded-3"
                                                data-action="readLater" data-bs-toggle="tooltip" title="قراءة لاحقاً">
                                                <i class="fas fa-bookmark fs-5" style="padding: 0px"></i>
                                            </button>

                                            <button class="btn btn-light action-btn p-3 rounded-3"
                                                data-action="favorite" data-bs-toggle="tooltip" title="إضافة للمفضلة">
                                                <i class="fas fa-heart fs-5" style="padding: 0px"></i>
                                            </button>

                                            <button class="btn btn-light action-btn p-3 rounded-3"
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

            <!-- Second Card -->
            <div class="swiper-slide">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-5">
                        <div class="row g-5 align-items-stretch">
                            <!-- Image Column -->
                            <div class="col-sm-6">
                                <div class="position-relative h-100">
                                    <div class="card-rounded h-100" style="border-radius: 8px; overflow: hidden;">
                                        <img src="{{ asset('vendor/img/logo/2.webp') }}" alt="صورة الكتاب"
                                            style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                </div>
                            </div>

                            <!-- Content Column -->
                            <div class="col-sm-6">
                                <div class="d-flex flex-column h-100">
                                    <!-- Header Section -->
                                    <div class="mb-5">
                                        <div class="mb-4">
                                            <span class="text-primary fw-bold fs-7 mb-2 d-block">
                                                الإسم
                                            </span>
                                            <h2 class="display-6 fw-bolder mb-0">صحيح البخاري</h2>
                                        </div>

                                        <!-- Author Info -->
                                        <div
                                            class="bg-light bg-opacity-75 rounded-4 p-4 mt-4 border-start border-5 border-primary">
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
                                            البخاري ويضم أحاديث صحيحة مرتبة وفق الموضوعات الفقهية. يُعد مرجعًا رئيسيًا
                                            في
                                            السنة النبوية بعد القرآن الكريم.
                                        </p>

                                        <div class="row g-4">
                                            <div class="col-6">
                                                <div
                                                    class="bg-success bg-opacity-10 rounded-4 p-4 h-100 border-start border-3 border-success">
                                                    <div class="text-success fw-semibold mb-2">
                                                        تاريخ النشر:
                                                    </div>
                                                    <div class="fw-bold">6 فبراير 2021</div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div
                                                    class="bg-danger bg-opacity-10 rounded-4 p-4 h-100 border-start border-3 border-danger">
                                                    <div class="text-danger fw-semibold mb-2">
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
                                            <button class="btn btn-light action-btn p-3 rounded-3"
                                                data-action="readLater" data-bs-toggle="tooltip"
                                                title="قراءة لاحقاً">
                                                <i class="fas fa-bookmark fs-5" style="padding: 0px"></i>
                                            </button>

                                            <button class="btn btn-light action-btn p-3 rounded-3"
                                                data-action="favorite" data-bs-toggle="tooltip"
                                                title="إضافة للمفضلة">
                                                <i class="fas fa-heart fs-5" style="padding: 0px"></i>
                                            </button>

                                            <button class="btn btn-light action-btn p-3 rounded-3"
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


            <!-- Second Card -->
            <div class="swiper-slide">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-5">
                        <div class="row g-5 align-items-stretch">
                            <!-- Image Column -->
                            <div class="col-sm-6">
                                <div class="position-relative h-100">
                                    <div class="card-rounded h-100" style="border-radius: 8px; overflow: hidden;">
                                        <img src="{{ asset('vendor/img/logo/2.webp') }}" alt="صورة الكتاب"
                                            style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                </div>
                            </div>

                            <!-- Content Column -->
                            <div class="col-sm-6">
                                <div class="d-flex flex-column h-100">
                                    <!-- Header Section -->
                                    <div class="mb-5">
                                        <div class="mb-4">
                                            <span class="text-primary fw-bold fs-7 mb-2 d-block">
                                                الإسم
                                            </span>
                                            <h2 class="display-6 fw-bolder mb-0">صحيح البخاري</h2>
                                        </div>

                                        <!-- Author Info -->
                                        <div
                                            class="bg-light bg-opacity-75 rounded-4 p-4 mt-4 border-start border-5 border-primary">
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
                                            البخاري ويضم أحاديث صحيحة مرتبة وفق الموضوعات الفقهية. يُعد مرجعًا رئيسيًا
                                            في
                                            السنة النبوية بعد القرآن الكريم.
                                        </p>

                                        <div class="row g-4">
                                            <div class="col-6">
                                                <div
                                                    class="bg-success bg-opacity-10 rounded-4 p-4 h-100 border-start border-3 border-success">
                                                    <div class="text-success fw-semibold mb-2">
                                                        تاريخ النشر:
                                                    </div>
                                                    <div class="fw-bold">6 فبراير 2021</div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div
                                                    class="bg-danger bg-opacity-10 rounded-4 p-4 h-100 border-start border-3 border-danger">
                                                    <div class="text-danger fw-semibold mb-2">
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
                                            <button class="btn btn-light action-btn p-3 rounded-3"
                                                data-action="readLater" data-bs-toggle="tooltip"
                                                title="قراءة لاحقاً">
                                                <i class="fas fa-bookmark fs-5" style="padding: 0px"></i>
                                            </button>

                                            <button class="btn btn-light action-btn p-3 rounded-3"
                                                data-action="favorite" data-bs-toggle="tooltip"
                                                title="إضافة للمفضلة">
                                                <i class="fas fa-heart fs-5" style="padding: 0px"></i>
                                            </button>

                                            <button class="btn btn-light action-btn p-3 rounded-3"
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


            <!-- Second Card -->
            <div class="swiper-slide">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-5">
                        <div class="row g-5 align-items-stretch">
                            <!-- Image Column -->
                            <div class="col-sm-6">
                                <div class="position-relative h-100">
                                    <div class="card-rounded h-100" style="border-radius: 8px; overflow: hidden;">
                                        <img src="{{ asset('vendor/img/logo/2.webp') }}" alt="صورة الكتاب"
                                            style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                </div>
                            </div>

                            <!-- Content Column -->
                            <div class="col-sm-6">
                                <div class="d-flex flex-column h-100">
                                    <!-- Header Section -->
                                    <div class="mb-5">
                                        <div class="mb-4">
                                            <span class="text-primary fw-bold fs-7 mb-2 d-block">
                                                الإسم
                                            </span>
                                            <h2 class="display-6 fw-bolder mb-0">صحيح البخاري</h2>
                                        </div>

                                        <!-- Author Info -->
                                        <div
                                            class="bg-light bg-opacity-75 rounded-4 p-4 mt-4 border-start border-5 border-primary">
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
                                            البخاري ويضم أحاديث صحيحة مرتبة وفق الموضوعات الفقهية. يُعد مرجعًا رئيسيًا
                                            في
                                            السنة النبوية بعد القرآن الكريم.
                                        </p>

                                        <div class="row g-4">
                                            <div class="col-6">
                                                <div
                                                    class="bg-success bg-opacity-10 rounded-4 p-4 h-100 border-start border-3 border-success">
                                                    <div class="text-success fw-semibold mb-2">
                                                        تاريخ النشر:
                                                    </div>
                                                    <div class="fw-bold">6 فبراير 2021</div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div
                                                    class="bg-danger bg-opacity-10 rounded-4 p-4 h-100 border-start border-3 border-danger">
                                                    <div class="text-danger fw-semibold mb-2">
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
                                            <button class="btn btn-light action-btn p-3 rounded-3"
                                                data-action="readLater" data-bs-toggle="tooltip"
                                                title="قراءة لاحقاً">
                                                <i class="fas fa-bookmark fs-5" style="padding: 0px"></i>
                                            </button>

                                            <button class="btn btn-light action-btn p-3 rounded-3"
                                                data-action="favorite" data-bs-toggle="tooltip"
                                                title="إضافة للمفضلة">
                                                <i class="fas fa-heart fs-5" style="padding: 0px"></i>
                                            </button>

                                            <button class="btn btn-light action-btn p-3 rounded-3"
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
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
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

