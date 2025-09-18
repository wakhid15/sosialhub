<style> .navbar { background-image: linear-gradient(to right, rgba(255, 0, 0, 0), rgb(26, 202, 179)); } </style>

<nav class="navbar fixed-top navbar-dark navbar-expand-lg" style="background-color: #fff;">
    <div class="container-fluid px-4">
        <img src="{{ asset('storage/images/logo-rem.webp') }}" alt="Logo" width="200" height="50"/>
        <a class="navbar-brand mb-0 h1" href="{{ route('dashboard') }}"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'dashboard' ? 'active' : '' }}" href="{{ route('dashboard') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'raks' ? 'active' : '' }}" href="{{ url('/dashboard/raks') }}">Data Kategori Pasien</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'books' ? 'active' : '' }}" href="{{ url('/dashboard/books') }}">Data Pasien</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'members' ? 'active' : '' }}" href="{{ url('/dashboard/members') }}">Data Keluarga Pasien</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'users' ? 'active' : '' }}" href="{{ url('/dashboard/users') }}">Data Petugas</a>
                </li>
                <li class="nav-item"> <a class="nav-link {{ $active === 'transactions' ? 'active' : '' }}" href="{{ url('/dashboard/transactions') }}">Data Kehilangan</a> </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'reports' ? 'active' : '' }}" href="{{ url('/dashboard/reports') }}">Unduh Laporan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'profiles' ? 'active' : '' }}" href="{{ url('/dashboard/profiles/' . Auth::id()) }}">Profilku</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
