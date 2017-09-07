@extends('layouts.master')
@section('title') Home | Thế Giới Phụ Kiện @endsection
@section('slider')
    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class=""></li>
                            <li data-target="#slider-carousel" data-slide-to="1" class=""></li>
                            <li data-target="#slider-carousel" data-slide-to="2" class="active"></li>
                        </ol>

                        <div class="carousel-inner">
                            @foreach($slider as $item)
                                <div class="item">

                                    <div class="col-sm-12">
<<<<<<< HEAD

=======
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2
                                        <img src="uploads/slider/{{ $item->image }}" class="girl img-responsive"
                                             alt="">
                                    </div>
                                </div>
                            @endforeach
                            <div class="item active">

                                <div class="col-sm-12">
                                    <img src="uploads/slider/slider2.jpg" class="girl img-responsive" alt="">
                                </div>
                            </div>
                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
@section('danhmuc')
    @include('layouts.danhmuc')
@endsection
@section('content')
    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Sản Phẩm Nổi Bật</h2>
            @foreach($product as $item)
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
<<<<<<< HEAD
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
                                <img src="uploads/product/{{ $item->thumbnail }}" alt="">
                                <h2>@if($item->sale == 0){{ number_format($item->price)}} @else {{ number_format($item->sale)}}  @endif</h2>
                                <p>{{ $item->name }}</p>
                                <a href="{{ url('cart/add/'.$item->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>
                                    Thêm Vào Giỏ</a>
=======
                                <img src="uploads/product/{{ $item->thumbnail }}" alt="">
                                <h2>{{ number_format($item->price) }}</h2>
                                <p>{{ $item->name }}</p>
                                <a href="{{ url('product_detail/'.$item->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>
                                    Chi Tiết Sản Phẩm</a>
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2
                            </div>
                        </div>
                        <div class="choose">
                            <ul class="nav nav-pills nav-justified">
<<<<<<< HEAD
                                <li><a href="{{ url('product_detail/'.$item->id) }}"><i class="fa fa-plus-square"></i>Chi Tiết Sản Phẩm</a></li>
=======
                                <li><a href="#"><i class="fa fa-plus-square"></i>Yêu Thích</a></li>
                                <li><a href="{{ url('cart/add/'.$item->id) }}"><i class="fa fa-plus-square"></i>Thêm Vào Giỏ</a></li>
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div><!--features_items-->
        <div class="row">{{$product->links()}}</div>

        <div class="category-tab"><!--category-tab-->
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tshirt" data-toggle="tab">Sản Phẩm Mới</a></li>
                    <li><a href="#blazers" data-toggle="tab">Sản Phẩm Khuyến Mãi</a></li>
                    <li><a href="#sunglass" data-toggle="tab">Sản Phẩm Được Mua Nhiều</a></li>
                    <li><a href="#kids" data-toggle="tab">Order</a></li>
                </ul>
            </div>
            <div class="tab-content">

                <!-- sản phẩm mới -->
                <div class="tab-pane fade active in" id="tshirt">
                    @foreach($new_product as $item)
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
<<<<<<< HEAD
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
                                        <img src="uploads/product/{{ $item->thumbnail }}" alt="">
                                        <h2>@if($item->sale == 0){{ number_format($item->price)}} @else {{ number_format($item->sale)}}  @endif</h2>
                                        <p>{{ $item->name }}</p>
                                        <a href="{{ url('cart/add/'.$item->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>
                                            Thêm Vào Giỏ</a>
=======
                                        <img src="uploads/product/{{ $item->thumbnail }}" alt="">
                                        <h2>{{ number_format($item->price) }}</h2>
                                        <p>{{ $item->name }}</p>
                                        <a href="{{ url('product_detail/'.$item->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>
                                            Chi Tiết Sản Phẩm</a>
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2
                                    </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
<<<<<<< HEAD
                                        <li><a href="{{ url('product_detail/'.$item->id) }}"><i class="fa fa-plus-square"></i>Chi Tiết Sản Phẩm</a></li>
