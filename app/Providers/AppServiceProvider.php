<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\WebsiteSetting;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use App\Models\Brand;

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
        // Share the settings data with all views
        View::composer('*', function ($view) {
            // Example settings data (this could come from a database or config)
            $website_settings = WebsiteSetting::first();
            $categories=Category::all();
            $brands=Brand::all();
            $features=config('data.features',[]);
            // Share settings with the view (including the x-hero component)
            $view->with([
                'website_settings' => $website_settings,
                'categories' => $categories,
                'brands'=>$brands,
                'features'=>$features,
            ]);
            
        });
    }
}
