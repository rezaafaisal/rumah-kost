<?php

namespace App\Http\Controllers\user;

use App\User                as User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class C_Profil extends Controller
{
    public function index()
    {
        if(!isset($_COOKIE['date-cookie-kost-user']) && !isset($_COOKIE['cookie-kost-user'])){
            return redirect('/login');
            // return view('login', [
            //     'title' => 'Masuk'
            // ]);
        }else{

            $expired = date('d-m-Y', strtotime($_COOKIE['date-cookie-kost-user'])); 
            $date_now = date('d-m-Y');

            $today_time = strtotime($date_now);
            $expire_time = strtotime($expired);

                if ($today_time >= $expire_time) {
                    $akun  = User::where('remember_token', $_COOKIE['cookie-kost-user'])
                                        ->update([
                                            'remember_token'           => null
                                        ]);
                        
                        if ($akun) {
                            unset($_COOKIE['cookie-kost-user']);    
                            setcookie('cookie-kost-user', null, -1, '/'); 
                            
                            unset($_COOKIE['date-cookie-kost-user']);    
                            $logout_unset_cookie = setcookie('date-cookie-kost-user', null, -1, '/'); 
                    
                            if($logout_unset_cookie){
                                
                                return redirect('login');
                            } 
                        }
                }else{
                    $user  = User::where('remember_token', $_COOKIE['cookie-kost-user'])->first();
                    if (!isset($user)) {
                        $data['statsu_log'] = 'tidak';
                    }else{
                        $data['statsu_log'] = 'ya';
                    }

                    $data['user'] = User::where('remember_token', $_COOKIE['cookie-kost-user'])->with('akses')->first();

                    $data['title'] = 'Temankost.id'; 
                    $data['menu_home'] = 'Home'; 
                    $data['link_home'] = '/'; 

                    return view('profile', $data);
                }
        }
        
            
        
    }
}