=======
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Yêu Thích</a></li>
                                        <li><a href="{{ url('cart/add/'.$item->id) }}"><i class="fa fa-plus-square"></i>Thêm Vào Giỏ</a></li>
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- sản phẩm khuyến mãi -->
                <div class="tab-pane fade" id="blazers">
                    @foreach($sale_product as $item)
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
<<<<<<< HEAD
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
                                        <img src="uploads/product/{{ $item->thumbnail }}" alt="">
                                        <h2>{{ number_format($item->sale)}}</h2>
                                        <p>{{ $item->name }}</p>
                                        <a href="{{ url('cart/add/'.$item->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>
                                            Thêm Vào Giỏ</a>
=======
                                        <img src="uploads/product/{{ $item->thumbnail }}" alt="">
                                        <h2>{{ number_format($item->price) }}</h2>
                                        <p>{{ $item->name }}</p>
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2
                                    </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="{{ url('product_detail/'.$item->id) }}"><i class="fa fa-plus-square"></i>Chi Tiết Sản Phẩm</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- sản phẩm mua nhiều -->
                <div class="tab-pane fade" id="sunglass">
                    @foreach($buy_product as $item)
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
<<<<<<< HEAD
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
                                        <img src="uploads/product/{{ $item->thumbnail }}" alt="">
                                        <h2>@if($item->sale == 0){{ number_format($item->price)}} @else {{ number_format($item->sale)}}  @endif</h2>
                                        <p>{{ $item->name }}</p>
                                        <a href="{{ url('cart/add/'.$item->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>
                                            Thêm Vào Giỏ</a>
=======
                                        <img src="uploads/product/{{ $item->thumbnail }}" alt="">
                                        <h2>{{ number_format($item->price) }}</h2>
                                        <p>{{ $item->name }}</p>
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2
                                    </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="{{ url('product_detail/'.$item->id) }}"><i class="fa fa-plus-square"></i>Chi Tiết Sản Phẩm</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Order -->
                <div class="tab-pane fade" id="kids">
                    @foreach($buy_product as $item)
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
<<<<<<< HEAD
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
                                        <img src="uploads/product/{{ $item->thumbnail }}" alt="">
                                        <h2>@if($item->sale == 0){{ number_format($item->price)}} @else {{ number_format($item->sale)}}  @endif</h2>
                                        <p>{{ $item->name }}</p>
                                        <a href="{{ url('cart/add/'.$item->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>
                                            Thêm Vào Giỏ</a>
=======
                                        <img src="uploads/product/{{ $item->thumbnail }}" alt="">
                                        <h2>{{ number_format($item->price) }}</h2>
                                        <p>{{ $item->name }}</p>
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2
                                    </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="{{ url('product_detail/'.$item->id) }}"><i class="fa fa-plus-square"></i>Chi Tiết Sản Phẩm</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div><!--/category-tab-->
        @if(  count($fav_product) != 0 )
        <div class="recommended_items"><!--Khách hàng chia sẻ-->
            <h2 class="title text-center">Khách Hàng Chia Sẻ</h2>

            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        @foreach($fav_product as $item)
<<<<<<< HEAD
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
                                            <img src="uploads/product/{{ $item->thumbnail }}" alt="">
                                            <h2>@if($item->sale == 0){{ number_format($item->price)}} @else {{ number_format($item->sale)}}  @endif</h2>
=======
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="uploads/product/{{ $item->thumbnail }}" alt="">
                                            <h2>{{ number_format($item->price) }}</h2>
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2
                                            <p>{{ $item->name }}</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Kiểm Tra Đơn Hàng</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="item">
                        @foreach($fav_product as $item)
<<<<<<< HEAD
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
                                            <img src="uploads/product/{{ $item->thumbnail }}" alt="">
                                            <h2>@if($item->sale == 0){{ number_format($item->price)}} @else {{ number_format($item->sale)}}  @endif</h2>
=======
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="uploads/product/{{ $item->thumbnail }}" alt="">
                                            <h2>{{ number_format($item->price) }}</h2>
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2
                                            <p>{{ $item->name }}</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Kiểm Tra Đơn Hàng</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div><!--/recommended_items-->
        @endif

    </div>
@endsection