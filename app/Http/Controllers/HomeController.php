<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use App\Models\Setting;
use App\Models\Message;
use App\Models\Faq;

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
        
        $setting= Setting::first();
        return view("home.contact",[
            'setting'=>$setting,
            ]);
    }

    public function faq()
    {
        $setting= Setting::first();
        $datalist= Faq::all();
        return view("home.faq",[
            'setting'=>$setting,
            'datalist'=>$datalist,
            ]);
    }
    

    
    public function storemessage(Request $request)
    {

        $data= new Message();
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->phone=$request->input('phone');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->ip= request()->ip();
        $data->save();

        return redirect()->route('contact')->with('info','Your message has been sent ,Thank You.');
    }
    public function service($id)
    {
          $setting=Setting::first();
        $data=Service::find($id);
        $images=DB::table('images')->where('product_id',$id)->get();
         return view("home.service",[
            'data'=> $data,
            'setting'=> $setting,
            'images'=> $images
            

        
     ]);
    }
    public function categoryservices($id)
    {
        $setting=Setting::first();
        $category=Category::find($id);
        $services=DB::table('services')->where('category_id',$id)->get();
        return view("home.categoryservices",[
            'setting'=> $setting,
            'category'=> $category,
            'services'=> $services
            

        
     ]);
    }
}
