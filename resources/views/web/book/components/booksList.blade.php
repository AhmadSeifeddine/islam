<div class="container py-7" dir="rtl">
    <div class="row justify-content-center mb-6">
        <div class="col-lg-8 text-center">
            <h2 class="display-2 fw-bold mb-4">كتب <span class="gold">إسلامية</span></h2>
            <p class="lead text-body-secondary fs-4 mb-0">اكتشف مجموعة متنوعة من الكتب الإسلامية القيمة من علماء
                وفقهاء موثوقين</p>
        </div>
    </div>

    <!-- Search & Filter Section -->
    <div class="row mb-6">
        <div class="col-lg-6 mb-3 mb-lg-0">
            <div class="card shadow-lg border-0 h-100 rounded-4">
                <input type="text" class="form-control border-0 shadow-sm py-3 px-4 fw-medium"
                    placeholder="ابحث عن مقال..." style="border-radius: 0.5rem;">
            </div>
        </div>
        <div class="col-lg-3 mb-3 mb-lg-0">
            <select class="form-select shadow-lg border-0 py-3 px-4 fw-medium">
                <option selected>تصنيف المقالات &nbsp;</option>
                <option value="1">العقيدة (24)</option>
                <option value="2">الفقه (18)</option>
                <option value="3">السيرة النبوية (15)</option>
                <option value="4">التفسير (21)</option>
                <option value="5">الأخلاق (12)</option>
                <option value="6">التزكية (16)</option>
            </select>
        </div>
        <div class="col-lg-3">
            <select class="form-select shadow-lg border-0 py-3 px-4 fw-medium">
                <option selected>تصفية حسب الكاتب &nbsp;</option>
                <option value="1">د. يوسف القرضاوي (8)</option>
                <option value="2">د. محمد راتب النابلسي (12)</option>
                <option value="3">د. عمر عبد الكافي (15)</option>
                <option value="4">د. عائض القرني (10)</option>
                <option value="5">د. طارق السويدان (7)</option>
                <option value="6">د. عمر المقبل (9)</option>
            </select>
        </div>
    </div>

    <!-- Books Grid -->
    <div class="row g-5">
        <!-- Book Card Template (repeated for each book) -->
        <div class="col-lg-6 col-md-12">
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
                                        <button class="btn btn-light action-btn p-3 rounded-3" data-action="readLater"
                                            data-bs-toggle="tooltip" title="قراءة لاحقاً">
                                            <i class="fas fa-bookmark fs-5" style="padding: 0px"></i>
                                        </button>

                                        <button class="btn btn-light action-btn p-3 rounded-3" data-action="favorite"
                                            data-bs-toggle="tooltip" title="إضافة للمفضلة">
                                            <i class="fas fa-heart fs-5" style="padding: 0px"></i>
                                        </button>

                                        <button class="btn btn-light action-btn p-3 rounded-3" data-action="collection"
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

        <div class="col-lg-6 col-md-12">
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
                                        <button class="btn btn-light action-btn p-3 rounded-3" data-action="readLater"
                                            data-bs-toggle="tooltip" title="قراءة لاحقاً">
                                            <i class="fas fa-bookmark fs-5" style="padding: 0px"></i>
                                        </button>

                                        <button class="btn btn-light action-btn p-3 rounded-3" data-action="favorite"
                                            data-bs-toggle="tooltip" title="إضافة للمفضلة">
                                            <i class="fas fa-heart fs-5" style="padding: 0px"></i>
                                        </button>

                                        <button class="btn btn-light action-btn p-3 rounded-3" data-action="collection"
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

        <div class="col-lg-6 col-md-12">
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
                                        <button class="btn btn-light action-btn p-3 rounded-3" data-action="readLater"
                                            data-bs-toggle="tooltip" title="قراءة لاحقاً">
                                            <i class="fas fa-bookmark fs-5" style="padding: 0px"></i>
                                        </button>

                                        <button class="btn btn-light action-btn p-3 rounded-3" data-action="favorite"
                                            data-bs-toggle="tooltip" title="إضافة للمفضلة">
                                            <i class="fas fa-heart fs-5" style="padding: 0px"></i>
                                        </button>

                                        <button class="btn btn-light action-btn p-3 rounded-3" data-action="collection"
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

        <div class="col-lg-6 col-md-12">
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
                                        <button class="btn btn-light action-btn p-3 rounded-3" data-action="readLater"
                                            data-bs-toggle="tooltip" title="قراءة لاحقاً">
                                            <i class="fas fa-bookmark fs-5" style="padding: 0px"></i>
                                        </button>

                                        <button class="btn btn-light action-btn p-3 rounded-3" data-action="favorite"
                                            data-bs-toggle="tooltip" title="إضافة للمفضلة">
                                            <i class="fas fa-heart fs-5" style="padding: 0px"></i>
                                        </button>

                                        <button class="btn btn-light action-btn p-3 rounded-3" data-action="collection"
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


