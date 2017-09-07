@extends('layouts.master')
@section('title') Product | Thế Giới Phụ Kiện @endsection
@section('slider')
    <section id="advertisement">
        <div class="container">
            <img src="source/images/shop/advertisement.jpg" alt="">
        </div>
    </section>
@endsection
@section('danhmuc') @include('layouts.danhmuc') @endsection
@section('content')
    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--  Product Type -->
            <h2 class="title text-center">{{ $cate->title }}</h2>
            <h5>{{count($product)}} sản phẩm</h5>
            @foreach($product as $item)
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                @if($item->des == "new")
                                    <img src="{{asset('source/images/product-details/new.jpg')}}"
                                         style="width: 33px; height: 19px;"
                                         class="newarrival" alt="">
                                @endif
                                @if($item->sale != 0)
                                    <img src="{{asset('source/images/product-details/sale.jpg')}}"
                                         style="width: 42px; height: 31px; position: absolute ; left: 140px"
                                         class="newarrival" alt="">
                                @endif
                                <img src="{{ asset('uploads/product/'.$item->thumbnail) }}" alt=""/>
                                <h2>@if($item->sale == 0){{ number_format($item->price)}} @else {{ number_format($item->sale)}}  @endif</h2>
                                <p>{{ $item->name }}</p>
                                <a href="{{ url('cart/add/'.$item->id) }}" class="btn btn-default add-to-cart"><i
                                            class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="choose">
                            <ul class="nav nav-pills nav-justified">
                                <li><a href="{{ url('product_detail/'.$item->id) }}"><i class="fa fa-plus-square"></i>Chi
                                        Tiết Sản Phẩm</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div><!-- Product Type  -->
        <div class="row">{{$product->links()}}</div>

        <div class="features_items"><!--Other Product-->
            <h2 class="title text-center">Sản Phẩm Khác</h2>
            @foreach($other as $item)
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                @if($item->des == "new")
                                    <img src="{{asset('source/images/product-details/new.jpg')}}"
                                         style="width: 33px; height: 19px;"
                                         class="newarrival" alt="">
                                @endif
                                @if($item->sale != 0)
                                    <img src="{{asset('source/images/product-details/sale.jpg')}}"
                                         style="width: 42px; height: 31px; position: absolute ; left: 140px"
                                         class="newarrival" alt="">
                                @endif
                                <img src="{{ asset('uploads/product/'.$item->thumbnail) }}" alt=""/>
                                <h2>@if($item->sale == 0){{ number_format($item->price)}} @else {{ number_format($item->sale)}}  @endif</h2>
                                <p>{{ $item->name }}</p>
                                <a href="{{ url('cart/add/'.$item->id) }}" class="btn btn-default add-to-cart"><i
                                            class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="choose">
                            <ul class="nav nav-pills nav-justified">
                                <li><a href="{{ url('product_detail/'.$item->id) }}"><i class="fa fa-plus-square"></i>Chi
                                        Tiết Sản Phẩm</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div><!--Other Product-->
        <div class="row">{{$other->links()}}</div>

    </div>

@endsection