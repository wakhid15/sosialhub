<style>
    .navbar {
        background-image: linear-gradient(to right, rgba(255, 0, 0, 0), rgb(26, 202, 179));
    }
</style>

<nav class="navbar fixed-top navbar-dark navbar-expand-lg" style="background-color: #fdfdfd;">
    <div class="container-fluid px-4">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img src="{{ asset('storage/images/logo-rem.webp') }}" alt="Logo" width="200" height="50"/>
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'index' ? 'active' : '' }}" href="{{ route('home') }}">
                        Beranda
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'barcode' ? 'active' : '' }}" href="{{ route('barcode') }}">
                        Data Pasien
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'about' ? 'active' : '' }}" href="{{ route('about') }}">
                        Tentang Kami
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'helper' ? 'active' : '' }}" href="{{ route('helper') }}">
                        Bantuan
                    </a>
                </li>
            </ul>

            <!-- Login -->
            <div class="d-flex">
                <a class="btn btn-outline-dark" href="{{ route('login') }}">
                    Masuk
                </a>
            </div>
        </div>
    </div>
</nav>
