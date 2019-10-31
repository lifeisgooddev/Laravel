<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Subscriber;
use App\Models\AboutImg;
use App\Models\User;
use App\Models\Faq;
use App\Models\Page;
use App\Models\Brand;
use App\Models\Condtion;
use App\Models\Pricing;
use App\Models\Specification;
use App\Models\BlogCategory;
use App\Models\BodyType;
use App\Models\FuelType;
use App\Models\Generator;
use App\Models\TransmissionType;
use App\Models\Car;
use App\Models\Generalsetting;
use App\Models\Pagesetting as PS;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Testimonial;  
use App\Classes\GeniusMailer;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Validator;

class BackendController extends Controller
{
    public function home() {
        $excavators = DB::select("select * from excavator");
        $data['menu']= 1;
        $value = session('login');
        if($value == '1')
        {
            return view('admin.admin', $data);
        }
        else{
            
            return redirect()->route('admin.login');
        }
        
    }
    public function login() {
        
        $data['menu']= 1;
        return view('admin.login', $data);
    }
    public function logincheck() {
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $password = md5($password);
        
        $sql = "select * from user where name = '".$username."' and password ='".$password."'";
        $result = DB::select($sql);
        
        if(count($result)==0)
        {
            return redirect()->route('admin.login');
            
        }
        else{
            session(['login' => '1']);
            
             return redirect()->route('admin.admin');
        }
    }
    public function excavator(){
        $title= $_POST['ex_title'];
        $price= $_POST['ex_price'];
        $productgroup= $_POST['ex_group'];
        $model= $_POST['ex_model'];
        $year= $_POST['ex_year'];
        $hours= $_POST['ex_hours'];
        $country= $_POST['ex_country'];
        $mascus_id= $_POST['ex_mascusid'];
        $inventory_id= $_POST['ex_inventoryid'];
        $description = $_POST['ex_description'];
        $image = $title.'0.png';
        // print_r($image);
        $image_count = $_POST['image_count'];
        for($i = 0 ;$i <= $image_count ; $i++ )
        {
            $image_src = $_FILES['ex_img'.$i]['tmp_name'];
            $src = 'E:/Development/Laravel tractor project -Muhammad J/machine/public/assets/images/excavator/'.$title.$i.'.png';
            
            // file_put_contents("E:/Development/Laravel tractor project -Muhammad J/machine/public/assets/images/excavator/caterpillar-320c-2.jpg", $image_src);
            
            move_uploaded_file($image_src,$src);
        }
        
        $sql="INSERT INTO excavator (title, price, description, productgroup, model, year, hours,country, mascusid,image, inventory_id, category_id, status, created_at, updated_at)VALUES ('".$title."','".$price."','".$description."','".$productgroup."','".$model."' ,'".$year."' ,'".$hours."' ,'".$country."' ,'".$mascus_id."', '".$image."' ,'".$inventory_id."',1,1, '','')";
        DB::select($sql);
        $data['menu']= 1;
        $result = DB::select("select id from excavator where title = '".$title."'");
        $product_id= $result[0]->id;
        for($i = 0 ;$i <= $image_count ; $i++ )
        {
            $img = $title.$i.'.png';
            DB::select("insert into excavator_image (url, product_id) value ('".$img."' , '".$product_id."')");
        }
        // // return view('admin.admin', $data);
        return redirect()->route('admin.admin');
    }
    public function tractor(){
        $title= $_POST['tr_title'];
        $price= $_POST['tr_price'];
        $description= $_POST['tr_description'];
        $location= $_POST['tr_location'];
        $stocknumber= $_POST['tr_stocknumber'];
        $year= $_POST['tr_year'];
        $make= $_POST['tr_make'];
        $model= $_POST['tr_model'];
        $vim= $_POST['tr_vim'];
        $color= $_POST['tr_color'];
        $engine= $_POST['tr_engine'];
        $horsepower= $_POST['tr_horsepower'];
        $fueltype= $_POST['tr_fueltype'];
        $displacement= $_POST['tr_displacement'];
        $liftcapacity= $_POST['tr_liftcapacity'];
        $transmission= $_POST['tr_transmission'];
        $hvactype= $_POST['tr_hvactype'];
        $availability= $_POST['tr_availability'];
        $drive= $_POST['tr_drive'];
        $inventory_id= $_POST['tr_inventoryid'];
        
        $image = $title.'0.png';
        // print_r($image);
        $image_count = $_POST['image_count'];
        for($i = 0 ;$i <= $image_count ; $i++ )
        {
            $image_src = $_FILES['tr_img'.$i]['tmp_name'];
            $src = 'E:/Development/Laravel tractor project -Muhammad J/machine/public/assets/images/tractor/'.$title.$i.'.png';
            
            // file_put_contents("E:/Development/Laravel tractor project -Muhammad J/machine/public/assets/images/excavator/caterpillar-320c-2.jpg", $image_src);
            
            move_uploaded_file($image_src,$src);
        }
        
        $sql="INSERT INTO tractor (title, price, description, location, stocknumber, year, make,model, vim,color, engine, horsepower, enginehours, fueltype, displacement, liftcapacity, transmissiontype, hvactype, availability, drive, image, inventory_id, category_id, status, created_at, updated_at)VALUES ('".$title."','".$price."','".$description."','".$location."','".$stocknumber."' ,'".$year."' ,'".$make."' ,'".$model."' ,'".$vim."','".$color."','".$engine."','".$horsepower."','','".$fueltype."','".$displacement."','".$liftcapacity."','".$transmission."','".$hvactype."','".$availability."','".$drive."', '".$image."' ,'".$inventory_id."',2,1, '','')";
        DB::select($sql);
        // $data['menu']= 1;
        // return view('admin.admin', $data);
        $result = DB::select("select id from tractor where title = '".$title."'");
        $product_id= $result[0]->id;
        for($i = 0 ;$i <= $image_count ; $i++ )
        {
            $img = $title.$i.'.png';
            DB::select("insert into tractor_image (url, product_id) value ('".$img."' , '".$product_id."')");
        }
        return redirect()->route('admin.admin');
    }
    public function utility(){
        $title= $_POST['ut_title'];
        $price= $_POST['ut_price'];
        $description= $_POST['ut_description'];
        $location= $_POST['ut_location'];
        $year= $_POST['ut_year'];
        $make= $_POST['ut_make'];
        $model= $_POST['ut_model'];
        $engine= $_POST['ut_engine'];
        $fueltype= $_POST['ut_fueltype'];
        $displacement= $_POST['ut_displacement'];
        
        $transmission= $_POST['ut_transmission'];
        $availability= $_POST['ut_availability'];
        $drive= $_POST['ut_drive'];
        $dryweight= $_POST['ut_dryweight'];
        $payloadcapacity= $_POST['ut_payloadcapacity'];
        $weight= $_POST['ut_weight'];

        $towingcapacity= $_POST['ut_towingcapacity'];
        $inventory_id= $_POST['ut_inventoryid'];
        $image = $_POST['ut_image'];
        $sql="INSERT INTO utility (title, price, description, location, year, make,model, engine, transmission, fueltype, dryweight, payloadcapacity, displacement, weight, availability, drive, towingcapacity , image, inventory_id, category_id, status, created_at, updated_at)VALUES ('".$title."','".$price."','".$description."','".$location."','".$year."','".$make."','".$model."','".$engine."','".$transmission."','".$fueltype."','".$dryweight."','".$payloadcapacity."','".$displacement."','".$weight."','".$availability."','".$drive."','".$towingcapacity."','".$image."', '".$inventory_id."',3, 1,'','')";
        DB::select($sql);
        // $data['menu']= 1;
        // return view('admin.admin', $data);
        return redirect()->route('admin.admin');
    }
    public function trailer(){
        $title= $_POST['ta_title'];
        $price= $_POST['ta_price'];
        $description= $_POST['ta_description'];
        $location= $_POST['ta_location'];
        $year= $_POST['ta_year'];
        $make= $_POST['ta_make'];
        $model= $_POST['ta_model'];
        $length= $_POST['ta_length'];
        $availability= $_POST['ta_availability'];
        $chassis= $_POST['ta_chassis'];
        $width= $_POST['ta_width'];
        $height= $_POST['ta_height'];
        $axle= $_POST['ta_axle'];
        $image = $_POST['ta_image'];
        $inventory_id= $_POST['ta_inventoryid'];
        $sql="INSERT INTO trailer (title, price, description, location, year, make,model, length, availability, chassis, width, height, axle , image, inventory_id, category_id, status, created_at, updated_at)VALUES ('".$title."','".$price."','".$description."','".$location."','".$year."','".$make."','".$model."','".$length."','".$availability."','".$chassis."','".$width."','".$height."','".$axle."','".$image."', '".$inventory_id."',4, 1,'','')";
        DB::select($sql);
        // $data['menu']= 1;
        // return view('admin.admin', $data);
        return redirect()->route('admin.admin');
    }


