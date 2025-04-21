<?php

namespace App\Http\Controllers\Dashboard\Admin\Schedule_subject;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Schedule_subjectRequest;
use App\Models\Course;
use App\Models\Instructor;
use App\Models\Location;
use App\Models\Period;
use App\Models\Schedule;
use App\Models\Schedule_subject;
use Illuminate\Http\Request;

class Schedule_subjectController extends Controller
{
    public function index()
    {
        $schedule_subjects = Schedule_subject::with(['location', 'course', 'instructor'])
            ->get();
        return view('dashboard.admin.schedule_subject.index', compact('schedule_subjects'));
    }


    public function create()
    {
        $scheduleData = Schedule::with('period')
            ->select('day', 'period_id')
            ->distinct()
            ->get();

        $locations = Location::get();
        $courses = Course::with('instructor')->get();

        return view('dashboard.admin.schedule_subject.create', compact(
            'scheduleData',
            'locations',
            'courses'
        ));
    }

    public function store(Schedule_subjectRequest $request)
    {
        $validated = $request->validated();
        Schedule_subject::create($validated);
        return redirect()->route('admin.schedules.subjects')->with('success' . ' created successfully.');

    }

    public function edit($day, $period_id, $location_name, $course_id, $instructor_id)
    {
        // جلب الـ subject بناءً على المعايير المحددة
        $subject = Schedule_subject::where([
            ['day', $day],
            ['period_id', $period_id],
            ['location_name', $location_name],
            ['course_id', $course_id],
            ['instructor_id', $instructor_id],
        ])->first();

        $scheduleData = Schedule::with('period')
            ->select('day', 'period_id')
            ->distinct()
            ->get();

        $locations = Location::get();
        $courses = Course::with('instructor')->get();

        return view('dashboard.admin.schedule_subject.edit', compact(
            'scheduleData',
            'locations',
            'courses', 'subject'
        ));
    }


}
