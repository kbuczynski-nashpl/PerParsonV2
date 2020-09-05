<?php

namespace App\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class CrmCompanyStaff extends Model
{
    public function company()
    {
        $this->hasOne('App\Models\Crm\CrmCompany', 'crm_company_id');
    }

    public function position()
    {
        $this->hasOne('App\Models\Crm\CrmCompanyStaffPosition', 'position_id');
    }
}
