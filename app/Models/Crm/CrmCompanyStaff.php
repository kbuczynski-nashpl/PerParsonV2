<?php

namespace App\Models\Crm;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Crm\CrmCompanyStaff
 *
 * @property int $id
 * @property int $crm_company_id
 * @property int $position_id
 * @property string $title
 * @property string $firstname
 * @property string $lastname
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyStaff newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyStaff newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyStaff query()
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyStaff whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyStaff whereCrmCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyStaff whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyStaff whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyStaff whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyStaff wherePositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyStaff whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyStaff whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CrmCompanyStaff extends Model
{
    public function company()
    {
        $this->hasOne('App\Models\Crm\CrmCompany', 'crm_company_id');
    }

    public function position()
    {
        $this->hasOne('App\Models\Crm\CrmCompanyStaffPosition', 'position_id');
    }
}
