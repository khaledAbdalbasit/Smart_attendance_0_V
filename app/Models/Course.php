<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $primaryKey = 'course_id';
    public $incrementing = false;
    protected $keyType = 'string';

public function students()
    {
        return $this->belongsToMany(User::class, 'student_courses', 'course_id', 'student_id');
    }


}
