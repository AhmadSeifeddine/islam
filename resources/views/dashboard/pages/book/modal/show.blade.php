<div class="d-flex flex-column">
    <div class="row g-4">
        {{-- Book Title Section with Hero Style --}}
        <div class="col-12">
            <div class="card bg-light border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center gap-4">
                        <div class="rounded-circle bg-primary bg-opacity-10 p-3">
                            <i class="bi bi-book fs-1 text-primary"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h3 class="mb-1">{{ $book->name }}</h3>
                            <p class="text-muted mb-0 d-flex align-items-center">
                                <i class="bi bi-bookmark me-2"></i>{{ $book->genre }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Scholar Info Section --}}
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="avatar-wrapper mb-5">
                            @if ($book->scholar->getMedia('avatar')->first()?->getUrl())
                                <img src="{{ $book->scholar->getMedia('avatar')->first()?->getUrl() }}"
                                    class="rounded-circle" style="width: 60px; height: 60px; object-fit: cover;"
                                    alt="{{ $book->scholar->name }}">
                            @else
                                <div class="rounded-circle bg-secondary bg-opacity-10 d-flex align-items-center justify-content-center"
                                    style="width: 60px; height: 60px;">
                                    <i class="bi bi-person fs-3 text-secondary"></i>
                                </div>
                            @endif
                        </div>
                        <div>
                            <h5 class="mb-1">{{ $book->scholar->name }}</h5>
                            <p class="text-muted mb-0"><i class="bi bi-pen me-2"></i>Author</p>
                        </div>
                    </div>

                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label fw-bold d-flex align-items-center">
                                    <i class="bi bi-calendar-event me-2 text-primary"></i>Publication Date
                                </label>
                                <p class="text-gray-800 mb-0 ps-4">{{ $book->publication_date }}</p>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold d-flex align-items-center">
                                    <i class="bi bi-tag me-2 text-primary"></i>Category
                                </label>
                                <p class="text-gray-800 mb-0 ps-4">{{ $book->category->name }}</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label fw-bold d-flex align-items-center">
                                    <i class="bi bi-globe me-2 text-primary"></i>Language
                                </label>
                                <p class="text-gray-800 mb-0 ps-4">{{ $book->language }}</p>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold d-flex align-items-center">
                                    <i class="bi bi-check-circle me-2 text-primary"></i>Status
                                </label>
                                <p class="text-gray-800 mb-0 ps-4">
                                    <span
                                        class="badge bg-{{ $book->status === 'active' ? 'success' : 'warning' }} rounded-pill">
                                        <i class="bi bi-circle-fill me-1 small"></i>{{ ucfirst($book->status) }}
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Description Section --}}
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-3 d-flex align-items-center text-primary">
                        <i class="bi bi-text-paragraph me-2"></i>Description
                    </h5>
                    <div class="bg-light p-4 rounded">
                        <p class="text-gray-800 mb-0">{{ $book->description }}</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Footer Info --}}
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center text-muted small px-2">
                <span>
                    <i class="bi bi-clock-history me-1"></i>
                    Created {{ $book->created_at->diffForHumans() }}
                </span>
                <span>
                    <i class="bi bi-hash me-1"></i>
                    ID: {{ $book->id }}
                </span>
            </div>
        </div>
    </div>
</div>
