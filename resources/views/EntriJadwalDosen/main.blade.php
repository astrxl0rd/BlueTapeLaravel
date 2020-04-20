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
                    Tambah Jadwal
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <form method="POST" action="/EntriJadwalDosen/add">
                                <input type="hidden" name="" value="" />
                                Hari
                                <select class="form-control" name="hari">
                                    <!-- 2 Lihat di file Jadwal Dosen.txt-->
                                </select><br>
                                Jam Mulai
                                <select class="form-control" name="jam_mulai">
                                    <?php for ($i = 7; $i <= 16; $i++) { ?>
                                        <option value="<?php echo $i ?>"> <?php echo $i ?>:00 </option>
                                    <?php } ?>
                                </select><br>
                        </div>
                        <div class="col-lg-4">
                            Durasi
                            <select class="form-control" name="durasi">
                                <?php for ($i = 1; $i <= 9; $i++) { ?>
                                    <option value="<?php echo $i ?>"> <?php echo $i ?> jam </option>
                                <?php } ?>
                            </select><br>
                            Jenis
                            <select class="form-control" name="jenis_jadwal">
                                <option value="konsultasi" style="background-color:yellow"> Konsultasi </option>
                                <option value="terjadwal" style="background-color:green;color:white"> Terjadwal</option>
                                <option value="kelas" style="background-color:white"> Kelas </option>
                            </select><br>
                        </div>
                        <div class="col-lg-4">
                            Label <input class="form-control" type="text" name="label_jadwal"><br><br>
                            <input class="btn btn-primary" type="submit" value="Tambah">
                            </form><br>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ===================================================================== Pembentukan Tabel ============================================================================= -->
            <br>
            <!-- 3 -->
        </div>
@endsection