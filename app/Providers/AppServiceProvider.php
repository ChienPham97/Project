<?php

namespace App\Providers;

use App\Cart;
use App\Category;
use App\DanhMuc;
use Illuminate\Support\Facades\Session;
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
        view()->composer('danhmuc', function ($view) {
            $lkmt = Category::where('type_id','=','1')->get();
            $view->with('lkmt', $lkmt);
        });

        view()->composer('danhmuc', function ($view) {
            $laptop = Category::where('type_id','=','2')->get();
            $view->with('laptop', $laptop);
        });

        view()->composer('danhmuc', function ($view) {
            $game = Category::where('type_id','=','3')->get();
            $view->with('game', $game);
        });

        view()->composer('danhmuc', function ($view) {
            $tbnghenhin = Category::where('type_id','=','4')->get();
            $view->with('tbnghenhin', $tbnghenhin);
        });

        view()->composer('danhmuc', function ($view) {
            $tbluutru = Category::where('type_id','=','5')->get();
            $view->with('tbluutru', $tbluutru);
        });

        view()->composer('danhmuc', function ($view) {
            $tbvanphong = Category::where('type_id','=','6')->get();
            $view->with('tbvanphong', $tbvanphong);
        });

        view()->composer('header' , function ($view){

            if(Session('cart')){
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
            }

            $view->with(['cart' => Session::get('cart'),
                'product_cart'=>$cart->items ,
                'totalPrice'=>$cart->totalPrice,
                'totalQty'=>$cart->totalQty] );

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
