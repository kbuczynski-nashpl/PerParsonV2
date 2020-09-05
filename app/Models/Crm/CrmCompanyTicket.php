<?php

namespace App\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class CrmCompanyTicket extends Model
{
    public function company()
    {
        $this->hasOne('App\Models\Crm\CrmCompany', 'crm_company_id');
    }

    public function type()
    {
        $this->hasOne('App\Models\Crm\CrmTicketType', 'type_id');
    }
}
