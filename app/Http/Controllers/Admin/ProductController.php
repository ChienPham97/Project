<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {
        if ($request->has('keyword')) {

            $keyword = $request->get('keyword');
            $product = Product::where('name', 'like', '%' . $keyword . '%')->get();
        } else {
            $product = Product::all();
        }
        return view('admin.product.show', [
            'abc' => $product
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cate = new Product();
        $cate->name = $request->name;
        $cate->supplier_id = $request->supplier_id;
        $cate->type_id = $request->type_id;
        $cate->price = $request->price;
        $cate->sale = $request->sale;
        $cate->inventorynumber = $request->inventorynumber;
        $cate->des = $request->des;

        $cate->save();
        Session::flash('success', " Create " . $cate->name . " succesfully ! ");

        return redirect('admin/product');

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
        $cate = Product::findOrFail($id);

        return view('admin.product.edit', ['cate' => $cate]);
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
        $cate = Product::findOrFail($id);
        $cate->name = $request->name;
        $cate->supplier_id = $request->supplier_id;
        $cate->type_id = $request->type_id;
        $cate->price = $request->price;
        $cate->sale = $request->sale;
        $cate->inventorynumber = $request->inventorynumber;
        $cate->des = $request->des;
        $cate->save();
        Session::flash('success', "Edit " . $cate->name . " successfully!!!");

        return redirect('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $cate = Product::findOrFail($id);
        Session::flash('success', "Delete " . $cate->name . " succesfully");
        $cate->delete();

        return redirect('admin/product');
    }
}
