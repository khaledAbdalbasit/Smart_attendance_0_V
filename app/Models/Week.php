<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    protected $fillable = ['week_number', 'start_date', 'end_date'];

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}
