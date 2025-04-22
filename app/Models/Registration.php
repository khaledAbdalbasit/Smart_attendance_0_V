<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    public $incrementing = false;
    protected $primaryKey = null;

    protected $fillable = [
        'course_id',
        'location_name',
        'day',
        'period_id',
        'level',
        'student_id'
    ];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'student_id', 'student_id');
    }

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_name', 'location_name');
    }

    public function courses()
    {
        return $this->belongsTo(Course::class, 'course_id', 'course_id');
    }

    public function instructor()
    {
        return $this->belongsTo(Instructor::class, 'instructor_id', 'id');
    }

}
