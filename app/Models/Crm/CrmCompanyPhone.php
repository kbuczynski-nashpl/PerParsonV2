<?php

namespace App\Models\Crm;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Crm\CrmCompanyPhone
 *
 * @property int $id
 * @property int $crm_company_id
 * @property string $phone_number
 * @property int $country_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyPhone newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyPhone newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyPhone query()
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyPhone whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyPhone whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyPhone whereCrmCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyPhone whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyPhone wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyPhone whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CrmCompanyPhone extends Model
{
    public function country()
    {
        $this->hasOne('App\Models\Country', 'country_id');
    }
}
