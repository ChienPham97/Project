<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use App\OrderDetail;
use App\Product;
use App\Http\Requests\OrderDetailRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class OrderDetailController extends Controller
{
    private $_orders;
    private $_products;

    public function __construct()
    {
        $this->_orders = [null=>'Order'] + Order::get()->pluck('id','id')->all();
        $this->_products = [null=>'Product'] + Product::get()->pluck('name', 'id')->all();
    }
    public function index(Request $request)
    {
        if ($request->has('keyword')) {
            $keyword = $request->get('keyword');
            $order_detail = OrderDetail::join('products','order_detail.product_id', '=', 'products.id')
                ->select('order_detail.*', 'products.name as product_name')
                ->where('order_detail.id', 'like', '%' . $keyword . '%')
                ->get();
        } else {
            $order_detail = OrderDetail::join('products','order_detail.product_id', '=', 'products.id')
                ->select('order_detail.*', 'products.name as product_name')
                ->get();
        }

        return view('admin.order-detail.show', [ 'order_detail' => $order_detail ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.order-detail.create',['orders' => $this->_orders, 'products' => $this->_products, 'id'=>Session('id')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderDetailRequest $request)
    {
        $order_detail = new OrderDetail();
        $order_detail->order_id = $request->order_id;
        $order_detail->product_id = $request->product_id;
        $order_detail->number = $request->number;
        $order_detail->save();
        Session::flash('success', 'Create order "id = ' . $order_detail->id . '" succesfully!');

        return redirect('admin/order-detail/'. $request->order_id .'/edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order_detail = OrderDetail::join('products', 'order_detail.product_id', '=', 'products.id')
            ->where('order_detail.order_id', $id)
            ->select('order_detail.*', 'products.price')
            ->get();
        $no = 0;
        return view('admin.order-detail.edit',['order_detail' => $order_detail,'orders' => $this->_orders, 'products' => $this->_products, 'id'=>$id, 'no' => $no]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OrderDetailRequest $request, $id)
    {
        $order_detail = OrderDetail::findOrFail($id);
        $order_detail->order_id = $request->order_id;
        $order_detail->product_id = $request->product_id;
        $order_detail->number = $request->number;
        $order_detail->save();
        Session::flash('success', 'Update order detail "id = ' . $order_detail->id . '" successfully!');

        return redirect('admin/order-detail/'.$request->order_id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order_detail = OrderDetail::findOrFail($id);
        $re = $order_detail->order_id;
        $order_detail->delete();
        Session::flash('success', 'Delete order detail "id = ' .  $order_detail->id . '" succesfully!');
        return redirect('admin/order-detail/' . $re . '/edit');
    }
}
