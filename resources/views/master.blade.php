<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link href="source/css/bootstrap.min.css" rel="stylesheet">
    <link href="source/css/font-awesome.min.css" rel="stylesheet">
    <link href="source/css/prettyPhoto.css" rel="stylesheet">
    <link href="source/css/price-range.css" rel="stylesheet">
    <link href="source/css/animate.css" rel="stylesheet">
    <link href="source/css/main.css" rel="stylesheet">
    <link href="source/css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="source/js/html5shiv.js"></script>
    <script src="source/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

@include('header')
@yield('slider')

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Danh Mục</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Linh Kiện Máy Tính
                                    </a>
                                </h4>
                            </div>
                            <div id="sportswear" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        @foreach($lkmt as $lk)
                                            <li><a href="#">{{ $lk->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Máy Tính Xách Tay
                                    </a>
                                </h4>
                            </div>
                            <div id="laptop" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        @foreach($laptop as $lt)
                                            <li><a href="#">{{ $lt->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        GAMEGEAR-COOLING
                                    </a>
                                </h4>
                            </div>
                            <div id="mens" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        @foreach($game as $g)
                                            <li><a href="#">{{ $g->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Thiết Bị Nghe Nhìn
                                    </a>
                                </h4>
                            </div>
                            <div id="womens" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        @foreach($tbnghenhin as $nn)
                                            <li><a href="#">{{ $nn->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#thietbivanphong">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Thiết Bị Lưu Trữ
                                    </a>
                                </h4>
                            </div>
                            <div id="thietbivanphong" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        @foreach($tbluutru as $ss)
                                            <li><a href="#">{{ $ss->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#server">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Thiết Bị Văn Phòng
                                    </a>
                                </h4>
                            </div>
                            <div id="server" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        @foreach($tbvanphong as $vp)
                                            <li><a href="#">{{ $vp->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div><!--/category-products-->

                    <div class="brands_products"><!--brands_products-->
                        <h2>Chia Sẻ</h2>
                        <div class="brands-name">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#"> <span class="pull-right">(50)</span>Kinh Nghiệm Mua Hàng</a></li>
                                <li><a href="#"> <span class="pull-right">(56)</span>Hướng Dẫn Sử Dụng</a></li>
                                <li><a href="#"> <span class="pull-right">(27)</span>Chính Sách Bảo Hành</a></li>
                                <li><a href="#"> <span class="pull-right">(32)</span>Khuyến Mãi</a></li>
                                <li><a href="#"> <span class="pull-right">(5)</span>Thế Giới Công Nghệ</a></li>
                                <li><a href="#"> <span class="pull-right">(9)</span>Youtube</a></li>
                                <li><a href="#"> <span class="pull-right">(4)</span>Fanpage</a></li>
                            </ul>
                        </div>
                    </div><!--/brands_products-->

                    <div class="price-range"><!--price-range-->
                        <h2>Chất Lượng</h2>
                        <div class="well text-center">
                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="10"
                                   data-slider-step="2" data-slider-value="[7,9]" id="sl2"><br/>
                            <b class="pull-left">0</b> <b class="pull-right">10</b>
                        </div>
                    </div><!--/price-range-->

                    <div class="shipping text-center"><!--shipping-->
                        <a href="#"><img src="source/images/home/shipping.jpg" alt=""/></a>

                    </div><!--/shipping-->

                </div>
            </div>

            @yield('content')

        </div>
    </div>
</section>
@include('footer')


<script src="source/js/jquery.js"></script>
<script src="source/js/bootstrap.min.js"></script>
<script src="source/js/jquery.scrollUp.min.js"></script>
<script src="source/js/price-range.js"></script>
<script src="source/js/jquery.prettyPhoto.js"></script>
<script src="source/js/main.js"></script>
</body>
</html>