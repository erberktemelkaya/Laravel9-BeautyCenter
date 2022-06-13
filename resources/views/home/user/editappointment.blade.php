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
                        <h2>User Appointment</h2>
                    </div>
                    <div class="col-12">
                        <a href="{{route('home')}}">Home</a>
                        <a href="">User Appointment</a>
                    </div>
                </div>
            </div>
        </div>
         <div class ="col-6">
             <h2>User Menu</h2>
         </div>
       @include('home.user.usermenu')
<form role ="form" action="{{route('userpanel.updateappointment',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
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
							
						<input class="form-control time-picker td-input" placeholder="Select time" name="time" type="time" value="{{$data->time}}">
							
						</div>
						
						
						
						<div class="form-group">
                        <label>Payment</label>
                        <select class="custom-select col-12" name="payment">
									<option selected="">{{$data->payment}}</option>
									
									
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
									 
									
								</select>
                                </div>
                                
                                <div class="card-footer">
							
                                <button type="submit" class="btn btn-primary">Update Data</button>
						</div>
						
					</form>
@endsection