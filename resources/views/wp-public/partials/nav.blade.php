<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{ ('/') }}"><img
                src="{{ asset('themes/frontend/assets/img/logos/logo-smk1.png')}}" alt="..." /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav fw-bold text-dark ms-auto py-4 py-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active text-primary' : '' }}"
                        href="{{ url('/') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('profil') ? 'active text-primary' : '' }}"
                        href="{{ url('/profil') }}">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('publikasi') ? 'active text-primary' : '' }}"
                        href="{{ url('/publikasi') }}">Publikasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('fasilitas') ? 'active text-primary' : '' }}"
                        href="{{ url('/fasilitas') }}">Fasilitas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('gtk') ? 'active text-primary' : '' }}"
                        href="{{ url('/gtk') }}">GTK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('siswa') ? 'active text-primary' : '' }}"
                        href="{{ url('/siswa') }}">Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('galeri') ? 'active text-primary' : '' }}"
                        href="{{ url('/galeri') }}">Galeri</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link btn btn-info text-normal" href="{{ url('/dashboard') }}">Panel Admin</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>