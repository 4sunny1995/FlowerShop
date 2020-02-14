@extends('layouts.master')
<br><br><br><br>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div>
                    <ul class="list-group">
                    <li class="list-group-item "><a href="{{route('home')}}"><span>Trang chủ</span></a></li>
                        <li class="list-group-item "><a href="{{route('profile')}}"><span>Thông tin cá nhân</span></a></li>
                        <li class="list-group-item "><a href="{{route('cart')}}"><span>Giỏ hàng</span></a></li>
                        <li class="list-group-item "><a href="{{route('changePassword')}}"><span>Thay đổi mật khẩu</span></a></li>
                        <li class="list-group-item "><a href="{{route('history')}}"><span>Lịch sử giao dịch</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-4">
                        <div class="col-md-10" class="form-control">ID Tài khoản</div>
                        <input type="number" name="" id="" disabled value="{{$user->id}}" class="form-control">
                        {{-- <input type="number" name="id" id="" disabled value="{{$user->id}}" style="display:none"> --}}
                    </div>
                    <div class="col-md-4">
                        <div class="col-md-10" class="form-control">Email</div>
                        <input type="email" name="email" value="{{$user->email}}" id="" disabled class="form-control">
                    </div>
                    <div class="col-md-4">
                        <div class="col-md-10" class="form-control">Tên khách hàng</div>
                        <input type="text" name="" id="" value="{{$user->name}}" disabled class="form-control">
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection