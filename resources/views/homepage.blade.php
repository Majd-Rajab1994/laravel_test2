@extends('layouts.layout')

@section('content')

    <div>
        <div class="nav" id="navid">
            <a href="#" class="navmain">
                <i class="fas fa-home"></i>
                home
            </a>
            <a href="">welocome</a>
            <a href="">contact</a>
            <a href="">about</a>
            <a href="{{ route('user.signin') }}">signin</a>
            <a href="javascript:void(0);" class="navicon" onclick="navbarfun()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>

    <div>
        <div class="slider-container">
            <div class="slide slide-animation" id="slide-animation">
                <img src="images/1.jpg" alt="" class="slide-img">
            </div>

            <div class="slide slide-animation">
                <img src="images/2.jpg" alt="" class="slide-img">
            </div>
        </div>
    </div>
    <div>
        <div class="card-container">
            <div class="card">
                <img src="images/3.jpg" alt="" class="slide-img">
                <div class="card-item">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                </div>
            </div>
        </div>
    </div>

@endsection
