<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public static function maincategorylist()
    {

    return Category::where('parent_id','=',0)->with('children')->get();

    }


    public function index()
    {
        $page='home';
        $sliderdata=Service::limit(20)->get();
        $servicelist1=Service::limit(20)->get();
        return view("home.index",[
            'page'=>$page,
            'sliderdata'=> $sliderdata,
            'servicelist1'=> $servicelist1

        
     ]);
    }

    public function service($id)
    {
        
        $data=Service::find($id);
        $images=DB::table('images')->where('product_id',$id)->get();
         return view("home.service",[
            'data'=> $data,
            'images'=> $images
            

        
     ]);
    }
    public function categoryservices($id)
    {
        $category=Category::find($id);
        $services=DB::table('services')->where('category_id',$id)->get();
        return view("home.categoryservices",[
            'category'=> $category,
            'services'=> $services
            

        
     ]);
    }
}