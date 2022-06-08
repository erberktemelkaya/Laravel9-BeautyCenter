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
                    <h2>Best Salon and Barber Services for You</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{asset('assets')}}/img/service-1.jpg" alt="Image">
                            </div>
                            <h3>Hair Cut</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                            </p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{asset('assets')}}/img/service-2.jpg" alt="Image">
                            </div>
                            <h3>Beard Style</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                            </p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{asset('assets')}}/img/service-3.jpg" alt="Image">
                            </div>
                            <h3>Color & Wash</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                            </p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
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
                                <h3>{{$rs->price}}</h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    
                </div>
            </div>
        </div>
        <!-- Pricing End -->
        
        
        <!-- Testimonial Start -->
        <div class="section-header text-center">
                    <p>Sizden Gelenler</p>
                    <h2>Bizim Hakkımızdaki Yorumlarınız</h2>
                </div>
        <div class="testimonial">
            <div class="container">
                
                <div class="owl-carousel testimonials-carousel">
                    
                    <div class="testimonial-item">
                        <img src="{{asset('assets')}}/img/testimonial-1.jpg" alt="Image">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut mollis mauris. Vivamus egestas eleifend dui ac consequat. Fusce venenatis at lectus in malesuada. Suspendisse sit amet dolor et odio varius mattis.
                        </p>
                        <h2>Client Name</h2>
                        <h3>Profession</h3>
                    </div>
                    <div class="testimonial-item">
                        <img src="{{asset('assets')}}/img/testimonial-2.jpg" alt="Image">
                        <p>
                            Phasellus pellentesque tempus pretium. Quisque in enim sit amet purus venenatis porttitor sed non velit. Vivamus vehicula finibus tortor. Aliquam vehicula molestie pulvinar. Sed varius libero in leo finibus, ac consectetur tortor rutrum.
                        </p>
                        <h2>Client Name</h2>
                        <h3>Profession</h3>
                    </div>
                    <div class="testimonial-item">
                        <img src="{{asset('assets')}}/img/testimonial-3.jpg" alt="Image">
                        <p>
                            Sed in lectus eu eros tincidunt cursus. Aliquam eleifend velit nisl. Sed et posuere urna, ut vestibulum massa. Integer quis magna non enim luctus interdum. Phasellus sed eleifend erat. Aliquam ligula ex, semper vel tempor pellentesque, pretium eu nulla.
                        </p>
                        <h2>Client Name</h2>
                        <h3>Profession</h3>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Güzellik Uzmanlarımız</p>
                    <h2>Güzellik Uzmanlarımız ile tanışın!</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{asset('assets')}}/img/team-1.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Adam Phillips</h2>
                                <p>Master Barber</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{asset('assets')}}/img/team-2.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Dylan Adams</h2>
                                <p>Hair Expert</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{asset('assets')}}/img/team-3.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Gloria Edwards</h2>
                                <p>Beard Expert</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{asset('assets')}}/img/team-4.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Josh Dunn</h2>
                                <p>Color Expert</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        
        
      
       
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
       




       






        @endsection
		 