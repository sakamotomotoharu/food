<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'title' => 'とても作りやすい！',
            'body' => 'とても作りやすくておいしかったです。また食べたいなと思いました。',
            'review' => 4,
            'user_id' => 1,
            'recipe_id' => 1,
            ]);
    }
}
