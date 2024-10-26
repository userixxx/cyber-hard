<?php

namespace Database\Seeders;

use App\Models\Institute;
use Illuminate\Database\Seeder;

class InstituteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $institutes = [
            ['name' => 'РГЭУ(РИНХ)', 'address' => 'Ростов-на-Дону', 'contact_number' => ''],
            ['name' => 'ДГТУ', 'address' => 'Ростов-на-Дону', 'contact_number' => ''],
            ['name' => 'ЮФУ', 'address' => 'Ростов-на-Дону', 'contact_number' => ''],
            ['name' => 'РАНХИГС', 'address' => 'Ростов-на-Дону', 'contact_number' => ''],
            ['name' => 'РГУПС', 'address' => 'Ростов-на-Дону', 'contact_number' => ''],
        ];

        foreach ($institutes as $institute) {
            Institute::create($institute);
        }
    }
}
