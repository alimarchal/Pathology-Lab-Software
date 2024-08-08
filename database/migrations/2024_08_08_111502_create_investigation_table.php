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
        Schema::create('investigation', function (Blueprint $table) {
            $table->id();
            $table->string('investigation');
            $table->foreignId('test_id')->nullable()->constrained('tests');
            $table->foreignId('reference_value_id')->nullable()->constrained('reference_values');
            $table->foreignId('result_id')->nullable()->constrained('results');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investigation');
    }
};
