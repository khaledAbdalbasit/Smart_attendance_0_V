<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
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
        return $this->belongsTo(Location::class,'location_name','location_name');
    }

}
