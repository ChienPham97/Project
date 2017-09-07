<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Session;
use Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('cart.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        $product = Product::where('id', $id)->first();
        if (isset($product->id)) {
            if($product->sale == 0){

                Cart::add([
                    [
                        'id' => $product->id,
                        'name' => $product->name,
                        'qty' => 1,
                        'price' => $product->price,
                        'options' => [
                            'thumbnail' => $product->thumbnail
                        ]
                    ]
                ]);

            }
            else{
                Cart::add([
                    [
                        'id' => $product->id,
                        'name' => $product->name,
                        'qty' => 1,
                        'price' => $product->sale,
                        'options' => [
                            'thumbnail' => $product->thumbnail
                        ]
                    ]
                ]);
            }

            /*Cart::add($product->id, $product->title, 1, $product->price, [
                'thumbnail' => $product->thumbnail
            ]);*/
            Session::flash('success', 'Đặt hàng thành công!!!');
        } else {
            Session::flash('error', 'Sản phẩm đã hết hàng!!!');
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->id != null) {
            foreach (Cart::content() as $key => $item) {
                if ($item->id == $product->id) {
                    Cart::remove($key);
                    break;
                }
            }
        }
        return redirect()->back();
    }
}
