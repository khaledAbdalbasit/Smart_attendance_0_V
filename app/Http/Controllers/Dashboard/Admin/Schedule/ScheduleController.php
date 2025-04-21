<?php

namespace App\Http\Controllers\Dashboard\Admin\Schedule;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ScheduleRequest;
use App\Models\Period;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::with('period')->get();
        return view('dashboard.admin.schedule.index', compact('schedules'));
    }

    public function create()
    {
        $periods = Period::get();
        return view('dashboard.admin.schedule.create', compact('periods'));
    }

    public function store(ScheduleRequest $request)
    {
        $validated = $request->validated();
        $schedule = Schedule::create($validated);
        return redirect()->route('admin.schedules')->with('success', $schedule->day . $schedule->period_id . ' created successfully.');
    }

    public function edit($day, $period_id)
    {
        $schedule = Schedule::with('period')
            ->where('day', $day)
            ->where('period_id', $period_id)
            ->first();
        $periods = Period::all();
        return view('dashboard.admin.schedule.edit', compact('schedule', 'periods'));
    }

    public function update(ScheduleRequest $request, $day, $period_id)
    {
        $validated = $request->validated();
        $schedule = Schedule::with('period')
            ->where('day', $day)
            ->where('period_id', $period_id)
            ->first();
        $schedule->update($validated);
        return redirect()->route('admin.schedules')->with('success', 'Schedule updated successfully.');
    }

    public function delete($day, $period_id)
    {
        $schedule = Schedule::with('period')
            ->where('day', $day)
            ->where('period_id', $period_id)
            ->first();

        if (!$schedule) {
            return redirect()->route('admin.schedules')
                ->with('error', 'Schedule not found.');
        }

        $schedule_info = $schedule;

        Schedule::where('day', $day)
            ->where('period_id', $period_id)
            ->delete();

        return redirect()->route('admin.schedules')
            ->with('success-delete', $schedule_info->day . ' - ' . $schedule_info->period->period_number . ' deleted successfully.');
    }

}
