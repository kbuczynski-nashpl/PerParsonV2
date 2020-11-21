<?php

namespace App\Models\Crm;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Crm\CrmCompany
 *
 * @property int $id
 * @property string $company_name
 * @property int $company_type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompany newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompany newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompany query()
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompany whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompany whereCompanyTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompany whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompany whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompany whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CrmCompany extends Model
{
    use HasFactory;

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
