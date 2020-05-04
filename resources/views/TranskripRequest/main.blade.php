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
    <div class="row ">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Permohonan Baru
                </div>
            
            <div class="card-body">
                <form method="POST" action="/TranskripRequest/add">
                    @csrf
                        <!-- Mengambil data dari db trasskrip -->
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="col-form-label">Yang memohon:</label>
                                <input class="form-control" type="email" name="requestByEmail" value="<?= Auth::user()->email ?>" readonly/>
                            </div>

                            <div class="col-lg-4">
                                <label class="col-form-label">NPM:</label>
                                <input class="form-control" type="text" value="<?= $requestByNPM ??''?>" readonly/>
                            </div>

                            <div class="col-lg-4">
                                <label class="col-form-label">Nama:</label>
                                <input class="form-control" type="text" name="requestByName" value="<?= Auth::user()->name ?>" readonly/>
                            </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4">
                            <label>Tipe Transkrip:
                                <input class="form-control" type="text" required/>
                            </label>
                        </div>
                        <div class="col-lg-8">
                            <label>Keperluan:
                                <input class="form-control " type="text" required/>
                            </label>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <input class="btn btn-primary" type="submit" class="button" value="Kirim Permohonan">
                        </div>
                    </div>
                </form>            
            </div>
        </div>
            <br>
            <div class="card">
                <div class="card-header">
                    Histori Permohonan
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Status</th>
                                <th scope="col">Tanggal Permohonan</th>
                                <th scope="col">Tipe Transkrip</th>
                                <th scope="col">Tanggal Jawab/Cetak</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>         
    </div>
</div>
    
    <tbody>
@endsection
