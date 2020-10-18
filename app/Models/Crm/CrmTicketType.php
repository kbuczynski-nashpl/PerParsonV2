<?php

namespace App\Models\Crm;

use Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Crm\CrmTicketType
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CrmTicketType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CrmTicketType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CrmTicketType query()
 * @method static \Illuminate\Database\Eloquent\Builder|CrmTicketType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmTicketType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmTicketType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmTicketType whereUpdatedAt($value)
 * @mixin Eloquent
 */
class CrmTicketType extends Model
{
    public function tickets()
    {
        $this->hasMany('App\Models\Crm\CrmCompanyTicket', 'type_id');
    }
}
