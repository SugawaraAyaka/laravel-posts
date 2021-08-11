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
            [
                'name' => 'Sugawara Ayaka',
                'email' => 'ayaka@gmail.com',
                'password' => Hash::make('ayaka0000')
            ],
            [
                'name' => 'Yamada tarou',
                'email' => 'yamada@gmail.com',
                'password' => Hash::make('yamada0000')
            ],
            [
                'name' => 'Hanako',
                'email' => 'hanako@gmail.com',
                'password' => Hash::make('Hanako0000')
            ]
        ]);
    }
}
