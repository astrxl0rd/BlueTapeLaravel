<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LihatJadwalDosen extends Controller
{
    //
    public function lihatJadwalDosen(){
        return view('LihatJadwalDosen/main');
    }
}
