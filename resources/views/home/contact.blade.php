@extends('layouts.frontbase')


@section('title', 'Contact | ' . $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))
 
 
@section('content')
<div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Contact</h2>
                    </div>
                    <div class="col-12">
                        <a href="{{route('home')}}">Home</a>
                        <a href="">Contact</a>
                    </div>
                </div>
            </div>
        </div>
       
        
        @include ('home.messages')
        
        <div class="contact" style="margin-bottom: 90px;">
       
        
       <div class="container">
           <div class="row">
           <div class="col-sm-12 col-md-12 d-none d-md-block">
           
       <div class="contact-form">
       <form action="{{route('storemessage')}}" class="contactform" method="post">
         @csrf
         <p class="comment-form-author">
           <label for="author"><span class="required"></span></label>
           <input type="text" name="name" placeholder="Name & Surname" size="30" required="required">
         </p>
         <p class="comment-form-author">
           <label for="author"> <span class="required"></span></label>
           <input type="text" name="phone" placeholder="Phone Number" size="30" required="required">
         </p>
         <p class="comment-form-email">
           <label for="email"><span class="required"></span></label>
           <input type="email" name="email"  placeholder="Email" aria-required="true" required="required">
         </p>
         <p class="comment-form-url">
           <label for="subject"></label>
           <input type="text" name="subject" placeholder="Subject">
         </p>
         <p class="comment-form-comment">
           <label for="message"></label>
           <textarea name="message" cols="45" rows="8" placeholder="Your Message" aria-required="true" required="required"></textarea>
         </p>
         <p class="form-submit">
         <button type="submit" class="btn btn-primary">Send Message</button>
         </p>
       </form>
     </div>
               </div>
           </div>
       </div>
   </div>

        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                <div class="col-lg-3 col-md-3">
                    {!! $setting->contact !!}
                </div>
              </div>
            </div>
        </div>
       
      
            </div>
            </div>
       

@endsection


       
        