<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PotionIngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('potion_ingredients')->insert([
            "ingredient_id" => 1,
            "potion_id" => 1,
        ]);

        DB::table('potion_ingredients')->insert([
            "ingredient_id" => 2,
            "potion_id" => 1,
        ]);
    }
}
