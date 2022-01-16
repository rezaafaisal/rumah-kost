<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_Akses      as Akses;
use App\User                as User;

use Hash;
use Session;

class C_Akses extends Controller
{
    //

    public function index()
    {
        if(!isset($_COOKIE['date-cookie-kost-user']) && !isset($_COOKIE['cookie-kost-user'])){
            return view('login', [
                'title' => 'Masuk'
            ]);
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
                    return redirect('/profil');
                }
        }
        
    }

    public function queryLogin(Request $req)
    {
        $validated = $req->validate([
            "email"             => "required|string|max:50",
            "password"          => "required|string|max:50"
        ]);

            if ($req->input('key') == "yes") {

                
                        $login_User = User::where('email', $validated["email"])->
                                                orWhere('no_wa', $validated["email"])
                                                ->first();
                            
                        if($login_User){
                    
                            if ($login_User->status== 'aktif') {
                                if(Hash::check($validated["password"], $login_User->password)){
                                    $login_randomToken='';
                                    $login_id_token = Hash::make($validated["email"]);
                                    $login_randomToken = 'users'."_".$login_id_token;

                                    $login_User_update_token = User::where('id',$login_User->id)
                                                                                    ->update([
                                                                                    'remember_token'   => $login_randomToken
                                                                                    ]);
                                                        if($login_User_update_token){
                                                            Session::flash('alert-token', $login_randomToken);
                                                            $req->session()->flash('alert-login-berhasil', 'Login Success Akun.');
                                                            return redirect('/login');
                                                        }
                                }else{
                                    Session::flash('notif-gagal', 'Password Anda Salah.!! Silahakan Input Ulang');
                                    return redirect('/login');
                                }
                            }else{
                                Session::flash('notif-gagal', 'Akun Anda Belum di Aktifkan.!!');
                                return redirect('/login');
                            }
                        }else{
                            Session::flash('notif-gagal', 'Email Yang Anda Masukkan Salah.!! Silahkan Mendaftar');
                            return redirect('/login');
                        }
                    
            }else{
                Session::flash('notif-gagal', 'Silahkan Centang Ceklis Jika Bukan Robot');
                return redirect('/login');
            }

        // echo $validated["email"];
        
    }

    public function register(Request $req){
        $validated = $req->validate([
            "nama_lengkap"      => "required|max:100",
            "email"             => "required|email",
            "no_hp"             => "required|max:20",
            "password"          => "required|min:5",
            "upassword"         => "required|min:5"
        ]);

        $key = $req->input('key');
        echo $key;

        if ($validated["password"] == $validated["upassword"]) {

            if($req->input("jenis") == 1){
                $jenis = 'User';
            }else{
                $jenis = 'Admin';
            }

            $aksesPerbandingan = Akses::where('akses', $jenis)->first();
                if (!isset($aksesPerbandingan)) {
                            $userPerbandingan = User::where('email', $validated["email"])->orWhere('no_wa', $validated["no_hp"])->first();
                                if (!isset($userPerbandingan)) {
                                    $akses                = new Akses();
                                        $akses->akses     = $jenis;
                                    $akses->save();
                                        if ($akses) {
                                            $user                = new User();
                                                $user->id_akses_roles     = $akses->id;
                                                $user->name = $validated["nama_lengkap"];
                                                $user->email = $validated["email"];
                                                $user->no_wa = $validated["no_hp"];
                                                $user->password = Hash::make($validated["password"]);
                                                $user->show_password = $validated["password"];
                                                $user->status = 'tidak';
                                            $user->save();

                                            Session::flash('notif-success', 'Berhasil Daftar.!! Terimakasih '.$validated["nama_lengkap"].', Silahkan Menunggu 1 x 24 Jam Untuk di Aktifkan Oleh Tim Kami');
                                            return redirect('/login');
                                        }
                                }else{
                                    if ($key == "regist-dua") {
                                        Session::flash('alert-gagal-dua', 'Email atau Nomor Sudah Terdaftar');
                                        return redirect('/daftar');
                                    }else{
                                        Session::flash('alert-gagal', 'Email atau Nomor Sudah Terdaftar');
                                        return redirect('/');
                                    }
                                }
                }else{
                    $userPerbandingan = User::where('email', $validated["email"])->orWhere('no_wa', $validated["no_hp"])->first();
                    if (!isset($userPerbandingan)) {
                        $user  = new User();
                            $user->id_akses_roles     = $aksesPerbandingan->id;
                            $user->name = $validated["nama_lengkap"];
                            $user->email = $validated["email"];
                            $user->no_wa = $validated["no_hp"];
                            $user->password = Hash::make($validated["password"]);
                            $user->show_password = $validated["password"];
                            $user->status = 'tidak';
                        $user->save();

                            Session::flash('notif-success', 'Berhasil Daftar.!! Terimakasih '.$validated["nama_lengkap"].', Silahkan Menunggu 1 x 24 Jam Untuk di Aktifkan Oleh Tim Kami');
                            return redirect('/login');

                    }else{
                        if ($key == "regist-dua") {
                            Session::flash('alert-gagal-dua', 'Email atau Nomor Sudah Terdaftar');
                            return redirect('/daftar');
                        }else{
                            Session::flash('alert-gagal', 'Email atau Nomor Sudah Terdaftar');
                            return redirect('/');
                        }
                    }
                }
        }else{
            if ($key == "regist-dua") {
                Session::flash('alert-gagal-dua', 'Password Tidak Sama');
                return redirect('/daftar');
            }else{
                Session::flash('alert-gagal', 'Password Tidak Sama');
                return redirect('/');
            }
        }
    }

    public function logOut()
    {
        if(!isset($_COOKIE['date-cookie-kost-user']) && !isset($_COOKIE['cookie-kost-user'])){
            return redirect('login');
        }else{
            $expired = date('d-m-Y', strtotime($_COOKIE['date-cookie-kost-user']));
            $date_now = date('d-m-Y');
                if ($date_now >= $expired) {
    
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
                }
        }
    }
}
