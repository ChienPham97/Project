@extends('layouts.admin.layout')
@section('title')  Create Category | Shop Computer  @endsection
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
                        <a href="{{ url('admin/order') }}">Orders</a>
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

                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        {!! Form::open(['method' => 'PUT', 'url' => 'admin/order/'.$order->id, 'role' => 'form', 'class' => 'form-horizontal']) !!}
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="user">User</label>
                            <div class="col-sm-9">
                                {!! Form::select('user', $users, is_null($order->user_id) ? 6:$order->user_id) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="name"> Name </label>
                            <div class="col-sm-9">
                                {!! Form::text('name', $order->name, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => $order->name]) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="email"> Email </label>
                            <div class="col-sm-9">
                                {!! Form::email('email', $order->email, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => $order->email]) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="phone"> Phone </label>
                            <div class="col-sm-9">
                                {!! Form::text('phone', $order->phone, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => $order->phone, 'minlength' => '10', 'maxlength' => '13', 'pattern' => '(\+84|0)\d{9,10}']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="address"> Address </label>
                            <div class="col-sm-9">
                                {!! Form::text('address', $order->address, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => $order->address]) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="total"> Total </label>
                            <div class="col-sm-9">
                                {!! Form::number('total', $order->total, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => $order->total]) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="status"> Status </label>
                            <div class="col-sm-9">
                                {!! Form::select('status', $statuses, $order->status_id )!!}
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