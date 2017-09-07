<?php

namespace App\Http\Controllers\Admin;

use App\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class TypeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('keyword')) {

            $keyword = $request->get('keyword');
            $types = Type::where('title', 'like', '%' . $keyword . '%')->get();
        } else {
            $types = Type::all();
        }
        return view('admin.type.show', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Http\Request $request
=======
     * @param  \Illuminate\Http\Request  $request
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $types = new Type();
        $types->title = $request->title;
        $types->save();
        Session::flash('success', " Create " . $types->title . " succesfully ! ");

        return redirect('admin/type');
    }

    /**
     * Display the specified resource.
     *
<<<<<<< HEAD
     * @param  int $id
=======
     * @param  int  $id
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
<<<<<<< HEAD
     * @param  int $id
=======
     * @param  int  $id
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type = Type::findOrFail($id);
        return view('admin.type.edit', ['type' => $type]);
    }

    /**
     * Update the specified resource in storage.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
=======
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $types = Type::findOrFail($id);
        $types->title = $request->title;
        $types->save();
        Session::flash('success', "Edit " . $types->title . " successfully!!!");

        return redirect('admin/type');
    }

    /**
     * Remove the specified resource from storage.
     *
<<<<<<< HEAD
     * @param  int $id
=======
     * @param  int  $id
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $types = Type::findOrFail($id);
        Session::flash('success', "Delete " . $types->title . " succesfully");
        $types->delete();

        return redirect('admin/type');
    }
}
