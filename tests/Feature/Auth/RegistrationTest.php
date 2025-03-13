<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }

    public function test_new_users_can_register()
    {
        $response = $this->post('/register', [
            'title' => 'Mr.', // Ensure the title is included
            'first_name' => 'Test',
            'middle_name' => 'Middle',
            'last_name' => 'User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
            'salary' => 50000,
            'first_line' => '123 Test Street',
            'second_line' => 'Apt 1',
            'town' => 'Test Town',
            'city' => 'Test City',
            'county' => 'Test County',
            'country' => 'Testland',
            'post_code' => '12345',
            'full_or_part' => 'full-time',
            'region' => 'Test Region',
            'timezone' => 'UTC',
            'start_date' => now()->toDateString(),
            'end_date' => null,
            'is_live' => true,
            'role' => 'user',
            'seniority' => 'junior',
        ]);

        $response->assertSessionDoesntHaveErrors();
        $response->assertRedirect(route('dashboard'));

        $this->assertDatabaseHas('users', [
            'email' => 'test@example.com',
            'first_name' => 'Test',
            'last_name' => 'User',
            'title' => 'Mr.',
        ]);

        $user = \App\Models\User::where('email', 'test@example.com')->first();
        $this->assertNotNull($user);
        $this->assertTrue(Hash::check('password', $user->password));

        $this->assertAuthenticated();
    }
}
