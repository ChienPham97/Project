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
                        <a href="{{ url('admin/order-detail') }}">Order detail</a>
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
                        Create Order
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
                        {!! Form::open(['method' => 'PUT', 'url' => 'admin/order-detail/'.$order_detail->id, 'role' => 'form', 'class' => 'form-horizontal']) !!}
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="order">Order Id</label>
                            <div class="col-sm-9">
                                {!! Form::select('order_id', $orders, $order_detail->order_id) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="product"> Product </label>
                            <div class="col-sm-9">
                                {!! Form::select('product_id', $products, $order_detail->product_id) !!}
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