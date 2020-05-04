<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Socialite;
use App\User;
use config\modules;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function callback(){

            Auth::login($newUser);
            return redirect('/Test');
        }
    }
    
}

