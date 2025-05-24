<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="{{ ('/') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('themes/frontend/assets/img/logos/logo-smk1.png') }}" alt="">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li>
                    <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Beranda</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="{{ Request::is('profil', 'gtk', 'fasilitas') ? 'active' : '' }}">
                        <span>Tentang Kami</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>
                    <ul>
                        <li><a href="{{ url('/profil') }}"
                                class="{{ Request::is('profil') ? 'active' : '' }}">Profil</a></li>
                        <li><a href="{{ url('/gtk') }}" class="{{ Request::is('gtk') ? 'active' : '' }}">GTK</a></li>
                        <li><a href="{{ url('/fasilitas') }}"
                                class="{{ Request::is('fasilitas') ? 'active' : '' }}">Fasilitas</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('/program-keahlian') }}"
                        class="{{ Request::is('program-keahlian') ? 'active' : '' }}">
                        Program Keahlian
                    </a>
                </li>
                <li><a href="{{ url('/ppl') }}" class="{{ Request::is('ppl') ? 'active' : '' }}">PPL</a></li>
                {{-- <li class="dropdown">
                    <a href="#" class="{{ Request::is('ppl', 'bk') ? 'active' : '' }}">
                        <span>Program</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>
                    <ul>
                        <li><a href="{{ url('/ppl') }}" class="{{ Request::is('ppl') ? 'active' : '' }}">PPL</a></li>
                        <li><a href="{{ url('/bk') }}" class="{{ Request::is('bk') ? 'active' : '' }}">BK</a></li>
                    </ul>
                </li> --}}
                <li class="dropdown">
                    <a href="#" class="{{ Request::is('pengumuman', 'berita', 'event') ? 'active' : '' }}">
                        <span>Informasi</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>
                    <ul>
                        <li><a href="{{ url('/pengumuman') }}"
                                class="{{ Request::is('pengumuman') ? 'active' : '' }}">Pengumuman</a></li>
                        <li><a href="{{ url('/berita') }}"
                                class="{{ Request::is('berita') ? 'active' : '' }}">Berita</a></li>
                        <li><a href="{{ url('/event') }}"
                                class="{{ Request::is('event') ? 'active' : '' }}">Kegiatan</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('/spmb') }}" class="{{ Request::is('spmb') ? 'active' : '' }}">SPMB</a>
                </li>
                <li>
                    <a href="{{ url('/galeri') }}" class="{{ Request::is('galeri') ? 'active' : '' }}">Galeri</a>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>