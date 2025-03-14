<?php

namespace Tests\Feature;

use Spatie\Multitenancy\Models\Tenant;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    use RefreshDatabase;

    public function test_guests_are_redirected_to_the_login_page()
    {
        $response = $this->get('/dashboard');
        $response->assertRedirect('/login');
    }

    public function test_authenticated_users_can_visit_the_dashboard()
    {
        // Create a tenant
        $tenant = Tenant::create([
            'name' => 'Test Tenant',
        ]);

        // Manually initialize the tenant
        Tenant::initialize($tenant);

        // Create and authenticate a user
        $user = User::factory()->create();
        $this->actingAs($user);  // Authenticate the user

        // Visit the dashboard as the authenticated user with the tenant context
        $response = $this->get('/dashboard');
        $response->assertStatus(200);  // Ensure the response is OK
    }
}
