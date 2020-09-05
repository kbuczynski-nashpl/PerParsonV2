<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;

    public function settings()
    {
        $this->hasOne('App\Models\UserSettings', 'user_id');
    }
}
