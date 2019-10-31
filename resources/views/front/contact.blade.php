
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
                            <li class="active">Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Contact -->
            <section class="block-contact m-t-lg-30 m-t-xs-0 p-b-lg-50">
                <div class="">
                    <div class="row">
                        <!-- Contact info -->
                        <div class="col-sm-6 col-md-6 col-lg-6 m-b-xs-30">
                            <div class="heading">
                                <h3>Contact info</h3>
                            </div>
                            <div class="contact-info p-lg-30 p-xs-15 bg-gray-fa bg1-gray-2">
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod temp incidunt ut labore et dolore magna aliqua uat enim ad minim veniama quis nostrud ullamco lab oris nisi ut aliqu.</p>
                                    <ul class="list-default">
                                        <li><i class="fa fa-clock-o"></i>123 Holding, Busan, Korea</li>
                                        <li><i class="fa fa-phone"></i>0123-456-789</li>
                                        <li><i class="fa fa-envelope-o"></i>Support@htmlcs.com</li>
                                        <li><i class="fa fa-globe"></i>www.htmlcs.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Contact form -->
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="heading">
                                <h3>Contact Form</h3>
                            </div>
                            <div class="contact-form p-lg-30 p-xs-15 bg-gray-fa bg1-gray-2">
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
                                    <button type="submit" class="ht-btn ht-btn-default">Submit</button>
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