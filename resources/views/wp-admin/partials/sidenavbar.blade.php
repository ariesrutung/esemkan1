<style>
    [class*="sidebar-light-"] .nav-treeview>.nav-item>.nav-link.active,
    [class*="sidebar-light-"] .nav-treeview>.nav-item>.nav-link.active:hover {
        background-color: transparent !important;
        color: #212529;
        font-weight: bold;
    }

    .elevation-4 {
        box-shadow: none !important;
    }

    .content-wrapper {
        background-color: transparent !important;
    }

    [class*="sidebar-light"] .brand-link,
    .main-header {
        border: transparent !important;
    }
</style>
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <a href="{{ url('/dashboard') }}" class="brand-link d-flex justify-content-center">
        <img src="{{ asset('themes/frontend/assets/img/logos/logo-smk1.png') }}" alt="Logo SMK" class="img-fluid w-75"
            style="opacity: .8">
    </a>

    <div class="sidebar">
        <div class="form-inline mt-5 pb-3 mb-3">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item mb-1">
                    <a href="{{ url('/dashboard') }}" class="nav-link">
                        <i class="nav-icon bi bi-speedometer2"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item mb-1">
                    <a href="{{ route('admin.identity.index') }}"
                        class="nav-link {{ request()->routeIs('admin.identity.index') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-person-badge-fill"></i>
                        <p>Identitas Sekolah</p>
                    </a>
                </li>

                <li class="nav-item mb-1">
                    <a href="{{ route('admin.matapelajaran.index') }}"
                        class="nav-link {{ request()->routeIs('admin.matapelajaran.index') ? 'active' : '' }}">
                        <i class="bi bi-bar-chart-fill nav-icon"></i>
                        <p>Mata Pelajaran</p>
                    </a>
                </li>

                <li class="nav-item mb-1">
                    <a href="{{ route('admin.siswa_siswi.index') }}"
                        class="nav-link {{ request()->routeIs('admin.siswa_siswi.index') ? 'active' : '' }}">
                        <i class="bi bi-person-lines-fill nav-icon"></i>
                        <p>Data Siswa</p>
                    </a>
                </li>

                <li class="nav-item mb-1">
                    <a href="{{ route('admin.pengaturan.index') }}"
                        class="nav-link {{ request()->routeIs('admin.pengaturan.index') ? 'active' : '' }}">
                        <i class="bi bi-globe-asia-australia nav-icon"></i>
                        <p>Pengaturan Halaman</p>
                    </a>
                </li>

                {{-- @php
                $collapsePagesRoutes = [
                'admin.home-settings.index',
                'admin.profil-settings.index',
                'admin.gtk-settings.index',
                'admin.fasilitas-settings.index',
                'admin.keahlian-settings.index',
                'admin.pkl-settings.index',
                'admin.informasi-settings.index',
                ];
                @endphp

                <li class="nav-item {{ request()->routeIs(...$collapsePagesRoutes) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs(...$collapsePagesRoutes) ? 'active' : '' }}">
                        <i class="bi bi-globe-asia-australia nav-icon"></i>
                        <p>
                            Pengaturan Halaman
                            <i
                                class="fas {{ request()->routeIs(...$collapsePagesRoutes) ? 'bi bi-caret-up-fill' : 'bi bi-caret-right-fill' }} right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ml-3">
                        <li class="nav-item mb-1">
                            <a href="{{ route('admin.home-settings.index') }}"
                                class="nav-link {{ request()->routeIs('admin.home-settings.index') ? 'active' : '' }}">
                                -
                                <p>Beranda</p>
                            </a>
                        </li>
                        <li class="nav-item mb-1">
                            <a href="{{ route('admin.profil-settings.index') }}"
                                class="nav-link {{ request()->routeIs('admin.profil-settings.index') ? 'active' : '' }}">
                                -
                                <p>Profil</p>
                            </a>
                        </li>
                        <li class="nav-item mb-1">
                            <a href="{{ route('admin.pkl-settings.index') }}"
                                class="nav-link {{ request()->routeIs('admin.pkl-settings.index') ? 'active' : '' }}">
                                -
                                <p>PKL</p>
                            </a>
                        </li>
                        <li class="nav-item mb-1">
                            <a href="{{ route('admin.gtk-settings.index') }}"
                                class="nav-link {{ request()->routeIs('admin.gtk-settings.index') ? 'active' : '' }}">
                                -
                                <p>GTK</p>
                            </a>
                        </li>
                        <li class="nav-item mb-1">
                            <a href="{{ route('admin.fasilitas-settings.index') }}"
                                class="nav-link {{ request()->routeIs('admin.fasilitas-settings.index') ? 'active' : '' }}">
                                -
                                <p>Fasilitas</p>
                            </a>
                        </li>
                        <li class="nav-item mb-1">
                            <a href="{{ route('admin.keahlian-settings.index') }}"
                                class="nav-link {{ request()->routeIs('admin.keahlian-settings.index') ? 'active' : '' }}">
                                -
                                <p>Keahlian</p>
                            </a>
                        </li>
                        <li class="nav-item mb-1">
                            <a href="{{ route('admin.informasi-settings.index') }}"
                                class="nav-link {{ request()->routeIs('admin.informasi-settings.index') ? 'active' : '' }}">
                                -
                                <p>Informasi</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}

                <li class="nav-item mb-1">
                    <a href="{{ route('admin.galeri_sekolah.index') }}"
                        class="nav-link {{ request()->routeIs('admin.galeri_sekolah.index') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-images"></i>
                        <p>Galeri</p>
                    </a>
                </li>
                <li class="nav-item mb-1">
                    <a href="{{ route('admin.fasilitas_sekolah.index') }}"
                        class="nav-link {{ request()->routeIs('admin.fasilitas_sekolah.index') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-signpost-2-fill"></i>
                        <p>Fasilitas</p>
                    </a>
                </li>
                <li class="nav-item mb-1">
                    <a href="{{ route('admin.pen_informasi.index') }}"
                        class="nav-link {{ request()->routeIs('admin.pen_informasi.index') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-megaphone-fill"></i>
                        <p>Informasi</p>
                    </a>
                </li>
                <li class="nav-item mb-1">
                    <a href="{{ route('admin.gt_kependidikan.index') }}"
                        class="nav-link {{ request()->routeIs('admin.gt_kependidikan.index') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-mortarboard-fill"></i>
                        <p>GTK</p>
                    </a>
                </li>
                <li class="nav-item mb-1">
                    <a href="{{ route('admin.prog_keahlian.index') }}"
                        class="nav-link {{ request()->routeIs('admin.prog_keahlian.index') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-diagram-3-fill"></i>
                        <p>Program Keahlian</p>
                    </a>
                </li>
                <li class="nav-item mb-1">
                    <a href="{{ route('admin.spmb-settings.index') }}"
                        class="nav-link {{ request()->routeIs('admin.spmb-settings.index') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-person-vcard"></i>
                        <p>SPMB</p>
                    </a>
                </li>
                <li class="nav-item mb-1">
                    <a href="{{ route('admin.pk_lapangan.index') }}"
                        class="nav-link {{ request()->routeIs('admin.pk_lapangan.index') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-person-workspace"></i>
                        <p>PKL</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>