@extends('master')
@section('content')
    <div class="main">
        <nav class="navbar-dark navbar navbar-expand-lg navbar-light navbar-transparent 
        home-header pink-bg">
        <div class="collapse navbar-collapse headertop">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="#" class="nav-link-false">
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a href="#" >
                    Projects 
                 </a>
            </li>
            <li class="nav-item">
            <a href="{{route('login')}}">
                    Login
                </a>
            </li>
            <li class="nav-item">
                <a href= "{{route('register.user')}}">
                     Register
                </a>
            </li>
        </ul>
        </div>
        </nav>
    </div>
    @include('home.cart_page')
@endsection
@push('css')
<link rel="stylesheet" href="{{asset('css/nav.css')}}">
@endpush