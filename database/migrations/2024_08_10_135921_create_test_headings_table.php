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
        Schema::create('test_headings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_title_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('heading_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_headings');
    }
};
