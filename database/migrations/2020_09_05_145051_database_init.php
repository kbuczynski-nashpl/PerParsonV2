<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatabaseInit extends Migration
{
    private string $usersTable                    = 'users';
    private string $userSettingsTable             = 'user_settings';
    private string $crmCompanyTypeTable           = 'crm_company_types';
    private string $crmCompaniesTable             = 'crm_companies';
    private string $crmCompanyAddressesTable      = 'crm_company_addresses';
    private string $crmCompanyPhoneTable          = 'crm_company_phones';
    private string $crmCompanyTicketsTable        = 'crm_company_tickets';
    private string $crmCompanyTicketTypes         = 'crm_ticket_types';
    private string $ticketsNotesTable             = 'ticket_notes';
    private string $crmCompanyStaffTable          = 'crm_company_staff';
    private string $crmStaffContacts              = 'crm_company_contacts';
    private string $crmCompanyStaffPositionsTable = 'crm_company_staff_positions';
    private string $countriesTable                = 'countries';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // user table
        Schema::create($this->usersTable, function (Blueprint $table) {
            $table->id();
            $table->string('email', 255);
            $table->string('password', 255);
            $table->timestamps();
        });

        // user_settings table
        Schema::create($this->userSettingsTable, function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')
                  ->unsigned();
            $table->string('timezone', 255);
            $table->timestamps();
        });

        // crm_company_type
        Schema::create($this->crmCompanyTypeTable, function (Blueprint $table) {
            $table->id();
            $table->string('type', 50);
            $table->timestamps();
        });

        // crm_companies
        Schema::create($this->crmCompaniesTable, function (Blueprint $table) {
            $table->id();
            $table->string('company_name', 255);
            $table->bigInteger('company_type_id')
                  ->unsigned();
            $table->timestamps();
        });

        // crm_company_addresses
        Schema::create($this->crmCompanyAddressesTable, function (Blueprint $table) {
            $table->id();
            $table->bigInteger('crm_company_id')
                  ->unsigned();
            $table->string('address_line_1', 255);
            $table->string('address_line_2', '255')
                  ->nullable();
            $table->string('city', 255);
            $table->string('post_code', '25');
            $table->bigInteger('country_id')
                  ->unsigned();
            $table->timestamps();
        });

        // crm_company_phone
        Schema::create($this->crmCompanyPhoneTable, function (Blueprint $table) {
            $table->id();
            $table->bigInteger('crm_company_id')
                  ->unsigned();
            $table->string('phone_number', 30);
            $table->bigInteger('country_id')
                  ->unsigned();
            $table->timestamps();
        });

        // crm_company_topics
        Schema::create($this->crmCompanyTicketsTable, function (Blueprint $table) {
            $table->id();
            $table->bigInteger('crm_company_id')
                  ->unsigned();
            $table->bigInteger('type_id')
                  ->unsigned();
            $table->string('name', 255);
            $table->timestamps();
        });

        // crm_tickets_types
        Schema::create($this->crmCompanyTicketTypes, function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->timestamps();
        });

        // ticket_notes
        Schema::create($this->ticketsNotesTable, function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ticket_id')
                  ->unsigned();
            $table->text('text');
            $table->boolean('acknowledge')
                  ->default(false);
            $table->bigInteger('created_by_id')
                  ->unsigned();
            $table->bigInteger('updated_by_id')
                  ->unsigned();
            $table->timestamps();
        });

        // crm_company_staff
        Schema::create($this->crmCompanyStaffTable, function (Blueprint $table) {
            $table->id();
            $table->bigInteger('crm_company_id')
                  ->unsigned();
            $table->bigInteger('position_id')
                  ->unsigned();
            $table->string('title', 25);
            $table->string('firstname', 50);
            $table->string('lastname', 50);
            $table->timestamps();
        });

        // crm_company_staff_positions
        Schema::create($this->crmCompanyStaffPositionsTable, function (Blueprint $table) {
            $table->id();
            $table->string('position', 100);
            $table->timestamps();
        });

        // crm_staff_contact
        Schema::create($this->crmStaffContacts, function (Blueprint $table) {
            $table->id();
            $table->bigInteger('staff_id')
                  ->unsigned();
            $table->string('phone_number', 30)
                  ->nullable();
            $table->bigInteger('phone_number_country_id')
                  ->nullable()
                  ->unsigned();
            $table->string('email', 255)
                  ->nullable();
            $table->timestamps();
        });

        // country
        Schema::create($this->countriesTable, function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('short_name', 5);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();

        Schema::drop($this->usersTable);
        Schema::drop($this->userSettingsTable);
        Schema::drop($this->crmCompanyTypeTable);
        Schema::drop($this->crmCompaniesTable);
        Schema::drop($this->crmCompanyAddressesTable);
        Schema::drop($this->crmCompanyPhoneTable);
        Schema::drop($this->crmCompanyTicketsTable);
        Schema::drop($this->crmCompanyTicketTypes);
        Schema::drop($this->ticketsNotesTable);
        Schema::drop($this->crmCompanyStaffTable);
        Schema::drop($this->crmStaffContacts);
        Schema::drop($this->crmCompanyStaffPositionsTable);
        Schema::drop($this->countriesTable);

        Schema::enableForeignKeyConstraints();
    }
}
