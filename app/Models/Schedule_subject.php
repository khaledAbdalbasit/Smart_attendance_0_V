<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule_subject extends Model
{
    protected $table = 'schedule_subjects';
    protected $fillable = [
        'level',
        'day',
        'period_id',
        'location_name',
        'course_id',
        'instructor_id'
    ];

    public function period()
    {
        return $this->belongsTo(Period::class, 'period_id');
    }

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function instructor()
    {
        return $this->belongsTo(Instructor::class, 'instructor_id');
    }

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_name');
    }

    public function schedule()
    {
        return $this->belongsTo(Schedule::class, 'day', 'day')
            ->where('period_id', $this->period_id);
    }


}
