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
                        <div class="header-logo"><a href="index.htm" class="logo logo-static"><img src="{{asset('assets\images\logo-white.png')}}" alt="fooday" class="logo-img"></a><a href="index.html" class="logo logo-fixed"><img src="{{asset('assets\images\logo.png')}}" alt="fooday" class="logo-img"></a></div>
@include('front.nav')
                    </div>
                </div>
            </header>
            <div class="page-container">
                <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-product">
                    <div class="container">
                        <div class="title-wrapper">
                            <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);" data--50-top="transform: translateY(-15px);opacity:0.8;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title"></div>
                            <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"></div>
                            <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle"></div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <section class="product-single padding-top-100 padding-bottom-100">
                        @foreach($urun as $detay)
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-image">
                                    <div class="product-featured-image">
                                        <div class="main-slider">
                                            <div class="slides">
                                                @foreach($resimler as $resim)
                                                <div class="featured-image-item"><img src="{{asset('uploads/urunler/thumb_'.$resim->name)}}" alt="" class="img img-responsive"></div>

                                                @endforeach
                                            </div>
                                        </div>
                                        <div data-width="150" class="nav-slider">
                                            <ul class="slides list-inline">
                                                @foreach($resimler as $resim)
                                                <li class="swin-transition thumbnail-image-item"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="{{asset('uploads/urunler/thumb_'.$resim->name)}}" alt="" class="img img-responsive"></a></li>

                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product-summary">
                                    <div class="product-title">
                                        <div class="title">{{$detay->name}}</div>
                                    </div>
                                    <div class="product-price">
                                        <div class="price"><span class="currency-symbol"></span>{{$detay->fiyat}} TL</div>
                                    </div>
                                    <div class="product-info">
                                        <ul class="list-inline">
                                            <li class="author"><span>Chef</span><span class="text">Don Joe</span></li>
                                            <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a><span>4 Reviews</span></li>
                                        </ul>
                                    </div>
                                    <div class="product-desc">
                                        <p>{{$detay->aciklama}}</p>
                                    </div>

                                    <div class="product-share"><span class="caption">Paylaşım İkonları</span>
                                        <ul class="socials list-unstyled list-inline">
                                            <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </section>
                    <section class="product-related padding-bottom-100">

                        <div class="swin-sc swin-sc-product products-02 carousel-01 woocommerce">
                            <div class="products nav-slider">
                                <div class="blog-item item swin-transition">
                                    <div class="block-img"><img src="assets\images\product\product-2a.jpg" alt="" class="img img-responsive">
                                        <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span></div>
                                        <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                    </div>
                                    <div class="block-content">
                                        <h5 class="title"><a href="javascript:void(0)">Mexico Beafsteak Potato fly</a></h5>
                                        <div class="info">
                                            <div class="author">Chef <span class="name">Don Joe</span></div>
                                            <div class="star-rating"><span style="width:80%" class="rating"><strong class="rating"></strong></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-item item swin-transition">
                                    <div class="block-img"><img src="assets\images\product\product-2b.jpg" alt="" class="img img-responsive">
                                        <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>5.0</span></div>
                                        <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                    </div>
                                    <div class="block-content">
                                        <h5 class="title"><a href="javascript:void(0)">Mexico Beafsteak Potato</a></h5>
                                        <div class="info">
                                            <div class="author">Chef <span class="name">Don Joe</span></div>
                                            <div class="star-rating"><span style="width:80%" class="rating"><strong class="rating"></strong></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-item item swin-transition">
                                    <div class="block-img"><img src="assets\images\product\product-2c.jpg" alt="" class="img img-responsive">
                                        <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>20.0</span></div>
                                        <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                    </div>
                                    <div class="block-content">
                                        <h5 class="title"><a href="javascript:void(0)">Madagasca Lopster Tasty</a></h5>
                                        <div class="info">
                                            <div class="author">Chef <span class="name">Don Joe</span></div>
                                            <div class="star-rating"><span style="width:80%" class="rating"><strong class="rating"></strong></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-item item swin-transition">
                                    <div class="block-img"><img src="assets\images\product\product-2e.jpg" alt="" class="img img-responsive">
                                        <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span></div>
                                        <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                    </div>
                                    <div class="block-content">
                                        <h5 class="title"><a href="javascript:void(0)">Jambon Salad Hot Bread</a></h5>
                                        <div class="info">
                                            <div class="author">Chef <span class="name">Don Joe</span></div>
                                            <div class="star-rating"><span style="width:80%" class="rating"><strong class="rating"></strong></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-item item swin-transition">
                                    <div class="block-img"><img src="assets\images\product\product-2f.jpg" alt="" class="img img-responsive">
                                        <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>15.0</span></div>
                                        <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                    </div>
                                    <div class="block-content">
                                        <h5 class="title"><a href="javascript:void(0)">Mexico Beafsteak Potato</a></h5>
                                        <div class="info">
                                            <div class="author">Chef <span class="name">Don Joe</span></div>
                                            <div class="star-rating"><span style="width:80%" class="rating"><strong class="rating"></strong></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

        </div>

    </div>
@endsection