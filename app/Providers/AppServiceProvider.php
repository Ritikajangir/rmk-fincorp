<?php

namespace App\Providers;

use App\Models\GeneralSetting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Page;

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
        View::composer('*', function ($view) {
            $pages = Page::where('slug', '!=', 'about-us')->get();
            $view->with('pages', $pages);
        });

        View::composer('*', function ($view) {
            $settings = GeneralSetting::first(); // Assuming only one row for settings
            $view->with('settings', $settings);
        });
    }
}
