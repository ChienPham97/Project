<?php

namespace App\Http\Controllers\Admin;

<<<<<<< HEAD
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
=======
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Type;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::all();
        return view('admin.type.show', [ 'types' => $types ]);
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2
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
<<<<<<< HEAD
        $types = new Type();
        $types->title = $request->title;
        $types->save();
        Session::flash('success', " Create " . $types->title . " succesfully ! ");

        return redirect('admin/type');

=======
        $type = new Type();
        $type->name = $request->name;
        $type->save();
        Session::flash('success', 'Create type "' . $type->name . '" succesfully!');

        return redirect('admin/type');
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2
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
<<<<<<< HEAD
        $types = Type::findOrFail($id);

        return view('admin.type.edit', ['types' => $types]);
=======
        $type = Type::findOrFail($id);
        return view('admin.type.edit', ['type' => $type]);
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2
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
<<<<<<< HEAD
        $types = Type::findOrFail($id);
        $types->title = $request->title;
        $types->save();
        Session::flash('success', "Edit " . $types->title . " successfully!!!");
=======
        $type = Type::findOrFail($id);
        $type->name = $request->name;
        $type->save();
        Session::flash('success', 'Edit type "' . $type->name . '" successfully!');
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2

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
<<<<<<< HEAD

        $types = Type::findOrFail($id);
        Session::flash('success', "Delete " . $types->title . " succesfully");
        $types->delete();
=======
        $type = Type::findOrFail($id);
        Session::flash('success', 'Delete type "' . $type->name . '" succesfully!');
        $type->delete();
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2

        return redirect('admin/type');
    }
}
