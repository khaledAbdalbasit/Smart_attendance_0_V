<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ScheduleSubjectSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $levels = ['Level 1', 'Level 2', 'Level 3', 'Level 4']; // المستويات الدراسية
        $schedules = DB::table('schedules')->get(); // جلب الجدول الزمني
        $locations = DB::table('locations')->pluck('location_name')->toArray(); // جلب أسماء الأماكن
        $students = DB::table('users')->pluck('id')->toArray(); // جلب جميع الطلاب
        $courses = DB::table('courses')->pluck('course_id')->toArray(); // جلب جميع المقررات
        $instructors = DB::table('instructors')->pluck('id')->toArray(); // جلب جميع المحاضرين

        $scheduleSubjects = [];

        foreach ($students as $student) {
            $randomSchedule = $faker->randomElement($schedules); // اختيار جدول زمني عشوائي
            $scheduleSubjects[] = [
                'level' => $faker->randomElement($levels),
                'day' => $randomSchedule->day,
                'period_id' => $randomSchedule->period_id,
                'location_name' => $faker->randomElement($locations),
                'student_id' => $student,
                'course_id' => $faker->randomElement($courses),
                'instructor_id' => $faker->randomElement($instructors),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('schedule_subjects')->insert($scheduleSubjects);
    }
}
