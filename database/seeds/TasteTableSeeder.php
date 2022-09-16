<?php

use Illuminate\Database\Seeder;

class TasteTableSeeder extends Seeder
{
   public function run()
    {
        DB::table('tastes')->insert([
            'name' => '辛い',
        ]);
        DB::table('tastes')->insert([
            'name' => '甘い',
        ]);
         DB::table('tastes')->insert([
            'name' => '苦い',
        ]);
         DB::table('tastes')->insert([
            'name' => 'しょっぱい',
        ]);
         DB::table('tastes')->insert([
            'name' => '酸っぱい',
        ]);
    }
}
