<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerubahanKuliahManage extends Controller
{
    //
    public function perubahanKuliahManage(){
        return view('PerubahanKuliahManage/main');
    }
}
