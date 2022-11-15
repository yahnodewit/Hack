<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert([
            'name' => 'mare tak',
            'value' => rand(0,30),
        ]);

        DB::table('ingredients')->insert([
            'name' => 'steen gruis',
            'value' => rand(0,30),
        ]);

        DB::table('ingredients')->insert([
            'name' => 'slakken slijm',
            'value' => rand(0,30),
        ]);
    }
}
