@extends('layout.front')

@section('content')
<?php 
$category = ["excavator","tractor","utility", "trailer", "mower", "implement"];
$category_real = ["EXCAVATOR","TRACTOR","UTILITY VEHICLES", "TRAILER", "MOWER", "IMPLEMENT"];
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
						<li class="home-act"><a href="{{ route('front.inventory',['id1'=>$inventory_id,'id2'=>0]) }}"><?php echo $inventory_id==0?"New":"<b>Pre-Owned</b>"?> Inventory</a></li>
						<li class="home-act"><a href="{{ route('front.inventory',['id1'=>$inventory_id,'id2'=>$category_id]) }}">{{$category_real[$category_id]}}</a></li>
						
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
						<?php if($inventory_id == 0){ ?>
							<span class="car-status m-l-lg-10">NEW</span>
						<?php } else{ ?>
							<span class="car-status1 m-l-lg-10">PRE-OWNED</span>
						<?php } ?>
					</h3>
					<div class="row">
						<div class="col-md-7 col-lg-8">
							<!-- Car image gallery -->
							<div class="product-img-lg bg-gray-f5 bg1-gray-15">
								<div class="image-zoom row m-t-lg-5 m-l-lg-ab-5 m-r-lg-ab-5">
									<div class="col-md-12 col-lg-12 p-lg-5">
										<a href="{{asset('assets/images/'.$category[$category_id].'/'.$product[0]->image)}}">
											<img src="{{asset('assets/images/'.$category[$category_id].'/'.$product[0]->image)}}" alt="image">
										</a>
									</div>
									@foreach ($product_images as $key => $image)
									<div class="col-sm-3 col-md-3 col-lg-3 p-lg-5">
										<a href="{{asset('assets/images/'.$category[$category_id].'/'.$image->url)}}">
											<img src="{{asset('assets/images/'.$category[$category_id].'/'.$image->url)}}" alt="image">
										</a>
									</div>
									@endforeach
								</div>
							</div>
						</div>
						<!-- Car description -->
						<div class="col-md-5 col-lg-4">
							<?php if($category_id == 0){ ?>
							<ul class="product_para-1 p-lg-15 bg-gray-f5 bg1-gray-15">
								
								<li><span>Price :</span>{{$product[0]->price}}</li>
								<li><span>Model :</span>{{$product[0]->model}}</li>
								<li><span>Inventory :</span><?php echo $inventory_id==0?"<b>New</b>":"<b>Pre-Owned</b>"?></li>
								<li><span>Category :</span>{{$category_real[$category_id]}}</li>
								<li><span>Year of Mnftr :</span>{{$product[0]->year}}</li>
								<li><span>Usage Hours :</span>{{$product[0]->hours}}</li>
								<li><span>Country :</span>{{$product[0]->country}}</li>
								<li><span>MASCUS ID :</span>{{$product[0]->mascusid}}</li>
								<li><span>Color :</span>Red</li>
							</ul>
							<?php } else if($category_id == 1){?>
								<ul class="product_para-1 p-lg-15 bg-gray-f5 bg1-gray-15">
									
									<li><span>Price :</span>{{$product[0]->price}}</li>
									<li><span>Model :</span>{{$product[0]->model}}</li>
									<li><span>Inventory :</span><?php echo $inventory_id==0?"<b>New</b>":"<b>Pre-Owned</b>"?></li>
									<li><span>Category :</span>{{$category_real[$category_id]}}</li>
									<li><span>Location :</span>{{$product[0]->location}}</li>
									<li><span>Stock Number :</span>{{$product[0]->stocknumber}}</li>
									<li><span>Year :</span>{{$product[0]->year}}</li>
									<li><span>Make :</span>{{$product[0]->make}}</li>
									<li><span>Engine :</span>{{$product[0]->engine}}</li>
									<li><span>Horse Power :</span>{{$product[0]->horsepower}}</li>
									<li><span>Fuel Type :</span>{{$product[0]->fueltype}}</li>
									<li><span>Displacement :</span>{{$product[0]->displacement}}</li>
									<li><span>Lift Capacity :</span>{{$product[0]->liftcapacity}}</li>
									<li><span>Transmission Type :</span>{{$product[0]->transmissiontype}}</li>
									<li><span>Availability :</span>{{$product[0]->availability}}</li>
									<li><span>Drive :</span>{{$product[0]->drive}}</li>
									<li><span>Color :</span>Red</li>
								</ul>
							<?php } else if($category_id == 2){?>
								<ul class="product_para-1 p-lg-15 bg-gray-f5 bg1-gray-15">
									
									<li><span>Price :</span>{{$product[0]->price}}</li>
									<li><span>Model :</span>{{$product[0]->model}}</li>
									<li><span>Inventory :</span><?php echo $inventory_id==0?"<b>New</b>":"<b>Pre-Owned</b>"?></li>
									<li><span>Category :</span>{{$category_real[$category_id]}}</li>
									<li><span>Location :</span>{{$product[0]->location}}</li>
									<li><span>Year :</span>{{$product[0]->year}}</li>
									<li><span>Make :</span>{{$product[0]->make}}</li>
									<li><span>Engine :</span>{{$product[0]->engine}}</li>
									<li><span>Dry Weight :</span>{{$product[0]->dryweight}}</li>
									
									<li><span>Fuel Type :</span>{{$product[0]->fueltype}}</li>
									<li><span>Displacement :</span>{{$product[0]->displacement}}</li>
									<li><span>Payload Capacity :</span>{{$product[0]->payloadcapacity}}</li>
									<li><span>Transmission Type :</span>{{$product[0]->transmission}}</li>
									<li><span>Availability :</span>{{$product[0]->availability}}</li>
									<li><span>Weight :</span>{{$product[0]->weight}}</li>
									<li><span>Drive :</span>{{$product[0]->drive}}</li>
									<li><span>Towing Capacity :</span>{{$product[0]->towingcapacity}}</li>
									<li><span>Color :</span>Red</li>
								</ul>
							<?php } else if($category_id == 3){?>
								<ul class="product_para-1 p-lg-15 bg-gray-f5 bg1-gray-15">
									
									<li><span>Price :</span>{{$product[0]->price}}</li>
									<li><span>Model :</span>{{$product[0]->model}}</li>
									<li><span>Inventory :</span><?php echo $inventory_id==0?"<b>New</b>":"<b>Pre-Owned</b>"?></li>
									<li><span>Category :</span>{{$category_real[$category_id]}}</li>
									<li><span>Location :</span>{{$product[0]->location}}</li>
									<li><span>Year :</span>{{$product[0]->year}}</li>
									<li><span>Make :</span>{{$product[0]->make}}</li>
									<li><span>Length :</span>{{$product[0]->length}}</li>
									<li><span>Chassis :</span>{{$product[0]->chassis}}</li>
									
									<li><span>Width :</span>{{$product[0]->width}}</li>
									<li><span>Height :</span>{{$product[0]->height}}</li>
									<li><span>Axle :</span>{{$product[0]->axle}}</li>
									<li><span>Availability :</span>{{$product[0]->availability}}</li>
									<li><span>Color :</span>Red</li>
									<li><span>Status :</span>1</li>
								</ul>
							<?php } else if($category_id == 4){?>
								<ul class="product_para-1 p-lg-15 bg-gray-f5 bg1-gray-15">
									
									<li><span>Price :</span>{{$product[0]->price}}</li>
									<li><span>Model :</span>{{$product[0]->model}}</li>
									<li><span>Inventory :</span><?php echo $inventory_id==0?"<b>New</b>":"<b>Pre-Owned</b>"?></li>
									<li><span>Category :</span>{{$category_real[$category_id]}}</li>
									<li><span>Location :</span>{{$product[0]->location}}</li>
									<li><span>Year :</span>{{$product[0]->year}}</li>
									<li><span>Make :</span>{{$product[0]->make}}</li>
									<li><span>Fuel Type :</span>{{$product[0]->fueltype}}</li>
									<li><span>Width :</span>{{$product[0]->width}}</li>
									<li><span>Height :</span>{{$product[0]->height}}</li>
									<li><span>Displacement :</span>{{$product[0]->displacement}}</li>
									<li><span>Transmission :</span>{{$product[0]->transmission}}</li>
									<li><span>Availability :</span>{{$product[0]->availability}}</li>
									<li><span>Weight :</span>{{$product[0]->weight}}</li>
									<li><span>Color :</span>Red</li>
									<li><span>Status :</span>1</li>
								</ul>
							<?php } else if($category_id == 5){?>
								<ul class="product_para-1 p-lg-15 bg-gray-f5 bg1-gray-15">
									
									<li><span>Price :</span>{{$product[0]->price}}</li>
									<li><span>Model :</span>{{$product[0]->model}}</li>
									<li><span>Inventory :</span><?php echo $inventory_id==0?"<b>New</b>":"<b>Pre-Owned</b>"?></li>
									<li><span>Category :</span>{{$category_real[$category_id]}}</li>
									<li><span>Location :</span>{{$product[0]->location}}</li>
									<li><span>Year :</span>{{$product[0]->year}}</li>
									<li><span>Make :</span>{{$product[0]->make}}</li>
									<li><span>Color :</span>Red</li>
									<li><span>Status :</span>1</li>
								</ul>
							<?php } ?>
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
								<a href="{{ route('front.detail',['id1'=>$inventory_id,'id2'=>$category_id, 'id3'=>$rel->id])}}" class="product-img">
									<img src="{{asset('assets/images/'.$category[$category_id].'/'.$rel->image)}}" alt="image">
								</a>
								</div>
								<div class="product-caption">
									<h4 class="product-name">
										<a href="{{ route('front.detail',['id1'=>$inventory_id,'id2'=>$category_id, 'id3'=>$rel->id])}}">{{$rel->title}} /<?php echo $inventory_id==0?"<b>New</b>":"<b>Pre-Owned</b>"?></a><span class="f-18"> {{$rel->price}}</span>
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