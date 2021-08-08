<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'test1',
            'content' => 'test1',
        ]);
            
        DB::table('posts')->insert([
            'title' => 'test2',
            'content' => 'test2',
        ]);
            
    }
}
