@extends('layout.front')

@section('content')
<style>
    .image_pic{
        flex-basis:15%!important;
        background-color:lawngreen!important;
        color:white!important;
    }
    .thumb{
        flex-basis:15%!important;
    }
</style>
<div id="wrap-body" class="p-t-lg-45">
    <div class="container">
        <div class="wrap-body-inner">
            <!-- Breadcrumb-->
            <div class="hidden-xs">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="ht-breadcrumb pull-left">
                        <li class="home-act"><a href="#"><i class="fa fa-home"></i></a></li>
                        <li class="home-act"><a href="#">Car</a></li>
                        <li class="active">Sell a car</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Sell a car -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav nav-tab">
                <li class="dropdown" onclick="openCity('excavator')">
                    <a  class="dropdown-toggle active_menu "  role="button" aria-haspopup="true" aria-expanded="false">Excavators</a>
                </li>
                <li class="dropdown" onclick="openCity('tractor')">
                    <a class="dropdown-toggle "  role="button" aria-haspopup="true" aria-expanded="false">Tractors</a>
                </li>
                <li class="dropdown" onclick="openCity('utility')">
                    <a class="dropdown-toggle "  role="button" aria-haspopup="true" aria-expanded="false">Utility Vehichle</a>
                </li>
                <li class="dropdown" onclick="openCity('trailer')">
                    <a class="dropdown-toggle "  role="button" aria-haspopup="true" aria-expanded="false">Trailers</a>
                </li>
                <li class="dropdown" onclick="openCity('mower')">
                    <a class="dropdown-toggle "  role="button" aria-haspopup="true" aria-expanded="false">Mowers</a>
                </li>
                <li class="dropdown" onclick="openCity('implement')">
                    <a class="dropdown-toggle "  role="button" aria-haspopup="true" aria-expanded="false">IMPLEMENTS & ACCESSORIES</a>
                </li>
            </ul>
            </div>
            <section class="m-t-lg-30 m-t-xs-0 m-b-lg-50">
                <div>
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="bg-gray-f5 bg1-gray-15 p-lg-30 p-xs-15">
                                <!-- Car infomation-->
                                <div class="m-b-lg-10" id="excavator">
                                    <div class="heading-1">
                                        <h3>Excavator Infomation</h3>
                                    </div>
                                    <form method="POST" enctype="multipart/form-data" action="{{route('admin.excavator')}}">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Title" name="ex_title" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Price" name="ex_price">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Product Group" name="ex_group">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Model" name="ex_model">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Year of Mnftr" name="ex_year">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Usage Hours" name="ex_hours">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Country" name="ex_country">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="MASCUS ID" name="ex_mascusid">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <p>Inventory</p>
                                                <select  class="form-control form-item" placeholder="Invenory ID" name="ex_inventoryid">
                                                    <option value='1'>New</option>
                                                    <option value='2'>Pre-Owned</option>
                                                </select>
                                            </div>
                                        </div>                                        
                                        <div class="col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea class="form-control h-200 form-item m-b-lg-5" placeholder="Description" rows="3" name="ex_description"></textarea>
                                                <p class="color1-8 m-t-lg-5 f-14">Maximum 2000 characters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" value="ex">
                                        <label for="exampleFormControlFile1" class="image_label" data="ex">Example file input</label>
                                        <input type="hidden" class="image_count" name="image_count" value="0">
                                        <button type="button" class="form-btn add_image" name="add_image" value="0">Add Images</button>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="ex_img0">
                                    </div>
                                    
                                    <button type="submit" class="ht-btn ht-btn-default">Add</button>
                                    </form>
                                </div>
                                <div class="m-b-lg-10" id="tractor" style="display:none">
                                    <div class="heading-1">
                                        <h3>Tractor Infomation</h3>
                                    </div>
                                    <form method="POST" enctype="multipart/form-data" action="{{route('admin.tractor')}}">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Title" name="tr_title" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Price" name="tr_price">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Location" name="tr_location">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Stock Number" name="tr_stocknumber">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Year" name="tr_year">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Make" name="tr_make">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Model" name="tr_model">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="VIM" name="tr_vim">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="color" name="tr_color">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Engine" name="tr_engine">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="HorsePower" name="tr_horsepower">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Fuel Type" name="tr_fueltype">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Displacement" name="tr_displacement">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Lift Capacity" name="tr_liftcapacity">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Transmission" name="tr_transmission">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="HVAC Type" name="tr_hvactype">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Availability" name="tr_availability">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Drive" name="tr_drive">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <p>Inventory</p>
                                                <select  class="form-control form-item" placeholder="Invenory ID" name="tr_inventoryid">
                                                    <option value='1'>New</option>
                                                    <option value='2'>Pre-Owned</option>
                                                </select>
                                            </div>
                                        </div>                                        
                                        <div class="col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea class="form-control h-200 form-item m-b-lg-5" placeholder="Description" rows="3" name="tr_description"></textarea>
                                                <p class="color1-8 m-t-lg-5 f-14">Maximum 2000 characters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" value="tr">
                                        <label for="exampleFormControlFile1" class="image_label" data="tr">Example file input</label>
                                        <input type="hidden" class="image_count" name="image_count" value="0">
                                        <button type="button" class="form-btn add_image" name="add_image" value="0">Add Images</button>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="tr_img0">
                                    </div>
                                    
                                    <button type="submit" class="ht-btn ht-btn-default">Add</button>
                                    </form>
                                </div>
                                <div class="m-b-lg-10" id="utility" style="display:none">
                                    <div class="heading-1">
                                        <h3>Utility Infomation</h3>
                                    </div>
                                    <form method="POST" enctype="multipart/form-data" action="{{route('admin.utility')}}">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Title" name="ut_title" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Price" name="ut_price">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Location" name="ut_location">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Year" name="ut_year">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Make" name="ut_make">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Model" name="ut_model">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Engine" name="ut_engine">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Fuel Type" name="ut_fueltype">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Displacement" name="ut_displacement">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="towing Capacity" name="ut_towingcapacity">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Transmission" name="ut_transmission">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Availability" name="ut_availability">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Dry Weight" name="ut_dryweight">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Drive" name="ut_drive">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="weight" name="ut_weight">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Payload Capacity" name="ut_payloadcapacity">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <p>Inventory</p>
                                                <select  class="form-control form-item" placeholder="Invenory ID" name="ut_inventoryid">
                                                    <option value='1'>New</option>
                                                    <option value='2'>Pre-Owned</option>
                                                </select>
                                            </div>
                                        </div>                                        
                                        <div class="col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea class="form-control h-200 form-item m-b-lg-5" placeholder="Description" rows="3" name="ut_description"></textarea>
                                                <p class="color1-8 m-t-lg-5 f-14">Maximum 2000 characters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" value="ut">
                                        <label for="exampleFormControlFile1" class="image_label" data="ut">Example file input</label>
                                        <input type="hidden" class="image_count" name="image_count" value="0">
                                        <button type="button" class="form-btn add_image" name="add_image" value="0">Add Images</button>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="ut_img0">
                                    </div>
                                    
                                    <button type="submit" class="ht-btn ht-btn-default">Add</button>
                                    </form>
                                </div>
                                <div class="m-b-lg-10" id="trailer" style="display:none">
                                    <div class="heading-1">
                                        <h3>Trailer Infomation</h3>
                                    </div>
                                    <form method="POST" enctype="multipart/form-data" action="{{route('admin.trailer')}}">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Title" name="ta_title" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Price" name="ta_price">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Make" name="ta_make">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Location" name="ta_location">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Model" name="ta_model">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Year" name="ta_year">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Length" name="ta_length">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Chassis" name="ta_chassis">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Width" name="ta_width">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Height" name="ta_height">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Availability" name="ta_availability">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Axle" name="ta_axle">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <p>Inventory</p>
                                                <select  class="form-control form-item" placeholder="Invenory ID" name="ta_inventoryid">
                                                    <option value='1'>New</option>
                                                    <option value='2'>Pre-Owned</option>
                                                </select>
                                            </div>
                                        </div>                                        
                                        <div class="col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea class="form-control h-200 form-item m-b-lg-5" placeholder="Description" rows="3" name="ta_description"></textarea>
                                                <p class="color1-8 m-t-lg-5 f-14">Maximum 2000 characters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" value="ta">
                                        <label for="exampleFormControlFile1" class="image_label" data="ta">Example file input</label>
                                        <input type="hidden" class="image_count" name="image_count" value="0">
                                        <button type="button" class="form-btn add_image" name="add_image" value="0">Add Images</button>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="ta_img0">
                                    </div>
                                    
                                    <button type="submit" class="ht-btn ht-btn-default">Add</button>
                                    </form>
                                </div>
                                <div class="m-b-lg-10" id="mower" style="display:none">
                                    <div class="heading-1">
                                        <h3>Mower Infomation</h3>
                                    </div>
                                    <form method="POST" enctype="multipart/form-data" action="{{route('admin.mower')}}">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Title" name="mo_title" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Price" name="mo_price">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Location" name="mo_location">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Stock Number" name="mo_stocknumber">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Year" name="mo_year">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Make" name="mo_make">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Model" name="mo_model">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Fuel Type" name="mo_fueltype">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Displacement" name="mo_displacement">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Transmission" name="mo_transmission">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Availability" name="mo_availability">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="width" name="mo_width">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="height" name="mo_height">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="weight" name="mo_weight">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <p>Inventory</p>
                                                <select  class="form-control form-item" placeholder="Invenory ID" name="mo_inventoryid">
                                                    <option value='1'>New</option>
                                                    <option value='2'>Pre-Owned</option>
                                                </select>
                                            </div>
                                        </div>                                        
                                        <div class="col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea class="form-control h-200 form-item m-b-lg-5" placeholder="Description" rows="3" name="mo_description"></textarea>
                                                <p class="color1-8 m-t-lg-5 f-14">Maximum 2000 characters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" value="mo">
                                        <label for="exampleFormControlFile1" class="image_label" data="mo">Example file input</label>
                                        <input type="hidden" class="image_count" name="image_count" value="0">
                                        <button type="button" class="form-btn add_image" name="add_image" value="0">Add Images</button>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="mo_img0">
                                    </div>
                                    
                                    <button type="submit" class="ht-btn ht-btn-default">Add</button>
                                    </form>
                                </div>
                                <div class="m-b-lg-10" id="implement" style="display:none">
                                    <div class="heading-1">
                                        <h3>Implement & Accessories Infomation</h3>
                                    </div>
                                    <form method="POST" enctype="multipart/form-data" action="{{route('admin.implement')}}">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Title" name="im_title" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Price" name="im_price">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="make" name="im_make">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Location" name="im_location">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Stock Number" name="im_stocknumber">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Model" name="im_model">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" placeholder="Year of Mnftr" name="im_year">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <p>Inventory</p>
                                                <select  class="form-control form-item" placeholder="Invenory ID" name="im_inventoryid">
                                                    <option value='1'>New</option>
                                                    <option value='2'>Pre-Owned</option>
                                                </select>
                                            </div>
                                        </div>                                        
                                        <div class="col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea class="form-control h-200 form-item m-b-lg-5" placeholder="Description" rows="3" name="im_description"></textarea>
                                                <p class="color1-8 m-t-lg-5 f-14">Maximum 2000 characters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" value="im">
                                        <label for="exampleFormControlFile1" class="image_label" data="im">Example file input</label>
                                        <input type="hidden" class="image_count" name="image_count" value="0">
                                        <button type="button" class="form-btn add_image" name="add_image" value="0">Add Images</button>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="im_img0">
                                    </div>
                                    
                                    <button type="submit" class="ht-btn ht-btn-default">Add</button>
                                    </form>
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
<script>
function openCity(cityName) {
    
  var i;
  var x = document.getElementsByClassName("m-b-lg-10");
  
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(cityName).style.display = "block";
}

</script>