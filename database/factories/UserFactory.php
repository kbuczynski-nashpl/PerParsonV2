<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'email'    => $this->faker->companyEmail,
            'password' => bcrypt($this->faker->password),
        ];
    }
}
