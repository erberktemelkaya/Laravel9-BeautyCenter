<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

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
}