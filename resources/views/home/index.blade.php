@extends('layouts.frontbase')
 
@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))


@section('slider')
 @include('home.slider')
@endsection
 

 
@section('content')
 
       
        
        <!-- About Start -->
        
        <!-- About End -->


        <!-- Service Start -->

        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Salon Services</p>
                    <h2>Best Salon and Beauty Services for You</h2>
                </div>
                <div class="row">
                @foreach($sliderdata1 as $rs)
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-img">
                            <img src="{{Storage::url($rs->image)}}" style="width: 330px ; height:247,5px" >
                            </div>
                            <h3>{{$rs->title}}</h3>
                           
                            <a href="{{route('service',['id'=>$rs->id])}}" class="btn"> <i class="fa fa-angle-right"></i> Read More</a>
                        </div>
                    </div>
                @endforeach
                    
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Pricing Start -->
        <div class="price">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Best Pricing</p>
                    <h2>We Provide Best Price in the City</h2>
                </div>
                <div class="row">
                @foreach($servicelist1 as $rs)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="{{Storage::url($rs->image)}} " style="height:100px; width:100px" alt="Image">
                            </div>
                            <div class="price-text">
                                <h2>{{$rs->title}}</h2>
                                <h3>${{$rs->price}}</h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    
                </div>
            </div>
        </div>
        <!-- Pricing End -->
        
        
       
        
        
      
       
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
       




       






        @endsection
		 