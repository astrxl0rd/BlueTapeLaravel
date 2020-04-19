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
                    Permohonan Baru
                </div>
                <div class="card-body">
                    <form class="p-3" method="POST" action="">
                        <input type="hidden" name="" value="" />
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label class="col-form-label">Pemohon:</label>
                                <input class="form-control" type="email" name="requestByEmail" value="<?= $requestByEmail ??''?>" readonly/>
                            </div>
                            <div class="col-sm-6">
                                <label class="col-form-label">Nama:</label>
                                <input class="form-control" type="text" name="requestByName" value="<?= $requestByName ??'' ?>" readonly="readonly"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-2">
                                <label class="col-form-label">Kode MK:</label>
                                <input class="form-control" type="text" name="mataKuliahCode" required maxlength="9" pattern="[A-Z]{3}[0-9]{3}([0-9]{3})?" title="Kode MK dalam format XYZ123"/>
                            </div>
                            <div class="col-sm-5">
                                <label class="col-form-label">Nama Mata Kuliah:</label>
                                <input class="form-control" type="text" name="mataKuliahName" required/>
                            </div>
                            <div class="col-sm-1">
                                <label class="col-form-label">Kelas:</label>
                                <input class="form-control" type="text" name="class" maxlength="1"/>
                            </div>
                            <div class="col-sm-4">
                                <label class="col-form-label">Jenis Perubahan:</label>
                                <select name="changeType" class="form-control">
                                    <!-- 2 -->
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3">
                                <label class="col-form-label">Dari Hari &amp; Jam:</label>
                                <input id="datetimepicker" class="form-control disableable" type="text" name="fromDateTime">
                            </div>
                            <div class="col-sm-3">
                                <label class="col-form-label">Dari Ruang:</label>
                                <input class="form-control disableable" type="text" name="fromRoom"/>
                            </div>
                            <div class="col-sm-6">
                                <label class="col-form-label">Keterangan Tambahan:</label>
                                <input class="form-control disableable" type="text" name="remarks"/>
                            </div>
                        </div>
                        <div class="form-group row toFields">
                            <div class="col-sm-3">
                                <label class="col-form-label">Menjadi Hari &amp; Jam:</label>
                                <input id="datetimepicker" class="form-control disableable toDateTime" type="text" name="toDateTime[]"/>
                            </div>
                            <div class="col-sm-3">
                                <label class="col-form-label">Menjadi Ruang:</label>
                                <input class="form-control disableable toRoom" type="text" name="toRoom[]"/>
                            </div>
                            <div class="col-sm-3">
                                <br>
                                <a href="#" class="eraseButton btn btn-secondary">Hapus</a>
                            </div>
                        </div>
                        <div class="form-group row" id="sendDiv">
                            <div class="col-sm-12">
                                <input type="submit" class="btn btn-primary" value="Kirim Permohonan">
                                <a href="#" id="addToButton" class="btn btn-secondary">Tambah Pertemuan Ekstra</a>
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
                    <table class="table table-striped table-responsive">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Status</th>
                            <th scope="col">Tanggal Permohonan</th>
                            <th scope="col">Kode MK</th>
                            <th scope="col">Perubahan</th>
                            <th scope="col">Tanggal Jawab</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            <!-- 3 -->
                        </tbody>
                    </table>
                </div>
                <h5></h5>

            </div>

@endsection