<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable =
        [
            'student_id',
            'course_id',
            'day',
            'period_id',
            'location_name',
            'week_id',
        ];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function week()
    {
        return $this->belongsTo(Week::class);
    }

}
