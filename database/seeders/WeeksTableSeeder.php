<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class WeeksTableSeeder extends Seeder
{
    public function run()
    {
//        DB::table('weeks')->truncate(); // حذف البيانات القديمة

        $startDate = Carbon::create(2025, 2, 16); // تحديد تاريخ البدء الأول
        $numberOfWeeks = 12; // عدد الأسابيع التي تريد إضافتها

        for ($i = 1; $i <= $numberOfWeeks; $i++) {
            DB::table('weeks')->insert([
                'week_number' => $i,
                'start_date' => $startDate->copy()->startOfWeek()->toDateString(),
                'end_date' => $startDate->copy()->endOfWeek()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // الانتقال إلى الأسبوع التالي
            $startDate->addWeek();
        }
    }
}
