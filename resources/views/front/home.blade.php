@extends('layout.front')

@section('content')
<style>
	.color-inher.h-box-auto.h-xs-auto{
		min-height:500px;
	}
	.col-sm-6.col-md-6.col-lg-4  img{
		
	}
	.product-item .product-caption .product-name {
    font-size: 13px;
	}
	video{
		width:100%;
	}
	.slide-caption
	{
		margin-top:-360px;
		z-index:1000;
	}
	.video{
		z-index:-1000;
	}
	.banner-item.banner-2x.banner-bg-8{
		padding:20px 10px;
		background-image:none;
		margin-bottom:20px;
	}
</style>
<?php session(['login' => '0']);?>
	<div id="wrap-body" class="p-t-lg-30">
		<div class="container">
			<div class="wrap-body-inner">
				<!-- Banner -->
				<div class="banner-item banner-2x banner-bg-8 color-inher m-xs-auto m-box-auto p-t-xs-50 p-b-xs-60">
					<div class="video">
						<video  loop  id="video" autoplay muted>
							<source src="{{  asset('assets/video/bg.mp4') }}" type="video/mp4">
							<!-- <source src="{{  asset('assets/video/bg.ogg') }}" type="video/ogg"> -->
						</video>
						
					</div>
					<!-- <button id="unmuteButton"></button> -->
				</div>
				<!-- Search option -->
				
				<!-- Recent cars -->
				<div class="product product-grid product-grid-2 car m-b-lg-20">
					<div class="heading">
						<h3>RECENT CARS</h3>
					</div>
					<div class="row">
					@foreach ($excavators as $key => $excavator)
						<div class="col-sm-6 col-md-6 col-lg-4">
							<!-- Product item -->
							<div class="product-item hover-img">
								<div style="height:224px;overflow:hidden;">
									<a href="#" class="product-img">
										<img src="{{asset('assets/images/excavator/'.$excavator->image)}}" alt="image">
									</a>
								</div>	
								<div class="product-caption">
									<h4 class="product-name">
										<a href="#">{{$excavator->title}} / <b>NEW</b></a><span class="f-18">{{$excavator->price}}</span>
									</h4>
								</div>
							</div>
						</div>
						@endforeach
					</div>
					
				</div>
				<!-- Banner -->
				<div class="banner-item banner-2x banner-bg-9 color-inher m-b-lg-50">
					<h3 class="f-weight-300">Start Selling With <strong>AutoShop</strong> Now!</h3>
					<p>No hidden fees or costs, you pay what you need.</p>
					<a href="#" class="ht-btn ht-btn-default">Click to sell your car</a>
				</div>
				<!-- Last news -->
				<section class="m-b-lg-50">
					<div class="blog blog-list overl">
						<div class="heading">
							<h3>Latest News</h3>
						</div>
						<div class="row">
							<div class="owl" data-items="2" data-itemsDesktop="2" data-itemsDesktopSmall="1" data-itemsTablet="2" data-itemsMobile="1" data-pag="false" data-buttons="true">
								<div class="col-lg-12">
									<!-- Blog item -->
									<div class="blog-item">
										<div class="row">
											<div class="col-sm-6 col-md-6 col-lg-6">
												<a href="#" class="hover-img"><img src="{{asset('assets/images/b-img-2.jpg')}}" alt="image"></a>
											</div>
											<div class="col-sm-6 col-md-6 col-lg-6">
												<div class="blog-caption text-left">
													<ul class="blog-date blog-date-left p-t-lg-0">
														<li><a href="#"><i class="fa fa-calendar"></i>25th May 2016</a></li>
														<li><a href="#"><i class="fa fa-comment"></i>3 comment</a></li>
													</ul>
													<h3 class="blog-heading"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
													<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="blog-item">
										<div class="row">
											<div class="col-sm-6 col-md-6 col-lg-6">
												<a href="#" class="hover-img"><img src="{{asset('assets/images/b-img-2.jpg')}}" alt="image"></a>
											</div>
											<div class="col-sm-6 col-md-6 col-lg-6">
												<div class="blog-caption text-left">
													<ul class="blog-date blog-date-left p-t-lg-0">
														<li><a href="#"><i class="fa fa-calendar"></i>25th May 2016</a></li>
														<li><a href="#"><i class="fa fa-comment"></i>3 comment</a></li>
													</ul>
													<h3 class="blog-heading"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
													<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<!-- Blog item -->
									<div class="blog-item">
										<div class="row">
											<div class="col-sm-6 col-md-6 col-lg-6">
												<a href="#" class="hover-img"><img src="{{asset('assets/images/b-img-2.jpg')}}" alt="image"></a>
											</div>
											<div class="col-sm-6 col-md-6 col-lg-6">
												<div class="blog-caption text-left">
													<ul class="blog-date blog-date-left p-t-lg-0">
														<li><a href="#"><i class="fa fa-calendar"></i>25th May 2016</a></li>
														<li><a href="#"><i class="fa fa-comment"></i>3 comment</a></li>
													</ul>
													<h3 class="blog-heading"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
													<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<!-- Blog item -->
									<div class="blog-item">
										<div class="row">
											<div class="col-sm-6 col-md-6 col-lg-6">
												<a href="#" class="hover-img"><img src="{{asset('assets/images/b-img-2.jpg')}}" alt="image"></a>
											</div>
											<div class="col-sm-6 col-md-6 col-lg-6">
												<div class="blog-caption text-left">
													<ul class="blog-date blog-date-left p-t-lg-0">
														<li><a href="#"><i class="fa fa-calendar"></i>25th May 2016</a></li>
														<li><a href="#"><i class="fa fa-comment"></i>3 comment</a></li>
													</ul>
													<h3 class="blog-heading"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
													<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<!-- Blog item -->
									<div class="blog-item">
										<div class="row">
											<div class="col-sm-6 col-md-6 col-lg-6">
												<a href="#" class="hover-img"><img src="{{asset('assets/images/b-img-2.jpg')}}" alt="image"></a>
											</div>
											<div class="col-sm-6 col-md-6 col-lg-6">
												<div class="blog-caption text-left">
													<ul class="blog-date blog-date-left p-t-lg-0">
														<li><a href="#"><i class="fa fa-calendar"></i>25th May 2016</a></li>
														<li><a href="#"><i class="fa fa-comment"></i>3 comment</a></li>
													</ul>
													<h3 class="blog-heading"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
													<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	@endsection
	@section('scripts')
	<script>
	

	</script>
	@endsection