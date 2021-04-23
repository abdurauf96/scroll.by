<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('sections.header', function($view){
            $portfolio_categories=\App\Models\ProjectCategory::all();
            $services=\App\Models\Service::all();
            $view->with(compact('portfolio_categories', 'services'));
        });

        view()->composer('sections.form', function($view){
            $services=\App\Models\Service::all();
            $view->with(compact('services'));
        });

        view()->composer('layouts.app', function($view){
            $services=\App\Models\Service::all();
            $view->with(compact('services'));
        });
    }
}
