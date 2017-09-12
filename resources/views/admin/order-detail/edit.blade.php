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
                        <a href="{{ url('admin/order') }}">Order</a>
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
                        Edit Order detail (order id = {{ $id }})
                    </h1>
                </div><!-- /.page-header -->

                @if(Session::has('success'))
                    <div class="alert alert-block alert-success">
                        <button type="button" class="close" data-dismiss="alert">
                            <i class="ace-icon fa fa-times"></i>
                        </button>

                        <p>
                            <strong>
                                <i class="ace-icon fa fa-check"></i>
                                {{ Session::get('success') }}
                            </strong>
                        </p>
                    </div>
                @endif

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
                    <div id="content" class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        {{ session(['id' => $id]) }}
                        <a href="{{ url('admin/order-detail/create/') }}" style="font-size: 15px ; margin-left: 15px">Add New</a>
                        <style>
                            .th1{
                                background: #85b8d6;
                                height: 30px;
                                margin: 5px 0;
                            }
                        </style>
                        <div class="row">
                            <div class="col-sm-12 th1">
                                <div class="col-sm-2 text-center">.No</div>
                                <div class="col-sm-3 text-center">Product</div>
                                <div class="col-sm-2 text-center">Number</div>
                                <div class="col-sm-3 text-center">Price</div>
                                <div class="col-sm-2 text-center">Action</div>
                            </div>
                        </div>
                        @foreach($order_detail as $item)
                            <div class="row">
                                <div class="col-sm-12">
                                    {!! Form::open(['method' => 'PUT', 'url' => 'admin/order-detail/'.$item->id, 'role' => 'form']) !!}
                                        <input name="order_id" value="{{ $item->order_id }}" hidden>
                                        <div class="col-sm-2 text-center">
                                            {!! Form::number('no', ++$no, ['class'=>'width-100', 'disabled']) !!}
                                        </div>
                                        <div class="col-sm-3 text-center">
                                            {!! Form::select('product_id', $products, $item->product_id,['class'=>'width-100']) !!}
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            {!! Form::number('number', $item->number, ['class'=>'width-100', 'min'=>1]) !!}
                                        </div>
                                        <div class="col-sm-3 text-center">
                                            {!! Form::text('price', number_format($item->price), ['class'=>'width-100', 'disabled']) !!}
                                        </div>
                                        <div class="col-sm-1 text-center" style="padding: 1px 0;">
                                            {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                                        </div>
                                    {!! Form::close() !!}
                                    <div class="col-sm-1 text-center" style="padding: 1px 0;">
                                        {!! Form::open([ 'method'=>'DELETE' , 'url' =>'admin/order-detail/'.$item->id,'role'=>'from']) !!}
                                            <button type="submit" value="DELETE" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="space-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection