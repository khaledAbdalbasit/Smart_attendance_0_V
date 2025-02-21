<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // عدد السجلات اللي هتتحط في الجدول
        $recordsCount = 30;

        for ($i = 0; $i < $recordsCount; $i++) {
            DB::table('instructors')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password123'), // كلمة مرور مشفرة
                'role' => $faker->randomElement(['super-admin', 'admin', 'instructor']),
            ]);
        }
    }
}
