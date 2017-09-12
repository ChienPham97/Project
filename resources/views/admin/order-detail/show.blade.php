@extends('layouts.admin.layout')
@section('title') Order detail | Shop Computer @endsection
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
                        <a href="{{ url('admin/order-detail') }}">Order detail</a>
                    </li>
                </ul><!-- /.breadcrumb -->
                {!! Form::open(['method' => 'GET', 'url' => 'admin/order-detail']) !!}
                <div class="nav-search" id="nav-search">
                    <form class="form-search">
                        <span class="input-icon">
                            <input type="text"
                                name="keyword"
                                @if(Request::has('keyword'))
                                value="{{ Request::get('keyword') }}"
                                @endif
                                class="nav-search-input"
                                id="nav-search-input"
                                placeholder="Search ..."
                            />
                            <i class="ace-icon fa fa-search nav-search-icon"></i>
                            <button type="submit" id="btnSearch">Search</button>
                        </span>
                    </form>
                </div>
                <!-- /.nav-search -->
                {!! Form::close() !!}
            </div>

            <div class="page-content">


                <div class="page-header">
                    <h1>
                        order-detail List
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
                <div class="row">
                    <a href="{{ url('admin/order-detail/create') }}" style="font-size: 15px ; margin-left: 15px">Create New</a>
                    <br/><br/>
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="row">
                            <div class="col-xs-12">
                                <table id="simple-table" class="table  table-border-detailed table-hover">
                                    <thead>
                                    <tr>
                                        <th class="center">
                                            <label class="pos-rel">
                                                <input type="checkbox" class="ace">
                                                <span class="lbl"></span>
                                            </label>
                                        </th>
                                        <th class="detail-col">ID</th>
                                        <th class="hidden-480">Order Id</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($order_detail)
                                        @foreach($order_detail as $item)
                                            <tr>
                                                <td>
                                                    <input type="checkbox"/>
                                                </td>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->order_id }}</td>
                                                <td>{{ $item->product_name }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td>
                                                    {!! Form::open([ 'method'=>'DELETE' , 'url' =>'admin/order-detail/'.$item->id,'role'=>'from' ]) !!}
                                                    <a href="{{ url('admin/order-detail/'.$item->id.'/edit') }}" class="btn">Edit</a>
                                                    <button type="submit" value="DELETE" class="btn btn-danger"
                                                            onclick="return confirm('Are you sure?');">Delete
                                                    </button>
                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div><!-- /.span -->
                        </div><!-- /.row --> <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
    </div>
@endsection