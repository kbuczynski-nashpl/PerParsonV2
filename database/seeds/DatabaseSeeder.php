<?php

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
        factory(CrmCompanyType::class, 1)->create(['type' => 'ACTIVE']);
        factory(CrmCompanyType::class, 1)->create(['type' => 'ARCHIVED']);
        factory(CrmCompanyType::class, 1)->create(['type' => 'PENDING']);
        factory(CrmCompanyType::class, 1)->create(['type' => 'LEAD']);

        factory(CrmTicketType::class, 1)->create(['name' => 'OPEN']);
        factory(CrmTicketType::class, 1)->create(['name' => 'CLOSE']);
        factory(CrmTicketType::class, 1)->create(['name' => 'NEW']);

        factory(CrmCompanyStaffPosition::class, 1)->create(['position' => 'MANAGER']);
        factory(CrmCompanyStaffPosition::class, 1)->create(['position' => 'CEO']);
        factory(CrmCompanyStaffPosition::class, 1)->create(['position' => 'SUB-MANAGER']);
        factory(CrmCompanyStaffPosition::class, 1)->create(['position' => 'WORKER']);
        factory(CrmCompanyStaffPosition::class, 1)->create(['position' => 'SUPERVISOR']);
        factory(CrmCompanyStaffPosition::class, 1)->create(['position' => 'MARKETING']);

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
