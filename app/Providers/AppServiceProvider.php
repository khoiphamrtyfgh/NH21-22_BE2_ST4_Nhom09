<?php

namespace App\Providers;
use App\Helper\CartHelper;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\pagination\paginator;


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
        view()->composer('*',function($view){
            $view->with([
                'cart' => new CartHelper()
            ]);
        });
        paginator::useBootstrap();
        Schema::defaultStringLength(191);
    }
}
