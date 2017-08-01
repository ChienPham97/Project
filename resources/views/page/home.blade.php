@extends('master')
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
                            @foreach($slider as $sl)
                                <div class="item">
                                    <div class="col-sm-6">
                                        <h1>{{ $sl->h1 }}</h1>
                                        <h2>{{ $sl->h2 }}</h2>
                                        <p>{{ $sl->p }}</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="source/images/home/{{ $sl->image }}" class="girl img-responsive"
                                             alt="">
                                    </div>
                                </div>
                            @endforeach
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>100% Responsive Design</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Chi Tiết</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="source/images/home/girl2.jpg" class="girl img-responsive" alt="">
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

@section('content')
    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Sản Phẩm Nổi Bật</h2>
            @foreach($product as $p)
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="uploads/product/{{ $p->thumbnail }}" alt="">
                                <h2>{{ $p->price }}</h2>
                                <p>{{ $p->name }}</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Kiểm
                                    Tra
                                    Đơn Hàng</a>
                            </div>
                        </div>
                        <div class="choose">
                            <ul class="nav nav-pills nav-justified">
                                <li><a href="#"><i class="fa fa-plus-square"></i>Yêu Thích</a></li>
                                <li><a href="#"><i class="fa fa-plus-square"></i>Thêm Vào Giỏ</a></li>
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
                    @foreach($new_product as $new)
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="uploads/product/{{ $new->thumbnail }}" alt="">
                                    <h2>{{ $new->price }}</h2>
                                    <p>{{ $new->name }}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- sản phẩm khuyến mãi -->
                <div class="tab-pane fade" id="blazers">
                    @foreach($sale_product as $sale)
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="uploads/product/{{ $sale->thumbnail }}" alt="">
                                        <h2>{{ $sale->price }}</h2>
                                        <p>{{ $sale->name }}</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- sản phẩm mua nhiều -->
                <div class="tab-pane fade" id="sunglass">
                    @foreach($buy_product as $buy)
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="uploads/product/{{ $buy->thumbnail }}" alt="">
                                        <h2>{{ $buy->price }}</h2>
                                        <p>{{ $buy->name }}</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Order -->
                <div class="tab-pane fade" id="kids">
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="source/images/home/gallery1.jpg" alt="">
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Kiểm
                                        Tra Đơn Hàng</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="source/images/home/gallery2.jpg" alt="">
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Kiểm
                                        Tra Đơn Hàng</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="source/images/home/gallery3.jpg" alt="">
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Kiểm
                                        Tra Đơn Hàng</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="source/images/home/gallery4.jpg" alt="">
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Kiểm
                                        Tra Đơn Hàng</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div><!--/category-tab-->

        <div class="recommended_items"><!--recommended_items-->
            <h2 class="title text-center">Khách Hàng Chia Sẻ</h2>

            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="source/images/home/recommend1.jpg" alt="">
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Kiểm Tra Đơn Hàng</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="source/images/home/recommend2.jpg" alt="">
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Kiểm Tra Đơn Hàng</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="source/images/home/recommend3.jpg" alt="">
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Kiểm Tra Đơn Hàng</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="source/images/home/recommend1.jpg" alt="">
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Kiểm Tra Đơn Hàng</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="source/images/home/recommend2.jpg" alt="">
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Kiểm Tra Đơn Hàng</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="source/images/home/recommend3.jpg" alt="">
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Kiểm Tra Đơn Hàng</a>
                                    </div>

                                </div>
                            </div>
                        </div>
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

    </div>
@endsection