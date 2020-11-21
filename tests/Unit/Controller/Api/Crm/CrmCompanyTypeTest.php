<?php

namespace Tests\Unit\Controller\Api\Crm;

use App\Models\Crm\CrmCompanyType;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
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
        $post = ['type' => 'New Test Type'];

        $this->actingAs($this->standardUser, 'api')
             ->postJson('/api/crm/type', $post)
             ->assertStatus(Code::HTTP_CREATED)
             ->assertJsonFragment($post);
    }

    public function testUpdateType()
    {
        $put = ['type' => 'Updated Type'];

        $this->actingAs($this->standardUser, 'api')
             ->putJson('/api/crm/type/1', $put)
             ->assertStatus(Code::HTTP_OK)
             ->assertJsonFragment($put);
    }

    public function testDeleteType()
    {
        /** @var CrmCompanyType $newType */
        $newType = factory(CrmCompanyType::class)->create(['type' => Str::random(10)]);

        $this->actingAs($this->standardUser, 'api')
             ->delete("/api/crm/type/{$newType->id}")
             ->assertStatus(Code::HTTP_NO_CONTENT);

        $this->assertDatabaseMissing('crm_company_types', ['type' => $newType->type]);
    }

    public function testFailGettingWrongSingleType()
    {
        $this->actingAs($this->standardUser, 'api')
             ->get('/api/crm/type/99')
             ->assertStatus(Code::HTTP_NOT_FOUND);

        $this->actingAs($this->standardUser, 'api')
             ->get('/apu/crm/type/apple')
             ->assertStatus(Code::HTTP_NOT_FOUND);
    }

    public function testFailPostingNewType()
    {
        $post = [];

        $this->actingAs($this->standardUser, 'api')
             ->postJson('/api/crm/type', $post)
             ->assertStatus(Code::HTTP_UNPROCESSABLE_ENTITY);

        $post = ['type' => ''];

        $this->actingAs($this->standardUser, 'api')
             ->postJson('/api/crm/type', $post)
             ->assertStatus(Code::HTTP_UNPROCESSABLE_ENTITY);

        $post = ['type', Str::random(51)];

        $this->actingAs($this->standardUser, 'api')
             ->postJson('/api/crm/type', $post)
             ->assertStatus(Code::HTTP_UNPROCESSABLE_ENTITY);

        $post = ['type' => 'ACTIVE'];

        $this->actingAs($this->standardUser, 'api')
             ->postJson('/api/crm/type', $post)
             ->assertStatus(Code::HTTP_UNPROCESSABLE_ENTITY);
    }

    public function testFailUpdatingType()
    {
        $post = [];

        $this->actingAs($this->standardUser, 'api')
             ->putJson('/api/crm/type/1', $post)
             ->assertStatus(Code::HTTP_BAD_REQUEST);

        $post = ['type' => ''];

        $this->actingAs($this->standardUser, 'api')
             ->putJson('/api/crm/type/1', $post)
             ->assertStatus(Code::HTTP_BAD_REQUEST);

        $post = ['type', Str::random(51)];

        $this->actingAs($this->standardUser, 'api')
             ->putJson('/api/crm/type/1', $post)
             ->assertStatus(Code::HTTP_BAD_REQUEST);

        $post = ['type' => 'ARCHIVED'];

        $this->actingAs($this->standardUser, 'api')
             ->putJson('/api/crm/type/1', $post)
             ->assertStatus(Code::HTTP_BAD_REQUEST);

        $post = ['type' => 'NEW TEST'];

        $this->actingAs($this->standardUser, 'api')
             ->putJson('/api/crm/type/99', $post)
             ->assertStatus(Code::HTTP_BAD_REQUEST);
    }

    public function testFailDeletingType()
    {
        $this->actingAs($this->standardUser, 'api')
             ->delete('/api/crm/type/99')
             ->assertStatus(Code::HTTP_NOT_FOUND);

        $this->actingAs($this->standardUser, 'api')
            ->delete('/api/crm/type/1')
            ->assertStatus(Code::HTTP_CONFLICT);
    }
}
