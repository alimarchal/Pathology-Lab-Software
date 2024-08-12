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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->string('title', 5)->nullable();
            $table->string('first_name', 60)->nullable();
            $table->string('last_name', 60)->nullable();
            $table->string('father_husband_name', 60)->nullable();
            $table->date('dob')->nullable();
            $table->unsignedSmallInteger('age')->nullable();
            $table->string('years_months')->nullable();
            $table->enum('sex',['Male','Female'])->default('Male');
            $table->string('blood_group')->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('email',50)->nullable();
            $table->string('mobile', 20)->nullable();
            $table->enum('email_alert',['Yes','No'])->default('No');
            $table->enum('mobile_alert',['Yes','No'])->default('No');
            $table->string('cnic', 15)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
