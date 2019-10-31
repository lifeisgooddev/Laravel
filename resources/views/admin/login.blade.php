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
						<li class="home-act"><a href="#"><i class="fa fa-home"></i></a></li>
						<li class="active">My Account</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Form login -->
			<section class="block-login m-t-lg-30 m-t-xs-0 m-b-lg-50">
				<div>
					<div class="heading">
						<h3>My Account</h3>
					</div>
					<div class="row">									
						<div class="col-md-6 col-lg-6">
							<!-- Login -->
							<div class="p-lg-30 p-xs-15 bg-gray-f5 bg1-gray-15">
								<h3 class="p-t-lg-0">Already Registered?</h3>
								<p>Please enter your email address and password to login!</p>
								<form method="POST" action="{{route('admin.logincheck')}}">
                                    {{ csrf_field() }}
									<div class="form-group">
										<input type="text" class="form-control form-item" placeholder="Name" name="username">
									</div>
									<div class="form-group">
										<input type="password" class="form-control form-item" placeholder="Password" name="password">
									</div>
									<button type="submit" class="ht-btn ht-btn-default">Login</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>
@endsection