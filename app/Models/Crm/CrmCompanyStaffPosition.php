<?php

namespace App\Models\Crm;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Crm\CrmCompanyStaffPosition
 *
 * @property int $id
 * @property string $position
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyStaffPosition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyStaffPosition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyStaffPosition query()
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyStaffPosition whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyStaffPosition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyStaffPosition wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrmCompanyStaffPosition whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CrmCompanyStaffPosition extends Model
{
    use HasFactory;
}
