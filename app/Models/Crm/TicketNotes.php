<?php

namespace App\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class TicketNotes extends Model
{
    public function ticket()
    {
        $this->hasOne('App\Models\Crm\CrmCompanyTicket', 'ticket_id');
    }

    public function createdBy()
    {
        $this->hasOne('App\Models\User', 'created_by_id');
    }

    public function updatedBy()
    {
        $this->hasOne('App\Models\User', 'updated_by_id');
    }
}
