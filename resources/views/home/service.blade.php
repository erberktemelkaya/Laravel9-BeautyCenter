@extends('layouts.frontbase')
 
@section('title', $data->title)


@section('content')
 <!-- Page Header Start -->
 <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>{{$data->title}}</h2>
                    </div>
                    
                    <div class="col-12">
                        <a href="">{{$data->title}}</a>
                        @php 
                        $average = $data->comment->average('rate');
                        @endphp
                        {{$average}}
                        <a href="#">{{$data->comment->count('id')}} Review(s) / Add Review</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    @include('home.messages')
                    <h2>{{$data->title}}</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{Storage::url($data->image)}}" alt="Image">
                            </div>
                            @foreach($images as $rs)
                            <div class="service-img">
                                <img src="{{Storage::url($rs->image)}}" alt="Image">
                            </div>
                            @endforeach
                            <h3> Bilgi </h3>
                            <p>
                            {{$data->description}}
                            </p>
                            <h3> Detaylar </h3>
                        
                            <p>{!!$data->detail!!}</p>
                            <a class="btn" href="{{route('userpanel.addappointment')}}">RANDEVU AL</a>
                        </div>
                    </div>
                    
                    <div class="contact" style="margin-bottom: 90px;">
                    <div class="col-md-6">
                      <h4><font color="grey">REVIEWS </font></h4>
                      @foreach($reviews as $rs)
                          <div class="media">
                                <div class="media-body">
                                 <h4 ><i class="fa fa-user-o"></i> {{$rs->user->name}}</h4>
                                 <h5>{{$rs->created_at}}  <font color="red">RATING->&nbsp&nbsp</font><strong><span class="fa fa-star checked"></span></strong>&nbsp<strong><font color="black">{{$rs->rate}}</font></strong>/5</h5>
                                 <p>{{$rs->review}}</p>
                               
                                </div>
                          </div>
                          @endforeach
                    </div>
                    </div>
                   
                    <div class="contact" style="margin-bottom: 90px;">
                    <div class="contact-form"><form action="{{route('storecomment')}}" class="contactform" method="post">
         @csrf
         <div class="container">
                 <div class="row">
                 <div class="col-md-6">
               <h4 class="text-uppercase">Write your Review</h4>
               <p>Your email adress will not be published.</p>
                
           <p class="comment-form-author">
           <label for="author"><span class="required"></span></label>
           <input type="hidden" name="service_id" value="{{$data->id}}">
         </p>
         <p class="comment-form-author">
           <label for="author"> <span class="required"></span></label>
           <input type="text" name="subject" placeholder="Subject" >
         </p>
            <p class="comment-form-comment">
           <label for="review"></label>
           <textarea name="review" placeholder="Your review"></textarea>
         </p>
         <div class="form-group">
                         <label>Rating</label>
                          <select class="comment-form-comment" name="rate">
                                            <option selected="">Choose...</option>
                                            <option >1</option>
                                            <option >2</option> 
                                            <option >3</option>
                                            <option >4</option> 
                                            <option >5</option>


                                          </select>
                                </div>
             @auth
             <p class="form-submit">
         <button type="submit" class="btn btn-primary">Submit</button>
         </p>
          @else
        <a href="/login" class="btn btn-primary"> For Submit Your Review,Please Login </a> 
          @endauth
             </div>
               </div>
           </div>
       </div>
   </div>
   
            
        </form>
</div>
              
                   
                </div>
            </div>
        </div>
        <!-- Service End -->
        

 

  

       
 @endsection
		 