@extends('web.layouts.master')

@push('styles')
@endpush


@section('section')
    <!-- Akida Header Section -->
    <div class="container" dir="rtl">
        <x-title title="العقيدة" coloredTitle="الإسلامية"
            subTitle="تعرف على أصول العقيدة الإسلامية الصحيحة وفق منهج أهل السنة والجماعة من خلال كتابات العلماء الموثوقين" />

        <!-- Akida Grid -->
        <div class="row g-6">
            <!-- Article Card Template (repeated for each article) -->
            <div class="col-lg-4 col-md-6">
                <div class="card shadow border-0 h-100 rounded-3">
                    <div class="card-body p-5">
                        <div class="d-flex justify-content-between align-items-center mb-10">
                            <div class="mt-auto d-flex justify-content-between align-items-center">
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

                        <h3 class="card-title mb-4 fw-bold fs-3 mb-5">موقف الإسلام من العقل والعلم</h3>
                        <p class="card-text text-muted mb-5 fs-5">نظرة الإسلام للعقل ودوره في فهم الدين والحياة، دراسة
                            تحليلية معمقة...</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <div>
                                <h6 class="mb-2 fw-bold fs-5 mt-5">د. يوسف القرضاوي</h6>
                                <small class="text-muted fs-6">منذ 3 أيام</small>
                            </div>
                            <a href="#" class="btn-bg-logo">اقرأ المزيد</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card shadow border-0 h-100 rounded-3">
                    <div class="card-body p-5">
                        <div class="d-flex justify-content-between align-items-center mb-10">
                            <div class="mt-auto d-flex justify-content-between align-items-center">
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

                        <h3 class="card-title mb-4 fw-bold fs-3 mb-5">موقف الإسلام من العقل والعلم</h3>
                        <p class="card-text text-muted mb-5 fs-5">نظرة الإسلام للعقل ودوره في فهم الدين والحياة، دراسة
                            تحليلية معمقة...</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <div>
                                <h6 class="mb-2 fw-bold fs-5 mt-5">د. يوسف القرضاوي</h6>
                                <small class="text-muted fs-6">منذ 3 أيام</small>
                            </div>
                            <a href="#" class="btn-bg-logo">اقرأ المزيد</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card shadow border-0 h-100 rounded-3">
                    <div class="card-body p-5">
                        <div class="d-flex justify-content-between align-items-center mb-10">
                            <div class="mt-auto d-flex justify-content-between align-items-center">
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

                        <h3 class="card-title mb-4 fw-bold fs-3 mb-5">موقف الإسلام من العقل والعلم</h3>
                        <p class="card-text text-muted mb-5 fs-5">نظرة الإسلام للعقل ودوره في فهم الدين والحياة، دراسة
                            تحليلية معمقة...</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <div>
                                <h6 class="mb-2 fw-bold fs-5 mt-5">د. يوسف القرضاوي</h6>
                                <small class="text-muted fs-6">منذ 3 أيام</small>
                            </div>
                            <a href="#" class="btn-bg-logo">اقرأ المزيد</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card shadow border-0 h-100 rounded-3">
                    <div class="card-body p-5">
                        <div class="d-flex justify-content-between align-items-center mb-10">
                            <div class="mt-auto d-flex justify-content-between align-items-center">
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

                        <h3 class="card-title mb-4 fw-bold fs-3 mb-5">موقف الإسلام من العقل والعلم</h3>
                        <p class="card-text text-muted mb-5 fs-5">نظرة الإسلام للعقل ودوره في فهم الدين والحياة، دراسة
                            تحليلية معمقة...</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <div>
                                <h6 class="mb-2 fw-bold fs-5 mt-5">د. يوسف القرضاوي</h6>
                                <small class="text-muted fs-6">منذ 3 أيام</small>
                            </div>
                            <a href="#" class="btn-bg-logo">اقرأ المزيد</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card shadow border-0 h-100 rounded-3">
                    <div class="card-body p-5">
                        <div class="d-flex justify-content-between align-items-center mb-10">
                            <div class="mt-auto d-flex justify-content-between align-items-center">
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

                        <h3 class="card-title mb-4 fw-bold fs-3 mb-5">موقف الإسلام من العقل والعلم</h3>
                        <p class="card-text text-muted mb-5 fs-5">نظرة الإسلام للعقل ودوره في فهم الدين والحياة، دراسة
                            تحليلية معمقة...</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <div>
                                <h6 class="mb-2 fw-bold fs-5 mt-5">د. يوسف القرضاوي</h6>
                                <small class="text-muted fs-6">منذ 3 أيام</small>
                            </div>
                            <a href="#" class="btn-bg-logo">اقرأ المزيد</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card shadow border-0 h-100 rounded-3">
                    <div class="card-body p-5">
                        <div class="d-flex justify-content-between align-items-center mb-10">
                            <div class="mt-auto d-flex justify-content-between align-items-center">
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

                        <h3 class="card-title mb-4 fw-bold fs-3 mb-5">موقف الإسلام من العقل والعلم</h3>
                        <p class="card-text text-muted mb-5 fs-5">نظرة الإسلام للعقل ودوره في فهم الدين والحياة، دراسة
                            تحليلية معمقة...</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <div>
                                <h6 class="mb-2 fw-bold fs-5 mt-5">د. يوسف القرضاوي</h6>
                                <small class="text-muted fs-6">منذ 3 أيام</small>
                            </div>
                            <a href="#" class="btn-bg-logo">اقرأ المزيد</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection


@push('scripts')
@endpush
