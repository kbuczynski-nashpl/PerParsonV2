<?php

namespace Database\Factories;

use App\Models\UserSettings;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserSettingsFactory extends Factory
{
    protected $model = UserSettings::class;

    public function definition()
    {
        return [
            'timezone' => $this->faker->timezone,
        ];
    }
}
