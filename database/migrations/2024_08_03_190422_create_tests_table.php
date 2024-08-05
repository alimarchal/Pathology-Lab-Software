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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
//            $table->foreignId('category_id')->constrained('categories')->cascadeOnUpdate();
            $table->foreignId('category_id')->nullable()->constrained('categories');
            $table->foreignId('unit_id')->nullable()->constrained('units');
            $table->string('name')->nullable();
            $table->string('description')->nullable();
//            $table->string('synonym')->nullable();
//            $table->string('also_known')->nullable();
//            $table->string('purpose')->nullable();
//            $table->string('sample_type')->nullable();
//            $table->string('preparation')->nullable();
//            $table->string('fasting')->nullable();
//            $table->string('gender')->nullable();
//            $table->string('age_group')->nullable();
//            $table->string('normal_values')->nullable();
//            $table->string('reporting_time')->nullable();
//            $table->string('cost')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
