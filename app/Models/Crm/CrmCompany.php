<?php

namespace App\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class CrmCompany extends Model
{
    public function type()
    {
        $this->hasOne('App\Models\Crm\CrmCompanyType', 'company_type_id');
    }

    public function addresses()
    {
        $this->hasMany('App\Models\Crm\CrmCompanyAddress', 'crm_company_id');
    }

    public function phones()
    {
        $this->hasMany('App\Models\Crm\CrmCompanyPhone', 'crm_company_id');
    }

    public function tickets()
    {
        $this->hasMany('App\Models\Crm\CrmCompanyTicket', 'crm_company_id');
    }

    public function staff()
    {
        $this->hasMany('App\Models\Crm\CrmCompanyStaff', 'crm_company_id');
    }
}
