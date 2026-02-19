<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share the authenticated user as `$user` in all views to avoid
        // 'Undefined variable $user' errors in layouts that expect it.
        View::composer('*', function ($view) {
            $view->with('user', Auth::user());
        });
    }
}
