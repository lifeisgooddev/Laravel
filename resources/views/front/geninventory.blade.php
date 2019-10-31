@extends('layout.front')

@section('content')
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
						<li class="home-act"><a href="#">Generators</a></li>
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
								<li class="active"><a href="{{ route('front.geninventory',['id1'=>1]) }}">Disel Generators<i class="fa fa-chevron-right pull-right"></i></a></li>
								<li><a href="{{ route('front.geninventory',['id1'=>2]) }}">Patrol Generators<i class="fa fa-chevron-right pull-right"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-8 col-md-9 col-lg-9">
						<div class="product product-grid">
							<div class="heading heading-2 m-b-lg-0">
								<h3 class="p-l-lg-20">Generators</h3>
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
											<img src="{{asset('assets/images/generator/'.$data->image)}}" alt="image">
										</div>
										<div class="product-caption">
											<h4 class="product-name">{{$data->title}}</h4>
											<p class="product-model">{{$data->SKU}}</p>
											<div class="product-price-group">
												<span class="product-price">{{$data->price}}</span>
											</div>
											<a href="{{ route('front.gendetail',['id1'=>$category_id+1, 'id2'=>$data->id])}}" class="ht-btn ht-btn-default">View Details</a>
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