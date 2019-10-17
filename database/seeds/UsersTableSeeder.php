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
            'name' => 'muna',
            'email' => 'saskia123@gmail.com',
            'password' => '12345',
        ]);
    }
}
