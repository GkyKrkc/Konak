@extends('front.partials.master')
@section('content')

    <style>
        /* font Awesome http://fontawesome.io*/
        @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css);
        /* Animation.css*/
        @import url(https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css);

        .col-item {
            border: 1px solid #E1E1E1;
            background: #FFF;
            margin-bottom:12px;
        }
        .col-item .options {
            position:absolute;
            top:6px;
            right:22px;
        }
        .col-item .photo {
            overflow: hidden;
        }
        .col-item .photo .options {
            display:none;
        }
        .col-item .photo img {
            margin: 0 auto;
            width: 100%;
        }

        .col-item .options-cart {
            position:absolute;
            left:22px;
            top:6px;
            display:none;
        }
        .col-item .photo:hover .options,
        .col-item .photo:hover .options-cart {
            display:block;
            -webkit-animation: fadeIn .5s ease;
            -moz-animation: fadeIn .5s ease;
            -ms-animation: fadeIn .5s ease;
            -o-animation: fadeIn .5s ease;
            animation: fadeIn .5s ease;
        }
        .col-item .options-cart-round {
            position:absolute;
            left:42%;
            top:22%;
            display:none;
        }
        .col-item .options-cart-round button {
            border-radius: 50%;
            padding:14px 16px;

        }
        .col-item .options-cart-round button .fa {
            font-size:22px;
        }
        .col-item .photo:hover .options-cart-round {
            display:block;
            -webkit-animation: fadeInDown .5s ease;
            -moz-animation: fadeInDown .5s ease;
            -ms-animation: fadeInDown .5s ease;
            -o-animation: fadeInDown .5s ease;
            animation: fadeInDown .5s ease;
        }
        .col-item .info {
            padding: 10px;
            margin-top: 1px;
        }
        .col-item .price-details {
            width: 100%;
            margin-top: 5px;
        }
        .col-item .price-details h1 {
            font-size: 14px;
            line-height: 20px;
            margin: 0;
            float:left;
        }
        .col-item .price-details .details {
            margin-bottom: 0px;
            font-size:12px;
        }
        .col-item .price-details span {
            float:right;
        }
        .col-item .price-details .price-new {
            font-size:16px;
        }
        .col-item .price-details .price-old {
            font-size:18px;
            text-decoration:line-through;
        }
        .col-item .separator {
            border-top: 1px solid #E1E1E1;
        }

        .col-item .clear-left {
            clear: left;
        }
        .col-item .separator a {
            text-decoration:none;
        }
        .col-item .separator p {
            margin-bottom: 0;
            margin-top: 6px;
            text-align: center;
        }

        .col-item .separator p i {
            margin-right: 5px;
        }
        .col-item .btn-add {
            width: 60%;
            float: left;
        }
        .col-item .btn-add a {
            display:inline-block !important;
        }
        .col-item .btn-add {
            border-right: 1px solid #E1E1E1;
        }
        .col-item .btn-details {
            width: 40%;
            float: left;
            padding-left: 10px;
        }
        .col-item .btn-details a {
            display:inline-block !important;
        }
        .col-item .btn-details a:first-child {
            margin-right:12px;
        }
    </style>
    <div id="pagewrap" class="pagewrap">
        <div id="html-content" class="wrapper-content">
            <header class="header-transparent">
                <div class="header-top top-layout-02">
                    <div class="container">
                        <div class="topbar-left">
                            <div class="topbar-content">
                                <div class="item">
                                    <div class="wg-contact"><i class="fa fa-map-marker"></i><span>Şehit Abdullah Çavuş Mah. Alparslan Türkeş Bul</span></div>
                                </div>
                                <div class="item"><div class="wg-contact"><i class="fa fa-phone"></i><span>0 (344) 215 70 50</span></div></div>

                                @if(Auth::guest())
                                    <div class="item"><div class="wg-contact"><i class="fa fa-lock"></i><span><a href="login">Giriş</a> </span></div></div>
                                    <div class="item"><div class="wg-contact"><i class="fa fa-users"></i><span><a href="register">Yeni Üyelik</a> </span></div></div>
                                @else
                                    <div class="item"><div class="wg-contact"><i class="fa fa-user"></i><span>{{Auth::user()->name}}</span></div></div>
                                    <div class="item"><div class="wg-contact"><span><a href="{{ route('logout') }}"
                                                                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out" aria-hidden="true"></i> Çıkış Yap
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form></span></div></div>
                                @endif
                            </div>
                        </div>
                        <div class="topbar-right">
                            <div class="topbar-content">
                                <div class="item">
                                    <ul class="socials-nb list-inline wg-social">
                                        <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>

                                    </ul>
                                </div>
                                <div class="item">
                                    <div class="wg-social"><i class="fa fa-shopping-basket"></i><span><a href="{{url('box')}}"> Siparişler {{Cart::count()}}</a></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-main">
                    <div class="container">
                        <div class="open-offcanvas">&#9776;</div>
                        <div class="utility-nav">
                            <div class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="search-bar dropdown-toggle"><i class="fa fa-search"></i></a>
                                <div class="dropdown-menu">
                                    <div class="search-form">
                                        <form action="#">
                                            <div class="input-group">
                                                <input type="text" placeholder="Search" class="form-control">
                                                <div class="input-group-addon"><i class="fa fa-search"></i></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-logo"><a href="index.htm" class="logo logo-static"><img src="assets\images\logo-white.png" alt="fooday" class="logo-img"></a><a href="index.html" class="logo logo-fixed"><img src="assets\images\logo.png" alt="fooday" class="logo-img"></a></div>
