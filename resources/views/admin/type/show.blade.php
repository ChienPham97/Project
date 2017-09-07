@extends('layouts.admin.layout')
@section('title') Types | Shop Computer @endsection
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

                </ul><!-- /.breadcrumb -->

                <div class="nav-search" id="nav-search">
                    {!! Form::open(['method' => 'GET', 'url' => 'admin/type', 'class' => 'form-search']) !!}
                    <span class="input-icon">
                        {!! Form::text('keyword', Request::has('keyword') ? Request::get('keyword'): null, ['class' => 'nav-search-input', 'placeholder' => 'Search ...']) !!}
                        <i class="ace-icon fa fa-search nav-search-icon"></i>
                        <button type="submit">Search</button>
                    </span>
                    {!! Form::close() !!}
                </div><!-- /.nav-search -->
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
                        Type List
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
                    <a href="{{ url('admin/type/create') }}" style="font-size: 15px ; margin-left: 15px">Create New</a>
                    <br/><br/>
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="row">
                            <div class="col-xs-12">
                                <table id="simple-table" class="table  table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th class="center">
                                            <label class="pos-rel">
                                                <input type="checkbox" class="ace">
                                                <span class="lbl"></span>
                                            </label>
                                        </th>
                                        <th class="detail-col">ID</th>
                                        <th class="hidden-480">Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($types)
                                        @foreach($types as $item)
                                            <tr>
                                                <td>
                                                    <input type="checkbox"/>
                                                </td>
                                                <td>{{ $item->id }}</td>
<<<<<<< HEAD
                                                <td>{{ $item->title }}</td>
=======
                                                <td>{{ $item->name }}</td>
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2
                                                <td>
                                                    {!! Form::open([ 'method'=>'DELETE' , 'url' =>'admin/type/'.$item->id,'role'=>'from' ]) !!}
                                                    <a href="{{ url('admin/type/'.$item->id.'/edit') }}"
                                                       class="btn">Edit</a>
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