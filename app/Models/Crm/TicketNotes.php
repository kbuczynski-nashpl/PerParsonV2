<?php

namespace App\Models\Crm;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Crm\TicketNotes
 *
 * @property int $id
 * @property int $ticket_id
 * @property string $text
 * @property int $acknowledge
 * @property int $created_by_id
 * @property int $updated_by_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TicketNotes newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketNotes newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketNotes query()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketNotes whereAcknowledge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketNotes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketNotes whereCreatedById($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketNotes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketNotes whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketNotes whereTicketId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketNotes whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketNotes whereUpdatedById($value)
 * @mixin \Eloquent
 */
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
