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
        \DB::table('users')->insert([
            'name' => 'Sugawara Ayaka',
            'email' => 'Ayaka@gmai.com',
            'password' => Hash::make('ayaka0000')
        ]);
        \DB::table('users')->insert([
            'name' => 'Yamada tarou',
            'email' => 'yamada@gmai.com',
            'password' => Hash::make('yamada0000'),
        ]);
        \DB::table('users')->insert([
            'name' => 'Hanako',
            'email' => 'Hanako@gmai.com',
            'password' => Hash::make('Hanako0000'),
        ]);
    }
}
