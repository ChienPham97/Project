<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use App\Status;
use App\User;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    private $_users;
    private $_statuses;

    public function __construct()
    {
        $this->_users = User::get()->pluck('name','id');
        $this->_statuses = Status::get()->pluck('title', 'id');
    }
    public function index(Request $request)
    {
        if ($request->has('keyword')) {
            $keyword = $request->get('keyword');
            $orders = Order::with('user')->where('title', 'like', '%' . $keyword . '%')->get();
        } else {
            $orders = Order::join('users', 'orders.user_id','=','users.id')
                ->join('statuses', 'orders.status_id', '=', 'statuses.id')
                ->select('orders.*', 'users.name as username', 'statuses.title as status')
                ->get();
        }

        return view('admin.order.show', [ 'orders' => $orders ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.order.create', ['users'=>$this->_users, 'statuses' => $this->_statuses]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order();
        $order->user_id = $request->user;
        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->total = $request->total;
        $order->status_id = $request->status;
        $order->save();
        Session::flash('success', 'Create order "id = ' . $order->id . '" succesfully!');

        return redirect('admin/order');
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
        $order = Order::findOrFail($id);
        return view('admin.order.edit', ['order' => $order,'users'=>$this->_users, 'statuses' => $this->_statuses]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->user_id = $request->user;
        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->total = $request->total;
        $order->status_id = $request->status;
        $order->save();
        Session::flash('success', 'Edit order "id = ' . $order->id . '" successfully!');

        return redirect('admin/order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        Session::flash('success', 'Delete order "id = ' . $order->id . '" succesfully!');
        $order->delete();

        return redirect('admin/order');
    }
}
