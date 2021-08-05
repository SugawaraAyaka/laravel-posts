<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                'post_id' => 1,
                'user_id' => 1,
                'content' => 'コメント1' ,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'post_id' => 1,
                'user_id' => 2,
                'content' => 'コメント2',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'post_id' => 2,
                'user_id' => 1,
                'content' => 'コメント3',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'post_id' => 2,
                'user_id' => 2,
                'content' => 'コメント4',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'post_id' => 2,
                'user_id' => 3,
                'content' => 'コメント5',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
                ]
        ]);
    }
}
