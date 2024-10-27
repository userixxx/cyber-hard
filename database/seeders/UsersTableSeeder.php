<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'test@mail.ru',
            'password' => Hash::make('123123123'),
            'institute_id' => 1,
            'options' => json_encode([
                'academy_group' => 'ИБ-311',
            ]),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
