<?php

namespace App\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class CrmCompanyContacts extends Model
{
    public function staff()
    {
        $this->hasOne('App\Models\Crm\CrmCompanyStaff', 'staff_id');
    }

    public function phoneCountry()
    {
        $this->hasOne('App\Models\Country', 'phone_number_country_id');
    }
}
