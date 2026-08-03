<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FilamentAdminLoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_login_page_is_accessible(): void
    {
        $response = $this->get('/admin/login');

        $response->assertStatus(200);
    }

    public function test_admin_can_authenticate_with_seeded_credentials(): void
    {
        $user = User::factory()->create([
            'email' => 'devadeva2330@gmail.com',
            'password' => bcrypt('Deva@8363'),
        ]);

        $this->assertDatabaseHas('users', [
            'email' => 'devadeva2330@gmail.com',
        ]);

        $this->actingAs($user);

        $response = $this->get('/admin');
        $response->assertStatus(200);
    }
}
