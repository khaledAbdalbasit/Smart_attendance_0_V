<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    protected $primaryKey = 'period_number';
    protected $fillable = [
        'period_number',
        'start_time',
        'end_time'
    ];
}
