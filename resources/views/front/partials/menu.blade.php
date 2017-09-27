
<nav class="navbar navbar-inverse navbar-fixed-top " role="navigation">
    <div class="container ">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header ">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="{{url('/')}}">{{ config("ayarlar.baslik") }}</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/">Anasayfa</a></li>
                <li>
                @if(Auth::guest())
                    <li><a href="{{ route('login') }}">Giriş Yap !</a></li>
                    <li><a href="{{ route('register') }}">Yeni Üyelik</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->name }}<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            @if(Auth::user()->yetkisi_var_mi("admin"))
                            <li><a href="{{url('/Ayarlar')}}"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;Ayarlar</a></li>
                            <li><a href="{{url('/Uyeler')}}"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Kullanıcı Ayarları</a></li>
                            <li><a href="{{url('/Hastaneler')}}"><i class="fa fa-h-square" aria-hidden="true"></i>&nbsp;Hastaneler</a></li>
                            <li><a href="{{url('/Hastaneler/create')}}"><i class="fa fa-h-square" aria-hidden="true"></i>&nbsp;Yeni Hastane Ekle</a></li>
                            <li><a href="{{url('/Cevaplar/create')}}"><i class="fa fa-male" aria-hidden="true"></i>&nbsp;Hastane Durum Ekle</a></li>

                            <li class="divider"></li>
                            @endif

                            @if(Auth::user()->yetkisi_var_mi("doktor"))

                            <li><a href="{{url('/Askom')}}"><i class="fa fa-users" aria-hidden="true"></i> Nöbet Defteri</a></li>
                            <li><a href="{{url('/ODDF')}}"><i class="fa fa-users" aria-hidden="true"></i> Olağan Dışı Durum Formu</a></li>

                            <li class="divider"></li>

                            @endif
                            @if(Auth::user()->yetkisi_var_mi("supervizor"))
                             <li><a href="blog-post.html"><i class="fa fa-user-md" aria-hidden="true"></i> Ambulans Değişikliği</a></li>
                             <li class="divider"></li>

                            @endif
                            @if(Auth::user()->yetkisi_var_mi("koordinasyon"))

                                    <li><a href="{{url('HastaEkle')}}"><i class="fa fa-male" aria-hidden="true"></i>  Yeni Hasta Kaydı</a></li>
                                    <li><a href="{{url('Sevkler')}}"><i class="fa fa-users" aria-hidden="true"></i> Devam Eden Sevkler</a></li>
                                    <li><a href="{{url('/Sonlananlar')}}"><i class="fa fa-users" aria-hidden="true"></i> Sonlanmış Sevkler</a></li>

                                    <li><a href="{{url('/Ara')}}"><i class="fa fa-search" aria-hidden="true"></i> Arama</a></li>

                                    <li><a href="{{url('/Cevaplar')}}"><i class="fa fa-line-chart" aria-hidden="true"></i> Raporlar</a></li>
                                    <li class="divider"></li>

                            @endif




                            <li><a href="blog-post.html"><i class="fa fa-user-md" aria-hidden="true"></i> Adli Tabip Nöbet Listesi</a></li>
                            <li><a href="blog-post.html"><i class="fa fa-map-marker" aria-hidden="true"></i> Ekip Ve Bölgeler</a></li>
                            <li><a href="blog-post.html"><i class="fa fa-file-text" aria-hidden="true"></i> Form ve Dökümanlar</a></li>



                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out" aria-hidden="true"></i> Çıkış Yap
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>


                        </ul>
                    </li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>