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
 
    public function callback()
    {
 

        $oauthUser = Socialite::driver('google')->user();
        $user = User::where('google_id', $oauthUser->id)->first();
        
        if ($user) {
            //Auth::loginUsingId($user->id);
            //return redirect('/Test');

            $valueRoot = config('modules.roles.root');
            $valueMahasiswaFtis = config('modules.roles.mahasiswaftis'); 
            $valueStaf = config('modules.roles.stafUnpar'); 
            $valueDosenInformatika = config('modules.roles.dosenInformatika'); 
            $valueMahasiswaInformatika = config('modules.roles.mahasiswaInformatika'); 
            
                
            if(in_array($user->email,$valueRoot))
            {
                Auth::loginUsingId($user->id);
                return redirect('/home');
            }
            else if(preg_match("/$valueMahasiswaFtis/", $user))
            {
                Auth::loginUsingId($user->id);
                return redirect('/home');
            }
            else if(preg_match("/$valueStaf/", $user))
            {
                Auth::loginUsingId($user->id);
                return redirect('/home');
            }
            else if(in_array($user->email,$valueDosenInformatika))
            {
                Auth::loginUsingId($user->id);
                return redirect('/home');
            }
            else if(preg_match("/$valueMahasiswaInformatika/", $user))
            {
                Auth::loginUsingId($user->id);
                return redirect('/home');
            }
            
        } else {
            $newUser = User::create([
                'name' => $oauthUser->name,
                'email' => $oauthUser->email,
                'google_id'=> $oauthUser->id,
                // password tidak akan digunakan ;)
                //'password' => md5($oauthUser->token),
            ]);
            Auth::login($newUser);
            return redirect('/Test');
        }
    }
}

