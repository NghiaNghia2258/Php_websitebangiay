@extends('home/layout')
@section('home/content')

        <!-- ****** Quick View Modal Area End ****** -->

        <section class="shop_grid_area section_padding_100">
            <div class="container">
                <div class="row">
                    @include('home/leftshop')

                    <div class="col-12 col-md-8 col-lg-9">
                        <div class="shop_grid_product_area">
                            <div class="row">

                           

                            @foreach($sp as $dssp)
                                <!-- Single gallery Item -->
                                <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig" data-wow-delay="0.2s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="/karlmaster/img/{{$dssp->Anh}}" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                   
                                        <h4 class="product-price">Từ {{number_format($dssp-> Gia)}},000 VNĐ</h4>
                                        <a href="/details/{{$dssp->id}}">
												<p>{{$dssp-> Tensanpham}}</p>
												</a>
                                       
                                        <!-- Add to Cart -->
                                       

                                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{$dssp-> id }}" name="id">
                        <input type="hidden" value="{{$dssp-> Tensanpham}}" name="Tensanpham">
                        <input type="hidden" value="{{$dssp-> Gia}}" name="Gia">
                        <input type="hidden" value="{{$dssp-> Anh}}"  name="Anh">
                        <input type="hidden" value="1" name="Soluong">
                        <div class="product-description">
                        <button class="add-to-cart-btn" style="border: none;background-color: #fff;">THÊM VÀO GIỎ HÀNG</button>
                        </div>
                    </form>
                                    </div>
                                </div>
                            @endforeach
                                
                            </div>

                            
                        </div>

                        <div class="shop_pagination_area wow fadeInUp" data-wow-delay="1.1s">
                            <nav aria-label="Page navigation">
                                <ul class="pagination pagination-sm">
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </section>
@endsection


