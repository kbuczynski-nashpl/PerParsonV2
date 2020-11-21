<?php

namespace Database\Seeders;

use App\Models\Crm\CrmCompanyStaffPosition;
use App\Models\Crm\CrmCompanyType;
use App\Models\Crm\CrmTicketType;
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
        CrmCompanyType::factory()->create(['type' => 'ACTIVE']);
        CrmCompanyType::factory()->create(['type' => 'ARCHIVED']);
        CrmCompanyType::factory()->create(['type' => 'PENDING']);
        CrmCompanyType::factory()->create(['type' => 'LEAD']);

        CrmTicketType::factory()->create(['name' => 'OPEN']);
        CrmTicketType::factory()->create(['name' => 'CLOSE']);
        CrmTicketType::factory()->create(['name' => 'NEW']);

        CrmCompanyStaffPosition::factory()->create(['position' => 'MANAGER']);
        CrmCompanyStaffPosition::factory()->create(['position' => 'CEO']);
        CrmCompanyStaffPosition::factory()->create(['position' => 'SUB-MANAGER']);
        CrmCompanyStaffPosition::factory()->create(['position' => 'WORKER']);
        CrmCompanyStaffPosition::factory()->create(['position' => 'SUPERVISOR']);
        CrmCompanyStaffPosition::factory()->create(['position' => 'MARKETING']);

        Artisan::call("db:seed --class=CountrySeeder");

        $env = App::environment();

        switch ($env) {
            case 'local':
                Artisan::call("db:seed --class=DevelopmentSeeder");
                break;
            case 'testing':
                Artisan::call("db:seed --class=TestingSeeder");
                break;
            default:
                dd('not in production yet');
        }
    }
}
