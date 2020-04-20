@extends('layouts.head')
@extends('layouts.topbar')


@section('navBar')
        <ul class="navbar-nav mr-auto">
            
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('transkripRequest') }}" >Cetak Transkrip</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('transkripManage') }}">Manajemen Cetak Transkrip</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('perubahanKuliahRequest') }}">Perubahan Kuliah</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('perubahanKuliahManage') }}">Manajemen Perubahan Kuliah</a>
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
            <div class="card">
                <div class="card-header">
                    Permohonan Perubahan Kuliah
                </div>
                <br>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Status</th>
                            <th scope="col">Tanggal Permohonan</th>
                            <th scope="col">Kode MK</th>
                            <th scope="col">Perubahan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                       <!-- 1 Lihat di Perubahan Kuliah dan Manajemennya.txt-->
            </div>
        </div>
@endsection
