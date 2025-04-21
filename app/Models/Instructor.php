<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Instructor extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;



    protected $guard = 'instructor';
    protected $fillable = [
        'name',
        'email',
        'role',
        'image',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function courses(){
        return $this->hasMany(Course::class,'instructor_id');
    }
}
