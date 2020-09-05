<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Artisan::call("db:seed --class=CountrySeeder");

        if (App::environment('local')) {
            Artisan::call("db:seed --class=DevelopmentSeeder");
        } else {
            dd('not in production yet');
        }
    }
}
