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
						<li class="home-act"><a href="#">Search Result</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Product grid -->
		<section class="m-t-lg-30 m-t-xs-0">
				<div class="row">
					<div class="col-sm-12 col-md-11 col-lg-11">
						<div class="product product-grid">
							<div class="heading heading-2 m-b-lg-0">
								<h3 class="p-l-lg-20">Tyres & Wheels</h3>
							</div>
							<!-- Product filter -->
							<div class="product-filter p-t-xs-20 p-l-xs-20">
								
							</div>
							<div class="clearfix"></div>
							<div class="row">
							
							@foreach ($datas as $key => $data1)
								@foreach ($data1 as $key => $data2)
								@foreach ($data2 as $key => $data)
								<div class="col-sm-6 col-md-4 col-lg-4">
									<!-- Product item -->
									<div class="product-item hover-img">
										<div style="height:142px;overflow:hidden;">
											<img src="{{asset('assets/images/'.$category[$data->category_id-1].'/'.$data->image)}}" alt="image">
										</div>
										<div class="product-caption">
											<h4 class="product-name">{{$data->title}}</h4>
											<p class="product-model">{{$data->model}}</p>
											<div class="product-price-group">
												<span class="product-price">{{$data->price}}</span>
											</div>
											<a href="{{ route('front.detail',['id1'=>$data->inventory_id-1,'id2'=>$data->category_id-1, 'id3'=>$data->id])}}" class="ht-btn ht-btn-default">View Details</a>
										</div>
									</div>
								</div>
								@endforeach	
								@endforeach	
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