@include('front.nav')
                    </div>
                </div>
            </header>
            <div class="page-container">
                <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-menu">
                    <div class="container">
                        <div class="title-wrapper">


                        </div>
                    </div>
                </div>
                <section class="product-sesction-02 padding-top-100 padding-bottom-100">
                    <div class="container">
                        <div class="swin-sc swin-sc-title style-3">
                            <p class="title"><span>{{$kategori->name}}</span></p>
                        </div>
                        <div class="swin-sc swin-sc-product products-02 carousel-02">

                            <div class="products nav-slider">
                                <div class="row slick-padding">
                                    @foreach($urunler as $urun)
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="blog-item item swin-transition">
                                            <div class="block-img"><img src="http://birtatkebap.com/wp-content/uploads/2015/07/41.jpg" alt="" class="img img-responsive">
                                                <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span class="price-symbol"></span>{{$urun->fiyat}}TL</span></div>
                                                <div class="group-btn"><a href="{{url('ekle/'.$urun->id)}}" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                            </div>
                                            <div class="block-content">
                                                <h5 class="title"><a href="javascript:void(0)">{{$urun->name}}</a></h5>
                                                <div class="product-info">
                                                    <ul class="list-inline">
                                                        <li class="author"><span>Chef</span><span class="text">Don Joe</span></li>
                                                        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   @endforeach
                                </div>

                            </div>
                        </div>
                        <div class="swin-btn-wrap center mtxxl"><a href="#" class="swin-btn center btn-transparent"> <span>Load More</span></a></div>
                    </div>
                </section>



            </div>
            <footer>
                <div class="subscribe-section"><img src="assets\images\background\bg5.png" alt="" class="img-subscribe">
                    <div class="container">
                        <div class="subscribe-wrapper">
                            <div class="row">
                                <div class="col-lg-8 col-lg-offset-2">
                                    <div class="subscribe-heading">
                                        <h3 class="title">Subcribe Us Now</h3>
                                        <div class="des">Get more news and delicious dishes everyday from us</div>
                                    </div>
                                    <form class="widget-newsletter">
                                        <input placeholder="Email" class="form-control"><span class="submit"><i class="fa fa-paper-plane"></i></span>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-top"></div>
                <div class="footer-main">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="ft-widget-area">
                                    <div class="ft-area1">
                                        <div class="swin-wget swin-wget-about">
                                            <div class="clearfix"><a class="wget-logo"><img src="assets\images\logo-ft.png" alt="" class="img img-responsive"></a>
                                                <ul class="socials socials-about list-unstyled list-inline">
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="wget-about-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Duis aute irure dolor.</p>
                                            </div>
                                            <div class="about-contact-info clearfix">
                                                <div class="address-info">
                                                    <div class="info-icon"><i class="fa fa-map-marker"></i></div>
                                                    <div class="info-content">
                                                        <p>157 White Oak Drive Kansas City </p>
                                                        <p>689 Lynn Street South Boston</p>
                                                    </div>
                                                </div>
                                                <div class="phone-info">
                                                    <div class="info-icon"><i class="fa fa-mobile-phone"></i></div>
                                                    <div class="info-content">
                                                        <p>(617)-276-8031</p>
                                                        <p>(617)-276-8031</p>
                                                    </div>
                                                </div>
                                                <div class="email-info">
                                                    <div class="info-icon"><i class="fa fa-envelope"></i></div>
                                                    <div class="info-content">
                                                        <p>admin@fooday.com</p>
                                                        <p>support@fooday.com</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="ft-fixed-area">
                                    <div class="reservation-box">
                                        <div class="reservation-wrap">
                                            <h3 class="res-title">Open Hour</h3>
                                            <div class="res-date-time">
                                                <div class="res-date-time-item">
                                                    <div class="res-date">
                                                        <div class="res-date-item">
                                                            <div class="res-date-text">
                                                                <p>Tuesday:</p>
                                                            </div>
                                                            <div class="res-date-dot">.......................................</div>
                                                        </div>
                                                    </div>
                                                    <div class="res-time">
                                                        <div class="res-time-item">
                                                            <p>7AM - 9PM</p>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="res-date-time-item">
                                                    <div class="res-date">
                                                        <div class="res-date-item">
                                                            <div class="res-date-text">
                                                                <p>Wednesday:</p>
                                                            </div>
                                                            <div class="res-date-dot">.......................................</div>
                                                        </div>
                                                    </div>
                                                    <div class="res-time">
                                                        <div class="res-time-item">
                                                            <p>7AM - 9PM</p>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="res-date-time-item">
                                                    <div class="res-date">
                                                        <div class="res-date-item">
                                                            <div class="res-date-text">
                                                                <p>Thursday:</p>
                                                            </div>
                                                            <div class="res-date-dot">.......................................</div>
                                                        </div>
                                                    </div>
                                                    <div class="res-time">
                                                        <div class="res-time-item">
                                                            <p>7AM - 9PM</p>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="res-date-time-item">
                                                    <div class="res-date">
                                                        <div class="res-date-item">
                                                            <div class="res-date-text">
                                                                <p>Friday:</p>
                                                            </div>
                                                            <div class="res-date-dot">.......................................</div>
                                                        </div>
                                                    </div>
                                                    <div class="res-time">
                                                        <div class="res-time-item">
                                                            <p>7AM - 9PM</p>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="res-date-time-item">
                                                    <div class="res-date">
                                                        <div class="res-date-item">
                                                            <div class="res-date-text">
                                                                <p>Saturday:</p>
                                                            </div>
                                                            <div class="res-date-dot">.......................................</div>
                                                        </div>
                                                    </div>
                                                    <div class="res-time">
                                                        <div class="res-time-item">
                                                            <p>7AM - 9PM</p>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="res-date-time-item">
                                                    <div class="res-date">
                                                        <div class="res-date-item">
                                                            <div class="res-date-text">
                                                                <p>Sunday:</p>
                                                            </div>
                                                            <div class="res-date-dot">.......................................</div>
                                                        </div>
                                                    </div>
                                                    <div class="res-time">
                                                        <div class="res-time-item">
                                                            <p>7AM - 9PM</p>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="res-date-time-item">
                                                    <div class="res-date">
                                                        <div class="res-date-item">
                                                            <div class="res-date-text">
                                                                <p>Monday:</p>
                                                            </div>
                                                            <div class="res-date-dot">.......................................</div>
                                                        </div>
                                                    </div>
                                                    <div class="res-time">
                                                        <div class="res-time-item">
                                                            <p>Close</p>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <h3 class="res-title">Reservation Numbers</h3>
                                            <p class="res-number">(617)-276-8031</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer><a id="totop" href="#" class="animated"><i class="fa fa-angle-double-up"></i></a>
        </div>

    </div>
@endsection