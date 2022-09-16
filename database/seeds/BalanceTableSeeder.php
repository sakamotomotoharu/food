<?php

use Illuminate\Database\Seeder;

class BalanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('balances')->insert([
            'name' => '主食',
        ]);
        DB::table('balances')->insert([
            'name' => '主菜',
        ]);
        DB::table('balances')->insert([
            'name' => '副菜',
        ]);
        DB::table('balances')->insert([
            'name' => 'デザート',
        ]);
    }
}
