<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) { // إنشاء 100 طالب
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'face_data' => $faker->sha256, // بيانات وهمية للوجه
                'level'=> $faker->numberBetween(0, 4),
                'password' => Hash::make('password123'), // كلمة مرور مشفرة
            ]);
        }
    }
}
