<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // جلب جميع معرفات (IDs) المحاضرين من جدول instructors
        $instructorIds = DB::table('instructors')->pluck('id')->toArray();

        for ($i = 0; $i < 20; $i++) { // إنشاء 20 دورة
            DB::table('courses')->insert([
                'course_id' => $faker->uuid, // إنشاء ID فريد لكل كورس
                'course_name' => $faker->unique()->sentence(3), // اسم الدورة العشوائي
                'instructor_id' => $faker->randomElement($instructorIds), // اختيار محاضر عشوائي
            ]);
        }
    }
}
