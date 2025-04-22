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
            ['period_number' => 1, 'start_time' => '09:00:00', 'end_time' => '09:45:00'],
            ['period_number' => 2, 'start_time' => '09:50:00', 'end_time' => '10:30:00'],
            ['period_number' => 3, 'start_time' => '10:35:00', 'end_time' => '11:20:00'],
            ['period_number' => 4, 'start_time' => '11:25:00', 'end_time' => '12:05:00'],
            ['period_number' => 5, 'start_time' => '12:35:00', 'end_time' => '01:20:00'],
            ['period_number' => 6, 'start_time' => '01:25:00', 'end_time' => '02:05:00'],
            ['period_number' => 7, 'start_time' => '02:10:00', 'end_time' => '02:55:00'],
            ['period_number' => 8, 'start_time' => '03:00:00', 'end_time' => '02:40:00'],

        ];

        DB::table('periods')->insert($periods);
    }
}
