<div class="shop_sidebar_area">                                                
                           <div class="widget catagory mb-50">
                               <!--  Side Nav  -->
                               <div class="nav-side-menu">
                                   <h6 class="mb-0">Loại cây</h6>
                                   <div class="menu-list">
                                       <ul id="menu-content2" class="menu-content collapse out">
                                           <!-- Single Item -->
                                           @foreach($loaisp as $lsp)
                                           <li data-toggle="collapse" data-target="#women2">
                                           
                                               <a href="/shop/{{$lsp-> Maloai_id}}">{{$lsp-> Tenloai}}</a>
                                               <!-- <ul class="sub-menu collapse show" id="women2">
                                                   <li><a href="#">Midi Dresses</a></li>
                                                   <li><a href="#">Maxi Dresses</a></li>
                                                   <li><a href="#">Prom Dresses</a></li>
                                                   <li><a href="#">Little Black Dresses</a></li>
                                                   <li><a href="#">Mini Dresses</a></li>
                                               </ul> -->
                                           </li>
                                           <!-- Single Item -->
                                          @endforeach
                                       </ul>
                                   </div>
                               </div>
                           </div>

                           <div class="widget price mb-50">
                               <h6 class="widget-title mb-30">Lọc theo giá</h6>
                               <div class="widget-desc">
                                   <div class="slider-range">
                                       <div data-min="0" data-max="3000" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="0" data-value-max="1350" data-label-result="Price:">
                                           <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                           <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                           <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                       </div>
                                       <div class="range-price">Price: 0 - 1350</div>
                                   </div>
                               </div>
                           </div>

                           <div class="widget color mb-70">
                               <h6 class="widget-title mb-30">Lọc theo màu sắc</h6>
                               <div class="widget-desc">
                                   <ul class="d-flex justify-content-between">
                                       <li class="gray"><a href="#"><span>(3)</span></a></li>
                                       <li class="red"><a href="#"><span>(25)</span></a></li>
                                       <li class="yellow"><a href="#"><span>(112)</span></a></li>
                                       <li class="green"><a href="#"><span>(72)</span></a></li>
                                       <li class="teal"><a href="#"><span>(9)</span></a></li>
                                       <li class="cyan"><a href="#"><span>(29)</span></a></li>
                                   </ul>
                               </div>
                           </div>

                           <div class="widget size mb-50">
                               <h6 class="widget-title mb-30">Lọc theo năm trồng</h6>
                               <div class="widget-desc">
                                   <ul class="d-flex justify-content-between">
                                       
                                       <li><a href="#">2018</a></li>
                                       <li><a href="#">2019</a></li>
                                       <li><a href="#">2020</a></li>
                                       <li><a href="#">2021</a></li>
                                       <li><a href="#">2022</a></li>
                                   </ul>
                               </div>
                           </div>

                           <div class="widget recommended">
                               <h6 class="widget-title mb-30">Khuyến cáo </h6>

                               <div class="widget-desc">
                                   <!-- Single Recommended Product -->
                                   <div class="single-recommended-product d-flex mb-30">
                                       <div class="single-recommended-thumb mr-3">
                                           <img src="karlmaster/img/cayday.webp" alt="">
                                       </div>
                                       <div class="single-recommended-desc">
                                           <h6>Cây cảnh</h6>
                                           <p>Từ 3.328.363 VNĐ</p>
                                       </div>
                                   </div>
                                   <!-- Single Recommended Product -->
                                   <div class="single-recommended-product d-flex mb-30">
                                       <div class="single-recommended-thumb mr-3">
                                           <img src="karlmaster/img/cayday.webp" alt="">
                                       </div>
                                       <div class="single-recommended-desc">
                                           <h6>Cây cảnh</h6>
                                           <p>Từ 5.801.091 VNĐ</p>
                                       </div>
                                   </div>
                                   <!-- Single Recommended Product -->
                                   <div class="single-recommended-product d-flex">
                                       <div class="single-recommended-thumb mr-3">
                                           <img src="karlmaster/img/cayday.webp" alt="">
                                       </div>
                                       <div class="single-recommended-desc">
                                           <h6>Cây cảnh</h6>
                                           <p>Từ 1.688.363 VNĐ</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>