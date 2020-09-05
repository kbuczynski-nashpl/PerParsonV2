<?php

namespace App\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class CrmCompanyAddress extends Model
{
    public function country()
    {
        $this->hasOne('App\Models\Country', 'country_id');
    }
}
