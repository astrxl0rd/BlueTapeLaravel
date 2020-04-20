@extends('layouts.head')
@extends('layouts.topbar')

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

                    You are logged in!
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
