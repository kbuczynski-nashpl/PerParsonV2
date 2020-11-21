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

class TestingSeeder extends Seeder
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
        factory(User::class, 3)->create();

        factory(UserSettings::class, 1)->create(['user_id' => 1]);
        factory(UserSettings::class, 1)->create(['user_id' => 2]);
        factory(UserSettings::class, 1)->create(['user_id' => 3]);
    }

    private function seedCrmCompanies()
    {
        factory(CrmCOmpany::class, 5)
            ->create(['company_type_id' => 1])
            ->each(function ($company) {
                factory(CrmCompanyAddress::class, 5)->create(
                    [
                        'crm_company_id' => $company->id,
                        'country_id'     => rand(1, 195),
                    ]
                );

                factory(CrmCompanyPhone::class, 5)->create(
                    [
                        'crm_company_id' => $company->id,
                        'country_id'     => rand(1, 195),
                    ]
                );

                factory(CrmCompanyTicket::class, 5)
                    ->create(
                        [
                            'crm_company_id' => $company->id,
                            'type_id'        => rand(1, 3),
                        ]
                    )
                    ->each(function ($ticket) {
                        factory(TicketNotes::class, 5)->create(
                            [
                                'ticket_id'     => $ticket->id,
                                'created_by_id' => rand(1, 3),
                                'updated_by_id' => rand(1, 3),
                            ]
                        );
                    });

                factory(CrmCompanyStaff::class, 5)
                    ->create(
                        [
                            'crm_company_id' => $company->id,
                            'position_id'    => rand(1, 6),
                        ]
                    )
                    ->each(function ($staff) {
                        factory(CrmCompanyContacts::class, 5)->create(
                            [
                                'staff_id'                => $staff->id,
                                'phone_number_country_id' => rand(1, 195),
                            ]
                        );
                    });
            });

        factory(CrmCompany::class, 5)
            ->create(['company_type_id' => rand(2, 4)])
            ->each(function ($company) {
                factory(CrmCompanyAddress::class, 5)->create(
                    [
                        'crm_company_id' => $company->id,
                        'country_id'     => rand(1, 195),
                    ]
                );

                factory(CrmCompanyPhone::class, 5)->create(
                    [
                        'crm_company_id' => $company->id,
                        'country_id'     => rand(1, 195),
                    ]
                );

                factory(CrmCompanyTicket::class, 5)
                    ->create(
                        [
                            'crm_company_id' => $company->id,
                            'type_id'        => rand(1, 3),
                        ]
                    )
                    ->each(function ($ticket) {
                        factory(TicketNotes::class, 5)->create(
                            [
                                'ticket_id'     => $ticket->id,
                                'created_by_id' => rand(1, 3),
                                'updated_by_id' => rand(1, 3),
                            ]
                        );
                    });

                factory(CrmCompanyStaff::class, 5)
                    ->create(
                        [
                            'crm_company_id' => $company->id,
                            'position_id'    => rand(1, 6),
                        ]
                    )
                    ->each(function ($staff) {
                        factory(CrmCompanyContacts::class, 5)->create(
                            [
                                'staff_id'                => $staff->id,
                                'phone_number_country_id' => rand(1, 195),
                            ]
                        );
                    });
            });
    }
}
