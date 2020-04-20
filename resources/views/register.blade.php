@extends('master')
@section('content')
<nav class="nav-home">
    <button class="btn-primary nav-btn-home">
        Home
    </button>
</nav>
<div class="login-reg-panel">
    <div class="login-info-box">
        <h2>Have an account?</h2>
        <p>Lorem ipsum dolor sit amet</p>
        <label id="label-register" for="log-reg-show">Login</label>
        <input type="radio" name="active-log-panel" id="log-reg-show" checked="checked">
    </div>
    <div class="register-info-box">
        <h2>Don't have an account?</h2>
        <p>Lorem ipsum dolor sit amet</p>
        <a href="{{route('register.user')}}" class="btn btn-primary btn-lg active" role="button" id="label-login">Register</a>
        {{-- <label id="label-login" for="log-login-show">Register</label> --}}
        <input type="radio" name="active-log-panel" id="log-login-show">
    </div>
    <div class="white-panel">
        {{-- <div class="register-new">
            <h2>LOGIN</h2>
            <input type="text" placeholder="Email">
            <input type="password" placeholder="Password">
            <input type="button" value="Login">
            <a href="">Forgot password?</a>
        </div> --}}
        <div class="register-show">
            <h2>Login</h2>
            <input type="text" placeholder="Email">
            <input type="password" placeholder="Password">
            <!-- <input type="password" placeholder="Confirm Password"> -->
            <input type="button" value="Login" id="login">
        </div>
    </div>
</div>
    
@endsection
@push('css')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@endpush