<?php

namespace Tests\Feature;


use App\Models\Tenant;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    use RefreshDatabase;

    public function test_guests_are_redirected_to_the_login_page()
    {
        // Test that guests are redirected to the login page
        $response = $this->get('/dashboard');
        $response->assertRedirect('/login');
    }

    public function test_authenticated_users_can_visit_the_dashboard()
    {
        $tenant = Tenant::create([
            'name' => 'Test Tenant', // Add any other attributes you need
            'domain' => 'test-tenant.com', // Provide a value for the domain field
        ]);
    
        // Manually initialize the tenant (if necessary based on your multitenancy setup)
        Tenant::initialize($tenant);
    
        // Create a verified user
        $user = User::factory()->create([
            'email_verified_at' => now(), // Ensure the user is verified
        ]);
        $this->actingAs($user);  // Authenticate the user
    
        // Visit the dashboard as the authenticated user
        $response = $this->get('/dashboard');
        $response->assertStatus(200); 
    }
}