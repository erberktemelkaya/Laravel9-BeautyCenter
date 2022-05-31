@extends('layouts.frontbase')


@section('title', 'User Panel')

 
@section('content')
<div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>User Panel</h2>
                    </div>
                    <div class="col-12">
                        <a href="{{route('home')}}">Home</a>
                        <a href="">User Panel</a>
                    </div>
                </div>
            </div>
        </div>
         <div class ="col-6">
             <h2>User Menu</h2>
         </div>
       @include('home.user.usermenu')

         <div class ="col-6">
             <h2>User Profile</h2>
         </div>
         @include('profile.show')
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                <div class="col-lg-3 col-md-3">
                    
                </div>
              </div>
            </div>
        </div>
       
      
            </div>
            </div>
       

@endsection
