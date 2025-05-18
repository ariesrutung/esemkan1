<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                {{-- <div class="sb-sidenav-menu-heading">Core</div> --}}
                <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                    href="{{ ('/admin-dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Layouts
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="layout-static.html">Static Navigation</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                    aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Pages
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Authentication
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="login.html">Login</a>
                                <a class="nav-link" href="register.html">Register</a>
                                <a class="nav-link" href="password.html">Forgot Password</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#pagesCollapseError" aria-expanded="false"
                            aria-controls="pagesCollapseError">
                            Error
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="401.html">401 Page</a>
                                <a class="nav-link" href="404.html">404 Page</a>
                                <a class="nav-link" href="500.html">500 Page</a>
                            </nav>
                        </div>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">Pages</div>
                <a class="nav-link {{ request()->routeIs('manage-beranda') ? 'active' : '' }}"
                    href="{{ route('manage-beranda') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Beranda
                </a>
                <a class="nav-link {{ request()->routeIs('manage-profil') ? 'active' : '' }}"
                    href="{{ route('manage-profil') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Profil
                </a>
                <a class="nav-link {{ request()->routeIs('manage-publikasi') ? 'active' : '' }}"
                    href="{{ route('manage-publikasi') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Publikasi
                </a>
                <a class="nav-link {{ request()->routeIs('manage-fasilitas') ? 'active' : '' }}"
                    href="{{ route('manage-fasilitas') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Fasilitas
                </a>
                <a class="nav-link {{ request()->routeIs('manage-gtk') ? 'active' : '' }}"
                    href="{{ route('manage-gtk') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    GTK
                </a>
                <a class="nav-link {{ request()->routeIs('manage-siswa') ? 'active' : '' }}"
                    href="{{ route('manage-siswa') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Siswa
                </a>
                <a class="nav-link {{ request()->routeIs('manage-galeri') ? 'active' : '' }}"
                    href="{{ route('manage-galeri') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Galeri
                </a>
                <a class="nav-link {{ request()->routeIs('manage-pengumuman') ? 'active' : '' }}"
                    href="{{ route('manage-pengumuman') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Pengumuman
                </a>
                <a class="nav-link {{ request()->routeIs('manage-ppdb') ? 'active' : '' }}"
                    href="{{ route('manage-ppdb') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    PPDB
                </a>

                <div class="sb-sidenav-menu-heading">Pengaturan</div>

                {{-- <a class="nav-link" href="{{ route('pengelola-website') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Pengelola Website
                </a>
                <a class="nav-link" href="{{ route('role') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Role
                </a> --}}
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{ Auth::user()->name }}
        </div>
    </nav>
</div>