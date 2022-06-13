<!-- Hero Start -->
<div class="hero">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="hero-text">
                            <h1>TEKYA BEAUTY CENTER</h1>
                            <p>
                            {{$setting->description}}
                            </p>
                            
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 d-none d-md-block">
                        <div class="hero-image">
                            <img src="{{asset('adminpanel')}}/vendors/images/woman.jpg.png" alt="Hero Image">
                        </div>
                    </div>
                </div>
                
                    <span></span>
                </button>
            </div>
        </div>
        <!-- Hero End -->

        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Video Modal End -->
<!-- Blog Start -->
        
<div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Services</p>
                    <h2>Learn More for Our Services</h2>
                </div>
                <div class="owl-carousel blog-carousel">
                @foreach($sliderdata as $rs)
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{Storage::url($rs->image)}}" style="width: 330px ; height:206px"  alt="Blog">
                        </div>
                        <div class="blog-meta">
                            <i class="fa fa-list-alt"></i>
                            <a href="">{{$rs->title}}</a>
                            <i class="fa fa-calendar-alt"></i>
                            <p>29 Nisan 2022</Np>
                        </div>
                        <div class="blog-text">
                            <h2>{{$rs->title}}</h2>
                            <p>
                            {{$rs->description}}
                            </p>
                            <a href="{{route('service',['id'=>$rs->id])}}" class="btn"> <i class="fa fa-angle-right"></i> Read More</a>
                        </div>
                    </div>
                    @endforeach
                   
                   
            </div>
        </div>
        <!-- Blog End -->