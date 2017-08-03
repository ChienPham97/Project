<?php

namespace App\Http\Controllers;

use App\Product;
use App\Slide;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;

class HomeController extends Controller
{
    private $_data;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->_data = array();
    }

    /**
     * @@ -24,6 28,8 @@ public function __construct()
     */
    public function index()
    {


        $slider = Slide::all();
        $product = Product::where('inventorynumber' ,'<','35')->paginate(8);
        $new_product = Product::where('des','new')->paginate(8);
        $sale_product = Product::where('sale','<>','0')->paginate(8);
        $buy_product = Product::where('inventorynumber','<','15')->paginate(8);
        $fav_product = Product::where('favorite','<>','0')->get();

        $this->_data['products'] = Product::all();
        return view('home',compact($this->_data,'slider','product','new_product','sale_product', 'buy_product','fav_product'));

    }
}