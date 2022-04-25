<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class HomeController extends Controller
{

    public function index()
    {
        $sliderdata=Service::limit(4)->get();
        return view("home.index",[
            'sliderdata'=> $sliderdata

        
     ]);
    }
}