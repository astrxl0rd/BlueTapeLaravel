<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        @extends('layouts.head')

    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <p class="text-center">
                            <img src="img/logo.png" alt="Logo BlueTape"/><br/><br/>
                            Silahkan login di aplikasi BlueTape, dengan menekan tombol di bawah ini. Gunakan akun
                            <b>@unpar.ac.id</b> atau <b>@student.unpar.ac.id</b>.<br/><br/>
                            <a href="{{ url('google') }}" class="btn btn-primary btn-lg">Login dengan Google</a><br/><br/>
                            <a href="https://github.com/ftisunpar/BlueTape/wiki/UserGuide" target="_blank">Petunjuk Penggunaan</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
