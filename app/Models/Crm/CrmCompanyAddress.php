<?php

namespace App\Models\Crm;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Crm\CrmCompanyAddress
 *
 * @property int $id
 * @property int $crm_company_id
 * @property string $address_line_1
 * @property string|null $address_line_2
 * @property string $city
 * @property string $post_code
 * @property int $country_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyAddress newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyAddress newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyAddress query()
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyAddress whereAddressLine1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyAddress whereAddressLine2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyAddress whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyAddress whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyAddress whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyAddress whereCrmCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyAddress whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyAddress wherePostCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyAddress whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CrmCompanyAddress extends Model
{
    use HasFactory;

    public function country()
    {
        $this->hasOne('App\Models\Country', 'country_id');
    }
}
