<?php

use Illuminate\Database\Seeder;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->insert([
            'name' => '夏野菜カレー',
            'user_id' => 1,
            'taste_id' => 1,
            'balance_id' => 1,
            ]);
    }
}
