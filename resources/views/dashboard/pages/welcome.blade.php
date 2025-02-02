@extends('dashboard.layout.index')
@section('content')
    <div class="container-fluid p-4">
        <div class="row mb-4">
            <div class="col-12">
                <h1 class="display-4 fw-bold">Welcome Back</h1>
                <p class="text-muted">Here's an overview of your dashboard</p>


                <div class="d-flex justify-content-start flex-wrap gap-3">
                    <a href="{{ route('dashboard.users.index') }}"
                        class="btn {{ !$permissions['users_view'] ? 'disabled btn-danger' : 'btn-primary' }}">
                        @if (!$permissions['users_view'])
                            <i class="fas fa-lock me-1"></i>
                            <span style="filter: blur(1px)">Manage Users</span>
                        @else
                            <i class="fas fa-lock-open me-1"></i>
                            Manage Users
                        @endif
                    </a>
                    <a href="{{ route('dashboard.books.index') }}"
                        class="btn {{ !$permissions['books_view'] ? 'disabled btn-danger' : 'btn-primary' }}">
                        @if (!$permissions['books_view'])
                            <i class="fas fa-lock me-1"></i>
                            <span style="filter: blur(1px)">Manage Books</span>
                        @else
                            <i class="fas fa-lock-open me-1"></i>
                            Manage Books
                        @endif
                    </a>
                    <a href="{{ route('dashboard.books.explanations.index') }}"
                        class="btn {{ !$permissions['books_view'] ? 'disabled btn-danger' : 'btn-primary' }}">
                        @if (!$permissions['books_view'])
                            <i class="fas fa-lock me-1"></i>
                            <span style="filter: blur(1px)">Manage Book Explanations</span>
                        @else
                            <i class="fas fa-lock-open me-1"></i>
                            Manage Book Explanations
                        @endif
                    </a>
                    <a href="{{ route('dashboard.youtubes.index') }}"
                        class="btn {{ !$permissions['youtubes_view'] ? 'disabled btn-danger' : 'btn-primary' }}">
                        @if (!$permissions['youtubes_view'])
                            <i class="fas fa-lock me-1"></i>
                            <span style="filter: blur(1px)">Manage Youtube Videos</span>
                        @else
                            <i class="fas fa-lock-open me-1"></i>
                            Manage Youtube Videos
                        @endif
                    </a>
                    <a href="{{ route('dashboard.writing.index') }}"
                        class="btn {{ !$permissions['writing_view'] ? 'disabled btn-danger' : 'btn-primary' }}">
                        @if (!$permissions['writing_view'])
                            <i class="fas fa-lock me-1"></i>
                            <span style="filter: blur(1px)">Manage Articles</span>
                        @else
                            <i class="fas fa-lock-open me-1"></i>
                            Manage Articles
                        @endif
                    </a>
                    <a href="{{ route('dashboard.categories.index') }}"
                        class="btn {{ !$permissions['categories_view'] ? 'disabled btn-danger' : 'btn-primary' }}">
                        @if (!$permissions['categories_view'])
                            <i class="fas fa-lock me-1"></i>
                            <span style="filter: blur(1px)">Manage Categories</span>
                        @else
                            <i class="fas fa-lock-open me-1"></i>
                            Manage Categories
                        @endif
                    </a>
                    <a href="{{ route('dashboard.scholars.index') }}"
                        class="btn {{ !$permissions['scholars_view'] ? 'disabled btn-danger' : 'btn-primary' }}">
                        @if (!$permissions['scholars_view'])
                            <i class="fas fa-lock me-1"></i>
                            <span style="filter: blur(1px)">Manage Scholars</span>
                        @else
                            <i class="fas fa-lock-open me-1"></i>
                            Manage Scholars
                        @endif
                    </a>
                </div>
            </div>
            <!-- Information added by you -->
            <div class="row mt-12">
                <div class="col-12">
                    <span class="fw-bold">Information added by you</span>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <!-- Quick Stats Cards -->
            <div class="col-xl-3 col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-muted mb-0">Scholars</h5>
                        <h2 class="mt-2 mb-0">{{ $statistics['scholars'] }}</h2>
                        <p class="text-success mb-0"><i class="fas fa-arrow-up"></i> {{ $statistics['today_scholars'] }}
                            increase</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-muted mb-0">Books</h5>
                        <h2 class="mt-2 mb-0">{{ $statistics['books'] }}</h2>
                        <p class="text-success mb-0"><i class="fas fa-arrow-up"></i> {{ $statistics['today_books'] }}
                            increase</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-muted mb-0">Articles</h5>
                        <h2 class="mt-2 mb-0">{{ $statistics['today_articles'] }}</h2>
                        <p class="text-success mb-0"><i class="fas fa-arrow-up"></i> {{ $statistics['today_articles'] }}
                            increase</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-muted mb-0">Youtube videos</h5>
                        <h2 class="mt-2 mb-0">{{ $statistics['youtubes'] }}</h2>
                        <p class="text-success mb-0"><i class="fas fa-arrow-up"></i> {{ $statistics['today_youtubes'] }}
                            increase</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
