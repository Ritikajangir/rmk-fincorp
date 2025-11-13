<?php

namespace App\Providers;

use App\Models\GeneralSetting;
use App\Models\HomePageContent;
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
            $pages = Page::where('slug', '!=', 'about-us')->where('status', 1)->get();
            $view->with('pages', $pages);
        });

        View::composer('*', function ($view) {
            $settings = GeneralSetting::first(); 
            $view->with('settings', $settings);
        });

        View::composer('*', function ($view) {
            $homePageContent = HomePageContent::first();
            $view->with('homePageContent', $homePageContent);
        });
    }
}
