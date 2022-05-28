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
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="{{asset('assets')}}/img/about.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="section-header text-left">
                            <p>Hakkımızda</p>
                            <h2>25 Yıllık Tecrübe</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                
Dünyanın güzelliklerle dolu başkenti Ankara’nın kalbi, ………….20 senesinden beri kuaför ve güzellik merkezi hizmeti veriyoruz…
Hijyen kuralları prensibimizle, değerli misafirlerimizin “tam hayalimdeki gibi oldu” demeleri için, tecrübeli ve yetenekli 40 kişiden oluşan profesyonel ekibimizle hizmet sağlıyoruz.
Zaradis Yıldız VIP; ulaşılabilir lüks mottosuyla, bakım, güzellik ve doğallığı bir arada sunuyoruz. Aynada en güzel halinizi görmeniz için sizi salonumuza bekliyoruz.15 Yıldır, her ortamda her daim göz kamaştıran olmanız için yanınızdayız.
                            </p>
                            <p>
                            80′ li yılların ortasında iğneli epilasyon ile sektöre adımını atan Gülümser Öztürk, sizlere daha iyi bir hizmet verebilmek amacıyla, 1997 senesinden beri Aşağı Ayrancı ‘ da “Rose Güzellik” salonunu adı altında profesyonel ekibi ile sizlere güzellik ve bakım hizmeti vermektedir.

İğneli epilasyon ve cilt bakımı ile başladığımız bu yolda kaş tasarımı, lazer epilasyon, ipek kirpik, kirpik lifting, hydrafacial, tırnak tasarımı, kalıcı oje, cilt gençleştirme gibi hizmetleri, yenilikleri takip ederek, doğru ekipman ve doğru ekiple sizlere güvenle sunmaktayız.

Bizim için en önemli husus sizlere güzellik hizmetlerini güvenle verebilmektir. Bu nedenle uygulatmayı düşündüğünüz her işlem öncesi ve sonrasında uzman ve güler yüzlü ekibimizden her zaman bilgi edinebilirsiniz.

Rose güzellik salonu olarak vizyonumuz kendini sürekli geliştirmek ve güler yüzlü hizmeti sizlere sağlamaktır. Sizleri yalnızca güzellik hizmeti almak için değil sohbet ve tanışmak için de merkezimize bekleriz.
                            </p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        <div class="col-md-6">
            <h4 class="text-uppercase">Write your Review</h4>
            <p>Your email adress will not be published.</p>

            <form class="review-form" action="{{route('storecomment')}}" method="post">
                @csrf
                <input class="input" type="hidden" name="service_id" value="{{$rs->id}}"/>
                <div class="form-group">
                <input class="input" type="text" name="subject" placeholder="Subject"/>
            </div>
            <div class="form-group">
                <textarea class="input" name="review" type="text" placeholder="Your review"></textarea>
            </div>
            <div class="form-group">
            <div class="input-rating">
                <strong class="text-uppercase"Your Rating:></strong>
                <div class="stars">
                    <input type="radio" id="star5" name="rate" value="5" /><label for="star5"></label>
                    <input type="radio" id="star4" name="rate" value="4" /><label for="star4"></label>
                    <input type="radio" id="star3" name="rate" value="3" /><label for="star3"></label>
                    <input type="radio" id="star2" name="rate" value="2" /><label for="star2"></label>
                    <input type="radio" id="star1" name="rate" value="1" /><label for="star1"></label>
                 </div>
               </div>
             </div>
             @auth
          <button class="primary-btn">Submit</button>
          @else
        <a href="/login" class="primary-btn"> For Submit Your Review,Please Login </a> 
          @endauth
        </form>
</div>

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
		 