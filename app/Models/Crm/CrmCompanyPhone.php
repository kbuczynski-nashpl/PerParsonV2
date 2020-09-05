<?php

namespace App\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class CrmCompanyPhone extends Model
{
    public function country()
    {
        $this->hasOne('App\Models\Country', 'country_id');
    }
}
