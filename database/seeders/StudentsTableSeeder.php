<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('students')->insert([
            [
                'name' => 'John Abraham ',
                'class' => '10A',
                'age' => 15,
                'photo' => 'photos/C9EJLZhZQoIQdYQhHbTyk5ZvcymypYPHdXXjgCkn.jpg', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Raphel ',
                'class' => '12B',
                'age' => 17,
                'photo' => 'photos/FX3hdNpW0MYB2Cd3JWviAYqqixtBnzy1Oi1QVT3H.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Arun Kumar',
                'class' => '9C',
                'age' => 14,
                'photo' => 'photos/la5IM0gYgPfE7dbU0vStOFiez2iQUqBcsYPMuJiC.jpg', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Emma John',
                'class' => '11A',
                'age' => 16,
                'photo' => 'photos/t6hue7HK7vmUWHz6Z76vIoIjVAE98gCHOKPuXGgr.jpg', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
