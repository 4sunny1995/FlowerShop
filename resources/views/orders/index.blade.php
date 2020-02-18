@extends('layouts.master')
<br><br><br><br>
@section('content')
    
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div>
                <ul class="list-group">
                <li class="list-group-item "><a href="{{route('home')}}"><span>Trang chủ</span></a></li>
                    <li class="list-group-item "><a href="{{route('profile')}}"><span>Thông tin cá nhân</span></a></li>
                    <li class="list-group-item "><a href="{{route('cart')}}"><span>Giỏ hàng</span></a></li>
                    <li class="list-group-item "><a href="{{route('history')}}"><span>Lịch sử giao dịch</span></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-8">
            <div class="container">
                <div class="row">
                    <div class="col-md-1 border" style="height: 80px;border: solid 1px gray">Mã đơn hàng</div>
                    <div class="col-md-1 border"  style="height: 80px;border: solid 1px gray">Tên khách hàng</div>
                    <div class="col-md-2 border" style="height: 80px;border: solid 1px gray">Số điện thoại</div>
                    <div class="col-md-1 border" style="height: 80px;border: solid 1px gray">Tổng giá trị</div>
                    <div class="col-md-2 border" style="height: 80px;border: solid 1px gray">Nhân viên giao hàng</div>
                    <div class="col-md-2 border" style="height: 80px;border: solid 1px gray">Số điện thoại nhân viên</div>
                    <div class="col-md-1 border" style="height: 80px;border: solid 1px gray">Tình trạng</div>

                </div>
                @foreach ($orders as $item)
                    <div class="row">
                    <div class="col-md-1 border">{{$item->id}}</div>
                    <div class="col-md-1 border">{{$item->name}}</div>
                    <div class="col-md-2 border">{{$item->phone}}</div>
                    <div class="col-md-1 border">{{$item->total}}</div>
                    <div class="col-md-2 border">
                        @foreach ($staffs as $staff)
                        @if ($staff->id==$item->staffid)
                            {{$staff->name}}
                            @break
                        @endif
                        @endforeach
                    </div>
                    <div class="col-md-2 border">
                        @foreach ($staffs as $staff)
                        @if ($staff->id==$item->staffid)
                            {{$staff->phone}}
                            @break
                        @endif
                        @endforeach
                    </div>
                    <div class="col-md-1 border">@switch($item->status)
                        @case(1)
                        <span class="badge badge-primary">Đang giao</span>
                            @break
                        @case(2)
                            <span class="badge badge-success">Đã giao</span>
                            @break
                        @case(-1)
                            <span class="badge badge-danger">Đã hủy</span>
                            @break    
                        @default
                        <span class="badge badge-info">Đang chờ.</span>
                    @endswitch
                </div>
                    </div>
                @endforeach
            </div>            
        </div>
    </div>
</div>
<br>
@endsection