<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class StudentInstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // جلب جميع معرفات الطلاب من جدول users
        $studentIds = DB::table('users')->pluck('id')->toArray();

        // جلب جميع معرفات المحاضرين من جدول instructors
        $instructorIds = DB::table('instructors')->pluck('id')->toArray();

        foreach ($studentIds as $studentId) {
            // اختيار محاضر عشوائي لكل طالب
            DB::table('student_instructor')->insert([
                'student_id' => $studentId,
                'instructor_id' => $faker->randomElement($instructorIds),
            ]);
        }
    }
}
