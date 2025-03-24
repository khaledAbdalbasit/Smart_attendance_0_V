<?php

namespace App\Http\Controllers\Dashboard\Instructor\Subject;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Course;
use App\Models\Registration;
use App\Models\Week;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TakeAttendanceController extends Controller
{
    public function takeAttendance($id)
    {
        $course = Course::where('course_id', $id)->first();
        $weeks = Week::get();
        return view('dashboard.instructor.takeAttendance',compact('course','weeks'));
    }

    public function showAttendance(Request $request)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,course_id',
            'week_id' => 'required|exists:weeks,id'
        ]);

        $course_id = $request->input('course_id');
        $week_id = $request->input('week_id');

        try {
            $response = Http::get('http://localhost:5000/api/get_attendance', [
                'course_id' => $course_id,
                'week_id' => $week_id,
            ]);

            if ($response->successful()) {
                $data = $response->json();

                if (empty($data['attendance'])) {
                    return back()->with('info', 'No attendance records found.');
                }

                $count = 0;
                foreach ($data['attendance'] as $entry) {
                    if (!isset($entry['name'])) continue;

                    $registration = Registration::where('student_id', $entry['name'])
                        ->where('course_id', $course_id)
                        ->first();

                    if ($registration) {
                        Attendance::updateOrCreate([
                            'student_id' => $entry['name'],
                            'course_id' => $course_id,
                            'week_id' => $week_id
                        ], [
                            'day' => $registration->day,
                            'period_id' => $registration->period_id,
                            'location_name' => $registration->location_name,
//                            'status' => 'present',
//                            'attendance_date' => now()
                        ]);
                        $count++;
                    }
                }

                return back()->with('success', "Successfully recorded $count attendance records!");
            }

            return back()->with('error', 'Failed to fetch data from face recognition API.');
        } catch (\Exception $e) {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }


}
