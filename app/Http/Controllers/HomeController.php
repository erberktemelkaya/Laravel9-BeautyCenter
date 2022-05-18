<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use App\Models\Setting;

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
        $setting= Setting::first();
        return view("home.index",[
            'page'=>$page,
            'setting'=>$setting,
            'sliderdata'=> $sliderdata,
            'servicelist1'=> $servicelist1

        
     ]);
    }
    public function about()
    {
        
        $setting= Setting::first();
        return view("home.about",[
            'setting'=>$setting,
            ]);
        }
    public function references()
    {
        $setting= Setting::first();
        return view("home.references",[
            'setting'=>$setting,
            ]);
    }
    public function contact()
    {
        echo"Contact";
        exit();
        $setting= Setting::first();
        return view("home.about",[
            'setting'=>$setting,
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
