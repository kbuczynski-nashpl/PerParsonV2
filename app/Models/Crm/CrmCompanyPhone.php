<?php

namespace App\Models\Crm;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Crm\CrmCompanyPhone
 *
 * @property int $id
 * @property int $crm_company_id
 * @property string $phone_number
 * @property int $country_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|CrmCompanyPhone newModelQuery()
 * @method static Builder|CrmCompanyPhone newQuery()
 * @method static Builder|CrmCompanyPhone query()
 * @method static Builder|CrmCompanyPhone whereCountryId($value)
 * @method static Builder|CrmCompanyPhone whereCreatedAt($value)
 * @method static Builder|CrmCompanyPhone whereCrmCompanyId($value)
 * @method static Builder|CrmCompanyPhone whereId($value)
 * @method static Builder|CrmCompanyPhone wherePhoneNumber($value)
 * @method static Builder|CrmCompanyPhone whereUpdatedAt($value)
 * @mixin Eloquent
 */
class CrmCompanyPhone extends Model
{
    use HasFactory;

    public function country()
    {
        $this->hasOne('App\Models\Country', 'country_id');
    }
}
