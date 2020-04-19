<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TranskripRequest extends Controller
{
    //
    public function transkripRequest(){
        return view('transkripRequest/main');
    }
}
