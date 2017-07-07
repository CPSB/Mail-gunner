<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class ConfigViewTest
 *
 * @package Tests\Feature
 */
class ConfigViewTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    public function testConfigDatabaseAuth()
    {

    }

    public function testConfigDatabaseUnAuthencated()
    {

    }

    public function testConfigBackupsAuthencated()
    {

    }

    public function testConfigBackupsUnAuthencated()
    {

    }

    public function testConfigSmtpAuthencated()
    {

    }

    public function testConfigSmtpUnAuthencated()
    {

    }

    /**
     * Try as authencated user viewing the config page for github.
     *
     * @test
     */
    public function testConfigGithubAuthencated()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->get(route('config.github'))
            ->assertStatus(200);
    }

    /**
     * Try as unauthencated user viewing the config page for github.
     *
     * @test
     */
    public function testConfigGithubUnAuthencated()
    {
        $this->get(route('config.github'))
            ->assertStatus(302)
            ->assertRedirect(route('login'));
    }
}
