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
            'name' => 'test1',
            'email' => 'test@test.com',
            'password' => bcrypt('test') 
        ]);
        DB::table('users')->insert([
            'name' => 'test2',
            'email' => 'test2@test2.com',
            'password' => bcrypt('test2') 
        ]);
        
    }
}
