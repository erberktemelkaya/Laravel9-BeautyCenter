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
<table class="table table-bordered">
						<thead>
							<tr>
								<th style="width: 10px">Id</th>
								<th>Name</th>
								<th>Service & Price</th>
								<th>Date</th>
								<th>Time</th>
								<th>Payment</th>
								<th>Status</th>
								<th style="width:40px">Edit</th>
								<th style="width:40px">Delete</th>
								<th style="width:40px">Show</th>
							</tr>
						</thead>
						<tbody>

						@foreach($service as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
								<td>{{$rs->name}}</td>
								<td>{{$rs->service}}</td>
                                <td>{{$rs->date}}</td>
								<td>{{$rs->time}}</td>
                                
								<td>{{$rs->payment}}</td>
                                <td>{{$rs->status}}</td>
								<td><a href="{{route('userpanel.editappointment',['id'=>$rs->id])}}"class="btn btn-dark">Edit </a> </td>
                                <td><a href="{{route('userpanel.deleteappointment',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')" class="btn btn-danger">Delete</a></td>
                                <td><a href="{{route('userpanel.showappointment',['id'=>$rs->id])}}"class="btn btn-warning">Show </a></td>
								
							<tr>
							
						@endforeach
						</tbody>
					</table>
@endsection