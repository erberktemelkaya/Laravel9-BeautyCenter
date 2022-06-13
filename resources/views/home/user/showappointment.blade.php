@extends('layouts.frontbase')


@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))
 
 
@section('content')
<div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>User Appointments</h2>
                    </div>
                    <div class="col-12">
                        <a href="{{route('home')}}">Home</a>
                        <a href="">User Appointments</a>
                    </div>
                </div>
            </div>
        </div>
         <div class ="col-6">
             <h2>User Menu</h2>
         </div>
       @include('home.user.usermenu')
<table class="table table-striped">
						<thead>
							<tr>
                                <th style="width: 50px">Id</th>
                                <td>{{$data->id}}</td>
                            
								
							</tr>
                           
                            <tr>
                                <th style="width: 50px">Name</th>
                                <td>{{$data->name}}</td>
                            
								
							</tr>
                            <tr>
                                <th style="width: 50px">Service & Price</th>
                                <td>{{$data->service}}</td>
                            
								
							</tr>
                            <tr>
                                <th style="width: 50px">Date</th>
                                <td>{{$data->date}}</td>
                            
								
							</tr>
                            <tr>
                                <th style="width: 50px">Time</th>
                                <td>{{$data->time}}</td>
                            
								
							</tr>
                           
                           
							</tr>
                            <tr>
                                <th style="width: 50px">Payment</th>
                                <td>{{$data->payment}}</td>
                            
								
							</tr>
                           

                          
                            <tr>
                                <th style="width: 50px">Status</th>
                                <td>{{$data->status}}</td>
                            
								
							</tr> 
                            <tr>
                                <th style="width: 50px">Created Date</th>
                                <td>{{$data->created_at}}</td>
                            
								
							</tr> 
                            <tr>
                                <th style="width: 50px">Update Date</th>
                                <td>{{$data->updated_at}}</td>
                            
								
							</tr> 
                            </table>
@endsection