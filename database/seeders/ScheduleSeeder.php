<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $days = ['Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday']; // الأيام المتاحة
        $periods = DB::table('periods')->pluck('period_number')->toArray(); // جلب كل أرقام الحصص من جدول periods

        $schedules = [];

        foreach ($days as $day) {
            foreach ($periods as $period) {
                $schedules[] = [
                    'day' => $day,
                    'period_id' => $period,
                ];
            }
        }

        // إدخال البيانات إلى جدول schedules
        DB::table('schedules')->insert($schedules);
    }
}
