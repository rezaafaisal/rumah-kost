<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Akses extends Model
{
    //
    protected $table = 'akses_roles';

    public function user()
    {
        return $this->hasOne('App\User');
    }
}
