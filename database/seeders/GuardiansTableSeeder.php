<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuardiansTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('guardians')->insert([
            [
                'name' => 'Abraham',
                'contact_info' => '9876543210',
                'student_id' => 1, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Raphel',
                'contact_info' => '9876543210',
                'student_id' => 2, 
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Kumar',
                'contact_info' => '9876543210',
                'student_id' => 3, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'John',
                'contact_info' => '9876543210',
                'student_id' => 4, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
