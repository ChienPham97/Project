@extends('layouts.admin.layout')
@section('title') Edit Category @endsection
@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="{{url('admin')}}">Home</a>
                    </li>

                    <li>
                        <a href="{{ url('admin/type') }}">Types</a>
                    </li>
                    <li class="active">Edit</li>
                </ul><!-- /.breadcrumb -->
            </div>

            <div class="page-content">
                <div class="ace-settings-container" id="ace-settings-container">
                    <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                        <i class="ace-icon fa fa-cog bigger-130"></i>
                    </div>

                @include('patials.admin.ace-settings')<!-- /.ace-settings-box -->
                </div><!-- /.ace-settings-container -->

                <div class="page-header">
                    <h1>
<<<<<<< HEAD
                        Edit  "{{ $types->title }}"
=======
                        Edit type "{{ $type->name }}"
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2
                    </h1>
                </div><!-- /.page-header -->

                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
<<<<<<< HEAD
                        {!! Form::open(['method' => 'PUT', 'url' => 'admin/type/'.$types->id, 'role' => 'form', 'class' => 'form-horizontal']) !!}
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="name"> Title *</label>
                            <div class="col-sm-9">
                                {!! Form::text('title', $types->title, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => $types->title, 'minlength' => '4', 'required']) !!}
=======
                        {!! Form::open(['method' => 'PUT', 'url' => 'admin/type/'.$type->id, 'role' => 'form', 'class' => 'form-horizontal']) !!}
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="name"> Name *</label>
                            <div class="col-sm-9">
                                {!! Form::text('name', $type->name, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => $type->name, 'minlength' => '4', 'required']) !!}
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-9 center">
                                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                        <div class="space-4"></div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection