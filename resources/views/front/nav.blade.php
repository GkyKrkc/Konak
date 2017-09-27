<nav id="main-nav-offcanvas" class="main-nav-wrapper">
        <div class="close-offcanvas-wrapper"><span class="close-offcanvas">x</span></div>
        <div class="main-nav">
            <ul id="main-nav" class="nav nav-pills">
                <li class="current-menu-item"><a href="/">Anasayfa</a></li>
                <li class="dropdown"><a href="menu" class="dropdown-toggle">KATEGORİLER</a>
                    <ul class="dropdown-menu">
                        @foreach($kategoriler as $kat)
                        <li><a href="{{url('kat/'.$kat->id)}}">{{$kat->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{url('siparis')}}">SİPARİŞ</a></li>
                <li class="dropdown"><a href="menu-grid-1.html">GALERİ</a>
                    <ul class="dropdown-menu">
                        <li><a href="menu-classic.html">Menu Classic</a></li>
                        <li><a href="menu-grid-1.html">Menu Grid 01</a></li>
                        <li><a href="menu-grid-2.html">Menu Grid 02</a></li>
                        <li><a href="menu-grid-3.html">Menu Grid 03</a></li>
                        <li><a href="product-single.html">Product Detail</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">ORGANİZASTON</a>
                    <ul class="dropdown-menu">
                        <li><a href="blogs.html">Yemek</a></li>
                        <li><a href="blog-single.html">Toplantı</a></li>
                        <li><a href="page-404.html">Kına-Nişan</a></li>
                        <li><a href="page-404.html">Doğumgünü</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">İLETİŞİM</a></li>
            </ul>
        </div>
    </nav>
