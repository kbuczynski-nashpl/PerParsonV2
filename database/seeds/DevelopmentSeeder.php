<?php

use App\Models\Crm\CrmCompany;
use App\Models\Crm\CrmCompanyAddress;
use App\Models\Crm\CrmCompanyContacts;
use App\Models\Crm\CrmCompanyPhone;
use App\Models\Crm\CrmCompanyStaff;
use App\Models\Crm\CrmCompanyTicket;
use App\Models\Crm\TicketNotes;
use App\Models\User;
use App\Models\UserSettings;
use Illuminate\Database\Seeder;

class DevelopmentSeeder extends Seeder
{
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

    private function seedUsers()
    {
        factory(User::class, 1)->create(
            [
                'email'    => 'admin@admin.com',
                'password' => bcrypt('Password1!'),
            ]
        );

        factory(User::class, 9)->create();

        factory(UserSettings::class, 1)->create(['user_id' => 1]);
        factory(UserSettings::class, 1)->create(['user_id' => 2]);
        factory(UserSettings::class, 1)->create(['user_id' => 3]);
        factory(UserSettings::class, 1)->create(['user_id' => 4]);
        factory(UserSettings::class, 1)->create(['user_id' => 5]);
        factory(UserSettings::class, 1)->create(['user_id' => 6]);
        factory(UserSettings::class, 1)->create(['user_id' => 7]);
        factory(UserSettings::class, 1)->create(['user_id' => 8]);
        factory(UserSettings::class, 1)->create(['user_id' => 9]);
        factory(UserSettings::class, 1)->create(['user_id' => 10]);
    }

    private function seedCrmCompanies()
    {
        factory(CrmCompany::class, 20)
            ->create(['company_type_id' => rand(1, 4)])
            ->each(function ($company) {
                factory(CrmCompanyAddress::class, 10)->create(
                    [
                        'crm_company_id' => $company->id,
                        'country_id'     => rand(1, 195),
                    ]
                );

                factory(CrmCompanyPhone::class, 10)->create(
                    [
                        'crm_company_id' => $company->id,
                        'country_id'     => rand(1, 195),
                    ]
                );

                factory(CrmCompanyTicket::class, 10)
                    ->create(
                        [
                            'crm_company_id' => $company->id,
                            'type_id'        => rand(1, 3),
                        ]
                    )
                    ->each(function ($ticket) {
                        factory(TicketNotes::class, 25)->create(
                            [
                                'ticket_id'     => $ticket->id,
                                'created_by_id' => rand(1, 10),
                                'updated_by_id' => rand(1, 10),
                            ]
                        );
                    });

                factory(CrmCompanyStaff::class, 20)
                    ->create(
                        [
                            'crm_company_id' => $company->id,
                            'position_id'    => rand(1, 6),
                        ]
                    )
                    ->each(function ($staff) {
                        factory(CrmCompanyContacts::class, 10)->create(
                            [
                                'staff_id'                => $staff->id,
                                'phone_number_country_id' => rand(1, 195),
                            ]
                        );
                    });
            });
    }
}
