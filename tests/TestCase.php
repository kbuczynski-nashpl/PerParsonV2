<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function setUp(): void
    {
        parent::setUp();

        $this->artisan('passport:install', ['--no-interaction' => true]);
        $this->artisan('key:generate', ['--no-interaction' => true]);
        $this->artisan('db:seed', ['--class' => 'CountrySeeder']);
        $this->artisan('db:seed', ['--class' => 'DatabaseSeeder']);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
