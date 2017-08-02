<?php

namespace App\Providers;

use App\Category;
use App\DanhMuc;
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
        view()->composer('master', function ($view) {
            $lkmt = Category::where('type_id','=','1')->get();
            $view->with('lkmt', $lkmt);
        });

        view()->composer('master', function ($view) {
            $laptop = Category::where('type_id','=','2')->get();
            $view->with('laptop', $laptop);
        });

        view()->composer('master', function ($view) {
            $game = Category::where('type_id','=','3')->get();
            $view->with('game', $game);
        });

        view()->composer('master', function ($view) {
            $tbnghenhin = Category::where('type_id','=','4')->get();
            $view->with('tbnghenhin', $tbnghenhin);
        });

        view()->composer('master', function ($view) {
            $tbluutru = Category::where('type_id','=','5')->get();
            $view->with('tbluutru', $tbluutru);
        });

        view()->composer('master', function ($view) {
            $tbvanphong = Category::where('type_id','=','6')->get();
            $view->with('tbvanphong', $tbvanphong);
        });

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
