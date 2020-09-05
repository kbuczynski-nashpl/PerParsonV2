<?php

namespace App\Models\Crm;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Crm\CrmCompanyType
 *
 * @property int $id
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyType query()
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CrmCompanyType extends Model
{
    public function companies()
    {
        $this->hasMany('App\Models\Crm\CrmCompany', 'company_type_id');
    }
}
