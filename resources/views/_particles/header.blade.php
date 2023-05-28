<header class="sticky">
    <div class="container">
        <div class="logo"> <a href="{{ URL::to('/') }}"><img src="{{ URL::asset('upload/' . getcong('site_logo')) }}" alt=""></a> </div>
        <nav class="animenu">
            <button class="animenu_toggle">
                <span class="animenu_toggle_bar"></span>
                <span class="animenu_toggle_bar"></span>
                <span class="animenu_toggle_bar"></span>
            </button>
            <ul class="animenu_nav">
                <li> <a href="{{ URL::to('/') }}">Beranda</a></li>
                <li><a href="{{ URL::to('restaurants') }}">Menu Makanan</a></li>

                @if (Auth::check() and Auth::user()->usertype == 'User')
                <li> <a href="javascript:void(0);">Akun Saya<i class="icon-down-open-mini"></i></a>
                    <ul class="animenu_nav_child">
                        <li><a href="{{ URL::to('profile') }}">Pengaturan Akun</a></li>
                        <li><a href="{{ URL::to('change_pass') }}">Ganti Kata Sandi</a></li>
                        <li><a href="{{ URL::to('myorder') }}">Pesanan Saya</a></li>
                        <li><a href="{{ URL::to('logout') }}">Keluar</a></li>
                    </ul>
                </li>
                @elseif(Auth::check() and Auth::user()->usertype == 'Owner')
                <li> <a href="javascript:void(0);">Akun Saya<i class="icon-down-open-mini"></i></a>
                    <ul class="animenu_nav_child">
                        <li><a href="{{ URL::to('admin/dashboard') }}">Halaman Admin</a></li>
                        <li><a href="{{ URL::to('logout') }}">Keluar</a></li>
                    </ul>
                </li>
                @elseif(Auth::check() and Auth::user()->usertype == 'Admin')
                <li> <a href="javascript:void(0);">Akun Saya<i class="icon-down-open-mini"></i></a>
                    <ul class="animenu_nav_child">
                        <li><a href="{{ URL::to('admin/dashboard') }}">Halaman Admin</a></li>
                        <li><a href="{{ URL::to('logout') }}">Keluar</a></li>
                    </ul>
                </li>
                @else
                <li><a href="{{ URL::to('about') }}">Tentang Kami</a></li>
                <li><a href="{{ URL::to('contact') }}">Kontak</a></li>
                @endif
                <li><a href="{{ URL::to('login') }}">Masuk</a></li>
                <li><a href="{{ URL::to('register') }}">Daftar</a></li>
                
            </ul>


        </nav>
    </div>
</header>