@extends('layouts.frontbase')


@section('title', 'User Comments & Reviews')

 
@section('content')
<div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>User Comment</h2>
                    </div>
                    <div class="col-12">
                        <a href="{{route('home')}}">Home</a>
                        <a href="">User Comment</a>
                    </div>
                </div>
            </div>
        </div>
         <div class ="col-6">
             <h2>User Menu</h2>
         </div>
       @include('home.user.usermenu')

         <div class ="col-6">
             <h2>User Comments & Reviews</h2>
         </div>
         
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                <div class="col-lg-3 col-md-3">
                <table class="table table-bordered">
						<thead>
							<tr>
								<th style="width: 10px">Id</th>
								
								<th>Service</th>
								<th>Subject</th>
								<th>Review</th>
								<th>Rate</th>
								<th>Status</th>
								<th style="width:40px">Delete</th>
								
							</tr>
						</thead>
						<tbody>

						@foreach($comments as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td><a href="{{route('service',['id'=> $rs->service_id])}}">
                                    {{$rs->service->title}}</a>								
                                    
                                </td>
					            <td>{{$rs->subject}}</td>
								<td>{{$rs->review}}</td>
								<td>{{$rs->rate}}</td>
								<td>{{$rs->status}}</td>
                              
								
							<td><a href="{{route('userpanel.reviewdelete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')" class="btn btn-danger">Delete</a></td>
                              
							    <tr>
							
						@endforeach
						</tbody>
					</table>
                    
                </div>
              </div>
            </div>
        </div>
       
      
            </div>
            </div>
       

@endsection
