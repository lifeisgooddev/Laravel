@extends('layout.front')

@section('content')
<style>
.col-sm-6.col-md-4.col-lg-4{
	max-height:400px;
}
</style>
<?php 
$category = ["excavator","tractor","utility", "trailer", "mower", "implement"];
?>
<div id="wrap-body" class="p-t-lg-30">
	<div class="container">
		<div class="wrap-body-inner">
		<!-- Breadcrumb-->
		<div class="hidden-xs">
			<div class="row">
				<div class="col-lg-6">
					<ul class="ht-breadcrumb pull-left">
						<li class="home-act"><a href="{{ route('front.index') }}"><i class="fa fa-home"></i></a></li>
						<li class="home-act"><a href="#">New Inventory</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Product grid -->
		<section class="m-t-lg-30 m-t-xs-0">
				<div class="row">
					<div class="col-sm-4 col-md-3 col-lg-3">
						<!-- Caterory -->
						<div class="category m-b-lg-50 ">
							<div class="heading m-b-lg-0">
								<h3 class="p-l-lg-20" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
										<i class="fa fa-bars"></i>Caterory
								</h3>
							</div>
							<ul class="collapse in" id="collapseExample">
								<li class="active"><a href="{{ route('front.inventory',['id1'=>$inventory_id,'id2'=>0]) }}">Excavators<i class="fa fa-chevron-right pull-right"></i></a></li>
								<li><a href="{{ route('front.inventory',['id1'=>$inventory_id,'id2'=>1]) }}">Tractors<i class="fa fa-chevron-right pull-right"></i></a></li>
								<li><a href="{{ route('front.inventory',['id1'=>$inventory_id,'id2'=>2]) }}">Utility Vehicles<i class="fa fa-chevron-right pull-right"></i></a></li>
								<li><a href="{{ route('front.inventory',['id1'=>$inventory_id,'id2'=>3]) }}">Trailers<i class="fa fa-chevron-right pull-right"></i></a></li>
								<li><a href="{{ route('front.inventory',['id1'=>$inventory_id,'id2'=>4]) }}">Mowers<i class="fa fa-chevron-right pull-right"></i></a></li>
								<li><a href="{{ route('front.inventory',['id1'=>$inventory_id,'id2'=>5]) }}">IMPLEMENTS&ACCESSORIES<i class="fa fa-chevron-right pull-right"></i></a></li>
							</ul>
						</div>
						<!-- Banner -->
						<div class="banner-item banner-bg-4 banner-1x color-inher">
							<h5>Lorem ipsum dolor</h5>
							<h3 class="f-weight-300"><strong>Interior</strong> Accessories</h3>
							<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel</p>
							<a href="#" class="ht-btn ht-btn-default">Shop now</a>
						</div>
					</div>
					<div class="col-sm-8 col-md-9 col-lg-9">
						<div class="product product-grid">
							<div class="heading heading-2 m-b-lg-0">
								<h3 class="p-l-lg-20">Tyres & Wheels</h3>
							</div>
							<!-- Product filter -->
							<div class="product-filter p-t-xs-20 p-l-xs-20">
								
							</div>
							<div class="clearfix"></div>
							<div class="row">
							@foreach ($datas as $key => $data)
								<div class="col-sm-6 col-md-4 col-lg-4">
									<!-- Product item -->
									<div class="product-item hover-img">
										<div style="height:142px;overflow:hidden;">
											<img src="{{asset('assets/images/'.$category[$category_id].'/'.$data->image)}}" alt="image">
										</div>
										<div class="product-caption">
											<h4 class="product-name">{{$data->title}}</h4>
											<p class="product-model">{{$data->model}}</p>
											<div class="product-price-group">
												<span class="product-price">{{$data->price}}</span>
											</div>
											<a href="{{ route('front.detail',['id1'=>$inventory_id,'id2'=>$data->category_id-1, 'id3'=>$data->id])}}" class="ht-btn ht-btn-default">View Details</a>
										</div>
									</div>
								</div>
							@endforeach
							</div>
							<nav aria-label="Page navigation">
							</nav>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>

@endsection