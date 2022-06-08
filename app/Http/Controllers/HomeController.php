<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Setting;
use App\Models\Message;
use App\Models\Comment;
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
    public function storecomment(Request $request)
    {
        // dd($request); //Check your values
        $data= new Comment();
        $data->user_id=Auth::id();
        $data->service_id=$request->input('service_id');
        $data->subject=$request->input('subject');
        $data->review=$request->input('review');
        $data->rate=$request->input('rate');
        $data->ip= request()->ip();
        $data->save();

        return redirect()->route('service',['id'=>$request->input('service_id')])->with('success','Your comment has been sent ,Thank You.');
    }
    public function service($id)
    {
        $setting=Setting::first();
        $data=Service::find($id);
        $images=DB::table('images')->where('product_id',$id)->get();
        $reviews= Comment::where('service_id',$id)->get();
         return view("home.service",[
            'data'=> $data,
            'setting'=> $setting,
            'images'=> $images,
            'reviews'=> $reviews
            

        
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

    public function loginuser()
    {

        $setting=Setting::first();
        return view('home.login',
        [
        'setting'=>$setting
        ]);
    }

    public function registeruser()
    {

        $setting=Setting::first();
        return view('home.register',
        [
        'setting'=>$setting
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function loginadmincheck(Request $request)
    {
        //dd($request);
        $setting=Setting::first();
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            'setting'=>$setting
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/admin');
        }
 
        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

}
