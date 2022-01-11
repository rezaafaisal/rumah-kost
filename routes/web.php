<?php

use App\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ==== page users ======

Route::prefix('user')->group(function () {
    Route::post  ('/register'                ,'C_Akses@register')->name('register');
    Route::post  ('/login'                ,'C_Akses@queryLogin')->name('login-query');

});


Route::get  ('/login'                ,'C_Akses@index');
Route::get  ('/log-out'                ,'C_Akses@logOut')->name('log-out');

Route::get('/', 'one_page\C_onePage@index');

Route::get('/profil', 'user\C_Profil@index')->name('profil');


Route::get('/all', function(){
    $data['title'] = 'Semua kamar';
    $user  = User::where('remember_token', $_COOKIE['cookie-kost-user'])->first();
    if (!isset($user)) {
        $data['statsu_log'] = 'tidak';
    }else{
        $data['statsu_log'] = 'ya';
    }

    $data['link_home'] = '/profil';
    $data['menu_home'] = 'Profil';
    return view('kost.all',$data);
});



Route::get('/kamar', function(){
    return view('kost.kamar',[
        'title' => 'Pondok Anisa'
    ]);
});

Route::get('/kamar-detail', function(){
    return view('kost.kamar_detail', [
        'title' => 'Kamar Detail'
    ]);
});

Route::get('/info-kost', function(){
    return view('kost.info', [
        'title' => 'Info Kost'
    ]);
});



Route::get('/signup', function(){
    return view('signup', [
        'title' => 'Daftar'
    ]);
});





Route::get('/kampus', function(){
    return view('tes');
});
