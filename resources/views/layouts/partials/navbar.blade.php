<header id="header" class="fixed-top">
    <div class="container">
        <div class="logo float-left">
            <a class="navbar-brand" href="#">
                <img src="/img/logo.png">
                <a href="{{route('anasayfa')}}" class="logo-text">PaüKampüs</a>
            </a>
        </div>
        <nav class="main-nav float-right d-none d-lg-block">
            <ul>
                <li><a href="index.html"><i class="fas fa-home"></i> Anasayfa</a></li>
                <li><a href="{{route('showFaculties')}}"><i class="fas fa-paperclip"></i> Ders Notları</a></li>
                <li><a href="kitapsat.html"><i class="fas fa-book"></i> 2.El Kitaplar</a></li>
                <li><a href="iletisim.html"><i class="fas fa-envelope"></i> İletişim</a></li>
                @auth()


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i> {{Auth::user()->name .' '.Auth::user()->surname }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="">Profil</a>
                            <a class="dropdown-item" href="#">Hesap</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('oturumukapat-form').submit()">Çıkış Yap</a>
                            <form id="oturumukapat-form" action="{{route('logout')}}" method="post" style="display:none;">
                                {{csrf_field()}}
                            </form>
                        </div>
                    </li>
                @endauth

                @guest()

                    <li><a href="uye-girisi.html"><i class="fas fa-user"></i> Üye Girişi</a></li>
                @endguest

            </ul>
        </nav>
    </div>
</header>
