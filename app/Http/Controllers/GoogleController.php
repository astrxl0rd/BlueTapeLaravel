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
 
        //jika user masih login lempar ke home
    //    if (Auth::check()) {
    //        return redirect('/Test');
    //    }  
        $oauthUser = Socialite::driver('google')->user();
        $user = User::where('google_id', $oauthUser->id)->first();
        
        if ($user) {
            //Auth::loginUsingId($user->id);
            //return redirect('/Test');

            $value = config('modules.roles.root');
            $value2 = config('modules.roles.mahasiswaftis');  //ini belum jalan karna format di modulesnya belum bener
            
    

            if(in_array($user->email,$value))
            {
                Auth::loginUsingId($user->id);
                return redirect('/Test');
            }
            else if($user->email == $value2)
            {
                Auth::loginUsingId($user->id);
                return redirect('https://kompas.com');
            }
            
            else{
                Auth::loginUsingId($user->id);
                return redirect('https://youtube.com');
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

