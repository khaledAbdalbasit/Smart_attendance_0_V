<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AttendanceSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Get data from other tables
        $schedules = DB::table('schedules')->get(); // Get all schedule records (day, period_id)
        $locations = DB::table('locations')->pluck('location_name')->toArray(); // Get all location names
        $students = DB::table('users')->pluck('id')->toArray(); // Get all student IDs
        $courses = DB::table('courses')->pluck('course_id')->toArray(); // Get all course IDs
        $week = DB::table('weeks')->pluck('id')->toArray();

        if (empty($students)) {
            throw new \Exception("No students found in the database.");
        }

        $attendances = [];

        // Generate 50 random attendance records
        for ($i = 0; $i < 50; $i++) {
            $randomSchedule = $faker->randomElement($schedules); // Random schedule data for day and period_id
            $attendances[] = [
                'student_id' => $faker->randomElement($students),
                'course_id' => $faker->randomElement($courses),
                'day' => $randomSchedule->day,
                'period_id' => $randomSchedule->period_id,
                'location_name' => $faker->randomElement($locations),
                'created_at' => now(),
                'updated_at' => now(),
                'week_id'=>$faker->randomElement($week)
            ];
        }

        // Insert the generated data into the attendances table
        DB::table('attendances')->insert($attendances);
    }

}
