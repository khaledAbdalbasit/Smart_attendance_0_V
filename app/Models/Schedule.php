<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public $incrementing = false;

    protected $keyType = 'string';

    protected $primaryKey = ['day', 'period_id'];

    protected $fillable = [
        'day',
        'period_id',
    ];

    public function period()
    {
        return $this->belongsTo(Period::class, 'period_id');
    }

    public function getKeyName()
    {
        return 'day,period_id';
    }
}
