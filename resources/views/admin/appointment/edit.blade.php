@extends('layouts.adminbase')

@section('title','Edit Appointment')
@section('head')
 <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js">
 </script>
 @endsection
 

  @section('content')

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
            <div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Form</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="/admin">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Edit Appointment : {{$data->title}}</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									April 2022
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>
				</div>
            <div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h2">Edit Appointment :  {{$data->title}}</h2>
							
						</div>
						
					</div>
					<form role ="form" action="{{route('admin.appointment.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf

						<div class="form-group">
							<label>Name</label>
							<input class="form-control" type="text" name="name" placeholder="Name" value="{{$data->name}}">
						</div>
						<div class="form-group">
                        <label>Service & Price</label>
                        <select class="custom-select col-12" name="service" >
						<option selected="">Choose...</option>
									<option >Epilasyon (Price : $300)</option>
									<option >Bölgesel İncelme (Price : $200) </option> 
									<option >Kavitasyon (Price : $250)</option> 
									<option >Elektroterapi (Price : $150)</option> 
									<option >Selülit Tedavisi (Price : $120)</option> 
									<option >Vücut Sıkılaştırma (Price : $500)</option> 
									<option >Çatlak Bakımı (Price : $50)</option> 
									<option >Ameliyatsız Yüz Germe (Price : $400)</option> 
									<option >Hydra Beauty (Price : $300)</option> 
									<option >Pumpkin Peel (Price : $250)</option> 
									<option >Somon DNA (Price : $140)</option> 
									<option >Gençlik Aşısı (Price : $750)</option> 
									<option>Akne Cilt Bakımı(Price : $100)</option>

									
								</select>
                                </div>
					  <div class="form-group">
							<label>Date  </label>
							<input class="form-control datetimepicker" placeholder="Choose Date " name="date" type="date"value="{{$data->date}}">
						</div>

                        <div class="form-group">
						<label>Time</label>
							
						<input class="form-control time-picker td-input" placeholder="Select time" name="time"type="text" value="{{$data->time}}">
							
						</div>
						
						
						
						<div class="form-group">
                        <label>Payment</label>
                        <select class="custom-select col-12" name="payment">
									<option selected="">{{$data->payment}}</option>
									<option >Yes</option>
									<option >No</option> 
									
								</select>
                                </div>


                            </textarea>
							<script>
                              ClassicEditor
                                .create( document.querySelector( '#detail' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>
							
						</div>
						<div class="form-group">
                        <label>Status</label>
                        <select class="custom-select col-12" name="status">
									<option selected="">{{$data->status}}</option>
									<option >True</option>
									<option >False</option> 
									
								</select>
                                </div>
                                
                                <div class="card-footer">
							
                                <button type="submit" class="btn btn-primary">Update Data</button>
						</div>
						
					</form>
					
  @endsection