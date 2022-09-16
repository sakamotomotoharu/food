<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'たろう',
            'email' => 'tarou2025@gmail.com',
            'age' => 25,
            'password'=>'moto0426',
            ]);
    }
}
