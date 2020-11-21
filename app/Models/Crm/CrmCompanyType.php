<?php

namespace App\Models\Crm;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Crm\CrmCompanyType
 *
 * @property int                          $id
 * @property string                       $type
 * @property Carbon|null                  $created_at
 * @property Carbon|null                  $updated_at
 * @method static Builder|CrmCompanyType newModelQuery()
 * @method static Builder|CrmCompanyType newQuery()
 * @method static Builder|CrmCompanyType query()
 * @method static Builder|CrmCompanyType whereCreatedAt($value)
 * @method static Builder|CrmCompanyType whereId($value)
 * @method static Builder|CrmCompanyType whereType($value)
 * @method static Builder|CrmCompanyType whereUpdatedAt($value)
 * @mixin Eloquent
 * @property-read Collection|CrmCompany[] $companies
 * @property-read int|null                $companies_count
 */
class CrmCompanyType extends Model
{
    use HasFactory;

    public function companies()
    {
        return $this->hasMany('App\Models\Crm\CrmCompany', 'company_type_id');
    }

    public function hasCompanies()
    {
        return $this->companies()->get()->isNotEmpty();
    }
}
