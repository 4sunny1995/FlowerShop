</nav>
<div class="container-fluid">
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
        <div class="col-md-8">
            @foreach ($product as $item)
            <div class="col-md-4">
                <div class="h-75">
                <img src="/assets/img/{{$item->productcode}}/{{$item->image}}" class="img-thumbnail" alt="Cinque Terre">
                </div>
                <div class="h-25 text-center border ">
                    <span>Hoa hướng dương 1</span><br>
                    <span>Giá cũ: </span><del style="color:red">200.000VNĐ</del><br>
                    <span>Giá mới: </span><span>100.000 VNĐ</span><br>
                    <button type="button" data-id="{{$item->id}}" class="btn btn-success btnAdd">Thêm giỏ hàng</button>
                </div>
            </div>
            
            @endforeach
            <br>
            <div class="col-md-12 text-center">
                {{ $product->links()}}
            </div>
            
        </div>
    </div>
</div>
<br>