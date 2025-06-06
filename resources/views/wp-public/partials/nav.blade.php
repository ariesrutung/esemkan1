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
                        class="{{ Request::is('program-keahlian') || Request::is('program-keahlian/*') ? 'active' : '' }}">
                        Program Keahlian
                    </a>
                </li>
                <li><a href="{{ url('/pk_lapangan') }}" class="{{ Request::is('pk_lapangan') ? 'active' : '' }}">PKL</a>
                </li>
                <li><a href="{{ url('/informasi') }}"
                        class="{{ Request::is('informasi') || Request::is('informasi/*') ? 'active' : '' }}">Informasi</a>
                </li>
                <li>
                    <a href="{{ url('/spmb') }}" class="{{ Request::is('spmb') ? 'active' : '' }}">SPMB</a>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list text-dark"></i>
        </nav>

    </div>
</header>