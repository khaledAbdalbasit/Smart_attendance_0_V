<?php

namespace App\Http\Controllers\Dashboard\Instructor\Subject;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Course;
use App\Models\Registration;
use App\Models\Schedule_subject;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function show($id)
    {

        $students = Registration::where('course_id', $id)
            ->with(['student'])
            ->get();

        $attendances = Attendance::where('course_id', $id)->get();

        $schedule_subject = Schedule_subject::where('course_id', $id)->first();
        $course = Course::where('course_id',$id)->first();

        return view('dashboard.instructor.subjectAttendance', compact('students', 'attendances', 'schedule_subject','id','course'));
    }


    public function updateAttendance(Request $request)
    {
        $courseId = $request->course_id;

        // احضر كل الحضور الحالي للكورس عشان نستخدمه في التحقق من الحذف
        $existingAttendance = Attendance::where('course_id', $courseId)->get();
        // حذف الحضور الذي لم يتم تحديده (uncheck)
        foreach ($existingAttendance as $attendance) {
            if (!isset($request->attendance[$attendance->student_id][$attendance->week_id])) {
                Attendance::where([
                    'student_id' => $attendance->student_id,
                    'course_id' => $attendance->course_id,
                    'week_id' => $attendance->week_id
                ])->delete();
            }
        }

        // تسجيل أو تحديث الحضور بناءً على الـ checkboxes المحددة
        foreach ($request->attendance as $studentId => $weeks) {
            foreach ($weeks as $weekId => $status) {
                $schedule_subject = Schedule_subject::where('course_id', $courseId)->first();
                if ($weekId && $studentId && $courseId) {
                    Attendance::updateOrCreate(
                        [
                            'student_id' => $studentId,
                            'course_id' => $courseId,
                            'day' => $schedule_subject->day,
                            'period_id' => $schedule_subject->period_id,
                            'location_name' => $schedule_subject->location_name,
                            'week_id' => $weekId,
                        ],
                        []
                    );
                }
            }
        }

        return redirect()->back()->with('success', 'Attendance updated successfully!');
    }




}
