@extends('layouts.frontbase')


@section('title', 'References | ' . $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))
 
 
@section('content')
<div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>References</h2>
                    </div>
                    <div class="col-12">
                        <a href="{{route('home')}}">Home</a>
                        <a href="">References</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                <div class="col-lg-3 col-md-3">
                    {!! $setting->references !!}
                </div>
              </div>
            </div>
        </div>

@endsection