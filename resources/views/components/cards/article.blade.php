@props(['data'])

<div class="card shadow-lg border-0 h-100 rounded-4">
    <div class="card-body p-5">
        <div class="d-flex justify-content-between align-items-center mb-10">
            <span class="category-tag">{{ $data['category']['name'] }}</span>
            <div class="mt-auto d-flex justify-content-between align-items-center">

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
        <h3 class="card-title mb-4 fw-bold fs-3 mb-5">{{ $data['title'] }}</h3>
        <p class="card-text text-muted mb-5 fs-5">{{ $data['content'] }}</p>
        <div class="d-flex justify-content-between align-items-center mt-auto">
            <div>
                <h6 class="mb-2 fw-bold fs-5 mt-5">{{ $data['scholar']['name'] }}</h6>
                <small class="text-muted fs-6">{{ $dateFormat($data['created_at']) }}</small>
            </div>
            <x-button>اقرأ المزيد</x-button>
        </div>
    </div>
</div>
