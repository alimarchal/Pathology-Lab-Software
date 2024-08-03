<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);

        $this->call([
            DepartmentSeeder::class,
            CategorySeeder::class,
        ]);
//        DB::statement('UPDATE courses SET branch_id= 1');
//        DB::statement('UPDATE institute_classes SET branch_id= 1');
//        DB::statement('UPDATE users SET branch_id= 1');
        //php artisan migrate:fresh --seed --seeder=DatabaseSeeder
    }
}
