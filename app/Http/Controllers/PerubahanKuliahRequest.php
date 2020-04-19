<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerubahanKuliahRequest extends Controller
{
    //
    public function perubahanKuliahRequest(){
        return view('perubahanKuliahRequest/main');
    }
}
