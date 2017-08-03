<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="SHOP0317E"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'PHP0317E') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('source/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('source/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('source/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('source/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('source/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('source/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('source/css/responsive.css') }}" rel="stylesheet">

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
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



                    </div><!--/category-products-->


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

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('source/js/jquery.js') }}"></script>
<script src="{{ asset('source/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('source/js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('source/js/price-range.js') }}"></script>
<script src="{{ asset('source/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('source/js/main.js') }}"></script>
</body>
</html>
