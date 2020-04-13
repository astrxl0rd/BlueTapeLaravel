<!-- @extends('layouts.app') -->

<!-- @section('content') -->

@extends('templates/Navbar')

@section('container')
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
                                            <input class="form-control" type="email" name="requestByEmail" value="<?= $requestByEmail ??'' ?>" readonly/>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="col-form-label">NPM:</label>
                                            <input class="form-control" type="text" value="<?= $requestByNPM ??''?>" readonly/>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="col-form-label">Nama:</label>
                                            <input class="form-control" type="text" name="requestByName" value="<?= $requestByName ??''?>" readonly/>

                                        </div>
                                    </div>

                                   
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
                                <tbody>
                              
        
@endsection
<!-- 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
            <a class="navbar-brand" href="#">BlueTape</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="#">Transkrip Nilai <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Jadwal Dosen</a>
                </li>  
                </ul>
            </div>

            <div class="float-right" >     
                    <a class="nav-link text-light " href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">         
                                        {{ __('Logout') }}
                                    </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                            </form>
                    </div>    
            </div>
        </nav>
        
        <div class="alert alert-success" role="alert">
            Berhasil Login!
        </div> -->

        

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- @endsection -->
