<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TranskripManage extends Controller
{
    //
    public function transkripManage(){
        return view('transkripManage/main');
    }
}
