@extends('pasta.index')

@section('title', 'home-pasta')

@section('content')
    <h5 class="wow fadeInDown" data-wow-delay="0.8s">HALO!</h5>
    <p class="wow fadeInUp" data-wow-delay="0.8s">Hi, selamat datang di website laravel</p>
    <img src="{{asset ('/images/slideimg.png')}}" width="317" height="256" class="wow fadeInRight" 
    data-wow-delay="0.8s" alt="slide1img">
@endsection