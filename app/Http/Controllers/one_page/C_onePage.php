<?php

namespace App\Http\Controllers\one_page;

use App\User                as User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class C_onePage extends Controller
{
    //
    public function index()
    {
        if(!isset($_COOKIE['date-cookie-kost-user']) && !isset($_COOKIE['cookie-kost-user'])){
            $data['title'] = 'Temankost.id'; 
        }else{
            $user  = User::where('remember_token', $_COOKIE['cookie-kost-user'])->first();
            if (!isset($user)) {
                $data['statsu_log'] = 'tidak';
            }else{
                $data['statsu_log'] = 'ya';
            }

            $data['title'] = 'Temankost.id'; 
            $data['menu_home'] = 'Profil'; 
            $data['link_home'] = '/profil';
        }
        
            
            return view('user.master.utama-user', $data);
    }
}
