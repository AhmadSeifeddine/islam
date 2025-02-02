<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:dashboard_access');
    }

    // In your WelcomeController or DashboardController
    public function index()
    {
        $user = auth()->user();
        $statistics = $user->adminWelcomeStatistics();

        // Get all permissions at once
        $allPermissions = $user->allPermissions();
        $permissionNames = $allPermissions->pluck('name')->toArray();

        $permissions = [
            'users_view' => in_array('users_view', $permissionNames),
            'books_view' => in_array('books_view', $permissionNames),
            'youtubes_view' => in_array('youtubes_view', $permissionNames),
            'writing_view' => in_array('writing_view', $permissionNames),
            'categories_view' => in_array('categories_view', $permissionNames),
            'scholars_view' => in_array('scholars_view', $permissionNames),
        ];

        return view('dashboard.pages.welcome', compact('user', 'statistics', 'permissions'));
    }
}
