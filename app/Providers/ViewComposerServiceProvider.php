<?php

namespace App\Providers;


use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        View::composer('front.*', function ($view) {
            $kategoriler=\App\Categories::all();
            $view->with('kategoriler',$kategoriler);

        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
