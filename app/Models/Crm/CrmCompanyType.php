<?php

namespace App\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class CrmCompanyType extends Model
{
    public function companies()
    {
        $this->hasMany('App\Models\Crm\CrmCompany', 'company_type_id');
    }
}
