<?php

namespace Database\Seeders\Traits;

use App\Models\Crm\CrmCompany;
use App\Models\Crm\CrmCompanyAddress;
use App\Models\Crm\CrmCompanyContacts;
use App\Models\Crm\CrmCompanyPhone;
use App\Models\Crm\CrmCompanyStaff;
use App\Models\Crm\CrmCompanyTicket;
use App\Models\Crm\TicketNotes;
use App\Models\User;
use App\Models\UserSettings;

trait FactoryHelper
{
    protected function seedUsers(array $count = [])
    {
        if (empty($count)) {
            $count = ['user' => 9];
        }

        User::factory()->create([
            'email'    => 'admin@admin.com',
            'password' => bcrypt('Password1!'),
        ]);

        User::factory()->count($count['user'])->create();


        for ($i = 1; $i <= $count['user'] + 1; $i++) {
            UserSettings::factory()->create(['user_id' => $i]);
        }
    }

    protected function seedCrmCompanies(array $count = [])
    {
        if (empty($count)) {
            $count = [
                'company'       => 20,
                'address'       => 10,
                'phone'         => 10,
                'tickets'       => 5,
                'notes'         => 5,
                'staff'         => 5,
                'staff_contact' => 5,
            ];
        }

        for ($i = 1; $i <= $count['company']; $i++) {
            $company = CrmCompany::factory()->create(['company_type_id' => rand(1, 4)]);

            CrmCompanyAddress::factory()->count($count['address'])->create([
                'crm_company_id' => $company->id,
                'country_id'     => rand(1, 195),
            ]);

            CrmCompanyPhone::factory()->count($count['phone'])->create([
                'crm_company_id' => $company->id,
                'country_id'     => rand(1, 195),
            ]);

            $ticket = CrmCompanyTicket::factory()->count($count['tickets'])->create([
                'crm_company_id' => $company->id,
                'type_id'        => rand(1, 3),
            ]);

            TicketNotes::factory()->count($count['notes'])->create([
                'ticket_id'     => ($ticket->random())->id,
                'created_by_id' => rand(1, 10),
                'updated_by_id' => rand(1, 10),
            ]);

            $staff = CrmCompanyStaff::factory()->count($count['staff'])->create([
                'crm_company_id' => $company->id,
                'position_id'    => rand(1, 6),
            ]);

            CrmCompanyContacts::factory()->count($count['staff_contact'])->create([
                'staff_id'                => ($staff->random())->id,
                'phone_number_country_id' => rand(1, 195),
            ]);
        }
    }
}
