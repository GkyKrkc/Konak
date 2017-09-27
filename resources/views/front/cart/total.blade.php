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
                <h3>Sipariş Detayı</h3>

                <table class="table table-striped table-hover table-bordered">
                    <tbody>
                    <tr>
                        <th>Sipariş Adı</th>
                        <th>Adet</th>
                        <th>Fiyat</th>
                        <th>Ürün Toplam Fiyatı</th>
                    </tr>
                    @foreach($cartitems as $cartitem)
                        <tr>
                            <td><a href="{{url('detay/'.$cartitem->id)}}" >{{$cartitem->name}}</a></td>

                            <td>

                                <div class="product-quanlity">
                                    {!! Form::open(['url' => ['UrunGuncelle',$cartitem->rowId],'method'=>'post']) !!}
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input type="text" name="qty" placeholder="" value="{{$cartitem->qty}}" class="form-control"><a href="javascript:void(0)" class="quanlity-plus"><i class="fa fa-plus"></i></a><a href="javascript:void(0)" class="quanlity-minus"><i class="fa fa-minus"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        {!! Form::submit('Güncelle!',['class'=>'btn btn-danger btn-sm'])!!}
                                        {!! Form::close() !!}
                                    </div>
                                    <div class="col-md-3">
                                        {!! Form::open(['url' => ['UrunSil',$cartitem->rowId],'method'=>'post']) !!}

                                        {!! Form::submit('Sil!',['class'=>'btn btn-danger btn-sm'])!!}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </td>
                            <td>{{$cartitem->price}}</td>
                            <td>{{$cartitem->subtotal}}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <th colspan="3"><span class="pull-right">Kdv Hariç Toplamı</span></th>
                        <th>{{Cart::subtotal()}}</th>
                    </tr>
                    <tr>
                        <th colspan="3"><span class="pull-right">Kdv %18</span></th>
                        <th>{{Cart::tax()}}</th>
                    </tr>
                    <tr>
                        <th colspan="3"><span class="pull-right">Toplam Fiyat</span></th>
                        <th>{{Cart::total()}}</th>
                    </tr>
                    <tr>
                        <td>
                            <a href="{{url('siparis')}}" class="btn btn-success">Siparişe Devam Et !</a>
                            <a href="{{url('TumunuSil')}}" class="btn btn-danger">Tümünü Sil!</a>
                        </td>

                        <td colspan="3"><a href="#" class="pull-right btn btn-danger">Ödeme Sayfası</a></td>
                    </tr>
                    </tbody>
                </table>


            </div>

        </div>

    </div>
@endsection