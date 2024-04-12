@extends('home/layout')
@section('home/content')




<div class="cart_area section_padding_100 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    @if ($message = Session::get('success'))
                          <div class="p-4 mb-3 bg-green-400 rounded">
                              <p class="text-green-800">{{ $message }}</p>
                          </div>
                      @endif

                        <div class="cart-table clearfix">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th>Giá cả</th>
                                        <th>Số lượng</th>
                                        <th></th>
                                        <th>Tổng tiền</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>

                              
                                @foreach ($cartItems as $item)
                                    <tr>
                                        <td class="cart_product_img d-flex align-items-center">
                                            <a href="#"><img src="/karlmaster/img/{{$item->attributes->image}}" alt="Product"></a>
                                            <h6>{{ $item->name }}</h6>
                                        </td>
                                        <td class="price"><span>{{number_format($item->price)}},000 VNĐ</span></td>
                                        <td class="qty">
                                            <div class="quantity">
                                    <form action="{{ route('cart.update') }}" method="POST">
                                      @csrf
                                    <input type="hidden" name="id" value="{{ $item->id}}" >
                                    <input type="number" name="Soluong" value="{{ $item->quantity }}" min="1"  
                                    class="qty-text"/>
                                    <button type="submit"  style="border: none;background-color: #f4f2f8;"><i class="btn btn-warning fa fa-arrow-up" aria-hidden="true"></i></button>
                                    </form>

                                                <!-- <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                <input type="number" class="qty-text" id="qty" step="1" min="1" max="99" name="quantity" value="1">
                                                <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span> -->
                                    </div>   
                                    </td>

                                        <td>

                                         <form action="{{ route('cart.remove') }}" method="POST">
                                   @csrf
                                    <input type="hidden" value="{{ $item->id }}" name="id">
                                  <button class="px-4 py-2 text-red bg-red-600" style="border: none;background-color: #fff;"> <i class="btn btn-danger fa fa-trash"> </i></button>
                                     </form>
                                
                                         </td>
                                        <td class="total_price"><span>{{number_format($item->quantity*$item->price)}},000 VNĐ</span></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="cart-footer d-flex mt-30">
                            <div class="back-to-shop w-50">
                                <a href="/">Tiếp tục mua</a>
                            </div>
                            <div class="update-checkout w-50 text-right">
                            <form action="{{ route('cart.clear') }}" method="POST">
                            @csrf
                            <a><button style="border: none;background-color: #f4f2f8;" >Remove All Cart</button> </a>
                          </form>
                                <!-- <a href="#">Xóa giỏ hàng</a>
                                <a href="#">Cập nhập giỏ hàng</a> -->
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="coupon-code-area mt-70">
                            <div class="cart-page-heading">
                                <h5>MÃ PHIẾU GIẢM GIÁ</h5>
                                <p>Nhập mã giảm giá của bạn</p>
                            </div>
                            <form action="#">
                                <input type="search" name="search" placeholder="#569ab15">
                                <button type="submit">Áp dụng</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="shipping-method-area mt-70">
                            <div class="cart-page-heading">
                                <h5>PHƯƠNG THỨC VẬN CHUYỂN</h5>
                                <p>Chọn một trong những thứ bạn muốn</p>
                            </div>

                            <div class="custom-control custom-radio mb-30">
                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio1"><span>Giao hàng vào ngày hôm sau</span><span>200000 VNĐ</span></label>
                            </div>

                            <div class="custom-control custom-radio mb-30">
                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio2"><span>Giao hàng tiêu chuẩn</span><span>100000VNĐ</span></label>
                            </div>

                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio3"><span>Đơn hàng cá nhân</span><span>Free</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="cart-total-area mt-70">
                            <div class="cart-page-heading">
                                <h5>TỔNG SỐ GIỎ HÀNG</h5>
                                <p>Tông tin cuối cùng</p>
                            </div>

                            <ul class="cart-total-chart">
                                <li><span>Tổng phụ</span> <span>{{number_format( Cart::getTotal())}},000 VNĐ</span></li>
                                <li><span>Vận chuyển</span> <span>Free</span></li>
                                <li><span><strong>Tổng tiền</strong></span> <span><strong> {{number_format( Cart::getTotal())}},000 VNĐ </strong></span></li>
                            </ul>
                            <a href="/home/checkout" class="btn karl-checkout-btn">Tiến hành thanh toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ****** Cart Area End ****** -->
@endsection


