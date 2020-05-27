@extends('master')
@section('content')

<div class="login-reg-panel">
    <div class="login-info-box">
        <h2>Have an account?</h2>
        <p>Lorem ipsum dolor sit amet</p>
        <label id="label-register" for="log-reg-show">Login</label>
        <input type="radio" name="active-log-panel" id="log-reg-show" checked="checked">
    </div>
    <div class="register-info-box">
        <h2>Don't have an account?</h2>
        <p>Create new account</p>
        <a href="{{route('register.user')}}" class="btn btn-primary btn-lg active" role="button" id="label-login">Register</a>
        {{-- <label id="label-login" for="log-login-show">Register</label> --}}
        <input type="radio" name="active-log-panel" id="log-login-show">
    </div>
    <div class="white-panel">
       
        <div class="register-show">
            <h2>Login</h2>
            <form method="post" ation ="{{route('user-login')}}">
                @csrf
                <input type="text" placeholder="Email"name="email">
                <input type="password" placeholder="Password" name="password">
                <!-- <input type="password" placeholder="Confirm Password"> -->
                <input type="submit" value="Login" id="login">
            </form>
        </div>
    </div>
</div>
    
@endsection
@push('css')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@endpush