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
                        <div class="header-logo"><a href="index.htm" class="logo logo-static"><img src="assets\images\logo-white.png" alt="fooday" class="logo-img"></a><a href="index.html" class="logo logo-fixed"><img src="assets\images\logo.png" alt="fooday" class="logo-img"></a></div>
                        <nav id="main-nav-offcanvas" class="main-nav-wrapper">
                            <div class="close-offcanvas-wrapper"><span class="close-offcanvas">x</span></div>
                            <div class="main-nav">
                                <ul id="main-nav" class="nav nav-pills">
                                    <li class="dropdown current-menu-item"><a href="index.html" class="dropdown-toggle">Anasayfa</a><i class="fa fa-angle-down btn-open-dropdown"></i>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Home 1</a></li>
                                            <li><a href="homepage2.html">Home 2</a></li>
                                            <li><a href="homepage3.html">Home 3</a></li>
                                            <li><a href="homesidebarmenu.html">Home Sidebar Menu</a></li>
                                            <li><a href="home-one-page.html">Home One Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="menu">Hakkımızda</a></li>
                                    <li><a href="reservation.html">Reservasyon</a></li>
                                    <li class="dropdown"><a href="menu-grid-1.html">Menu</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="menu-classic.html">Menu Classic</a></li>
                                            <li><a href="menu-grid-1.html">Menu Grid 01</a></li>
                                            <li><a href="menu-grid-2.html">Menu Grid 02</a></li>
                                            <li><a href="menu-grid-3.html">Menu Grid 03</a></li>
                                            <li><a href="product-single.html">Product Detail</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">Blog</a><i class="fa fa-angle-down btn-open-dropdown"></i>
                                        <ul class="dropdown-menu">
                                            <li><a href="blogs.html">Blog List</a></li>
                                            <li><a href="blog-single.html">Blog Single</a></li>
                                            <li><a href="page-404.html">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">İletişim</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>
            <div class="page-container">
                <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-menu">
                    <div class="container">
                        <div class="title-wrapper">
                            <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);" data--50-top="transform: translateY(-15px);opacity:0.8;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Menu</div>
                            <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                            <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">Ülkemizin birbirinden farklı lezzetlerini barındıran zengin mutfağımızla, siz değerli müşterilerimizin hizmetindeyiz.</div>
                        </div>
                    </div>
                </div>
                <section class="product-sesction-menu padding-bottom-100 padding-top-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="swin-sc swin-sc-title style-3">
                                    <p class="title"><span>Breakfast Time</span></p>
                                </div>
                                <div class="swin-sc swin-sc-product products-01 style-02 woocommerce">
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div data-slide-toshow="5" class="cat-wrapper-02 main-slider col-md-8">
                                            <div class="item">
                                                <div class="cat-icons"><i class="icons swin-icon-pasta"></i>
                                                    <h5 class="cat-title">Rice</h5>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="cat-icons"><i class="icons swin-icon-fish"></i>
                                                    <h5 class="cat-title">Soup</h5>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="cat-icons"><i class="icons swin-icon-meat"></i></div>
                                                <h5 class="cat-title">coffee</h5>
                                            </div>
                                            <div class="item">
                                                <div class="cat-icons"><i class="icons swin-icon-ice-cream"></i></div>
                                                <h5 class="cat-title">Desset</h5>
                                            </div>
                                            <div class="item">
                                                <div class="cat-icons"><i class="icons swin-icon-dinner"></i></div>
                                                <h5 class="cat-title">Drink</h5>
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
                <section class="product-sesction-03-1 padding-top-100 padding-bottom-100"><img src="assets\images\product\product-decorate.jpg" alt="" class="img-responsive img-decorate">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-4"></div>
                            <div class="col-lg-6 col-md-8">
                                <div class="swin-sc swin-sc-title text-left light">
                                    <p class="top-title"><span>chef choise</span></p>
                                    <h3 class="title">Daily Special</h3>
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
                                                    <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0													</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="product-sesction-menu padding-bottom-100 padding-top-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="swin-sc swin-sc-title style-3">
                                    <p class="title"><span>Lunch Time</span></p>
                                </div>
                                <div class="swin-sc swin-sc-product products-01 style-02 woocommerce">
                                    <div class="row">
                                        <div class="tab-content">
                                            <div class="col-md-6 col-sm-12">
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
                                            <div class="col-md-6 col-sm-12">
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
                                    </div>
                                </div>
                            </div>
                        </div>
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
        <div id="loader" data-opening="m -5,-5 0,70 90,0 0,-70 z m 5,35 c 0,0 15,20 40,0 25,-20 40,0 40,0 l 0,0 C 80,30 65,10 40,30 15,50 0,30 0,30 z" class="pageload-overlay">
            <div class="loader-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 80 60" preserveaspectratio="none">
                    <path d="m -5,-5 0,70 90,0 0,-70 z m 5,5 c 0,0 7.9843788,0 40,0 35,0 40,0 40,0 l 0,60 c 0,0 -3.944487,0 -40,0 -30,0 -40,0 -40,0 z"></path>
                </svg>
                <div class="sk-circle">
                    <div class="sk-circle1 sk-child"></div>
                    <div class="sk-circle2 sk-child"></div>
                    <div class="sk-circle3 sk-child"></div>
                    <div class="sk-circle4 sk-child"></div>
                    <div class="sk-circle5 sk-child"></div>
                    <div class="sk-circle6 sk-child"></div>
                    <div class="sk-circle7 sk-child"></div>
                    <div class="sk-circle8 sk-child"></div>
                    <div class="sk-circle9 sk-child"></div>
                    <div class="sk-circle10 sk-child"></div>
                    <div class="sk-circle11 sk-child"></div>
                    <div class="sk-circle12 sk-child"></div>
                </div>
                <div class="sk-circle sk-circle-out">
                    <div class="sk-circle1 sk-child"></div>
                    <div class="sk-circle2 sk-child"></div>
                    <div class="sk-circle3 sk-child"></div>
                    <div class="sk-circle4 sk-child"></div>
                    <div class="sk-circle5 sk-child"></div>
                    <div class="sk-circle6 sk-child"></div>
                    <div class="sk-circle7 sk-child"></div>
                    <div class="sk-circle8 sk-child"></div>
                    <div class="sk-circle9 sk-child"></div>
                    <div class="sk-circle10 sk-child"></div>
                    <div class="sk-circle11 sk-child"></div>
                    <div class="sk-circle12 sk-child"></div>
                </div>
            </div>
        </div>
        <div id="live-setting" class="hidden-sm hidden-xs"><a id="open-popup"><i class="fa fa-cogs"></i></a>
            <form id="popup">
                <h5 class="live-title">Live Setting</h5>
                <div class="popup-inner">
                    <div class="box-setting">
                        <p>Pattern Color Variable</p>
                        <div class="color-setting">
                            <ul class="list-unstyled">
                                <li class="colordefault"><span>Default</span><a></a></li>
                                <li class="color01"><span>Pizza + Bread</span><a></a></li>
                                <li class="color02"><span>Wine</span><a></a></li>
                                <li class="color03"><span>Coffee</span><a></a></li>
                                <li class="color04"><span>Vegetable</span><a></a></li>
                                <li class="color05"><span>Cream</span><a></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection