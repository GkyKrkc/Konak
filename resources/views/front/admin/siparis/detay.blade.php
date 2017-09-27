@extends('front.partials.master')
@section('content')
    <style>
        .musteri{font-size: 14px; }
        .siparis_tarih{font-size: 12px; color:#761c19; font-style: italic;}
        .fatura{border: none;}
        .divider{list-style: none;}
        .state-icon {
            left: -5px;
        }


        #exTab1 .tab-content {

            background-color: #ffffff;
            padding : 5px 15px;
        }

        #exTab2 h3 {
            color : white;
            background-color: #428bca;
            padding : 5px 15px;
        }

        /* remove border radius for the tab */

        #exTab1 .nav-pills > li > a {
            border-radius: 0;
        }

        /* change border radius for the tab , apply corners on top*/

        #exTab3 .nav-pills > li > a {
            border-radius: 4px 4px 0 0 ;
        }

        #exTab3 .tab-content {
            color : white;
            background-color: #428bca;
            padding : 5px 15px;
        }








    </style>
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

            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading"><i class="fa fa-user" aria-hidden="true"></i> {{$siparisler->adi}}</div>
                <div class="panel-body">
                    <blockquote>
                        <p>{{$siparisler->adres}}</p>
                        <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>
                </div>

                <!-- List group -->
                <ul class="list-group">
                    <li class="list-group-item"><i class="fa fa-phone" aria-hidden="true"></i> {{$siparisler->telefon}}</li>
                    <li class="list-group-item"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$siparisler->adres}}</li>
                </ul>
            </div>

            <a href="{{url('#')}}" class="btn btn-danger" data-toggle="modal" data-target="#sepet{{$siparisler->id}}"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Yeni Ürün Ekle</a>


            <div class="modal fade" id="resim{{$siparisler->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"><p class="text-danger">Yeni Ürün Ekle:{{$siparisler->adi}}</p></h4>

                        </div>

                        <div class="modal-body">
                            {!! Form::open(['url' => 'SiparisEkle/'.$siparisler->id,'method'=>'POST']) !!}
                            <div class="row">
                                <div class="col-xs-12">
                                        <ul class="list-group checked-list-box">
                                            @foreach($urunler as $urun)

                                            <li class="list-group-item">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="id[]" value="{{$urun->id}}">

                                                    {{$urun->name}}
                                                </label>  </li>
                                            @endforeach
                                        </ul>
                                </div>
                            </div>
                          </div>


                        <div class="modal-footer">
                            {!! Form::submit('Ekle',['class'=>'btn btn-danger'])!!}
                            <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>

                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
            <div class="modal fade" id="sepet{{$siparisler->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"><p class="text-danger">Yeni Ürün Ekle2:{{$siparisler->adi}}</p></h4>

                        </div>

                        <div class="modal-body">
                            <div class="container">
                            <div class="row" ng-controller="SepetCtrl">
                                {!! Form::open(['url' => ['YeniUrunEkle',$siparisler->id],'method'=>'post']) !!}
                                @foreach($urunler as $row)
                                    <div class="col-sm-12">

                                    <div class="col-sm-3">

                                        {{$row->name}} X {{$row->fiyat}} TL
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="product-quanlity">

                                            <div class="product-quanlity">
                                                    <span>
                                                        <div class="input-group">
                                                        <input type="text" name="{{$row->name}}" placeholder="" value="1" class="form-control">
                                                            <a href="javascript:void(0)" class="quanlity-plus"><i class="fa fa-plus"></i></a>
                                                            <a href="javascript:void(0)" class="quanlity-minus"><i class="fa fa-minus"></i></a>
                                                        </div>
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-sm-3">
                                            <a href="{{url('ekle/'.$row->id)}}" class="btn btn-danger" data-toggle="modal" data-target="#sepet{{$siparisler->id}}"><i class="fa fa-shopping-basket" aria-hidden="true"></i>Ekle</a>
                                        </div>

                                    </div>
                                    <div class="divider"></div>
                                    <div class="divider"></div>
                                    <div class="divider"></div>
                                    @endforeach

                            </div>
                            </div>
                        </div>


                        <div class="modal-footer">
                            {!! Form::submit('Ekle',['class'=>'btn btn-danger'])!!}
                            <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>

                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>

            <div class="divider"></div>
            <div class="divider"></div>

            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading"><i class="fa fa-cutlery" aria-hidden="true"></i></i> Siparişler</div>
                  <!-- List group -->
                <ul class="list-group">
                    @foreach($siparisler->detay as $s)
                        <li class="list-group-item musteri">
                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                            {{$s->urun}} / {{$s->adet}} X {{$s->fiyat}} ={{$s->toplam}} TL

                            <span class="pull-right">

                       <a href="{{url('SiparisSil/'.$s->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" data-toggle="tooltip" title="Sil"></i></a>
                    </span>
                        </li>

                    @endforeach
                </ul>
            </div>

            <ul class="list-group">

                <li class="list-group-item fatura">
                    <span class="badge"> Kdv {{$kdv}} TL</span>

                </li>

                <li class="divider"></li>
                <li class="list-group-item fatura">
                    <span class="badge">Sipariş Toplamı {{$toplam_fiyat}} TL</span>
                </li>
            </ul>



            <div class="panel-body">
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                        {{$siparisler->durum}} <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">

                        <li><a href="#">Siparişe Alındı</a></li>
                        <li><a href="#">Yola Çıktı</a></li>
                        <li><a href="#">Teslim Edildi</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Sipariş İptal</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

            <div id="exTab1" class="container">
                <ul  class="nav nav-pills">
                    <li class="active">
                        <a  href="#1a" data-toggle="tab">Siparişler</a>
                    </li>
                    <li><a href="#2a" data-toggle="tab">Yeni Ürün Ekle</a>
                    </li>
                    <li><a href="#3a" data-toggle="tab">Siparişi Tamamla</a>
                    </li>
                    </li>
                </ul>

                <div class="tab-content clearfix">
                    <div class="tab-pane active" id="1a">
                        <h3>Content's background color is the same for the tab</h3>
                    </div>
                    <div class="tab-pane" id="2a">
                        <h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for the tab</h3>
                    </div>
                    <div class="tab-pane" id="3a">
                        <h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3>
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
@endsection