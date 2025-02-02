<div class="container-fluid px-0 mb-15">
    <div class="container position-relative">

       <x-title title="تواصل" coloredTitle="معنا" subTitle="نسعى جاهدين لإثراء المحتوى العربي وتسهيل الوصول إلى المعرفة" />

        <div class="row justify-content-center mt-6">
            <div class="col-xl-10">
                <div class="card border-0 shadow-lg position-relative overflow-hidden">
                    <div class="position-absolute top-0 start-0 w-100 h-100"
                        style="background: linear-gradient(45deg, transparent, rgba(255, 193, 7, 0.05));">
                        <div class="position-absolute top-0 end-0" style="width: 300px; height: 300px;">
                            <svg viewBox="0 0 200 200" style="opacity: 0.05">
                                <defs>
                                    <pattern id="grid" width="20" height="20" patternUnits="userSpaceOnUse">
                                        <path d="M 20 0 L 0 0 0 20" fill="none" stroke="#ffc107" stroke-width="0.5" />
                                    </pattern>
                                </defs>
                                <rect width="100%" height="100%" fill="url(#grid)" />
                            </svg>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <div class="row g-0">


                            <div class="col-lg-4 order-lg-1">
                                <div class="bg-light rounded-4 p-4 shadow-sm mb-4">
                                    <!-- Section Header -->
                                    <div class="position-relative mb-5">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-warning bg-opacity-10 rounded-circle p-3 me-3">
                                                <i class="fas fa-address-card text-warning fs-5"></i>
                                            </div>
                                            <div class="me-3">
                                                <h3 class="fw-bold mb-2 fs-4">معلومات التواصل</h3>
                                                <p class="text-muted mb-0 fs-5">نحن هنا لمساعدتك</p>
                                            </div>
                                        </div>
                                        <div class="position-absolute bottom-0 start-0 w-25 h-2 bg-warning"></div>
                                    </div>

                                    <!-- Contact Cards Container -->
                                    <div class="contact-cards">
                                        <!-- Email Card -->
                                        <div
                                            class="bg-warning bg-opacity-5 rounded-3 p-4 border border-warning border-opacity-25 border-2 border-dashed hover-shadow transition-all mb-4">
                                            <div class="d-flex align-items-center">

                                                <div>
                                                    <h5 class="fw-bold mb-2 fs-4">البريد الإلكتروني</h5>
                                                    <a href="mailto:HADITH@GMAIL.COM"
                                                        class="text-primary text-decoration-none d-flex align-items-center fs-5">
                                                        HADITH@GMAIL.COM
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="progress mt-3" style="height: 2px;">
                                                <div class="progress-bar" role="progressbar"
                                                    style="width: 70%"></div>
                                            </div>
                                        </div>

                                        <!-- Phone Card -->
                                        <div
                                            class="bg-warning bg-opacity-5 rounded-3 p-4 border border-warning border-opacity-25 border-2 border-dashed hover-shadow transition-all mb-4">
                                            <div class="d-flex align-items-center">

                                                <div>
                                                    <h5 class="fw-bold mb-2 fs-4">رقم الهاتف</h5>
                                                    <a href="tel:18335977538"
                                                        class="text-danger text-decoration-none d-flex align-items-center fs-5">
                                                        1 (833) 597-7538
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="progress mt-3" style="height: 2px;">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                    style="width: 70%"></div>
                                            </div>
                                        </div>

                                        <!-- Working Hours Card -->
                                        <div
                                            class="bg-warning bg-opacity-5 rounded-3 p-4 border border-warning border-opacity-25 border-2 border-dashed hover-shadow transition-all">
                                            <div class="d-flex align-items-center mb-4">

                                                <div>
                                                    <h5 class="fw-bold mb-2 fs-4">أوقات الإجابة</h5>
                                                </div>
                                            </div>

                                            <div class="working-hours-grid">
                                                <div
                                                    class="d-flex justify-content-between align-items-center bg-info bg-opacity-10 rounded-3 p-3 text-center h-100 mb-2">
                                                    <span class="text-info fs-5">السبت - الخميس</span>
                                                    <span class="fw-bold badge bg-success bg-opacity-10 rounded-3 p-3 text-success h-100 fs-5">24/7</span>
                                                </div>
                                                <div
                                                    class="d-flex justify-content-between align-items-center bg-info bg-opacity-10 rounded-3 p-3 text-center h-100">
                                                    <span class="text-info fs-5">الجمعة</span>
                                                    <span class="fw-bold badge bg-success bg-opacity-10 rounded-3 p-3 text-success h-100 fs-5">24/7</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="col-lg-8 order-lg-2">
                                <div class="p-5">
                                    <div class="d-flex align-items-center mb-5">
                                        <div class="bg-warning bg-opacity-10 rounded-circle p-3 me-3">
                                            <i class="fas fa-envelope text-warning fs-5"></i>
                                        </div>
                                        <div class="me-3">
                                            <h3 class="fw-bold mb-1 fs-4">أرسل لنا رسالة</h3>
                                            <p class="text-muted mb-0 fs-5">نحن هنا للإجابة على استفساراتك</p>
                                        </div>
                                    </div>

                                    <form id="kt_contact_form" class="needs-validation" novalidate>
                                        <div class="row g-4">
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text"
                                                        class="form-control form-control-lg border-0 bg-light"
                                                        id="nameInput" placeholder="الاسم" required>
                                                    <label for="nameInput" class="text-muted fs-5">الاسم</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="email"
                                                        class="form-control form-control-lg border-0 bg-light"
                                                        id="emailInput" placeholder="البريد الإلكتروني" required>
                                                    <label for="emailInput" class="text-muted fs-5">البريد الإلكتروني</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <input type="text"
                                                        class="form-control form-control-lg border-0 bg-light"
                                                        id="subjectInput" placeholder="الموضوع" required>
                                                    <label for="subjectInput" class="text-muted fs-5">الموضوع</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <textarea class="form-control form-control-lg border-0 bg-light"
                                                        placeholder="رسالتك" id="messageInput" style="height: 200px"
                                                        required></textarea>
                                                    <label for="messageInput" class="text-muted fs-5">رسالتك</label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button type="submit" class="btn-bg-logo w-100"
                                                    style="background: linear-gradient(135deg, #ffc107 0%, #ffdb4d 100%);">
                                                    <span class="position-relative z-1 fs-5">
                                                        إرسال الرسالة
                                                    </span>
                                                    <div class="position-absolute top-0 start-0 w-100 h-100 opacity-0 hover-opacity-10 transition-opacity"
                                                        style="background: linear-gradient(135deg, #ffdb4d 0%, #ffc107 100%);">
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
