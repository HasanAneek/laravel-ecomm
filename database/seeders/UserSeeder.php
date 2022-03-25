<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('users')->insert([
            [
                'name' => 'Jane Doe',
                'email' => 'jane@doe.com',
                'password' => Hash::make('123456')
            ],
            [
                'name' => 'John Doe',
                'email' => 'john@doe.com',
                'password' => Hash::make('1234567')
            ]

        ]);
    }
}
