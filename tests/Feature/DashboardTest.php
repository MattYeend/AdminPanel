<?php

namespace Tests\Feature;

use App\Models\User;
use Spatie\Multitenancy\Models\Tenant;  // Import only the Tenant from Spatie package
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
        $tenant = Tenant::create([
            'name' => 'Test Tenant',
        ]);

        app()->instance(Tenant::class, $tenant);

        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/dashboard');
        $response->assertStatus(200);
    }
}
