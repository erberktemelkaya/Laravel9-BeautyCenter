@extends('layouts.frontbase')


@section('title', $category->title . ' Services')
 
 
@section('content')
<div class="page-header">
            <div class="container">
                <div class="row">
              
                    <div class="col-12">
                        <h2>Service</h2>
                    </div>
                    <div class="col-12">
                        <a href="{{route('home')}}">Home</a>
                        <a href="">{{$category->title}}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Salon Services</p>
                    <h2>Best Salon and Barber Services for You</h2>
                </div>
                <div class="row">
                @foreach($services as $rs)
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-img">
                            <img src="{{Storage::url($rs->image)}} " style="height:100px; width:100px" alt="Image">
                            </div>
                            <h3>{{$rs->title}}</h3>
                            <p>
                                {!!$rs->description!!}
                            </p>
                            <a href="{{route('service',['id'=>$rs->id])}}" class="btn" href="">Learn More</a>
                            
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>

@endsection