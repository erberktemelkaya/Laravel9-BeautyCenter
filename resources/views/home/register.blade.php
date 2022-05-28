@extends('layouts.frontbase')


@section('title', 'User Registration Page | ' )
@section('description', )
@section('keywords', )
@section('icon',)
 
 
@section('content')
<div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Register</h2>
                    </div>
                    <div class="col-12">
                        <a href="{{route('home')}}">Home</a>
                        <a href="">Register</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                @include('auth.register')
                </div>
              </div>
            </div>
        </div>

@endsection