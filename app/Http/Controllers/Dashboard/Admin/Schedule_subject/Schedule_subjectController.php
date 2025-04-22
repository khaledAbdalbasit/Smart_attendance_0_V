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

        $exists = Schedule_subject::where([
            ['day', $validated['day']],
            ['period_id', $validated['period_id']],
            ['location_name', $validated['location_name']],
        ])->exists();

        if ($exists) {
            return redirect()->route('admin.schedules.subjects.create')
                ->with('subject-exists', 'This location and time  is already scheduled.');
        }

        Schedule_subject::create($validated);
        return redirect()->route('admin.schedules.subjects')->with('success' . ' created successfully.');

    }

    public function edit($day, $period_id, $location_name, $course_id, $instructor_id)
    {
        $subject = Schedule_subject::where([
            ['day', $day],
            ['period_id', $period_id],
            ['location_name', $location_name],
            ['course_id', $course_id],
            ['instructor_id', $instructor_id],
        ])->firstOrFail();

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

    public function update(Schedule_subjectRequest $request, $day, $period_id, $location_name, $course_id, $instructor_id)
    {
        $validated = $request->validated();

        $subject = Schedule_subject::where([
            ['day', $day],
            ['period_id', $period_id],
            ['location_name', $location_name],
            ['course_id', $course_id],
            ['instructor_id', $instructor_id],
        ])->firstOrFail();

        $subject->update($validated);

        return redirect()->route('admin.schedules.subjects')
            ->with('success', 'Schedule subject updated successfully.');
    }


    public function delete($day, $period_id, $location_name, $course_id, $instructor_id)
    {
        $deletedCount = Schedule_subject::where([
            ['day', $day],
            ['period_id', $period_id],
            ['location_name', $location_name],
            ['course_id', $course_id],
            ['instructor_id', $instructor_id],
        ])->delete();

        if ($deletedCount > 0) {
            return redirect()->route('admin.schedules.subjects')
                ->with('success-delete', 'Schedule subject deleted successfully.');
        } else {
            return redirect()->route('admin.schedules.subjects')
                ->with('failed-delete', 'Schedule subject not found or already deleted.');
        }
    }


}
