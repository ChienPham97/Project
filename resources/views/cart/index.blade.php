@extends('layouts.master')
@section('title') Cart Page @endsection
@section('content')
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="{{ url('home') }}">Trang Chủ</a></li>
                    <li class="active">Kiểm tra đơn hàng</li>
                </ol>
            </div><!--/breadcrums-->
            @if(Auth::check())
                <div class="register-req">Vui lòng để lại địa chỉ quý khách muốn giao hàng</div>
            @else
                <div class="register-req">
                    <p>Vui lòng đăng kí để thanh toán hoặc nhập thông tin đầy đủ để nhận đơn hàng </p>
                    <a class="btn btn-primary" href="{{ url('register') }}">Đăng Kí Tài Khoản</a>
                </div><!--/register-req-->
            @endif


            <div class="review-payment">
                <h2>Hóa đơn</h2>
            </div>

            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Sản Phẩm</td>
                        <td class="description"></td>
                        <td class="price">Giá</td>
                        <td class="quantity">Số lượng</td>
                        <td class="total">Tổng tiền</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $totalAmount = 0; ?>
                    @foreach(Cart::content() as $item)
                        @if(isset($item->id))
                            <tr>
                                <td class="cart_product">
                                    <a href="{{ url('product_detail/'.$item->id) }}"><img
                                                src="{{ url('uploads/product/'.$item->options->thumbnail) }}" alt=""
                                                class="img-bill"></a>
                                </td>
                                <td class="cart_description">
                                    <h4><a href="{{ url('product_detail/'.$item->id) }}">{{ $item->name }}</a></h4>
                                </td>
                                <td class="cart_price">
                                    <p>@if($item->sale == 0){{ number_format($item->price)}} @else {{ number_format($item->sale)}}  @endif</p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        <input class="cart_quantity_input" type="text" name="quantity"
                                               value="{{ $item->qty }}"
                                               autocomplete="off" size="2" disabled>
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price">
                                        @if($item->sale == 0)
                                            <?php
                                            $m = $item->price * $item->qty;
                                            $totalAmount += $m;
                                            echo number_format($m);
                                            ?>
                                        @else
                                            <?php
                                            $m = $item->sale * $item->qty;
                                            $totalAmount += $m;
                                            echo number_format($m);
                                            ?>
                                        @endif
                                    </p>
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete" href="{{ url('cart/remove/'.$item->id) }}"><i
                                                class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        @else
                            <tr>Quý khách chưa đặt mua sản phẩm nào</tr>
                        @endif
                    @endforeach
                    <tr>
                        <td colspan="4">&nbsp;</td>
                        <td colspan="2">
                            <table class="table table-condensed total-result">
                                <tr>
                                    <td>Tổng Thanh Toán</td>
                                    <td><span>{{ number_format($totalAmount )}}</span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            {!! Form::open(['method' => 'POST', 'url' => 'checkout']) !!}
            <div class="shopper-informations">
                <div class="row">
                    <div class="col-sm-7" style="display: block;">
                        <div class="shopper-info">
                            <p>Thông tin người nhận hàng</p>
                            <div class="col-sm-10 lbform" >
                                <label >Họ và tên</label>
                                {!! Form::text('name', isset(Auth::user()->name) ?  Auth::user()->name : null, [ "placeholder" => "Họ và tên của quý khách là gì ?"]) !!}
                                {!! $errors->first('name', '<span class="error">:message</span>') !!}
                            </div>


                            <div class="col-sm-10 lbform" >
                                <label >Email</label>
                                {!! Form::text('email', isset(Auth::user()->email) ?  Auth::user()->email : null, [ "placeholder" => "Email của quý khách là gì ?"]) !!}
                                {!! $errors->first('email', '<span class="error">:message</span>') !!}
                            </div>

                            <div class="col-sm-10 lbform" >
                                <label >Số điện thoại</label>
                                {!! Form::text('phone', isset(Auth::user()->phone) ?  Auth::user()->phone : null, [ "placeholder" => "Số điện thoại của quý khách là gì ?"]) !!}
                                {!! $errors->first('phone', '<span class="error">:message</span>') !!}
                            </div>

                            <div class="col-sm-10 lbform" >
                                <label >Địa chỉ</label>
                                {!! Form::text('address', isset(Auth::user()->address) ?  Auth::user()->address : null, [ "placeholder" => "Địa chỉ quý khách muốn giao hàng ở đâu ?"]) !!}
                                {!! $errors->first('address', '<span class="error">:message</span>') !!}
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="order-message">
                            <p>Ghi Chú</p>
                            <textarea name="message"
                                      placeholder="Ghi chú quan trọng và cấp thiết mà quý khách muốn chúng tôi biết khi giao hàng"
                                      rows="16"></textarea>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary" style="margin-top: -155px ; margin-bottom: 34px ; margin-left: 250px;">Thanh Toán</button>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </section>

@endsection