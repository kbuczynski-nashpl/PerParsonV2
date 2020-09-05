<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function settings()
    {
        $this->hasOne('App\Models\UserSettings', 'user_id');
    }
}
