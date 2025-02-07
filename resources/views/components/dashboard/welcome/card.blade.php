@props(['title', 'value', 'icon' => 'fas fa-arrow-up', 'color' => 'success', 'percentage' => 0])

<div class="col-xl-3 col-md-6">
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <h5 class="card-title text-muted mb-0">{{ $title }}</h5>
            <h2 class="mt-2 mb-0">{{ $value }}</h2>
            <p class="text-success mb-0"><i class="fas fa-arrow-up"></i> {{ $percentage }}
                Increase</p>
        </div>
    </div>
</div>
