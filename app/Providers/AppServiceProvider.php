<?php

namespace App\Providers;


use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('front.*', function ($view) {
        $kategoriler=\App\Categories::all();
        $view->with('kategoriler',$kategoriler);

    });

        //HTML Form Components
        $this->app['form']->component('bsText', 'components.text', ['name','label_name', 'value']);
        $this->app['form']->component('bsTextHidden', 'components.textHidden', ['name','label_name', 'value']);
        $this->app['form']->component('bsSelect', 'components.selectlist', ['name', 'value']);
        $this->app['form']->component('bsMetin', 'components.textarea', ['name','label_name']);
        $this->app['form']->component('bsFile', 'components.file', ['resim','value','aciklama']);


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
