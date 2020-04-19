@extends('layouts.head')
@extends('layouts.topbar')


@section('navBar')
        <ul class="navbar-nav mr-auto">
            
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('transkripRequest') }}" >Cetak Transkrip</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('transkripManage') }}">Management Cetak Transkrip</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('perubahanKuliahManage') }}">Perubahan Kuliah</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('perubahanKuliahRequest') }}">Management Perubahan Kuliah</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('entriJadwalDosen') }}">Entri Jadwal Dosen</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('lihatJadwalDosen') }}">Lihat Jadwal Dosen</a>
            </li>
        </ul>
@endsection

@section('content')

<div class="container">
            <div class="card card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-tabs" data-tabs id="tab_jadwal">
                            <!-- 1  Lihat di Jadwal dosen.txt (Mulai dari Line 129-->
                        </ul>

                        <div class="tabs-content" data-tabs-content="tab_jadwal">
                            <!-- 2 Ga akan muncul apa apa soalnya ga ada data-->
                        </div>
                    </div>

                    <!-- 3 -->
                </div>
    </body>
            </div>
        </div>

@endsection