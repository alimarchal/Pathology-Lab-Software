<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $units = [
            ['name' => 'mg/dL', 'description' => 'milligrams per deciliter'],
            ['name' => 'mmol/L', 'description' => 'millimoles per liter'],
            ['name' => 'g/dL', 'description' => 'grams per deciliter'],
            ['name' => 'IU/L', 'description' => 'international units per liter'],
            ['name' => 'ng/mL', 'description' => 'nanograms per milliliter'],
            ['name' => 'U/L', 'description' => 'units per liter'],
            ['name' => 'mEq/L', 'description' => 'milliequivalents per liter'],
            ['name' => 'µg/dL', 'description' => 'micrograms per deciliter'],
            ['name' => 'pg/mL', 'description' => 'picograms per milliliter'],
            ['name' => '%', 'description' => 'percentage'],
            ['name' => 'fL', 'description' => 'femtoliters'],
            ['name' => '10^9/L', 'description' => 'billion cells per liter'],
            ['name' => '10^6/µL', 'description' => 'million cells per microliter'],
            ['name' => 'cells/µL', 'description' => 'cells per microliter'],
            ['name' => 'mg/L', 'description' => 'milligrams per liter'],
            ['name' => 'µmol/L', 'description' => 'micromoles per liter'],
            ['name' => 'ng/dL', 'description' => 'nanograms per deciliter'],
            ['name' => 'µg/L', 'description' => 'micrograms per liter'],
            ['name' => 'mL/min', 'description' => 'milliliters per minute'],
            ['name' => 'mL/hr', 'description' => 'milliliters per hour'],
            ['name' => 'mL/beat', 'description' => 'milliliters per beat'],
            ['name' => 'cm/s', 'description' => 'centimeters per second'],
            ['name' => 'kU/L', 'description' => 'kilo units per liter'],
            ['name' => 'µkat/L', 'description' => 'micokatal per liter'],
            ['name' => 'mmol/mol', 'description' => 'millimoles per mole'],
            ['name' => 'mmol/24h', 'description' => 'millimoles per 24 hours'],
            ['name' => 'pg/mg', 'description' => 'picograms per milligram'],
            ['name' => 'µg/24h', 'description' => 'micrograms per 24 hours'],
            ['name' => 'dB', 'description' => 'decibels'],
            ['name' => 'g/mL', 'description' => 'grams per milliliter'],
            ['name' => 'nmol/L', 'description' => 'nanomoles per liter'],
            ['name' => 'pmol/L', 'description' => 'picomoles per liter'],
            ['name' => 'mU/L', 'description' => 'milliunits per liter'],
            ['name' => 'g/24h', 'description' => 'grams per 24 hours'],
            ['name' => 'nmol/24h', 'description' => 'nanomoles per 24 hours'],
            ['name' => 'pmol/24h', 'description' => 'picomoles per 24 hours'],
            ['name' => 'mmol/L/h', 'description' => 'millimoles per liter per hour'],
            ['name' => '%/h', 'description' => 'percentage per hour'],
            ['name' => 'mg/mL', 'description' => 'milligrams per milliliter'],
            ['name' => 'mg/mmol', 'description' => 'milligrams per millimole'],
            ['name' => 'mmol/mmol', 'description' => 'millimoles per millimole'],
            ['name' => 'ng/mmol', 'description' => 'nanograms per millimole'],
            ['name' => 'µmol/mmol', 'description' => 'micromoles per millimole'],
            ['name' => 'ratio', 'description' => 'unitless ratio'],
            ['name' => 'U/g', 'description' => 'units per gram'],
            ['name' => '%T', 'description' => 'percent transmittance'],
            ['name' => 'cm', 'description' => 'centimeters'],
            ['name' => 'µmol/g', 'description' => 'micromoles per gram'],
            ['name' => 'mU/mmol', 'description' => 'milliunits per millimole'],
            ['name' => 'µU/mL', 'description' => 'microunits per milliliter'],
            ['name' => 'U/mg', 'description' => 'units per milligram'],
            ['name' => 'mg/d', 'description' => 'milligrams per day'],
            ['name' => 'mL', 'description' => 'milliliters'],
            ['name' => 'L', 'description' => 'liters'],
            ['name' => 'cells/mL', 'description' => 'cells per milliliter'],
            ['name' => 'MFI', 'description' => 'mean fluorescence intensity'],
            ['name' => 'MCHC', 'description' => 'mean corpuscular hemoglobin concentration'],
            ['name' => 'MCV', 'description' => 'mean corpuscular volume'],
            ['name' => 'RDW', 'description' => 'red cell distribution width'],
            ['name' => '10^12/L', 'description' => 'trillion cells per liter'],
            ['name' => 'pH', 'description' => 'hydrogen ion concentration'],
            // Additional Units
            ['name' => 'pg', 'description' => 'picograms'],
            ['name' => 'mg', 'description' => 'milligrams'],
            ['name' => 'µg', 'description' => 'micrograms'],
            ['name' => 'g', 'description' => 'grams'],
            ['name' => 'mIU/mL', 'description' => 'milli-international units per milliliter'],
            ['name' => 'µmol', 'description' => 'micromoles'],
            ['name' => 'nmol', 'description' => 'nanomoles'],
            ['name' => 'IU/dL', 'description' => 'international units per deciliter'],
            ['name' => 'ng/dL', 'description' => 'nanograms per deciliter'],
            ['name' => 'mU/g Hb', 'description' => 'milliunits per gram hemoglobin'],
        ];


        DB::table('units')->insert($units);
    }
}
