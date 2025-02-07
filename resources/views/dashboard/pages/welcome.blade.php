@extends('dashboard.layout.index')
@section('content')
    <div class="container-fluid p-4">
        <div class="row mb-4">
            <div class="col-12">
                <h1 class="display-6 fw-bold">Welcome Back {{ $user->name }}</h1>
                <p class="text-muted">Here's an overview of your dashboard</p>


                <div class="d-flex justify-content-start flex-wrap gap-3">
                    <x-dashboard.welcome.button route="dashboard.users.index" permission="users_view" title="Manage Users" />

                    <x-dashboard.welcome.button route="dashboard.books.index" permission="books_view" title="Manage Books" />

                    <x-dashboard.welcome.button route="dashboard.books.explanations.index" permission="books_view"
                        title="Manage Book Explanations" />

                    <x-dashboard.welcome.button route="dashboard.youtubes.index" permission="youtubes_view"
                        title="Manage Youtube Videos" />

                    <x-dashboard.welcome.button route="dashboard.writing.index" permission="writing_view"
                        title="Manage Articles" />

                    <x-dashboard.welcome.button route="dashboard.categories.index" permission="categories_view"
                        title="Manage Categories" />

                    <x-dashboard.welcome.button route="dashboard.scholars.index" permission="scholars_view"
                        title="Manage Scholars" />
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
            <x-dashboard.welcome.card title="Scholars" value="{{ $statistics['scholars'] }}"
                percentage="{{ $statistics['today_scholars'] }}" />

            <x-dashboard.welcome.card title="Articles" value="{{ $statistics['today_articles'] }}"
                percentage="{{ $statistics['today_articles'] }}" />

            <x-dashboard.welcome.card title="Books" value="{{ $statistics['books'] }}"
                percentage="{{ $statistics['today_books'] }}" />

            <x-dashboard.welcome.card title="Youtube videos" value="{{ $statistics['youtubes'] }}"
                percentage="{{ $statistics['today_youtubes'] }}" />
        </div>
    </div>
@endsection
