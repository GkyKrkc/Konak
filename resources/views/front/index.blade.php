@extends('front.partials.master')
@section('content')
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
                                    <div class="wg-social"><i class="fa fa-shopping-basket"></i><span><a href="box"> Siparişler {{Cart::count()}}</a></span></div>
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
                        <div class="header-logo"><a href="/" class="logo logo-static"><img src="{{asset('assets\images\logo-white.png')}}" alt="fooday" class="logo-img"></a><a href="/" class="logo logo-fixed"><img src="{{asset('assets\images\logo.png')}}" alt="fooday" class="logo-img"></a></div>
                        @include('front.nav')
                    </div>
                </div>
            </header>
            <div class="page-container">
                <div class="top-header top-bg-parallax">
                    <div data-parallax="scroll" data-image-src="assets/images/slider/slider2-bg1.jpg" class="slides parallax-window">
                        <div class="slide-content slide-layout-02">
                            <div class="container">
                                <div class="slide-content-inner"><img src="{{asset('assets\images\slider\slider2-icon.png')}}" data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="500" alt="fooday" class="slide-icon img img-responsive animated">
                                    <h3 data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="1000" class="slide-title animated">KONAK <br> Cafe & Restaurant</h3>
                                    <p data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="1500" class="slide-sub-title animated"><span class="line-before"></span><span class="line-after"></span><span class="text"><span>Lezzet</span><span>Güven</span><span>&</span><span>Kalite</span></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="about-us-session padding-top-100 padding-bottom-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 colsm-12"><img src="assets\images\pages\home1-about.jpg" alt="" class="img img-responsive wow zoomIn"></div>
                            <div class="col-md-6 col-sm-12">
                                <div class="swin-sc swin-sc-title style-4 margin-bottom-20 margin-top-50">
                                    <p class="top-title"><span>Lezzetleri Keşfedin</span></p>
                                    <h3 class="title">Bizim Hikayemiz</h3>
                                </div>
                                <p class="des font-bold text-center">WE HAVE THE GLORY BEGINING IN RESTAURANT BUSINESS</p>
                                <p class="des margin-bottom-20 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis ullam laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <div class="swin-btn-wrap center"><a href="#" class="swin-btn center form-submit btn-transparent"> <span>	About Us</span></a></div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="product-sesction-03-1 padding-top-100 padding-bottom-100"><img src="assets\images\product\product-decorate.jpg" alt="" class="img-responsive img-decorate">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-4"></div>
                            <div class="col-lg-6 col-md-8">
                                <div class="swin-sc swin-sc-title text-left light">
                                    <p class="top-title"><span>Aşçımızdan </span></p>
                                    <h3 class="title">Günün Spesiali</h3>
                                </div>
                                <div class="swin-sc swin-sc-product products-01 style-04 light swin-vetical-slider">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div data-height="200" class="products nav-slider">
                                                <div class="item product-01">
                                                    <div class="item-left"><img src="assets\images\product\product-2a.jpg" alt="" class="img img-responsive">
                                                        <div class="content-wrapper"><a class="title">The Cracker Barrel's Country Boy Breakfast</a>
                                                            <div class="dot">.....................................................................</div>
                                                            <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span></div>
                                                </div>
                                                <div class="item product-01">
                                                    <div class="item-left"><img src="assets\images\product\product-2b.jpg" alt="" class="img img-responsive">
                                                        <div class="content-wrapper"><a class="title">Uncle Herschel's Favorite </a>
                                                            <div class="dot">.....................................................................</div>
                                                            <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span></div>
                                                </div>
                                                <div class="item product-01">
                                                    <div class="item-left"><img src="assets\images\product\product-2c.jpg" alt="" class="img img-responsive">
                                                        <div class="content-wrapper"><a class="title">Grandpa's Country Fried Breakfast </a>
                                                            <div class="dot">.....................................................................</div>
                                                            <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span></div>
                                                </div>
                                                <div class="item product-01">
                                                    <div class="item-left"><img src="assets\images\product\product-2d.jpg" alt="" class="img img-responsive">
                                                        <div class="content-wrapper"><a class="title">Chinese Chicken Bread Spicy Soup</a>
                                                            <div class="dot">.....................................................................</div>
                                                            <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                                                </div>
                                                <div class="item product-01">
                                                    <div class="item-left"><img src="assets\images\product\product-2b.jpg" alt="" class="img img-responsive">
                                                        <div class="content-wrapper"><a class="title">Uncle Herschel's Favorite </a>
                                                            <div class="dot">.....................................................................</div>
                                                            <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span></div>
                                                </div>
                                                <div class="item product-01">
                                                    <div class="item-left"><img src="assets\images\product\product-2a.jpg" alt="" class="img img-responsive">
                                                        <div class="content-wrapper"><a class="title">The Cracker Barrel's Country Boy Breakfast</a>
                                                            <div class="dot">.....................................................................</div>
                                                            <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="product-sesction-01 padding-bottom-100 padding-top-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="swin-sc swin-sc-title">
                                    <p class="top-title"><span>Menülerimiz</span></p>
                                    <h3 class="title">Lezzet Kategorilerimiz</h3>
                                </div>
                                <div class="swin-sc swin-sc-product products-01 style-02 woocommerce">
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div data-slide-toshow="5" class="cat-wrapper-02 main-slider col-md-8">
                                            <div class="item">
                                                <div class="cat-icons"><i class="icons swin-icon-pasta"></i>
                                                    <h5 class="cat-title">Kahvaltı</h5>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="cat-icons"><i class="icons swin-icon-fish"></i>
                                                    <h5 class="cat-title">Öğle Yemeği</h5>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="cat-icons"><i class="icons swin-icon-meat"></i></div>
                                                <h5 class="cat-title">Akşam Yemeği</h5>
                                            </div>
                                            <div class="item">
                                                <div class="cat-icons"><i class="icons swin-icon-ice-cream"></i></div>
                                                <h5 class="cat-title">Tatlılar</h5>
                                            </div>
                                            <div class="item">
                                                <div class="cat-icons"><i class="icons swin-icon-dinner"></i></div>
                                                <h5 class="cat-title">İçecekler</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-2"></div>
                                    </div>
                                    <div class="row">
                                        <div class="nav-slider">
                                            <div class="tab-content">
                                                <div class="col-md-5 col-sm-12">
                                                    <div class="cat-wrapper">
                                                        <div class="item"><img src="assets\images\product\pd-cat-dessert.png" alt="" class="img img-responsive img-full"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-sm-12">
                                                    <div class="products">
                                                        <div class="item product-01">
                                                            <div class="item-left">
                                                                <h5 class="title">The Cracker Barrel's Country Boy Breakfast</h5>
                                                                <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                            </div>
                                                            <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span></div>
                                                        </div>
                                                        <div class="item product-01">
                                                            <div class="item-left">
                                                                <h5 class="title">Uncle Herschel's Favorite </h5>
                                                                <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                            </div>
                                                            <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span></div>
                                                        </div>
                                                        <div class="item product-01">
                                                            <div class="item-left">
                                                                <h5 class="title">Grandpa's Country Fried Breakfast </h5>
                                                                <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                            </div>
                                                            <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span></div>
                                                        </div>
                                                        <div class="item product-01">
                                                            <div class="item-left">
                                                                <h5 class="title">Old Timer's Meat Breakfast</h5>
                                                                <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                            </div>
                                                            <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                                                        </div>
                                                        <div class="item product-01">
                                                            <div class="item-left">
                                                                <h5 class="title">Chinese Chicken Bread Spicy Soup</h5>
                                                                <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                            </div>
                                                            <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-content">
                                                <div class="col-md-5 col-sm-12">
                                                    <div class="cat-wrapper">
                                                        <div class="item"><img src="assets\images\product\pd-cat-lunch.png" alt="" class="img img-responsive img-full"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-sm-12">
                                                    <div class="products">
                                                        <div class="item product-01">
                                                            <div class="item-left">
                                                                <h5 class="title">The Cracker Barrel's Country Boy Breakfast</h5>
                                                                <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                            </div>
                                                            <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span></div>
                                                        </div>
                                                        <div class="item product-01">
                                                            <div class="item-left">
                                                                <h5 class="title">Grandpa's Country Fried Breakfast </h5>
                                                                <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                            </div>
                                                            <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span></div>
                                                        </div>
                                                        <div class="item product-01">
                                                            <div class="item-left">
                                                                <h5 class="title">Uncle Herschel's Favorite </h5>
                                                                <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                            </div>
                                                            <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span></div>
                                                        </div>
                                                        <div class="item product-01">
                                                            <div class="item-left">
                                                                <h5 class="title">Chinese Chicken Bread Spicy Soup</h5>
                                                                <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                            </div>
                                                            <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                                                        </div>
                                                        <div class="item product-01">
                                                            <div class="item-left">
                                                                <h5 class="title">Old Timer's Meat Breakfast</h5>
                                                                <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                            </div>
                                                            <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-content">
                                                <div class="col-md-5 col-sm-12">
                                                    <div class="cat-wrapper">
                                                        <div class="item"><img src="assets\images\product\pd-cat-dinner.png" alt="" class="img img-responsive img-full"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-sm-12">
                                                    <div class="products">
                                                        <div class="item product-01">
                                                            <div class="item-left">
                                                                <h5 class="title">Uncle Herschel's Favorite </h5>
                                                                <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                            </div>
                                                            <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span></div>
                                                        </div>
                                                        <div class="item product-01">
                                                            <div class="item-left">
                                                                <h5 class="title">Old Timer's Meat Breakfast</h5>
                                                                <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                            </div>
                                                            <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                                                        </div>
                                                        <div class="item product-01">
                                                            <div class="item-left">
                                                                <h5 class="title">The Cracker Barrel's Country Boy Breakfast</h5>
                                                                <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                            </div>
                                                            <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span></div>
                                                        </div>
                                                        <div class="item product-01">
                                                            <div class="item-left">
                                                                <h5 class="title">Grandpa's Country Fried Breakfast </h5>
                                                                <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                            </div>
                                                            <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span></div>
                                                        </div>
                                                        <div class="item product-01">
                                                            <div class="item-left">
                                                                <h5 class="title">Chinese Chicken Bread Spicy Soup</h5>
                                                                <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                            </div>
                                                            <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-content">
                                                <div class="col-md-5 col-sm-12">
                                                    <div class="cat-wrapper">
                                                        <div class="item"><img src="assets\images\product\pd-cat-dessert.png" alt="" class="img img-responsive img-full"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-sm-12">
                                                    <div class="products">
                                                        <div class="item product-01">
                                                            <div class="item-left">
                                                                <h5 class="title">The Cracker Barrel's Country Boy Breakfast</h5>
                                                                <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                            </div>
                                                            <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span></div>
                                                        </div>
                                                        <div class="item product-01">
                                                            <div class="item-left">
                                                                <h5 class="title">Grandpa's Country Fried Breakfast </h5>
                                                                <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                            </div>
                                                            <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span></div>
                                                        </div>
                                                        <div class="item product-01">
                                                            <div class="item-left">
                                                                <h5 class="title">Old Timer's Meat Breakfast</h5>
                                                                <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                            </div>
                                                            <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                                                        </div>
                                                        <div class="item product-01">
                                                            <div class="item-left">
                                                                <h5 class="title">Uncle Herschel's Favorite </h5>
                                                                <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                            </div>
                                                            <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span></div>
                                                        </div>
                                                        <div class="item product-01">
                                                            <div class="item-left">
                                                                <h5 class="title">Chinese Chicken Bread Spicy Soup</h5>
                                                                <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                            </div>
                                                            <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-content">
                                                <div class="col-md-5 col-sm-12">
                                                    <div class="cat-wrapper">
                                                        <div class="item"><img src="assets\images\product\pd-cat-lunch.png" alt="" class="img img-responsive img-full"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-sm-12">
                                                    <div class="products">
                                                        <div class="item product-01">
                                                            <div class="item-left">
                                                                <h5 class="title">Old Timer's Meat Breakfast</h5>
                                                                <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                            </div>
                                                            <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                                                        </div>
                                                        <div class="item product-01">
                                                            <div class="item-left">
                                                                <h5 class="title">The Cracker Barrel's Country Boy Breakfast</h5>
                                                                <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                            </div>
                                                            <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span></div>
                                                        </div>
                                                        <div class="item product-01">
                                                            <div class="item-left">
                                                                <h5 class="title">Grandpa's Country Fried Breakfast </h5>
                                                                <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                            </div>
                                                            <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span></div>
                                                        </div>
                                                        <div class="item product-01">
                                                            <div class="item-left">
                                                                <h5 class="title">Uncle Herschel's Favorite </h5>
                                                                <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                            </div>
                                                            <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span></div>
                                                        </div>
                                                        <div class="item product-01">
                                                            <div class="item-left">
                                                                <h5 class="title">Chinese Chicken Bread Spicy Soup</h5>
                                                                <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                            </div>
                                                            <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -150px;" class="testimonial-section-01 padding-top-100 padding-bottom-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="swin-sc swin-sc-title">
                                    <p class="top-title"><span>Testimonial</span></p>
                                    <h3 class="title white-color">Müşterilerimizin Yorumları</h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="swin-sc swin-sc-testimonial style-1">
                                            <div class="main-slider flexslider">
                                                <div class="slides">
                                                    <div class="testi-item item"><i class="testi-icon fa fa-quote-left"></i>
                                                        <div class="testi-content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                                        </div>
                                                        <div class="testi-info"><span class="name">Timothy Doe</span> <span class="position">Customer</span></div>
                                                    </div>
                                                    <div class="testi-item item"><i class="testi-icon fa fa-quote-left"></i>
                                                        <div class="testi-content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                                        </div>
                                                        <div class="testi-info"><span class="name">Sarah	Ruiz</span> <span class="position">Director</span></div>
                                                    </div>
                                                    <div class="testi-item item"><i class="testi-icon fa fa-quote-left"></i>
                                                        <div class="testi-content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                                        </div>
                                                        <div class="testi-info"><span class="name">Tracey Lewis</span> <span class="position">Designer</span></div>
                                                    </div>
                                                    <div class="testi-item item"><i class="testi-icon fa fa-quote-left"></i>
                                                        <div class="testi-content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                                        </div>
                                                        <div class="testi-info"><span class="name">Jamie	Erickson</span> <span class="position">Manager</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-width="150" class="nav-slider">
                                                <ul class="slides list-inline">
                                                    <li class="swin-transition"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="assets\images\testi\testi-1.jpg" alt="fooday" class="img img-responsive swin-transition"></a></li>
                                                    <li class="swin-transition"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="assets\images\testi\testi-2.jpg" alt="fooday" class="img img-responsive swin-transition"></a></li>
                                                    <li class="swin-transition"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="assets\images\testi\testi-3.jpg" alt="fooday" class="img img-responsive swin-transition"></a></li>
                                                    <li class="swin-transition"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="assets\images\testi\testi-4.jpg" alt="fooday" class="img img-responsive swin-transition"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="team-section padding-top-100 padding-bottom-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="swin-sc swin-sc-title">
                                    <p class="top-title"><span>Meet Our</span></p>
                                    <h3 class="title">Awesome Master Chefs</h3>
                                </div>
                                <div class="swin-sc swin-sc-team-slider">
                                    <div class="team-item swin-transition wow fadeInLeft">
                                        <div class="team-img-wrap">
                                            <div class="team-img"><img src="assets\images\team\team-1.png" alt="" class="img img-responsive"></div>
                                        </div>
                                        <p class="team-name">MICHAEL DOE</p>
                                        <p class="team-position">Head Chef</p>
                                        <hr>
                                        <ul class="socials-nb list-inline">
                                            <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="team-item swin-transition wow fadeInUp">
                                        <div class="team-img-wrap">
                                            <div class="team-img"><img src="assets\images\team\team-2.png" alt="" class="img img-responsive"></div>
                                        </div>
                                        <p class="team-name">Teresa Doe</p>
                                        <p class="team-position">Head Chef</p>
                                        <hr>
                                        <ul class="socials-nb list-inline">
                                            <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="team-item swin-transition wow fadeInRight">
                                        <div class="team-img-wrap">
                                            <div class="team-img"><img src="assets\images\team\team-3.png" alt="" class="img img-responsive"></div>
                                        </div>
                                        <p class="team-name">BENJAMIN MARK</p>
                                        <p class="team-position">Head Chef</p>
                                        <hr>
                                        <ul class="socials-nb list-inline">
                                            <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="team-item swin-transition">
                                        <div class="team-img-wrap">
                                            <div class="team-img"><img src="assets\images\team\team-4.png" alt="" class="img img-responsive"></div>
                                        </div>
                                        <p class="team-name">Teresa Doe</p>
                                        <p class="team-position">Head Chef</p>
                                        <hr>
                                        <ul class="socials-nb list-inline">
                                            <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="reservation-section-02 padding-top-100 padding-bottom-100">
                    <div class="container"><img src="assets\images\background\home2-img-deco.png" alt="" class="img-deco img-responsive">
                        <div class="row">
                            <div class="col-md-6 left-wrapper">
                                <div class="form-dark-wrapper">
                                    <div class="swin-sc swin-sc-title style-3 light">
                                        <p class="title"><span>Rezervasyon Yap !</span></p>
                                        <p class="subtitle">İsterseniz İletişim Numaramızıda Arayabilirsiniz <span class="text-default">0 (344) 215 70 50</span></p>
                                    </div>
                                    <div class="swin-sc swin-sc-contact-form dark mtl">
                                        <form>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <div class="fa fa-phone"></div>
                                                    </div>
                                                    <input type="text" placeholder="Telefon Numarasnız" class="form-control">
                                                </div>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="fa fa-male"></i></div>
                                                    <select type="text" placeholder="Kişi Sayısı" class="form-control">
                                                        <option>1 Kişi
                                                        <option>2 Kişi
                                                        <option>3 Kişi
                                                        <option>4 Kişi
                                                        <option>5 Kişi
                                                        <option>6 Kişi
                                                        <option>7 Kişi
                                                        <option>8 Kişi
                                                        <option>9 Kişi
                                                        <option>10 Kişi
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                    <input type="text" placeholder="Tarih" class="form-control datepicker">
                                                </div>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <div class="fa fa-clock-o"></div>
                                                    </div>
                                                    <select type="text" placeholder="Time" class="form-control">
                                                        <option>7:00 AM
                                                        <option>8:00 AM
                                                        <option>9:00 AM
                                                        <option>10:00 AM
                                                        <option>11:00 AM
                                                        <option>12:00 AM
                                                        <option>1:00 PM
                                                        <option>2:00 PM
                                                        <option>3:00 PM
                                                        <option>4:00 PM
                                                        <option>5:00 PM
                                                        <option>6:00 PM
                                                        <option>7:00 PM
                                                        <option>8:00 PM
                                                        <option>9:00 PM
                                                        <option>10:00 PM
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="swin-btn-wrap center"><a href="#" class="swin-btn center form-submit"> <span>Rezerve Et </span></a></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="video-wrapper equal-height deco-abs">
                        <div class="swin-sc swin-sc-video">
                            <div class="play-wrap"><a href="https://vimeo.com/27814858" class="play-btn swipebox"><i class="play-icon fa fa-play"></i></a></div>
                        </div>
                    </div>
                </section>
                <section class="service-section-02 padding-top-100 padding-bottom-100">
                    <div class="container">
                        <div class="swin-sc swin-sc-title">
                            <p class="top-title"><span>Our Service</span></p>
                            <h3 class="title">What We Focus On</h3>
                        </div>
                        <div class="swin-sc swin-sc-iconbox">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="item icon-box-02 wow fadeInUpShort">
                                        <div class="wrapper-icon"><i class="icons swin-icon-dish"></i><span class="number">1</span></div>
                                        <h4 class="title">Reservation</h4>
                                        <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div data-wow-delay="0.5s" class="item icon-box-02 wow fadeInUpShort">
                                        <div class="wrapper-icon"><i class="icons swin-icon-dinner-2"></i><span class="number">2</span></div>
                                        <h4 class="title">Private Event</h4>
                                        <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div data-wow-delay="1s" class="item icon-box-02 wow fadeInUpShort">
                                        <div class="wrapper-icon"><i class="icons swin-icon-browser"></i><span class="number">3</span></div>
                                        <h4 class="title">Online Order</h4>
                                        <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div data-wow-delay="1.5s" class="item icon-box-02 wow fadeInUpShort">
                                        <div class="wrapper-icon"><i class="icons swin-icon-delivery"></i><span class="number">4</span></div>
                                        <h4 class="title">Fast Delivery</h4>
                                        <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="gallery-section-01 padding-top-100">
                    <div class="swin-sc swin-sc-title">
                        <p class="top-title"><span>Our Gallery</span></p>
                        <h3 class="title white-color">Fooday Hot Dishes</h3>
                    </div>
                    <div class="swin-sc swin-sc-isotope">
                        <div class="grid">
                            <div class="grid-sizer col-sm-1"></div>
                            <div class="grid-item col-sm-3 grid-item-h2">
                                <div class="grid-wrap-item"><a href="#" class="gallery-title title">Chicago Beefsteak</a><a href="assets\images\gallery\gallery-1.jpg" data-lightbox="image" class="view-lightbox swipebox"><i class="fa fa-search-plus"></i></a><a href="#" class="view-more"><i class="fa fa-link"></i></a>
                                    <div class="img-wrap"><img src="assets\images\gallery\gallery-1.jpg" alt="" class="img img-responsive"></div>
                                </div>
                            </div>
                            <div class="grid-item col-sm-4 grid-item-h1">
                                <div class="grid-wrap-item"><a href="#" class="gallery-title title">Chicago Beefsteak</a><a href="assets\images\gallery\gallery-2.jpg" data-lightbox="image" class="view-lightbox swipebox"><i class="fa fa-search-plus"></i></a><a href="#" class="view-more"><i class="fa fa-link"></i></a>
                                    <div class="img-wrap"><img src="assets\images\gallery\gallery-2.jpg" alt="" class="img img-responsive"></div>
                                </div>
                            </div>
                            <div class="grid-item col-sm-2 grid-item-h1">
                                <div class="grid-wrap-item"><a href="#" class="gallery-title title">Chicago Beefsteak</a><a href="assets\images\gallery\gallery-3.jpg" data-lightbox="image" class="view-lightbox swipebox"><i class="fa fa-search-plus"></i></a><a href="#" class="view-more"><i class="fa fa-link"></i></a>
                                    <div class="img-wrap"><img src="assets\images\gallery\gallery-3.jpg" alt="" class="img img-responsive"></div>
                                </div>
                            </div>
                            <div class="grid-item col-sm-3 grid-item-h2">
                                <div class="grid-wrap-item"><a href="#" class="gallery-title title">Chicago Beefsteak</a><a href="assets\images\gallery\gallery-4.jpg" data-lightbox="image" class="view-lightbox swipebox"><i class="fa fa-search-plus"></i></a><a href="#" class="view-more"><i class="fa fa-link"></i></a>
                                    <div class="img-wrap"><img src="assets\images\gallery\gallery-4.jpg" alt="" class="img img-responsive"></div>
                                </div>
                            </div>
                            <div class="grid-item col-sm-2 grid-item-h1">
                                <div class="grid-wrap-item"><a href="#" class="gallery-title title">Chicago Beefsteak</a><a href="assets\images\gallery\gallery-5.jpg" data-lightbox="image" class="view-lightbox swipebox"><i class="fa fa-search-plus"></i></a><a href="#" class="view-more"><i class="fa fa-link"></i></a>
                                    <div class="img-wrap"><img src="assets\images\gallery\gallery-5.jpg" alt="" class="img img-responsive"></div>
                                </div>
                            </div>
                            <div class="grid-item col-sm-4 grid-item-h1">
                                <div class="grid-wrap-item"><a href="#" class="gallery-title title">Chicago Beefsteak</a><a href="assets\images\gallery\gallery-6.jpg" data-lightbox="image" class="view-lightbox swipebox"><i class="fa fa-search-plus"></i></a><a href="#" class="view-more"><i class="fa fa-link"></i></a>
                                    <div class="img-wrap"><img src="assets\images\gallery\gallery-6.jpg" alt="" class="img img-responsive"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="blog-section padding-top-100 padding-bottom-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="swin-sc swin-sc-title">
                                    <p class="top-title"><span>Updated from</span></p>
                                    <h3 class="title">our featured blog</h3>
                                </div>
                                <div class="swin-sc swin-sc-blog-grid"></div>
                            </div>
                            <div class="col-md-12">
                                <div class="swin-sc swin-sc-blog-grid">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div data-wow-delay="0s" class="blog-item swin-transition item wow fadeInUpShort">
                                                <div class="blog-info clearfix">
                                                    <div class="blog-info-item blog-view">
                                                        <p><i class="fa fa-eye"></i><span>18</span></p>
                                                        <p>
                                                    </div>
                                                    <div class="blog-info-item blog-comment">
                                                        <p><i class="fa fa-comment"></i><span>18</span></p>
                                                        <p>
                                                    </div>
                                                    <div class="blog-info-item blog-author">
                                                        <p><span>Post By </span><a href="javascript:void(0)">Admin</a></p>
                                                        <p>
                                                    </div>
                                                </div>
                                                <div class="blog-featured-img"><img src="assets\images\blog\blog-grid-1.jpg" alt="fooday" class="img img-responsive"></div>
                                                <div class="blog-content">
                                                    <div class="blog-date"><span class="day">12</span><span class="month">Jun</span></div>
                                                    <h3 class="blog-title"><a href="javascript:void(0)" class="swin-transition">How To Cook The Spicy Chinese Noodle For Cold Weather</a></h3>
                                                    <p class="blog-description">Lorem ipsum dolor sit amet, consectetur, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <div class="blog-readmore"><a href="javascript:void(0)" class="swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div data-wow-delay="0.5s" class="blog-item swin-transition item wow fadeInUpShort">
                                                <div class="blog-info clearfix">
                                                    <div class="blog-info-item blog-view">
                                                        <p><i class="fa fa-eye"></i><span>18</span></p>
                                                        <p>
                                                    </div>
                                                    <div class="blog-info-item blog-comment">
                                                        <p><i class="fa fa-comment"></i><span>18</span></p>
                                                        <p>
                                                    </div>
                                                    <div class="blog-info-item blog-author">
                                                        <p><span>Post By </span><a href="javascript:void(0)">Admin</a></p>
                                                        <p>
                                                    </div>
                                                </div>
                                                <div class="blog-featured-img"><img src="assets\images\blog\blog-grid-1-1.jpg" alt="fooday" class="img img-responsive"></div>
                                                <div class="blog-content">
                                                    <div class="blog-date"><span class="day">12</span><span class="month">Jun</span></div>
                                                    <h3 class="blog-title"><a href="javascript:void(0)" class="swin-transition">How To Cook The Spicy Chinese Noodle For Cold Weather</a></h3>
                                                    <p class="blog-description">Lorem ipsum dolor sit amet, consectetur, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <div class="blog-readmore"><a href="javascript:void(0)" class="swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                            <div data-wow-delay="1s" class="blog-item swin-transition item wow fadeInUpShort">
                                                <div class="blog-info clearfix">
                                                    <div class="blog-info-item blog-view">
                                                        <p><i class="fa fa-eye"></i><span>18</span></p>
                                                        <p>
                                                    </div>
                                                    <div class="blog-info-item blog-comment">
                                                        <p><i class="fa fa-comment"></i><span>18</span></p>
                                                        <p>
                                                    </div>
                                                    <div class="blog-info-item blog-author">
                                                        <p><span>Post By </span><a href="javascript:void(0)">Admin</a></p>
                                                        <p>
                                                    </div>
                                                </div>
                                                <div class="blog-featured-img"><img src="assets\images\blog\blog-grid-1-2.jpg" alt="fooday" class="img img-responsive"></div>
                                                <div class="blog-content">
                                                    <div class="blog-date"><span class="day">12</span><span class="month">Jun</span></div>
                                                    <h3 class="blog-title"><a href="javascript:void(0)" class="swin-transition">How To Cook The Spicy Chinese Noodle For Cold Weather</a></h3>
                                                    <p class="blog-description">Lorem ipsum dolor sit amet, consectetur, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <div class="blog-readmore"><a href="javascript:void(0)" class="swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>

@endsection