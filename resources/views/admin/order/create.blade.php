@extends('layouts.admin.layout')
@section('title')  Create Order | Shop Computer  @endsection
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
                        Create Order
                    </h1>
                </div><!-- /.page-header -->

                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        {!! Form::open(['method' => 'POST', 'url' => 'admin/order', 'role' => 'form', 'class' => 'form-horizontal']) !!}
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="user">User</label>
                            <div class="col-sm-9">
                                {!! Form::select('user', $users, 6) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="name"> Name </label>
                            <div class="col-sm-9">
                                {!! Form::text('name', null, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'Name']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="email"> Email </label>
                            <div class="col-sm-9">
                                {!! Form::email('email', null, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'Email']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="phone"> Phone </label>
                            <div class="col-sm-9">
                                {!! Form::text('phone', null, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'Phone', 'minlength' => '10', 'maxlength' => '13', 'pattern' => '(\+84|0)\d{9,10}']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="address"> Address </label>
                            <div class="col-sm-9">
                                {!! Form::text('address', null, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'Address']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="total"> Total </label>
                            <div class="col-sm-9">
                                {!! Form::number('total', null, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'Total']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="status"> Status </label>
                            <div class="col-sm-9">
                                {!! Form::select('status', $statuses, 0 )!!}
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