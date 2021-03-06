<?php

namespace Database\Seeders;

use Database\Seeders\Traits\FactoryHelper;
use Illuminate\Database\Seeder;

class TestingSeeder extends Seeder
{
    use FactoryHelper;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedUsers();
        $this->seedCrmCompanies();
    }
}
