<!-- ****** Header Area Start ****** -->
<header class="header_area">
            <!-- Top Header Area Start -->
            <div class="top_header_area">
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-end">

                        <div class="col-12 col-lg-7">
                            <div class="top_single_area d-flex align-items-center">
                                <!-- Logo Area -->
                                <div class="top_logo">
                                    <a href="#"><img style="margin-left: -60px;" src="/karlmaster/img/core-img/logo-new.png" alt=""></a>
                                   
                                </div>
                                <!-- Cart & Menu Area -->
                                <div class="header-cart-menu d-flex align-items-center ml-auto">
                                    <!-- Cart Area -->
                                    <div class="cart">
                                        <a href="{{ route('cart.list') }}" id="header-cart-btn" target="_blank"><span class="cart_quantity"> {{ Cart::getTotalQuantity()}}</span> <i class="ti-bag"></i> {{number_format( Cart::getTotal())}},000 VNĐ</a>
                                        <!-- Cart List Area Start -->
                                        <ul class="cart-list">
                                            <!-- <li>
                                                <a href="#" class="image"><img src="karlmaster/img/xe1.png" class="cart-thumb" alt=""></a>
                                                <div class="cart-item-desc">
                                                    <h6><a href="#">Blade 110</a></h6>
                                                    <p>1x - <span class="price">18.841.091 VNĐ</span></p>
                                                </div>
                                                <span class="dropdown-product-remove"><i class="icon-cross"></i></span>
                                            </li>
                                            <li>
                                                <a href="#" class="image"><img src="karlmaster/img/xe2.png" class="cart-thumb" alt=""></a>
                                                <div class="cart-item-desc">
                                                    <h6><a href="#">Future 125 FI</a></h6>
                                                    <p>1x - <span class="price">30.328.363 VNĐ</span></p>
                                                </div>
                                                <span class="dropdown-product-remove"><i class="icon-cross"></i></span>
                                            </li> -->
                                            <li class="total">
                                                <span class="pull-right">{{number_format( Cart::getTotal())}},000 VNĐ</span>
                                                <a href="cart.html" class="btn btn-sm btn-cart">Giỏ Hàng</a>
                                                <a href="checkout-1.html" class="btn btn-sm btn-checkout">Checkout</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="header-right-side-menu ml-15">
                                        <a href="#" id="sideMenuBtn"><i class="ti-menu" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Top Header Area End -->
            <div class="main_header_area">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 d-md-flex justify-content-between">
                            <!-- Header Social Area -->
                            <div class="header-social-area">
                                <a href="#"><span class="karl-level">Share</span> <i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                            <!-- Menu Area -->
                            <div class="main-menu-area">
                                <nav class="navbar navbar-expand-lg align-items-start">

                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>

                                    <div class="collapse navbar-collapse align-items-start collapse" id="karl-navbar">
                                        <ul class="navbar-nav animated" id="nav">
                                            <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="karlDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                                <div class="dropdown-menu" aria-labelledby="karlDropdown">
                                                    <a class="dropdown-item" href="/">Home</a>
                                                    <a class="dropdown-item" href="/shop">Shop</a>
                                                    <a class="dropdown-item" href="{{route('details')}}">Chi tiết sản phẩm</a>
                                                    <a class="dropdown-item" href="/login">Đăng nhập</a>
                                                    
                                                
                                                    

                                                   
                                                </div>
                                            </li>
                                            
                                            
                                            <li class="nav-item"><a class="nav-link" href="#"><span class="karl-level">hot</span> Cây cảnh</a></li>
                                            <li class="nav-item"><a class="nav-link" href="{{route('blog')}}">Tin Tức</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Help Line -->
                            <div class="help-line">
                                <a href="tel:+346573556778"><i class="ti-headphone-alt"></i> +84 989 536 321</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

         <!-- ****** Top Discount Area Start ****** -->
        <section class="top-discount-area d-md-flex align-items-center">
            <!-- Single Discount Area -->
            <div class="single-discount-area">
                <h5>Miễn phí vận chuyển & trả hàng</h5>
                <h6><a href="#">Mua Ngay</a></h6>
            </div>
            <!-- Single Discount Area -->
            <div class="single-discount-area">
                <h5>Giảm giá 10% cho tất cả các cây</h5>
                <h6>Sử dụng mã: Cayxinh</h6>
            </div>
            <!-- Single Discount Area -->
            <div class="single-discount-area">
                <h5>Giảm giá 15% cho sinh viên</h5>
                <h6>Sử dụng mã: Caysinhvien</h6>
            </div>

           
        </section>