@extends('front.partials.master')
@section('content')

    <style>
        .product-quanlity {
            margin-bottom: 0px; }
        .product-quanlity .input-group {
            width: 50px;
            margin-right: 55px;
            position: relative;
            float: left; }
        .product-quanlity .input-group .form-control {
            height: 40px;
            text-align: center; }
        .product-quanlity .input-group .quanlity-plus, .product-quanlity .input-group .quanlity-minus {
            position: absolute;
            line-height: 16px;
            right: -30px;
            width: 18px;
            height: 18px;
            background-color: #ededed;
            text-align: center; }
        .product-quanlity .input-group .quanlity-plus i, .product-quanlity .input-group .quanlity-minus i {
            color: #616f7d;
            font-size: 9px; }
        .product-quanlity .input-group .quanlity-plus {
            top: 0; }
        .product-quanlity .input-group .quanlity-minus {
            bottom: 0;
        }
        .ft-fixed-area .reservation-box2 {
            color: #fff;
            background-color: #e85c2b;
            background-image: url({{asset('assets/images/background/ft-res-bgr.jpg')}});
            background-size: cover;
            position: relative;
            overflow: hidden;
            margin-top:45px;
            padding: 0px;
            border: none;
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
                <div class="divider"></div>
                <div class="divider"></div>
                <div class="divider"></div>

                <div class="container">

                    <div class="row">
                        <div class="col-md-12">
                            <h3>Sipariş Fişiniz</h3>
@if(Cart::content()->count())
                                <table class="table table-striped table-hover table-bordered">
                                    <tbody>
                                    <tr>
                                        <th>Ürün</th>
                                        <th>Adet</th>
                                        <th>Toplam</th>
                                    </tr>
                                    @foreach(Cart::content() as $row)
                                        <tr>
                                            <td><a href="{{url('detay/'.$row->id)}}" >{{$row->name}} X {{$row->price}} TL</a></td>

                                            <td>

                                                <div class="product-quanlity">
                                                    <span>

                                                    {!! Form::open(['url' => ['UrunGuncelle',$row->rowId],'method'=>'post']) !!}

                                                    <div class="input-group">
                                                        <input type="text" name="qty" placeholder="" value="{{$row->qty}}" class="form-control"><a href="javascript:void(0)" class="quanlity-plus"><i class="fa fa-plus"></i></a><a href="javascript:void(0)" class="quanlity-minus"><i class="fa fa-minus"></i></a>
                                                    </div>


                                                        {!! Form::submit('Güncelle',['class'=>'btn btn-danger btn-xs'])!!}
                                                        {!! Form::close() !!}
                                                        {!! Form::open(['url' => ['UrunSil',$row->rowId],'method'=>'post']) !!}

                                                        {!! Form::submit('Sil',['class'=>'btn btn-danger btn-xs'])!!}
                                                        {!! Form::close() !!}

                                                    </span>
                                                </div>
                                            </td>

                                            <td>{{$row->subtotal}}</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <th colspan="2"><span class="pull-right">Kdv Hariç Toplamı</span></th>
                                        <th>{{Cart::subtotal()}}</th>
                                    </tr>
                                    <tr>
                                        <th colspan="2"><span class="pull-right">Kdv %8</span></th>
                                        <th>{{Cart::tax()}}</th>
                                    </tr>
                                    <tr>
                                        <th colspan="2"><span class="pull-right">Toplam Fiyat</span></th>
                                        <th>{{Cart::total()}}</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="{{url('siparis')}}" class="btn btn-sm btn-success">Siparişe Devam Et !</a>
                                        </td>

                                        <td colspan="2">

                                            <a href="{{url('TumunuSil')}}" class="pull-left btn btn-danger btn-sm">Sil!</a>

                                            <a href="#" class="pull-right btn-sm btn-danger" data-toggle="modal" data-target="#resim{{$row->id}}">Ödeme Sayfası</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="modal fade" id="resim{{$row->id}}" tabindex="-5" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog">

                                        <div class="modal-body">
                                            <div class="col-md-12">
                                                {!! Form::open(['url' => ['SiparisVer'],'method'=>'post']) !!}
                                                <div class="ft-fixed-area">
                                                    <div class="reservation-box2">
                                                        <div class="reservation-wrap">
                                                            <h3 class="res-title">Sipariş Fişiniz</h3>
                                                            <div class="res-date-time">

                                                                @foreach(Cart::content() as $c)
                                                                    <div class="res-date-time-item">
                                                                        <div class="res-date">
                                                                            <div class="res-date-item">
                                                                                <div class="res-date-text">
                                                                                    <p>{{$c->name}} X {{$c->qty}}</p>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="res-time">
                                                                            <div class="res-time-item">
                                                                                <p>{{$c->subtotal}} TL</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                @endforeach

                                                                <div class="res-date-time-item">
                                                                    <div class="res-date">
                                                                        <div class="res-date-item">
                                                                            <div class="res-date-text">
                                                                                <p>KDV %8 </p>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="res-time">
                                                                        <div class="res-time-item">
                                                                            <p>{{Cart::tax()}} TL</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="res-date-time-item">
                                                                    <div class="res-date">
                                                                        <div class="res-date-item">
                                                                            <div class="res-date-text">
                                                                                <p>Toplam Fiyat</p>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="res-time">
                                                                        <div class="res-time-text">
                                                                            <p>{{Cart::total()}} TL</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </div>
                                                            <div class="divider"></div>
                                                            <div class="divider"></div>

                                                            {!! Form::bsText('name','Adınız Soyadınız') !!}
                                                            {!! Form::hidden('sepet',Cart::content()) !!}
                                                            {!! Form::bsText('gsm','İletişim Numaranız') !!}
                                                            {!! Form::bsMetin('adres','Lütfen Siparişinizi Hızlı Ulaştırabilmemiz için Detaylı Adres Bilgilerinizi Giriniz') !!}
                                                            {!! Form::submit('Siparişi Tamamla!',['class'=>'btn btn-success btn-sm btn-block'])!!}

                                                            <h3 class="res-title">Afiyet Olsun !</h3>
                                                            <p class="res-number">0(344)2157050</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>

                                        </div>

                                    </div>
                                </div>
@else
                            <p>Şuan Hiç Bir Sipariş Fişiniz Bulunmamaktadır Eklemek İçin Lütfen <a href="{{url('siparis')}}">Tıklayın !</a> </p>
    @endif
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="divider"></div>
                <div class="divider"></div>
                <div class="divider"></div>
                <div class="divider"></div>
                <div class="divider"></div>



            </div>

        </div>
    </div>
@endsection