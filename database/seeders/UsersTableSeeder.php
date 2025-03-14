<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'title' => 'Mr.',
                'first_name' => 'Test',
                'middle_name' => null,
                'last_name' => 'User',
                'email' => 'test@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password'),
                'remember_token' => null,
                'profile_picture' => null,
                'cv_path' => null,
                'cover_letter_path' => null,
                'phone' => null,
                'salary' => 50000,
                'first_line' => '123 Main St',
                'second_line' => null,
                'town' => 'Test Town',
                'city' => 'Test City',
                'county' => null,
                'country' => 'CountryName',
                'post_code' => '12345',
                'full_or_part' => 'full',
                'region' => 'Test Region',
                'timezone' => 'UTC',
                'start_date' => Carbon::now(),
                'end_date' => null,
                'is_live' => true,
                'role' => 'user',
                'seniority' => 'junior',
                'department_id' => null,
                'job_id' => null,
                'holiday_entitlement_id' => null,
                'contact_id' => null,
                'contract_id' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'title' => 'Ms.',
                'first_name' => 'Jane',
                'middle_name' => null,
                'last_name' => 'Doe',
                'email' => 'jane.doe@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password'),
                'remember_token' => null,
                'profile_picture' => null,
                'cv_path' => null,
                'cover_letter_path' => null,
                'phone' => '1234567890',
                'salary' => 60000,
                'first_line' => '456 Elm St',
                'second_line' => null,
                'town' => 'Sample Town',
                'city' => 'Sample City',
                'county' => null,
                'country' => 'Sample Country',
                'post_code' => '67890',
                'full_or_part' => 'part',
                'region' => 'Sample Region',
                'timezone' => 'UTC',
                'start_date' => Carbon::now(),
                'end_date' => null,
                'is_live' => true,
                'role' => 'admin',
                'seniority' => 'mid',
                'department_id' => null,
                'job_id' => null,
                'holiday_entitlement_id' => null,
                'contact_id' => null,
                'contract_id' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'title' => 'Dr.',
                'first_name' => 'John',
                'middle_name' => 'W.',
                'last_name' => 'Smith',
                'email' => 'john.smith@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password'),
                'remember_token' => null,
                'profile_picture' => null,
                'cv_path' => null,
                'cover_letter_path' => null,
                'phone' => '9876543210',
                'salary' => 75000,
                'first_line' => '789 Oak St',
                'second_line' => null,
                'town' => 'Oak Town',
                'city' => 'Oak City',
                'county' => null,
                'country' => 'Oakland',
                'post_code' => '54321',
                'full_or_part' => 'full',
                'region' => 'Oak Region',
                'timezone' => 'UTC',
                'start_date' => Carbon::now(),
                'end_date' => null,
                'is_live' => true,
                'role' => 'super admin',
                'seniority' => 'senior',
                'department_id' => null,
                'job_id' => null,
                'holiday_entitlement_id' => null,
                'contact_id' => null,
                'contract_id' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'title' => 'Mr.',
                'first_name' => 'David',
                'middle_name' => 'J.',
                'last_name' => 'Williams',
                'email' => 'david.williams@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password'),
                'remember_token' => null,
                'profile_picture' => null,
                'cv_path' => null,
                'cover_letter_path' => null,
                'phone' => '2345678901',
                'salary' => 55000,
                'first_line' => '101 Pine St',
                'second_line' => null,
                'town' => 'Pine Town',
                'city' => 'Pine City',
                'county' => null,
                'country' => 'Pine Land',
                'post_code' => '45678',
                'full_or_part' => 'full',
                'region' => 'Pine Region',
                'timezone' => 'UTC',
                'start_date' => Carbon::now(),
                'end_date' => null,
                'is_live' => true,
                'role' => 'user',
                'seniority' => 'junior',
                'department_id' => null,
                'job_id' => null,
                'holiday_entitlement_id' => null,
                'contact_id' => null,
                'contract_id' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'title' => 'Ms.',
                'first_name' => 'Emily',
                'middle_name' => null,
                'last_name' => 'Brown',
                'email' => 'emily.brown@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password'),
                'remember_token' => null,
                'profile_picture' => null,
                'cv_path' => null,
                'cover_letter_path' => null,
                'phone' => '3456789012',
                'salary' => 65000,
                'first_line' => '102 Maple St',
                'second_line' => null,
                'town' => 'Maple Town',
                'city' => 'Maple City',
                'county' => null,
                'country' => 'Maple Land',
                'post_code' => '56789',
                'full_or_part' => 'part',
                'region' => 'Maple Region',
                'timezone' => 'UTC',
                'start_date' => Carbon::now(),
                'end_date' => null,
                'is_live' => true,
                'role' => 'admin',
                'seniority' => 'mid',
                'department_id' => null,
                'job_id' => null,
                'holiday_entitlement_id' => null,
                'contact_id' => null,
                'contract_id' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'title' => 'Dr.',
                'first_name' => 'Michael',
                'middle_name' => null,
                'last_name' => 'Johnson',
                'email' => 'michael.johnson@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password'),
                'remember_token' => null,
                'profile_picture' => null,
                'cv_path' => null,
                'cover_letter_path' => null,
                'phone' => '4567890123',
                'salary' => 80000,
                'first_line' => '103 Birch St',
                'second_line' => null,
                'town' => 'Birch Town',
                'city' => 'Birch City',
                'county' => null,
                'country' => 'Birch Land',
                'post_code' => '67890',
                'full_or_part' => 'full',
                'region' => 'Birch Region',
                'timezone' => 'UTC',
                'start_date' => Carbon::now(),
                'end_date' => null,
                'is_live' => true,
                'role' => 'super admin',
                'seniority' => 'senior',
                'department_id' => null,
                'job_id' => null,
                'holiday_entitlement_id' => null,
                'contact_id' => null,
                'contract_id' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'title' => 'Mr.',
                'first_name' => 'Chris',
                'middle_name' => 'A.',
                'last_name' => 'Davis',
                'email' => 'chris.davis@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password'),
                'remember_token' => null,
                'profile_picture' => null,
                'cv_path' => null,
                'cover_letter_path' => null,
                'phone' => '5678901234',
                'salary' => 70000,
                'first_line' => '104 Cedar St',
                'second_line' => null,
                'town' => 'Cedar Town',
                'city' => 'Cedar City',
                'county' => null,
                'country' => 'Cedar Land',
                'post_code' => '78901',
                'full_or_part' => 'full',
                'region' => 'Cedar Region',
                'timezone' => 'UTC',
                'start_date' => Carbon::now(),
                'end_date' => null,
                'is_live' => true,
                'role' => 'user',
                'seniority' => 'junior',
                'department_id' => null,
                'job_id' => null,
                'holiday_entitlement_id' => null,
                'contact_id' => null,
                'contract_id' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'title' => 'Ms.',
                'first_name' => 'Laura',
                'middle_name' => null,
                'last_name' => 'Martin',
                'email' => 'laura.martin@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password'),
                'remember_token' => null,
                'profile_picture' => null,
                'cv_path' => null,
                'cover_letter_path' => null,
                'phone' => '6789012345',
                'salary' => 80000,
                'first_line' => '105 Oak St',
                'second_line' => null,
                'town' => 'Oakville',
                'city' => 'Oak City',
                'county' => null,
                'country' => 'Oak Country',
                'post_code' => '89012',
                'full_or_part' => 'part',
                'region' => 'Oak Region',
                'timezone' => 'UTC',
                'start_date' => Carbon::now(),
                'end_date' => null,
                'is_live' => true,
                'role' => 'admin',
                'seniority' => 'mid',
                'department_id' => null,
                'job_id' => null,
                'holiday_entitlement_id' => null,
                'contact_id' => null,
                'contract_id' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ]
        ];

        // Insert multiple records into the users table
        DB::table('users')->insert($users);
    }
}
