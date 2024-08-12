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
        Schema::create('reference_ranges', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_parameter_id')->nullable()->constrained()->cascadeOnDelete();
            $table->decimal('minimum_value', 8, 2)->nullable();
            $table->decimal('maximum_value', 8, 2)->nullable();
            $table->string('age_group')->default('Adult');
            $table->enum('gender', ['M', 'F'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reference_ranges');
    }
};
