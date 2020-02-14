@extends('layouts.master')
@section('content')
    <div class="login-dark" style="background-image: url(&quot;assets/img/background-login.jpg&quot;);">
    <form method="post" style="font-family: Lobster, cursive;" action="{{route('postLogin')}}">
            @csrf
            @include('layouts.message')
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration">
                <i class="icon ion-ios-locked-outline" style="color: rgb(114,126,43);"></i>
            </div>
            <div><a href="redirect/facebook"><i class="fa fa-facebook-square" aria-hidden="true"></i> FB Login</a><br></div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Tài khoản" class="form-control" />
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Mật khẩu" class="form-control" />
            </div>
            <div class="form-group">
                <input type="checkbox" name="remember" > Remember me...
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit" style="background-color: rgb(114,126,43);font-family: Lobster, cursive;">Đăng nhập</button>
            </div>
            <a href="register.html" class="forgot">Chưa có tài khoản? Đăng kí ngay.</a>
        </form>
    </div>
@endsection