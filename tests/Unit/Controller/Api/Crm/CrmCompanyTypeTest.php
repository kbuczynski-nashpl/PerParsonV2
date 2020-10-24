<?php

namespace Tests\Unit\Controller\Api\Crm;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Symfony\Component\HttpFoundation\Response as Code;
use Tests\Helpers\SetUpHelper;
use Tests\TestCase;

class CrmCompanyTypeTest extends TestCase
{
    use DatabaseMigrations;
    use SetUpHelper;

    public function setUp(): void
    {
        parent::setUp();
        $this->setUpApplication();

    }

    public function testGetAllTypes()
    {
        $expectedStructure = [['id', 'type']];

        $this->actingAs($this->standardUser, 'api')
             ->getJson('/api/crm/type')
             ->assertStatus(Code::HTTP_OK)
             ->assertJsonStructure($expectedStructure);
    }

    public function testGetSingleType()
    {
        $expectedStructure = ['id', 'type'];

        $this->actingAs($this->standardUser, 'api')
             ->getJson('/api/crm/type/1')
             ->assertStatus(Code::HTTP_OK)
             ->assertJsonStructure($expectedStructure);
    }


    public function testPostNewType()
    {
    }

    public function testUpdateType()
    {

    }

    public function testDeleteType()
    {

    }

    public function testFailGettingWrongSingleType()
    {

    }

    public function testFailPostingNewType()
    {

    }

    public function testFailUpdatingType()
    {

    }

    public function testFailDeletingType()
    {

    }
}
