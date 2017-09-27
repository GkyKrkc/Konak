@extends('front.partials.master')
@section('content')
    <style>
        .musteri{font-size: 14px; }
        .siparis_tarih{font-size: 12px; color:#761c19; font-style: italic;}
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
            <h3><i class="fa fa-cutlery" aria-hidden="true"></i> Siparişler</h3>
            <ul class="list-group">
                @foreach($siparisler as $siparis)
                <li class="list-group-item musteri">
                   <a href="{{url('siparis_detay/'.$siparis->id)}}"> {{$siparis->adi}} {{$siparis->created_at->diffForHumans()}}</a>
                    <span class="pull-right">
                                        <a href="{{url('urunduzenle/'.$siparis->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-check" data-toggle="tooltip" title="Sil"></i></a>

                                        <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#resim{{$siparis->id}}"><i class="fa fa-picture-o" aria-hidden="true" data-toggle="tooltip" title="Resim Ekle"></i> </a>
                                        <a href="{{route('urunler.edit',$siparis->id)}}" class="btn btn-success btn-xs"><i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Sil"></i></a>
                                        <a href="{{url('urunsil/'.$siparis->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" data-toggle="tooltip" title="Sil"></i></a>
                                    </span>

                </li>

                    <!-- Modal Belge-->
                    <div class="modal fade" id="resim{{$siparis->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel"><p class="text-danger">Konak:{{$siparis->name}}</p></h4>
                                </div>
                                <div class="modal-body">


                                    <div class="span7 offset1">


                                        {!! Form::open(array('url'=>'resim_ekle/'.$siparis->id,'method'=>'POST', 'files'=>true)) !!}
                                        <div class="control-group">
                                            <div class="controls">
                                                {!! Form::File('resim') !!}

                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                                    {!! Form::submit('Yükle !',['class'=>'btn btn-danger'])!!}
                                </div>

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </ul>

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