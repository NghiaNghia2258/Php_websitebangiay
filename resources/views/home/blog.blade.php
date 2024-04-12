@extends('home/layout')
@section('home/content')
<section>
		<div class="container">
			<div class="row">
            @include('home/leftshop')
				<div class="col-sm-9">
				
					<div class="blog-post-area">
						<h2 class="title text-center">Tin Tức</h2>
						@foreach($tt as $tt)
						<div class="single-blog-post">
							<h3>{{$tt->Tentieude}}</h3>
							<div class="post-meta">
								<ul>
									<li><i class="fa fa-user"></i> {{$tt->nhanVien->Tennhanvien}}</li>
									<!-- <li><i class="fa fa-clock-o"></i> 1:33 pm</li> -->
									<li><i class="fa fa-calendar"></i> {{$tt->Ngaynhap}}</li>
								</ul>
								<span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
								</span>
							</div>
							<a href="">
								<img src="/karlmaster/img/{{$tt-> Anh}}" alt="">
							</a>
							<p>{{$tt->Mota}}</p>
							
						</div>
						
						@endforeach
						

						<div class="pagination-area">
							<ul class="pagination">
								<li><a href="" class="active">1</a></li>
								<li><a href="">2</a></li>
								<li><a href="">3</a></li>
								<li><a href=""><i class="fa fa-angle-double-right"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
@endsection
