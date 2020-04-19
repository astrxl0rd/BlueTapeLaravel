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
                <a class="nav-link" href="{{ route('perubahanKuliahRequest') }}">Perubahan Kuliah</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('perubahanKuliahManage') }}">Management Perubahan Kuliah</a>
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
                        Permintaan Transkrip
                    </div>
                    <div class="card-body">
                        <form method="GET" action="/TranskripManage">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Cari NPM:</span>
                                </div>

                                <input name="npm" class="form-control" type="text" placeholder="2013730013" maxlength="10" minlength="10"<?= $npmQuery ??''=== NULL ?>/>
                                <div class="input-group-append">
                                    <input class="btn btn-primary" type="submit" value="Cari"/>
                                </div>
                            </div>
                        </form>
                        <br>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Status</th>
                                <th scope="col">Tanggal Permohonan</th>
                                <th scope="col">Tipe Transkrip</th>
                                <th scope="col">NPM</th>
                                <th scope="col">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                </div>
            
        </div>
@endsection