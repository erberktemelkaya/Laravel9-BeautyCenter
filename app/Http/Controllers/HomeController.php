<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        $sliderdata=Service::limit(7)->get();
        $servicelist1=Service::limit(12)->get();
        return view("home.index",[
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
}