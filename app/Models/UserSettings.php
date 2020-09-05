<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserSettings
 *
 * @property int $id
 * @property int $user_id
 * @property string $timezone
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserSettings newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSettings newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSettings query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSettings whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSettings whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSettings whereTimezone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSettings whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSettings whereUserId($value)
 * @mixin \Eloquent
 */
class UserSettings extends Model
{
    //
}
