<?php

namespace App\Models\Crm;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Crm\CrmCompanyTicket
 *
 * @property int $id
 * @property int $crm_company_id
 * @property int $type_id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyTicket newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyTicket newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyTicket query()
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyTicket whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyTicket whereCrmCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyTicket whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyTicket whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyTicket whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyTicket whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
