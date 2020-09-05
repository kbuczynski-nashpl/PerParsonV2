<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatabaseRelationshipsInit extends Migration
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
        Schema::table($this->userSettingsTable, function (Blueprint $table) {
            $table->foreign('user_id')
                  ->references('id')
                  ->on($this->usersTable)
                  ->cascadeOnDelete();
        });

        Schema::table($this->crmCompanyAddressesTable, function (Blueprint $table) {
            $table->foreign('crm_company_id')
                  ->references('id')
                  ->on($this->crmCompaniesTable)
                  ->cascadeOnDelete();

            $table->foreign('country_id')
                  ->references('id')
                  ->on($this->countriesTable);
        });

        Schema::table($this->crmCompanyPhoneTable, function (Blueprint $table) {
            $table->foreign('crm_company_id')
                  ->references('id')
                  ->on($this->crmCompaniesTable)
                  ->cascadeOnDelete();

            $table->foreign('country_id')
                  ->references('id')
                  ->on($this->countriesTable)
                  ->cascadeOnDelete();
        });

        Schema::table($this->crmCompanyTicketsTable, function (Blueprint $table) {
            $table->foreign('crm_company_id')
                  ->references('id')
                  ->on($this->crmCompaniesTable)
                  ->cascadeOnDelete();

            $table->foreign('type_id')
                  ->references('id')
                  ->on($this->crmCompanyTicketTypes)
                  ->cascadeOnDelete();
        });

        Schema::table($this->ticketsNotesTable, function (Blueprint $table) {
            $table->foreign('ticket_id')
                  ->references('id')
                  ->on($this->crmCompanyTicketsTable)
                  ->cascadeOnDelete();

            $table->foreign('created_by_id')
                  ->references('id')
                  ->on($this->usersTable)
                  ->cascadeOnDelete();

            $table->foreign('updated_by_id')
                  ->references('id')
                  ->on($this->usersTable)
                  ->cascadeOnDelete();
        });

        Schema::table($this->crmCompanyStaffTable, function (Blueprint $table) {
            $table->foreign('crm_company_id')
                  ->references('id')
                  ->on($this->crmCompaniesTable)
                  ->cascadeOnDelete();

            $table->foreign('position_id')
                  ->references('id')
                  ->on($this->crmCompanyStaffPositionsTable)
                  ->cascadeOnDelete();
        });

        Schema::table($this->crmStaffContacts, function (Blueprint $table) {
            $table->foreign('staff_id')
                  ->references('id')
                  ->on($this->crmCompanyStaffTable)
                  ->cascadeOnDelete();

            $table->foreign('phone_number_country_id')
                  ->references('id')
                  ->on($this->countriesTable);
        });

        Schema::table($this->crmCompaniesTable, function (Blueprint $table) {
            $table->foreign('company_type_id')
                  ->references('id')
                  ->on($this->crmCompanyTypeTable);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
