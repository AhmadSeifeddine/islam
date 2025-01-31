<div class="scholar-profile">
    {{-- Header Section with Profile Overview --}}
    <div class="card mb-4 border-0 ">
        <div class="card-body p-4">
            <div class="d-flex align-items-center mb-3">
                <div class="scholar-avatar me-4">
                    @if ($scholar->getFirstMediaUrl('avatar'))
                        <img src="{{ $scholar->getFirstMediaUrl('avatar') }}" alt="{{ $scholar->name }}"
                            class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
                    @else
                        <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center text-white"
                            style="width: 100px; height: 100px; font-size: 2.5rem;">
                            {{ strtoupper(substr($scholar->name, 0, 1)) }}
                        </div>
                    @endif
                </div>
                <div>
                    <h3 class="mb-1">{{ $scholar->name }}</h3>
                    @if ($scholar->nickname)
                        <p class="text-muted mb-2">{{ $scholar->nickname }}</p>
                    @endif
                    <div class="d-flex align-items-center">
                        @if ($scholar->nationality)
                            <span class="badge bg-info me-2">{{ $scholar->nationality }}</span>
                        @endif
                        <span class="badge {{ $scholar->status ? 'bg-success' : 'bg-danger' }}">
                            {{ $scholar->status ? 'Active' : 'Inactive' }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        {{-- Left Column --}}
        <div class="col-lg-4">
            {{-- Personal Information Card --}}
            <div class="card shadow-sm mb-4">
                <div class="card-header py-3">
                    <h5 class="card-title mb-0">
                        <i class="bi bi-person-circle me-2 text-primary"></i>Personal Information
                    </h5>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        <li class="mb-3">
                            <small class="text-muted d-block">Birth Date</small>
                            <strong>{{ $scholar->birth_date ?? 'Not specified' }}</strong>
                        </li>
                        @if ($scholar->death_date)
                            <li class="mb-3">
                                <small class="text-muted d-block">Death Date</small>
                                <strong>{{ $scholar->death_date }}</strong>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>

            {{-- Statistics Card --}}
            <div class="card shadow-sm mb-4">
                <div class="card-header py-3">
                    <h5 class="card-title mb-0">
                        <i class="bi bi-bar-chart me-2 text-primary"></i>Content Statistics
                    </h5>
                </div>
            </div>
        </div>

        {{-- Right Column --}}
        <div class="col-lg-8">
            {{-- Biography Card --}}
            @if ($scholar->biography)
                <div class="card shadow-sm mb-4">
                    <div class="card-header py-3">
                        <h5 class="card-title mb-0">
                            <i class="bi bi-book me-2 text-primary"></i>Biography
                        </h5>
                    </div>
                    <div class="card-body">
                        <p class="mb-0">{{ $scholar->biography }}</p>
                    </div>
                </div>
            @endif

            {{-- Social Media Card --}}
            <div class="card shadow-sm mb-4">
                <div class="card-header py-3">
                    <h5 class="card-title mb-0">
                        <i class="bi bi-share me-2 text-primary"></i>Social Media & Websites
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        @if ($scholar->website_url)
                            <div class="col-md-6">
                                <a href="{{ $scholar->website_url }}" target="_blank"
                                    class="d-flex align-items-center p-3 rounded text-decoration-none">
                                    <i class="bi bi-globe me-3 text-primary"></i>
                                    <span class="text-truncate">Website</span>
                                </a>
                            </div>
                        @endif

                        @if ($scholar->youtube_url)
                            <div class="col-md-6">
                                <a href="{{ $scholar->youtube_url }}" target="_blank"
                                    class="d-flex align-items-center p-3 rounded text-decoration-none">
                                    <i class="bi bi-youtube me-3 text-danger"></i>
                                    <span class="text-truncate">YouTube</span>
                                </a>
                            </div>
                        @endif

                        @if ($scholar->facebook_url)
                            <div class="col-md-6">
                                <a href="{{ $scholar->facebook_url }}" target="_blank"
                                    class="d-flex align-items-center p-3 rounded text-decoration-none">
                                    <i class="bi bi-facebook me-3 text-primary"></i>
                                    <span class="text-truncate">Facebook</span>
                                </a>
                            </div>
                        @endif

                        @if ($scholar->instagram_url)
                            <div class="col-md-6">
                                <a href="{{ $scholar->instagram_url }}" target="_blank"
                                    class="d-flex align-items-center p-3 rounded text-decoration-none">
                                    <i class="bi bi-instagram me-3 text-danger"></i>
                                    <span class="text-truncate">Instagram</span>
                                </a>
                            </div>
                        @endif

                        @if ($scholar->tiktok_url)
                            <div class="col-md-6">
                                <a href="{{ $scholar->tiktok_url }}" target="_blank"
                                    class="d-flex align-items-center p-3 rounded text-decoration-none">
                                    <i class="bi bi-tiktok me-3 text-dark"></i>
                                    <span class="text-truncate">TikTok</span>
                                </a>
                            </div>
                        @endif

                        @if ($scholar->telegram_url)
                            <div class="col-md-6">
                                <a href="{{ $scholar->telegram_url }}" target="_blank"
                                    class="d-flex align-items-center p-3 rounded text-decoration-none">
                                    <i class="bi bi-telegram me-3 text-info"></i>
                                    <span class="text-truncate">Telegram</span>
                                </a>
                            </div>
                        @endif

                        @if ($scholar->x_url)
                            <div class="col-md-6">
                                <a href="{{ $scholar->x_url }}" target="_blank"
                                    class="d-flex align-items-center p-3 rounded text-decoration-none">
                                    <i class="bi bi-twitter me-3 text-dark"></i>
                                    <span class="text-truncate">X (Twitter)</span>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            {{-- System Information Card --}}
            <div class="card shadow-sm">
                <div class="card-header e py-3">
                    <h5 class="card-title mb-0">
                        <i class="bi bi-info-circle me-2 text-primary"></i>System Information
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <small class="text-muted d-block mb-1">Created At</small>
                            <p class="mb-3">
                                <i class="bi bi-calendar-plus me-2"></i>
                                {{ $scholar->created_at->format('F d, Y H:i:s') }}
                            </p>
                        </div>
                        <div class="col-md-6">
                            <small class="text-muted d-block mb-1">Last Updated</small>
                            <p class="mb-0">
                                <i class="bi bi-calendar-check me-2"></i>
                                {{ $scholar->updated_at->format('F d, Y H:i:s') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Add required CSS --}}
<style>
    .scholar-profile .card {
        border-radius: 0.75rem;
        transition: transform 0.2s;
    }

    .scholar-profile .card:hover {
        transform: translateY(-2px);
    }

    .scholar-profile .badge {
        padding: 0.5em 1em;
        font-weight: 500;
    }

    .scholar-profile .list-unstyled li:last-child {
        margin-bottom: 0 !important;
    }

</style>
