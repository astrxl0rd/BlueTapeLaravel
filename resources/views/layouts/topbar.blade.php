<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="https://google.com"><img src="img/logo.png" width="50"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <!-- Ambil nama usernya -->
            <!-- <li class="nav-item active">
                <a class="nav-link"> {{ Auth::user()->name }} </a>
            </li> -->

            <li class="nav-item active">
                <a class="nav-link" href="#" onclick="event.preventDefault(); 
                document.getElementById('logout-form').submit();">Cetak Transkrip</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="#" onclick="event.preventDefault(); 
                document.getElementById('logout-form').submit();">Management Cetak Transkrip</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="#">Perubahan Kuliah</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="#">Management Perubahan Kuliah</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('entriJadwalDosen') }}">Entri Jadwal Dosen</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('lihatJadwalDosen') }}">Lihat Jadwal Dosen</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <!-- Untuk logout -->
                <a class="nav-link" href="{{ route('logout') }}"onclick="event.preventDefault(); 
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</nav>

<main class="py-4">
    @yield('content')
</main>