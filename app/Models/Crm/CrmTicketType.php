<?php

namespace App\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class CrmTicketType extends Model
{
    public function tickets()
    {
        $this->hasMany('App\Models\Crm\CrmCompanyTicket', 'type_id');
    }
}
