<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $periods = [
            ['period_number' => 1, 'start_time' => '08:00:00', 'end_time' => '09:30:00'],
            ['period_number' => 2, 'start_time' => '09:45:00', 'end_time' => '11:15:00'],
            ['period_number' => 3, 'start_time' => '11:30:00', 'end_time' => '13:00:00'],
            ['period_number' => 4, 'start_time' => '13:15:00', 'end_time' => '14:45:00'],
            ['period_number' => 5, 'start_time' => '15:00:00', 'end_time' => '16:30:00'],
        ];

        DB::table('periods')->insert($periods);
    }
}
