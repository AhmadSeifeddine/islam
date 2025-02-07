@props(['data'])

<div class="card shadow rounded-4 overflow-hidden">
    <!-- Video Container -->
    <div class="ratio ratio-16x9">
        <iframe src="{{ $data['url'] ?? '' }}" allowfullscreen class="rounded-top"></iframe>
    </div>

    <!-- Content Section -->
    <div class="card-body p-4">
        <!-- Header Section -->
        <div class="d-flex justify-content-between align-items-start mb-4">
            <div>
                <h2 class="h4 fw-bold mb-2">{{ $data['title'] ?? 'عنوان الفيديو' }}</h2>
                <p class="text-muted mb-0">تم النشر: {{ $data['created_at'] ?? 'غير متوفر' }} </p>
            </div>
            {{-- <span class="badge bg-primary-subtle text-primary px-3">{{ $data['category']['name'] ?? 'عام' }}</span> --}}
            <x-box.category>{{ $data['category']['name'] }}</x-box.category>
        </div>

        <!-- Scholar Info -->
        <div class="bg-light rounded-4 p-4 mb-4">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <h5 class="fw-bold mb-1">
                        {{ $data['scholar']['name'] ?? 'اسم الشيخ' }}
                    </h5>
                </div>
            </div>
        </div>

        <!-- Social Links -->
        <div class="row g-3 mb-4">
            <div class="col-6 col-md-3">
                <a href="{{ $data['scholar']['facebook_url'] ?? '#' }}" target="_blank" class="text-decoration-none">
                    <div class="bg-primary bg-opacity-10 rounded-3 p-3 text-center h-100">
                        <h6 class="text-primary mb-0">فيسبوك</h6>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="{{ $data['scholar']['telegram_url'] ?? '#' }}" target="_blank" class="text-decoration-none">
                    <div class="bg-info bg-opacity-10 rounded-3 p-3 text-center h-100">
                        <h6 class="text-info mb-0">تلغرام</h6>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="{{ $data['scholar']['instagram_url'] ?? '#' }}" target="_blank" class="text-decoration-none">
                    <div class="bg-danger bg-opacity-10 rounded-3 p-3 text-center h-100">
                        <h6 class="text-danger mb-0">انستغرام</h6>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="{{ $data['scholar']['website_url'] ?? '#' }}" target="_blank" class="text-decoration-none">
                    <div class="bg-success bg-opacity-10 rounded-3 p-3 text-center h-100">
                        <h6 class="text-success mb-0">ويب سايت</h6>
                    </div>
                </a>
            </div>
        </div>

        <div class="mt-5 d-flex justify-content-end align-items-center">
            <div class="d-flex gap-2 ms-0">
                <x-box.action />
            </div>
        </div>
    </div>
</div>
