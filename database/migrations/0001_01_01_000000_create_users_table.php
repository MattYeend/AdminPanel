<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('profile_picture')->nullable();
            $table->string('cv_path')->nullable();
            $table->string('cover_letter_path')->nullable();
            $table->string('phone')->nullable();
            $table->integer('salary');
            $table->string('first_line');
            $table->string('second_line')->nullable();
            $table->string('town')->nullable();
            $table->string('city')->nullable();
            $table->string('county')->nullable();
            $table->string('country');
            $table->string('post_code');
            $table->string('full_or_part');
            $table->string('region');
            $table->string('timezone');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->boolean('is_live')->default(true);
            $table->enum('role', ['user', 'admin', 'super admin'])->default('user');
            $table->enum('seniority', ['junior', 'mid', 'senior'])->default('junior');
            $table->unsignedBigInteger('department_id')->nullable();
            $table->unsignedBigInteger('job_id')->nullable();
            $table->unsignedBigInteger('holiday_entitlement_id')->nullable();
            $table->unsignedBigInteger('contact_id')->nullable();
            $table->unsignedBigInteger('contract_id')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
