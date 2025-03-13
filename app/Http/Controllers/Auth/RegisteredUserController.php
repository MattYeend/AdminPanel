<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    /**
     * Show the registration page.
     */
    public function create(): Response
    {
        return Inertia::render('auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required|string|max:255', // Added validation for 'title'
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'salary' => 'required|integer',
            'first_line' => 'required|string|max:255',
            'second_line' => 'nullable|string|max:255',
            'town' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'county' => 'nullable|string|max:255',
            'country' => 'required|string|max:255',
            'post_code' => 'required|string|max:255',
            'full_or_part' => 'required|string|max:255',
            'region' => 'required|string|max:255',
            'timezone' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'is_live' => 'nullable|boolean',
            'role' => 'required|in:user,admin,super admin',
            'seniority' => 'required|in:junior,mid,senior',
        ]);

        $user = User::create([
            'title' => $request->title,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'salary' => $request->salary,
            'first_line' => $request->first_line,
            'second_line' => $request->second_line,
            'town' => $request->town,
            'city' => $request->city,
            'county' => $request->county,
            'country' => $request->country,
            'post_code' => $request->post_code,
            'full_or_part' => $request->full_or_part,
            'region' => $request->region,
            'timezone' => $request->timezone,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'is_live' => $request->is_live ?? true,
            'role' => $request->role,
            'seniority' => $request->seniority,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return to_route('dashboard');
    }
}
