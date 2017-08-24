@extends('layouts.admin.layout')
@section('title')  Create Supplier  @endsection
@section('content')
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="{{ url('admin') }}">Home</a>
                </li>

                <li>
                    <a href="{{ url('admin/supplier') }}">Suppliers</a>
                </li>
                <li class="active">Create</li>
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
                    Create Supplier
                </h1>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    {!! Form::open(['method' => 'POST', 'url' => 'admin/supplier', 'role' => 'form', 'class' => 'form-horizontal']) !!}
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="name"> Name *</label>
                        <div class="col-sm-9">
                            {!! Form::text('name', null, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'Name', 'required']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="address">Address *</label>
                        <div class="col-sm-9">
                            {!! Form::text('address', null, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'Address', 'required']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="contact">Contact *</label>
                        <div class="col-sm-9">
                            {!! Form::text('contact', null, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'Contact', 'required']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-9 center">
                            {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
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