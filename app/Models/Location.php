<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $primaryKey = 'location_name';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['location_name', 'capacity'];


    public function register()
    {
        return $this->hasMany(Registration::class, 'location_name', 'location_name');
    }
}
