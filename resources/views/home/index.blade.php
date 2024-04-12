@extends('home/layout')
@section('home/content')
<style>
    .pagination .page-item.active .page-link {
        background-color: black;
        border-color: black;
    }

    .pagination .page-item.active .page-link:hover {
        background-color: black;
        border-color: black;
    }

    .pagination .page-link {
        color: black;
    }

    .pagination .page-link:hover {
        color: black;
    }
</style>
<section class="welcome_area">
            <div class="welcome_slides owl-carousel">
                <!-- Single Slide Start -->
                

                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(karlmaster/img/slide1.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Chỉ hôm nay chúng tôi cung cấp giao hàng miễn phí</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Một Số Cây Cảnh Hợp Theo Tuổi 12 Con Giáp Mang Lại May Mắn</h2>
                                    <a href="#" class="btn karl-btn" data-animation="fadeInLeftBig" data-delay="1s" data-duration="500ms">Kiểm tra bộ sưu tập</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(karlmaster/img/slide2.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Chỉ hôm nay chúng tôi cung cấp giao hàng miễn phí</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Một Số Cây Cảnh Đang Thịnh Hành</h2>
                                    <a href="#" class="btn karl-btn" data-animation="fadeInLeftBig" data-delay="1s" data-duration="500ms">Kiểm tra bộ sưu tập</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(karlmaster/img/slide3.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Chỉ hôm nay chúng tôi cung cấp giao hàng miễn phí</h6>
                                    <h2 data-animation="bounceInDown" data-delay="500ms" data-duration="500ms">Website Bán Cây Cảnh Đẹp Trực Tuyến Giá Rẻ</h2>
                                    <a href="#" class="btn karl-btn" data-animation="fadeInRightBig" data-delay="1s" data-duration="500ms">Kiểm tra bộ sưu tập</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ****** Welcome Slides Area End ****** -->

        <!-- ****** Top Catagory Area Start ****** -->
        <section class="top_catagory_area d-md-flex clearfix">
            <!-- Single Catagory -->
            <div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url(karlmaster/img/cay-bon-sai-dep_091203346.jpg);">
                <div class="catagory-content">
                    <h6>Trên Shoppe</h6>
                    <h2>Giảm giá 20%</h2>
                    <a href="#" class="btn karl-btn">Mua Ngay</a>
                </div>
            </div>
            <!-- Single Catagory -->
            <div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url(karlmaster/img/cay-bon-sai-dep_091203346.jpg);">
                <div class="catagory-content">
                    <h6>Cây hot trong năm</h6>
                    <h2>Cây hot</h2>
                    <a href="#" class="btn karl-btn">Mua Ngay</a>
                </div>
            </div>
        </section>
        <!-- ****** Top Catagory Area End ****** -->

        <!-- ****** Quick View Modal Area Start ****** -->
       
        <!-- ****** Quick View Modal Area End ****** -->

        <!-- ****** New Arrivals Area Start ****** -->
        <section class="new_arrivals_area section_padding_100_0 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_heading text-center">
                            <h2>Hàng mới về</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="karl-projects-menu mb-100">
                <div class="text-center portfolio-menu">
                  
                    
                </div>
            </div>

            <div class="container">
                <div class="row karl-new-arrivals">
                @foreach($sp as $sp1)
                    <!-- Single gallery Item Start -->
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="/karlmaster/img/{{$sp1-> Anh}}" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                        
                            <h4 class="product-price">Từ {{number_format($sp1-> Gia)}},000 VNĐ</h4>
                            <a href="/details/{{$sp1->id}}">
												<p>{{$sp1-> Tensanpham}}</p>
												</a>


                            <!-- Add to Cart -->
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{$sp1-> id }}" name="id">
                        <input type="hidden" value="{{$sp1-> Tensanpham}}" name="Tensanpham">
                        <input type="hidden" value="{{$sp1-> Gia}}" name="Gia">
                        <input type="hidden" value="{{$sp1-> Anh}}"  name="Anh">
                        <input type="hidden" value="1" name="Soluong">
                        <div class="product-description">
                        <button class="add-to-cart-btn" style="border: none;background-color: #fff;">THÊM VÀO GIỎ HÀNG</button>
                        </div>
                    </form>
                            <!-- <a href="#" class="add-to-cart-btn">THÊM VÀO GIỎ HÀNG</a> -->
                        </div>
                    </div>
                    
                @endforeach
                
                </div>
                <div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <!-- Hiển thị các liên kết phân trang -->
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <!-- Liên kết đến trang trước -->
                    @if ($sp->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link">&laquo;</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $sp->previousPageUrl() }}" aria-label="Previous">&laquo;</a>
                        </li>
                    @endif

                    <!-- Hiển thị các liên kết trang -->
                    @for ($i = 1; $i <= $sp->lastPage(); $i++)
                        <li class="page-item {{ ($sp->currentPage() == $i) ? 'active' : '' }}">
                            <a class="page-link" href="{{ $sp->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor

                    <!-- Liên kết đến trang tiếp theo -->
                    @if ($sp->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $sp->nextPageUrl() }}" aria-label="Next">&raquo;</a>
                        </li>
                    @else
                        <li class="page-item disabled">
                            <span class="page-link">&raquo;</span>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</div>
               
        </section>
        <!-- ****** New Arrivals Area End ****** -->

        <!-- ****** Offer Area Start ****** -->
        <section class="offer_area height-700 section_padding_100 bg-img" style="background-image: url(karlmaster/img/caysi.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-end justify-content-end">
                    <div class="col-12 col-md-8 col-lg-6">
                        <div class="offer-content-area wow fadeInUp" data-wow-delay="1s">
                            <h2>Cây Si <span class="karl-level">Hot</span></h2>
                            <p>*Miễn phí vận chuyển từ ngày 18/9/2022</p>
                            <div class="offer-product-price">
                                <h3><span class="regular-price">25.500.000 VNĐ</span>20.500.000 VNĐ</h3>
                            </div>
                            <a href="#" class="btn karl-btn mt-30">Mua Ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ****** Offer Area End ****** -->

        <!-- ****** Popular Brands Area Start ****** -->
        <section class="karl-testimonials-area section_padding_100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_heading text-center">
                            <h2>ĐÁNH GIÁ</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="karl-testimonials-slides owl-carousel">

                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial-area text-center">
                                <span class="quote">"</span>
                                <h6>Sản phẩm này rất tốt! </h6>
                                <div class="testimonial-info d-flex align-items-center justify-content-center">
                                    <div class="tes-thumbnail">
                                        <img src="img/bg-img/tes-1.jpg" alt="">
                                    </div>
                                    <div class="testi-data">
                                        <p>Đào Nhật Việt</p>
                                        <span>Kim Động-Hưng Yên</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial-area text-center">
                                <span class="quote">"</span>
                                <h6>Rất đáng tiền!!</h6>
                                <div class="testimonial-info d-flex align-items-center justify-content-center">
                                    <div class="tes-thumbnail">
                                        <img src="img/bg-img/tes-1.jpg" alt="">
                                    </div>
                                    <div class="testi-data">
                                        <p>Nguyễn Thế Dũng</p>
                                        <span>Yên Mỹ-Hưng Yên</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial-area text-center">
                                <span class="quote">"</span>
                                <h6>Sẽ quay lại mua thêm!</h6>
                                <div class="testimonial-info d-flex align-items-center justify-content-center">
                                    <div class="tes-thumbnail">
                                        <img src="img/bg-img/tes-1.jpg" alt="">
                                    </div>
                                    <div class="testi-data">
                                        <p>Nguyễn Thị Thu</p>
                                        <span>Phù Cừ - Hưng Yên</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
@endsection


