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
                <section class="product-sesction-menu padding-bottom-100 padding-top-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                    @foreach($urunler as $urun)
                                <div class="col-sm-3">
                                    <article class="col-item">
                                        <div class="photo">
                                            <a href="#"> <img src="{{$urun->img}}" class="img-responsive" alt="Product Image" /> </a>
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="price-details col-md-6">
                                                    <p class="details">
                                                        {{$urun->detay}}
                                                    </p>
                                                    <h1>Ürün Fiyatı</h1>
                                                    <span class="price-new">{{$urun->fiyat}}TL</span>
                                                </div>
                                            </div>
                                            <div class="separator clear-left">
                                                <p class="btn-add">
                                                    <i class="fa fa-shopping-cart"></i><a href="{{url('ekle/'.$urun->id)}}" class="hidden-sm">Sipariş Ekle</a>
                                                </p>
                                                <p class="btn-details">
                                                    <a href="{{url('urunekle')}}/{{$urun->id}}"  data-placement="top" title="Add to wish list"><i class="fa fa-heart"></i></a>
                                                    <a href="#" class="hidden-sm" data-toggle="tooltip" data-placement="top" title="Compare"><i class="fa fa-exchange"></i></a>
                                                </p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </article>
                                </div>
                    @endforeach


                            </div>
                        </div>
                    </div>
                </section>


            </div>

        </div>

    </div>
@endsection