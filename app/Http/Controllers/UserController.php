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
use App\Models\Appointment;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        
        $setting= Setting::first();
        return view("home.user.index",[
            'setting'=>$setting,
            ]);
        
    }

    public function reviews()
    {
        $setting= Setting::first();
        $comments= Comment::where('user_id','=',Auth::id())->get();
        return view('home.user.comments',[
            'setting'=>$setting,
            'comments'=>$comments

            ]);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reviewdelete($id)
    {
        $data=Comment::find($id);
        
        $data->delete();
        return redirect (route('userpanel.reviews'));
    }
    
    public function addappointment()
    {
        $setting= Setting::first();
       
        return view('home.user.addappointment',[
            'setting'=>$setting,
            

            ]);
    }
    public function addstore(Request $request)
    {
        $data=new Appointment();
        $data->service_id= $request->service_id;
        $data->user_id=Auth::id(); //$request->category_id;
        $data->name = $request->name;
        $data->service = $request->service;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->price = $request->price;
        $data->payment = $request->payment;
        $data->status = $request->status;
       
        $data->save();
        return redirect ('userpanel/myappointment');
        
    }

    public function myappointment()
    {
        $service=Appointment::where('user_id','=',Auth::id())->get();
        $setting= Setting::first();
        return view('home.user.myappointment',[
            'setting'=>$setting,
            'service'=>$service
            

            ]);
         }

    public function editappointment(Appointment $appointment,$id)
    {
       $data=Appointment::find($id);
       $setting= Setting::first();
       return view('home.user.editappointment',[
        'setting'=>$setting,
        'data'=>$data
        

        ]);


    }
    public function updateappointment(Request $request,Appointment $appointment,$id)
    {
       $data=Appointment::find($id);
       $data->user_id=Auth::id(); //$request->category_id;
       $data->name = $request->name;
       $data->service = $request->service;
       $data->date = $request->date;
       $data->time = $request->time;
       $data->price = $request->price;
       $data->payment = $request->payment;
       $data->status = $request->status;
      
       $data->save();

       return redirect('userpanel/myappointment');
   }

   public function showappointment(Appointment $appointment,$id)
   {

    $data=Appointment::find($id);
    $setting= Setting::first();
    return view('home.user.showappointment',[
     'setting'=>$setting,
     'data'=>$data
     

     ]);
   }

   public function deleteappointment(Appointment $appointment,$id)
   {

    $data=Appointment::find($id);
        
        $data->delete();
        return redirect ('userpanel/myappointment');
   }

}
