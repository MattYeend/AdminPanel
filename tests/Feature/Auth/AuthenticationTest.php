<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Tenant as AppTenant; // Alias the model Tenant
use Spatie\Multitenancy\Models\Tenant;  // Alias the facade

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        // Check if there's at least one tenant in the database
        $tenant = AppTenant::first(); // Use the aliased model here

        // If no tenant exists, create a mock tenant for testing
        if (!$tenant) {
            // Create a tenant instance with mass assignable fields
            $tenant = AppTenant::create([
                'name' => 'Test Tenant',
                'domain' => 'test-tenant.local', // This is your domain
            ]);
        }

        // Set the current tenant for the application using the full path
        Tenant::setCurrent($tenant); 
    }


    public function test_login_screen_can_be_rendered()
    {    
        $response = $this->get('/login');
    
        $response->assertStatus(200);
    }

    public function test_users_can_authenticate_using_the_login_screen()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(route('dashboard', absolute: false));
    }

    public function test_users_can_not_authenticate_with_invalid_password()
    {
        $user = User::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    }

    public function test_users_can_logout()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/logout');

        $this->assertGuest();
        $response->assertRedirect('/');
    }
}
