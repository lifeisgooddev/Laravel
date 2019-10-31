@extends('layout.front')

@section('content')

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
			<!-- Car detail -->
			<section class="m-t-lg-30 m-t-xs-0">
				<div class="product_detail no-bg p-lg-0">
					<!-- Car name -->
					<h3 class="product-name color1-f">{{$product[0]->title}}/ 
						<span class="product-price color-red">{{$product[0]->price}}</span>
					</h3>
					<div class="row">
						<div class="col-md-7 col-lg-8">
							<!-- Car image gallery -->
							<div class="product-img-lg bg-gray-f5 bg1-gray-15">
								<div class="image-zoom row m-t-lg-5 m-l-lg-ab-5 m-r-lg-ab-5">
									<div class="col-md-12 col-lg-12 p-lg-5">
										<a href="{{asset('assets/images/generator/'.$product[0]->image)}}">
											<img src="{{asset('assets/images/generator/'.$product[0]->image)}}" alt="image">
										</a>
									</div>
									@foreach ($product_images as $key => $image)
									<div class="col-sm-3 col-md-3 col-lg-3 p-lg-5">
										<a href="{{asset('assets/images/generator/'.$image->url)}}">
											<img src="{{asset('assets/images/generator/'.$image->url)}}" alt="image">
										</a>
									</div>
									@endforeach
								</div>
							</div>
						</div>
						<!-- Car description -->
						<div class="col-md-5 col-lg-4">
							
							<ul class="product_para-1 p-lg-15 bg-gray-f5 bg1-gray-15">
								
								<li><span>Price :</span>{{$product[0]->price}}</li>
								<li><span>SKU :</span>{{$product[0]->SKU}}</li>
								<li><span>Inventory :</span>Generator</li>
								<li><span>Power Output :</span>{{$product[0]->poweroutput}}</li>
								<li><span>Rated Voltage :</span>{{$product[0]->ratedvoltage}}</li>
								<li><span>Current Output :</span>{{$product[0]->currentoutput}}</li>
								<li><span>DC Output :</span>{{$product[0]->dcoutput}}</li>
								<li><span>APROX Running Time :</span>{{$product[0]->runningtime}}</li>
								<li><span>Fuel Consumption :</span>{{$product[0]->fuelconsumption}}</li>
								<li><span>Tank Capacity :</span>{{$product[0]->tankcapacity}}</li>
								<li><span>Oil Capacity :</span>{{$product[0]->oilcapacity}}</li>
								<li><span>Weight :</span>{{$product[0]->weight}}</li>
								<li><span>DIMENSIONS :</span>{{$product[0]->dimensions}}</li>
							</ul>
							
						</div>
					</div>
				</div>
				<!-- Car description tabs -->
				<div class="row m-t-lg-30 m-b-lg-50">
					<div class="col-md-8">
						<div class="m-b-lg-30">
							<div class="heading-1"><h3>Overview</h3></div>
								<div class="m-b-lg-30 bg-gray-fa bg1-gray-2 p-lg-30 p-xs-15">
								<p class="color1-9">
									{{$product[0]->description}}	
								</p>
							</div>
						</div>
					</div>
					<!-- Dealer Infomation -->
					<div class="col-sm-12 col-md-4 col-lg-4">
						<!-- Form contact dealer-->
						<div class="m-t-lg-30">
							<div class="heading-1">
								<h3><i class="fa fa-envelope-o"></i>Send messenge</h3>
							</div>
							<div class="bg-gray-fa bg1-gray-2 p-lg-20">
								<form>
									<div class="form-group">
										<input type="email" class="form-control form-item" placeholder="Email">
									</div>
									<div class="form-group">
										<input type="text" class="form-control form-item" placeholder="Phone">
									</div>
									<div class="form-group">
										<input type="text" class="form-control form-item" placeholder="Adress">
									</div>
									<textarea class="form-control form-item h-200 m-b-lg-10" placeholder="Content" rows="3"></textarea>
									<button type="submit" class="ht-btn ht-btn-default">Send</button>
								</form>
							</div>
						</div>
					</div>
				</div>	
				<!-- Other cars -->
				<div class="product product-grid product-grid-2 car m-b-lg-15">
					<div class="heading">
						<h3>Other Cars</h3>
					</div>
					<div class="row">
						@foreach ($related as $key => $rel)
						<div class="col-sm-12 col-md-6 col-lg-4">
							<!-- Product item -->
							<div class="product-item hover-img">
								<div style="height:142px;overflow:hidden;">
								<a href="{{ route('front.gendetail',['id1'=>$category_id, 'id2'=>$rel->id])}}" class="product-img">
									<img src="{{asset('assets/images/generator/'.$rel->image)}}" alt="image">
								</a>
								</div>
								<div class="product-caption">
									<h4 class="product-name">
										<a href="{{ route('front.gendetail',['id1'=>$category_id, 'id2'=>$rel->id])}}">{{$rel->title}} </a><span class="f-18"> {{$rel->price}}</span>
									</h4>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</section>
		</div>
	</div>
</div>
@endsection