<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


class RegistrationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        // Fetch actual data from tables
        $courseIds = DB::table('courses')->pluck('course_id')->toArray();
        $locationNames = DB::table('locations')->pluck('location_name')->toArray();
        $scheduleRecords = DB::table('schedules')->select('day', 'period_id')->get();
        $studentIds = DB::table('users')->pluck('id')->toArray();

        for ($i = 0; $i < 50; $i++) {
            // Pick a random schedule entry (day + period_id)
            $schedule = $faker->randomElement($scheduleRecords);

            DB::table('registrations')->insert([
                'course_id' => $faker->randomElement($courseIds),
                'location_name' => $faker->randomElement($locationNames),
                'day' => $schedule->day, // From schedules table
                'period_id' => $schedule->period_id, // From schedules table
                'level' => $faker->randomElement(['Beginner', 'Intermediate', 'Advanced']),
                'student_id' => $faker->randomElement($studentIds),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        }
    }
}
