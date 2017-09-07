@extends('layouts.master')
@section('title') Details Product @endsection
@section('danhmuc') @include('layouts.danhmuc') @endsection
@section('content')
    <div class="col-sm-9 padding-right">
        <div class="product-details"><!--product-details-->
            <div class="col-sm-5">
                <div class="view-product">
                    @if($detail->des == "new")
                        <img src="{{asset('source/images/product-details/new.jpg')}}" style="width: 50px; height: 30px;"
                             class="newarrival" alt="">
                    @endif
                    @if($detail->sale != 0)
                        <img src="{{asset('source/images/product-details/sale.jpg')}}"
                             style="width: 70px; height: 35px; position: absolute ; left: 258px" class="newarrival" alt="">
                    @endif
                    <img src="{{asset('uploads/product/'.$detail->thumbnail)}}" alt="">
                </div>
            </div>
            <div class="col-sm-7">
                <div class="product-information"><!--/product-information-->
                    <h2>{{ $detail->name }}</h2>
                    <span style="font-size : 35px ; font-weight: bold ; color : #fe980f ;">@if($detail->sale == 0){{ number_format($detail->price)}} @else {{ number_format($detail->sale)}}  @endif
                        VNĐ</span><br/><br/>

                    <span>
					<a href="{{ url('cart/add/'.$detail->id) }}" class="btn btn-fefault cart">
							<i class="fa fa-shopping-cart"></i>
							Thêm vào giỏ
					</a>
				</span>
                    <p><b>Trạng Thái : </b>@if($detail->inventorynumber > 0)
                            Còn hàng
                        @else Hết hàng
                        @endif</p>
                    <p>@if($detail->des == "new")<h3 style=" color:coral; font-size: 20px; ">Sản Phẩm Mới</h3>
                    @else
                    @endif
                    </p>
                    <p><b>Brand:</b> E-SHOPPER</p>
                </div>
            </div>
        </div>
        <div class="category-tab shop-details-tab">
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    <li><a href="#details" data-toggle="tab">Chi tiết sản phẩm</a></li>
                    <li class="active"><a href="#reviews" data-toggle="tab">Đóng góp ý kiến</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade" id="details">
                    Chi Tiết Sản Phẩm
                </div>

                <div class="tab-pane fade active in" id="reviews">
                    <div class="col-sm-12">
                        <ul>
                            <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                            <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                            <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                        </ul>

                        <form action="#">
										<span>
											<input type="text" placeholder="Your Name">
											<input type="email" placeholder="Email Address">
										</span>
                            <textarea name=""></textarea>
                            <button type="button" class="btn btn-default pull-right">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div><!--/category-tab-->


    </div>
@endsection