<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EntriJadwalDosen extends Controller
{
    //
    public function entriJadwalDosen(){
        return view('EntriJadwalDosen/main');
    }
}
