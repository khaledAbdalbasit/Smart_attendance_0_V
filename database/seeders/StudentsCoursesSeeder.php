<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\StudentCourse;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsCoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = DB::table('users')->pluck('id'); // جلب جميع الطلاب
        $courses = DB::table('courses')->pluck('course_id'); // جلب جميع الكورسات

        $insertData = [];

        foreach (range(1, 50) as $i) {
            $insertData[] = [
                'student_id' => $students->random(),
                'course_id'  => $courses->random(),
            ];
        }

// إدخال جميع البيانات دفعة واحدة لتحسين الأداء
        DB::table('student_courses')->insert($insertData);
    }
}
