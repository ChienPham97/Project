@extends('layouts.admin')
@section('title') Edit Product @endsection
@section('content')
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
                </li>

                <li>
                    <a href="{{ url('admin/product') }}">Product</a>
                </li>
                <li class="active">Edit</li>
            </ul><!-- /.breadcrumb -->
        </div>

        <div class="page-content">
            <div class="ace-settings-container" id="ace-settings-container">
                <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                    <i class="ace-icon fa fa-cog bigger-130"></i>
                </div>

                <div class="ace-settings-box clearfix" id="ace-settings-box">
                    <div class="pull-left width-50">
                        <div class="ace-settings-item">
                            <div class="pull-left">
                                <select id="skin-colorpicker" class="hide">
                                    <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                    <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                    <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                    <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                </select>
                            </div>
                            <span>&nbsp; Choose Skin</span>
                        </div>
                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state"
                                   id="ace-settings-navbar" autocomplete="off">
                            <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state"
                                   id="ace-settings-sidebar" autocomplete="off">
                            <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state"
                                   id="ace-settings-breadcrumbs" autocomplete="off">
                            <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl"
                                   autocomplete="off">
                            <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state"
                                   id="ace-settings-add-container" autocomplete="off">
                            <label class="lbl" for="ace-settings-add-container">
                                Inside
                                <b>.container</b>
                            </label>
                        </div>
                    </div><!-- /.pull-left -->

                    <div class="pull-left width-50">
                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover"
                                   autocomplete="off">
                            <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact"
                                   autocomplete="off">
                            <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight"
                                   autocomplete="off">
                            <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                        </div>
                    </div><!-- /.pull-left -->
                </div><!-- /.ace-settings-box -->
            </div><!-- /.ace-settings-container -->

            <div class="page-header">
                <h1>
                    Edit " {{ $product->name }} " Product
                </h1>
            </div><!-- /.page-header -->
             @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    {!! Form::open(['method' => 'PUT', 'url' => 'admin/product/'.$product->id, 'files' => true, 'role' => 'form']) !!}
                        <div class="form-group">
                            <label>Title</label>
                            {!! Form::text('name', $product->name, [ 'class' => 'form-control', 'placeholder' => "Title", 'minlength' => "2", 'required']) !!}
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            {!! Form::select('category_id', $categories, null, ["class" => "form-control"]) !!}
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            {!! Form::number('price', $product->price, [ 'class' => 'form-control', 'value'=>'0']) !!}
                        </div>
                        <div class="form-group">
                            <label>Sale</label>
                            {!! Form::number('sale', $product->sale, [ 'class' => 'form-control', 'value'=>'0']) !!}
                        </div>
                        <div class="form-group">
                            <label>Inventory Number</label>
                            {!! Form::number('inventorynumber', $product->inventorynumber, [ 'class' => 'form-control', 'value'=>'0']) !!}
                        </div>
                        <div class="form-group">
                            <label>Thumbnail</label>
                            <br>
                            <!--<image src='{{url('uploads/product/'.$product->thumbnail)}}' width="120px" >-->
                            {!! Form::file('thumbnail', ["class" => 'form-control', 'id' => 'thumbnail', 'text' => $product->thumbnail, 'accept' => 'image/*' ] ) !!}
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            {!! Form::text('des', $product->des, ['class' => 'form-control', 'placeholder' => 'description']) !!}
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    {!! Form::close() !!}
                    <div class="space-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection