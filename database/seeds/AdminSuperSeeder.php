<?php

use Illuminate\Database\Seeder;
use App\Models\M_Akses as Akses;
use App\User as User;

// use Hash;

class AdminSuperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Seeder_AkunIT_Akses                = new Akses();
            $Seeder_AkunIT_Akses->akses     = 'Admin Super';
        $Seeder_AkunIT_Akses->save();

        $Seeder_AkunIT_Akun                     = new User();
            $Seeder_AkunIT_Akun->id_akses_roles         = $Seeder_AkunIT_Akses->id;
            $Seeder_AkunIT_Akun->name                   = 'Admin Rumah Kost';
            $Seeder_AkunIT_Akun->email                  = 'kwawank74@gmail.com';
            $Seeder_AkunIT_Akun->no_wa                  = '0895336510174';
            $Seeder_AkunIT_Akun->password               = Hash::make('AdminRK1221');
            $Seeder_AkunIT_Akun->show_password          = 'AdminRK1221';
        $Seeder_AkunIT_Akun->save();
    }
}
