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

        return view('dashboard.pages.welcome', compact('user', 'statistics'));
    }
}
