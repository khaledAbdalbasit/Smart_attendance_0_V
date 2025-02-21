<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use faker\Factory as Faker;
class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) { // إنشاء 10 مواقع
            DB::table('locations')->insert([
                'location_name' => $faker->unique()->word . ' Hall', // اسم عشوائي مع كلمة Hall
                'capacity' => $faker->numberBetween(20, 200), // سعة عشوائية بين 20 و 200
            ]);
        }
    }
}
