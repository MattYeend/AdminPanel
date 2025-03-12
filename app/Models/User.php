<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'title',
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'password',
        'profile_picture',
        'cv_path',
        'cover_letter_path',
        'phone',
        'salary',
        'first_line',
        'second_line',
        'town',
        'city',
        'county',
        'country',
        'post_code',
        'full_or_part',
        'region',
        'timezone',
        'start_date',
        'end_date',
        'is_live',
        'role',
        'seniority',
        'department_id',
        'job_id',
        'holiday_entitlement_id',
        'contact_id',
        'contract_id',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'start_date' => 'date',
            'end_date' => 'date',
            'is_live' => 'boolean',
            'role' => 'string',
            'seniority' => 'string',
        ];
    }
}
