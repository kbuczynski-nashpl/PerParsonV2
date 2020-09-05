<?php

namespace App\Models\Crm;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Crm\CrmCompanyContacts
 *
 * @property int $id
 * @property int $staff_id
 * @property string|null $phone_number
 * @property int|null $phone_number_country_id
 * @property string|null $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyContacts newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyContacts newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyContacts query()
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyContacts whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyContacts whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyContacts whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyContacts wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyContacts wherePhoneNumberCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyContacts whereStaffId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyContacts whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CrmCompanyContacts extends Model
{
    public function staff()
    {
        $this->hasOne('App\Models\Crm\CrmCompanyStaff', 'staff_id');
    }

    public function phoneCountry()
    {
        $this->hasOne('App\Models\Country', 'phone_number_country_id');
    }
}
