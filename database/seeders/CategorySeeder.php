<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['department_id' => 1, 'name' => 'Hematology'],
            ['department_id' => 1, 'name' => 'Biochemistry'],
            ['department_id' => 1, 'name' => 'Clinical Pathology'],
            ['department_id' => 1, 'name' => 'Cytopathology'],
            ['department_id' => 1, 'name' => 'Histopathology'],
            ['department_id' => 2, 'name' => 'Immunology and Serology'],
            ['department_id' => 2, 'name' => 'Microbiology'],
            ['department_id' => 2, 'name' => 'Molecular Genetics'],
            ['department_id' => 2, 'name' => 'Endocrinology'],
            ['department_id' => 2, 'name' => 'Tumor Markers'],
            ['department_id' => 3, 'name' => 'CT Scan'],
            ['department_id' => 3, 'name' => 'MRI'],
            ['department_id' => 3, 'name' => 'Ultrasound/Sonography'],
            ['department_id' => 3, 'name' => 'X-rays'],
            ['department_id' => 3, 'name' => 'Mammography'],
            ['department_id' => 4, 'name' => 'PET Scan'],
            ['department_id' => 4, 'name' => 'Angiography'],
            ['department_id' => 4, 'name' => 'Fluoroscopy'],
            ['department_id' => 4, 'name' => 'DEXA Scan'],
            ['department_id' => 4, 'name' => 'Nuclear Medicine Imaging'],
        ];

        foreach ($data as $item) {
            Category::create([
                'department_id' => $item['department_id'],
                'name' => $item['name'],
            ]);
        }
    }
}
