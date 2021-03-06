@extends('layouts.admin.layout')
@section('title')  Create Order Detail | Shop Computer  @endsection
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
                        <a href="{{ url('admin/order-detail/'.$id.'/edit') }}">Order detail</a>
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
                        Add new product to order "id = {{ $id }}"
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
                        {!! Form::open(['method' => 'POST', 'url' => 'admin/order-detail', 'role' => 'form', 'class' => 'form-horizontal']) !!}
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="order">Order Id</label>
                            <div class="col-sm-9">
                                {!! Form::number('order_id', $id, ['min'=>0, 'readonly']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="product"> Product </label>
                            <div class="col-sm-9">
                                {!! Form::select('product_id', $products, null) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="number"> Number </label>
                            <div class="col-sm-9">
                                {!! Form::number('number', 1, ['min'=>1]) !!}
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