@extends('layouts.app')
@extends('templates.topbar_loggedin')
@section('content')

<div class="container text-center" >
    <img class="mt-5" src="Logo_UNPAR.png" width="200" >
        <h4 class="display-4 mt-1">Selamat Datang di BlueTape</h4>
        <hr class="my-4">
        <p>Silahkan login Menggunakan Akun UNPAR</p>
        <a href="{{ url('google') }}" class="btn btn-primary">
            Login with Google
        </a>
    </div>

@endsection
