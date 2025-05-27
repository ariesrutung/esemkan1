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

    .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active,
    .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
        background-color: #3f474e;
        border-radius: 10px;
        box-shadow: none !important;
        font-weight: normal;
        color: #ecf0f6;
    }

    .sidebar-dark-primary li a:hover {
        border-radius: 10px;
    }
</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('admin.dashboard.index') }}" class="brand-link d-flex justify-content-center">
        <img src="{{ asset('themes/frontend/assets/img/apple-touch-icon.jpg') }}" alt="Logo SMK"
            class="img-fluid w-25 rounded" style="opacity: .8">
    </a>

    <div class="sidebar">
        <div class="form-inline mt-4 pb-3 mb-3">
            <div class="input-group" data-widget="sidebar-search">
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item mb-1">
                    <a href="{{ route('admin.dashboard.index') }}"
                        class="nav-link {{ request()->routeIs('admin.dashboard.index') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-bar-chart-fill"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-header text-muted">MASTER DATA</li>
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

                <li class="nav-header text-muted">MANAJEMEN KONTEN</li>
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
                    <a href="{{ route('admin.spmb.index') }}"
                        class="nav-link {{ request()->routeIs('admin.spmb.index') ? 'active' : '' }}">
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

                <li class="nav-header text-muted">PENGATURAN</li>
                <li class="nav-item mb-1">
                    <a href="{{ route('admin.pengaturan.index') }}"
                        class="nav-link {{ request()->routeIs('admin.pengaturan.index') ? 'active' : '' }}">
                        <i class="bi bi-globe-asia-australia nav-icon"></i>
                        <p>All Halaman</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>