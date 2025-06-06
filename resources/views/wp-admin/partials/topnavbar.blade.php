<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars text-dark"></i></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="bi bi-arrows-angle-expand fw-bold"></i>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ ('/') }}" target="_blank" class="nav-link">
                <i class="bi bi-globe-asia-australia fw-bold"></i>
            </a>
        </li>

        <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-link nav-link">
                    <i class="bi bi-door-closed-fill"></i>
                </button>
            </form>
        </li>
    </ul>
</nav>