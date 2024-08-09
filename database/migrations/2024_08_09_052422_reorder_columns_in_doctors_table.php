<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('doctors', function (Blueprint $table) {
            $table->renameColumn('signature', 'signature_old');
        });

        //Add a new column with the regular name:
        Schema::table('doctors', function(Blueprint $table)
        {
            $table->binary('signature')->nullable()->after('qualifications');
        });

        //Copy the data across to the new column:
        DB::table('doctors')->update([
            'signature' => DB::raw('signature_old')
        ]);

        //Remove the old column:
        Schema::table('doctors', function(Blueprint $table)
        {
            $table->dropColumn('signature_old');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('doctors', function (Blueprint $table) {
            //
        });
    }
};
