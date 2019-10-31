<?php

namespace App\Http\Controllers\Front;

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

class FrontendController extends Controller
{
    public function home() {
        $excavators = DB::select("select * from excavator");
        $data['menu']= 1;
        $data['excavators'] = $excavators ;

        return view('front.home', $data);
    }
    public function contact() {
        $data['menu']= 5;
        return view('front.contact', $data);
    }
    public function inventory($id1, $id2) {
        $category = ["excavator","tractor","utility", "trailer", "mower", "implement"];
        $data['category_id'] = $id2;
        $data['inventory_id'] = $id1;
        
        if($id1!=2)
        {
            $data['menu']= $id1+2;
            $datas = DB::select("select * from ".$category[$id2]." where inventory_id = '".($id1+1)."'");
            
            $data['datas'] = $datas ;
        }
        
        
        return view('front.inventory',$data);
    }
    public function detail($id1, $id2, $id3){
        $category = ["excavator","tractor","utility", "trailer", "mower", "implement"];
        
        $data['category_id'] = $id2;
        $data['inventory_id'] = $id1;
        $data['menu']= $id1+2;
        $product = DB::select("select * from ".$category[$id2]." where id = '".($id3)."'");
        $related = DB::select("select * from ".$category[$id2]." where inventory_id = '".($id1+1)."' limit 3 ");
        $product_images = DB::select("select * from ".$category[$id2]."_image where product_id = '".($id3)."'"); 
        $data['product'] = $product;
        $data['product_images'] = $product_images;
        $data['related'] = $related;
        return view('front.detail',$data);
    }
    public function geninventory($id1) {
        
        $data['category_id'] = $id1-1;
        $data['menu']= 4;
        
            
        $datas = DB::select("select * from generators where category_id = '".($id1)."'");
        
        $data['datas'] = $datas ;
        
    
        
        return view('front.geninventory',$data);
    }
    public function gendetail($id1, $id2){
        
        
        $data['category_id'] = $id1;
        
        $data['menu']= 4;
        $product = DB::select("select * from generators where id = '".($id2)."'");
        $related = DB::select("select * from generators  limit 3 ");
        $product_images = DB::select("select * from generator_image where product_id = '".($id2)."'"); 
        $data['product'] = $product;
        $data['product_images'] = $product_images;
        $data['related'] = $related;
        return view('front.gendetail',$data);
    }
    public function search()
    {
        $search = $_POST['search-txt'];
        $data['menu'] = 1;
        $sql = "select id,title,model,price,inventory_id,category_id,image from excavator where title like '%".$search."%' or model like '%".$search."%'";
        $query1 = DB::select($sql);
        
        $sql = "select id,title,model,price,inventory_id,category_id,image from tractor where title like '%".$search."%' or model like '%".$search."%'";
        $query2 = DB::select($sql);
        $sql = "select id,title,model,price,inventory_id,category_id,image from utility where title like '%".$search."%' or model like '%".$search."%'";
        $query3 = DB::select($sql);
        $sql = "select id,title,model,price,inventory_id,category_id,image from trailer where title like '%".$search."%' or model like '%".$search."%'";
        $query4 = DB::select($sql);
        $sql = "select id,title,model,price,inventory_id,category_id,image from mower where title like '%".$search."%' or model like '%".$search."%'";
        $query5 = DB::select($sql);
        $sql = "select id,title,model,price,inventory_id,category_id,image from implement where title like '%".$search."%' or model like '%".$search."%'";
        $query6 = DB::select($sql);
        $result = [];
        array_push($result,[$query1, $query2,$query3, $query4,$query5, $query6]);
        
        $data['datas'] = $result;
        
        return view('front.search',$data);
    }
}