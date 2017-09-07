<?php

namespace App\Http\Controllers\Admin;

use App\Slide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class SlideController extends Controller
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
            $news = Slide::where('id', 'like', '%' . $keyword . '%')->get();
        } else {
            $news = Slide::all();
        }

        return view('admin.slide.show', [ 'slide' => $news ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slide.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slide = new Slide();
        $image = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image = $file->getClientOriginalName();
            $path = public_path('uploads/slider');
            $file->move($path, $image);
        }
        $slide->image = $image;
        $slide->h1 = $request->h1;
        $slide->h2 = $request->h2;
        $slide->p = $request->p;
        $slide->save();
        Session::flash('success', 'Create slide "id = ' . $slide->id . '" succesfully!');

        return redirect('admin/slide');
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
        $slide = Slide::findOrFail($id);
        return view('admin.slide.edit', ['slide' => $slide]);
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
        $slide = Slide::findOrFail($id);;
        $image = $slide->image;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image = $file->getClientOriginalName();
            $path = public_path('uploads/slider');
            $file->move($path, $image);
        }
        $slide->image = $image;
        $slide->h1 = $request->h1;
        $slide->h2 = $request->h2;
        $slide->p = $request->p;
        $slide->save();
        Session::flash('success', 'Update slide "id = ' . $slide->id . '" succesfully!');

        return redirect('admin/slide');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = Slide::findOrFail($id);
        file_exists('uploads/news/'.$slide->image) ? unlink('uploads/news/'.$slide->image):null;
        $slide->delete();
        Session::flash('success', 'Delete news "id = ' .  $slide->id . '" succesfully!');
        return redirect('admin/slide');
    }
}
