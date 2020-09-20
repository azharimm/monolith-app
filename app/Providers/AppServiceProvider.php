<?php

namespace App\Providers;

use Inertia\Inertia;
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
        Inertia::share('errors', function () {
            return session()->get('errors') ? session()->get('errors')->getBag('default')->getMessages() : (object)[];
        });
        Inertia::share('success', function () {
            return session()->get('success') ? session()->get('success') : null;
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
