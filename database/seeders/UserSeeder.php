<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert code using Seeder
        DB:: table('users')->insert([
            'name' => 'chrys rom1',
            'email' => 'chrys1.romao21@gmail.com',
            'password' => Hash::make('123456')
        ]);
    }
}