    public function mower(){
        $title= $_POST['mo_title'];
        $price= $_POST['mo_price'];
        $description= $_POST['mo_description'];
        $location= $_POST['mo_location'];
        $stocknumber= $_POST['mo_stocknumber'];
        $year= $_POST['mo_year'];
        $make= $_POST['mo_make'];
        $model= $_POST['mo_model'];
        
        $fueltype= $_POST['mo_fueltype'];
        $displacement= $_POST['mo_displacement'];
        
        $transmission= $_POST['mo_transmission'];
        
        $availability= $_POST['mo_availability'];
        $width= $_POST['mo_width'];
        $height= $_POST['mo_height'];
        $weight= $_POST['mo_weight'];
        $inventory_id= $_POST['mo_inventoryid'];
        $image = $_POST['mo_image'];
        $sql="INSERT INTO mower (title, price, description, location, stocknumber, year, make,model, fueltype, displacement, transmission,  availability, width, height, weight, image, inventory_id, category_id, status, created_at, updated_at)VALUES ('".$title."','".$price."','".$description."','".$location."','".$stocknumber."' ,'".$year."' ,'".$make."' ,'".$model."','".$fueltype."','".$displacement."','".$transmission."','".$availability."','".$width."','".$height."','".$weight."', '".$image."' ,'".$inventory_id."',5,1, '','')";
        DB::select($sql);
        // $data['menu']= 1;
        // return view('admin.admin', $data);
        return redirect()->route('admin.admin');
    }

    public function implement(){
        $title= $_POST['im_title'];
        $price= $_POST['im_price'];
        
        $location= $_POST['im_location'];
        $description= $_POST['im_description'];
        $stocknumber= $_POST['im_stocknumber'];
        $year= $_POST['im_year'];
        $make= $_POST['im_make'];
        $model= $_POST['im_model'];
        $image = $_POST['im_image'];
        
        echo $image;
        $inventory_id= $_POST['im_inventoryid'];
        $sql="INSERT INTO implement (title, price, description, location, stocknumber, year, make,model, image, inventory_id, category_id, created_at, updated_at)VALUES ('".$title."','".$price."','".$description."','".$location."','".$stocknumber."' ,'".$year."' ,'".$make."' ,'".$model."', '".$image."' ,'".$inventory_id."',6, '','')";
        DB::select($sql);       
        // $data['menu']= 1;
        // return view('admin.admin', $data);
        return redirect()->route('admin.admin');
    }
}