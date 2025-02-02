<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewComposerServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        View::composer('dashboard.common.sidebar', function ($view) {
            $user = auth()->user();
            $allPermissions = $user->allPermissions();
            $permissionNames = $allPermissions->pluck('name')->toArray();

            $sidebarData = [
                'permissions' => [
                    'writing_view' => in_array('writing_view', $permissionNames),
                    'categories_view' => in_array('categories_view', $permissionNames),
                    'scholars_view' => in_array('scholars_view', $permissionNames),
                    'youtubes_view' => in_array('youtubes_view', $permissionNames),
                    'books_view' => in_array('books_view', $permissionNames),
                ],
                'roles' => [
                    'is_super_admin' => $user->hasRole('super_admin'),
                    'is_admin' => $user->hasRole(['admin', 'super_admin']),
                ]
            ];

            $view->with('sidebarData', $sidebarData);
        });
    }
}
