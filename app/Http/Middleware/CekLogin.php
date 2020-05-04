<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Socialite;
use App\User;

class CekLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   

        $oauthUser = Socialite::driver('google')->user();
        $user = User::where('google_id', $oauthUser->id)->first();

        $valueRoot = config('modules.roles.root');
        $valueMahasiswaFtis = config('modules.roles.mahasiswaftis'); 
        $valueStaf = config('modules.roles.stafUnpar'); 
        $valueDosenInformatika = config('modules.roles.dosenInformatika'); 
        $valueMahasiswaInformatika = config('modules.roles.mahasiswaInformatika'); 
        
       
            if ($user) {
                $valueRoot = config('modules.roles.root');
                $valueMahasiswaFtis = config('modules.roles.mahasiswaftis'); 
                $valueStaf = config('modules.roles.stafUnpar'); 
                $valueDosenInformatika = config('modules.roles.dosenInformatika'); 
                $valueMahasiswaInformatika = config('modules.roles.mahasiswaInformatika'); 
                
                    
                if(in_array($user->email,$valueRoot))
                {
                    Auth::loginUsingId($user->id);
                    //return redirect('/TranskripRequest');
                    return redirect('https://youtube.com');
                }
                else if(preg_match("/$valueMahasiswaFtis/", $user))
                {
                    Auth::loginUsingId($user->id);
                    return redirect('/TranskripRequest');
                }
                else if(preg_match("/$valueStaf/", $user))
                {
                    Auth::loginUsingId($user->id);
                    return redirect('/TranskripRequest');
                }
                else if(in_array($user->email,$valueDosenInformatika))
                {
                    Auth::loginUsingId($user->id);
                    return redirect('/TranskripRequest');
                }
                else if(preg_match("/$valueMahasiswaInformatika/", $user))
                {
                    Auth::loginUsingId($user->id);
                    return redirect('/TranskripRequest');
                }
            } 
            return $next($request);
        
        

        
    }
}
