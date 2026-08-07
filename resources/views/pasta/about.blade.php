@extends('pasta.index')

@section('title', 'about-pasta')

@section('content')
    <h5 class="wow fadeInDown" data-wow-delay="0.8s">ANGGOTA KELOMPOK</h5>
    <p class="wow fadeInUp" data-wow-delay="0.8s">
        <ol>
            <li>Nama: ALIF</li>
            <li>Nama: SATRIA</li>
            <li>Nama: ZHARIF</li>
        </ol>
    </p>
    <img src="{{asset ('/images/slideimg.png')}}" width="317" height="256" class="wow fadeInRight" 
    data-wow-delay="0.8s" alt="slide1img">
@endsection