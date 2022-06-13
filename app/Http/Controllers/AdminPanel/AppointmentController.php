<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Service;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Appointment::all();
        $data1 = Service::all();
        return view('admin.appointment.index',[

            'data'=> $data,
            'data1'=> $data1

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Appointment::all();
        return view('admin.appointment.create',[

            'data'=> $data

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= new Appointment();
       
        $data->user_id= 0; //$request->category_id;
        $data->name = $request->name;
        $data->service = $request->service;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->price = $request->price;
        $data->payment = $request->payment;
        $data->status = $request->status;
       
        $data->save();

        return redirect('admin/appointment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment,$id)
    {
        $data=Appointment::find($id);
        return view ('admin.appointment.show',[
           'data' => $data 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Appointment::find($id);
        
        return view ('admin.appointment.edit',[
           'data' => $data 
           
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment,$id)
    {
        
        $data=Appointment::find($id);
        $data->user_id=$data->user_id; //$request->category_id;
        $data->name = $request->name;
        $data->service = $request->service;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->price = $request->price;
        $data->payment = $request->payment;
        $data->status = $request->status;
       
        $data->save();

        return redirect('admin/appointment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment,$id)
    {
        $data=Appointment::find($id);
        
        $data->delete();
        return redirect ('admin/appointment');
    }


}
