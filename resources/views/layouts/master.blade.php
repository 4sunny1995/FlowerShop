<!DOCTYPE html>
<html lang="vi-vn">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SunnyShop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/readable/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css">
</head>

<body>
    @yield('content')
    <nav class="navbar navbar-inverse navbar-fixed-top" style="font-family: Lobster, cursive;">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand" href="index.html"><img src="/assets/img/logo-2.png" id="logo"><strong>Sunny</strong> Shop</a><button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active" role="presentation"><a href="index.html" style="background-color: rgba(245,245,130,0);">Giới thiệu</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Sản phẩm<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="bohoa.html">Bó hoa</a></li>
                            <li role="presentation"><a href="giohoa.html">Giỏ hoa</a></li>
                            <li role="presentation"><a href="chauhoa.html">Chậu hoa</a></li>
                           
                        </ul>
                    </li>
                    <li role="presentation"><a href="contact.html">Liên hệ</a></li>
                    @if (Auth::check())
                    <li role="presentation">
                        <a href="#" style="background-color: #f5f582;">Xin chào {{Auth::user()->name}}</a>
                    </li>
                    <li role="presentation">
                    <a href="{{route('logout')}}">Đăng xuất<i class="fa fa-sign-out" aria-hidden="true"></i></a>
                    </li>
                    @else
                    <li role="presentation"><a href="#" style="background-color: #f5f582;"><i class="glyphicon glyphicon-log-in"></i>&nbsp;Đăng nhập</a></li>
                    @endif
                </ul>
        </div>
        </div>
    </nav>
    <footer>
        <div class="container">
            <div class="row" style="font-family: Lobster, cursive;">
                <div class="col-md-4 col-sm-6 footer-navigation">
                    <h3><a href="index.html">Sunny Shop</a></h3>
                    <p class="links"><a href="thamquan.html">SunFlower</a><strong> · </strong><a href="#">Pricing </a><strong> · </strong><a href="#">Order </a><strong> </strong></p>
                    <p class="company-name">Sunny Shop © 2016 </p>
                </div>
                <div class="col-md-4 col-sm-6 footer-contacts">
                    <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                        <p><span class="new-line-span">Tp. Thủ Dầu Một</span> Bình Dương, Việt Nam</p>
                    </div>
                    <div><i class="fa fa-phone footer-contacts-icon"></i>
                        <p class="footer-center-info email text-left"> +123 456 789</p>
                    </div>
                    <div><i class="fa fa-envelope footer-contacts-icon"></i>
                        <p> <a href="#" target="_blank">nguyenvanquocdh1995@gmail.com</a></p>
                    </div>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-md-4 footer-about">
                    <h4 style="font-family: Lobster, cursive;">About us</h4>
                    <p> Chuyên cung cấp sỉ &amp; lẻ hoa hướng dương</p>
                    <div class="social-links social-icons"><a href="https://www.facebook.com/4Sunny1995" target="_blank"><i class="fa fa-facebook"></i></a></div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js"></script>
    <script src="/js/myjs.js"></script>
</body>

</html>