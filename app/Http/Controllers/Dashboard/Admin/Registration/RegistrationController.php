<?php

namespace App\Http\Controllers\Dashboard\Admin\Registration;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Registration;
use App\Models\Schedule_subject;
use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        $registrations = Registration::get();
        return view('dashboard.admin.registration.index', compact('registrations'));
    }

    public function create()
    {
        $courses = Course::get();
        return view('dashboard.admin.registration.create', compact('courses'));
    }

    public function searchStudent(Request $request)
    {
        $studentId = $request->input('student_id');

        if (!is_numeric($studentId)) {
            return redirect()->back()->withErrors(['message' => 'Invalid student ID. Please enter a valid numeric student ID.']);
        }

        $student = User::find($studentId);

        if ($student) {
            $registeredSubjects = Registration::where('student_id', $studentId)
                ->with('courses')
                ->get();

            return view('dashboard.admin.registration.create', [
                'student' => $student,
                'registeredSubjects' => $registeredSubjects
            ]);
        } else {
            return redirect()->back()->withErrors(['message' => 'Student not found.']);
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:users,id',
            'course_code' => 'required|string|max:255',
        ]);

        $course = Course::where('course_id', $request->course_code)->first();

        if (!$course) {
            return redirect()->back()->withErrors(['message' => 'Course not found.']);
        }

        $schedule = Schedule_subject::where('course_id', $course->course_id)->first();

        if (!$schedule) {
            return redirect()->back()->withErrors(['message' => 'No schedule available for this course.']);
        }

        $conflict = Registration::where('student_id', $request->student_id)
            ->where('day', $schedule->day)
            ->where('period_id', $schedule->period_id)
            ->exists();

        if ($conflict) {
            return redirect()->back()->withErrors(['message' => 'There is a scheduling conflict with another course.']);
        }

        $alreadyRegistered = Registration::where('student_id', $request->student_id)
            ->where('course_id', $course->id)
            ->exists();

        if ($alreadyRegistered) {
            return redirect()->back()->withErrors(['message' => 'Student already registered in this course.']);
        }

        Registration::create([
            'location_name' => $schedule->location_name,
            'day' => $schedule->day,
            'period_id' => $schedule->period_id,
            'level' => $schedule->level,
            'course_id' => $schedule->course_id,
            'student_id' => $request->student_id,
        ]);

        return redirect()->back()->with('success', 'Course registered successfully!');
    }

    public function searchCourse(Request $request)
    {
        $request->validate([
            'course_code' => 'required|string|max:255',
            'student_id' => 'required|numeric',
        ]);

        $student = User::find($request->student_id);

        if (!$student) {
            return redirect()->back()->withErrors(['message' => 'Student not found.']);
        }

        $registeredSubjects = Registration::where('student_id', $student->id)
            ->with('course')
            ->get();

        $course = Course::where('course_id', $request->course_code)->first();
        if ($course) {
            $courseDetails = Schedule_subject::where('course_id', $course->id)
                ->with('schedule') // لو عندك علاقة
                ->get();

            return view('dashboard.admin.registration.create', [
                'student' => $student,
                'registeredSubjects' => $registeredSubjects,
                'course' => $course,
                'courseDetails' => $courseDetails,
            ]);
        } else {
            return view('dashboard.admin.registration.create', [
                'student' => $student,
                'registeredSubjects' => $registeredSubjects,
            ])->withErrors(['message' => 'Course not found.']);
        }
    }


}
