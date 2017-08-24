@extends('layouts.admin.layout')
@section('title') News | Shop Computer @endsection
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
                        <a href="{{ url('admin/news') }}">News</a>
                    </li>
                </ul><!-- /.breadcrumb -->
                {!! Form::open(['method' => 'GET', 'url' => 'admin/news']) !!}
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
                        News List
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
                    <a href="{{ url('admin/news/create') }}" style="font-size: 15px ; margin-left: 15px">Create
                        New</a>
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
                                        <th class="hidden-480">Image</th>
                                        <th>Title</th>
                                        <th width="300px">Content</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($news)
                                        @foreach($news as $item)
                                            <tr>
                                                <td>
                                                    <input type="checkbox"/>
                                                </td>
                                                <td>{{ $item->id }}</td>
                                                <td><img src="{{ url('uploads/news/'.(is_null($item->image) ? 'no-images.png':$item->image)) }}" alt="{{ $item->title }}" width="120px"></td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->content }}</td>
                                                <td>
                                                    {!! Form::open([ 'method'=>'DELETE' , 'url' =>'admin/news/'.$item->id,'role'=>'from' ]) !!}
                                                    <a href="{{ url('admin/news/'.$item->id.'/edit') }}"
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