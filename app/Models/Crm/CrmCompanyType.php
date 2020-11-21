<?php

namespace App\Models\Crm;

use Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Crm\CrmCompanyType
 *
 * @property int $id
 * @property string $type
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyType query()
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyType whereUpdatedAt($value)
 * @mixin Eloquent
 */
class CrmCompanyType extends Model
{
    public function companies()
    {
        return $this->hasMany('App\Models\Crm\CrmCompany', 'company_type_id');
    }

    public function hasCompanies(){
        return $this->companies()->get()->isNotEmpty();
    }
}
