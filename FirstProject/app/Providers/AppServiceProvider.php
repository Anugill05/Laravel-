<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        //
        // view::share('name','My name is Anu');
        // view::share('header','This is a navigation bar');
        // view::share('footer','This is copyright info');
        view::composer('*',function($view)
        {
            $time=date('H:i:s');
            $view->with('time',$time);
        });
    }
}
