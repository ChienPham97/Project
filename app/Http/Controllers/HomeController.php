<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use App\Order;
use App\Order_Details;
use App\Product;
use App\Slide;
use App\Users;
use Illuminate\View\View;
use Session;
use Auth;
use Cart;

use Illuminate\Http\Request;


class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $slider = Slide::all();
        $product = Product::where('inventorynumber', '<', '35')->paginate(8);
        $new_product = Product::where('des', 'new')->paginate(8);
        $sale_product = Product::where('sale', '<>', '0')->paginate(8);
        $buy_product = Product::where('inventorynumber', '<', '15')->paginate(8);
        $fav_product = Product::where('favorite', '<>', '0')->get();
        return view('page.home', compact('slider', 'product', 'new_product', 'sale_product', 'buy_product', 'fav_product'));
        if (Auth::check()) {
            return view('page.home');
        } else {
            return View::make('login');
        }

    }

    public function ProductType($category_id)
    {

        $product = Product::where('category_id' ,$category_id)->paginate(16);
        $other = Product::where('category_id' ,'<>',$category_id)->paginate(8);
         $cate = Category::where('id',$category_id)->first();
        return view('page.product_type', compact('product','cate','other'));
    }

    public function ProductDetail(Request $request)
    {

        $detail = Product::where('id', $request->id)->first();

        return view('page.product_detail', compact('detail'));
    }

    public function News()
    {

        $new = News::all();
        return view('page.news', compact('new'));
    }

    public function getCheckout()
    {
        return view('cart.index');
    }

    public function postCheckout(Request $request)
    {
        if (Cart::content()->count() <= 0) {
            Session::flash('error', 'Không thể thanh toán vì quý khách chưa đặt mua sản phẩm nào');

            return redirect()->back();
        }

        $this->validate($request,
            [
                'name'=>'required|min:2|max:70',
                'email'=>'required|min:7|max:40',
                'phone'=>'required|min:10|max:15',
                'address'=>'required|min:10|max:70'
            ],
            [
                'name.required'=>'Vui lòng nhập họ và tên',
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'phone.required'=>'Vui lòng nhập số điện thoại',
                'phone.phone' =>'Không đúng định dạng số điện thoại',
                'address.required' => 'Vui lòng nhập địa chỉ nhận hàng'

            ]);

        $order = new Order;

        if (Auth::check()) {
            $order->user_id = Auth::user()->id;
        }

        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->note = $request->message;
        $order->total = 0;
        $order->save();

        $total = 0;
        foreach (Cart::content() as $item) {
            $order_details = new Order_Details();
            $order_details->order_id = $order->id;
            $order_details->product_id = $item->id;
            $order_details->number = $item->qty;

            if($item->sale == 0){
                $order_details->price = $item->price * $item->qty;
            }
            else{
                $order_details->price = $item->sale * $item->qty;
            }

            $order_details->save();

            if($item->sale == 0){
                $total += ($item->price * $item->qty);
            }
            else{
                $total += ($item->sale * $item->qty);
            }

        }

        $order->total = $total;
        $order->save();

        //san pham trong giao hang se bi xoa
        Cart::destroy();
        Session::flash('success', 'Đã đặt hàng thành công');

        return redirect('cart');
    }


    public function Account(){

        return view('page.user');
    }



    public function Logout()
    {
        Auth::logout();
        return redirect('home');

    }
}
