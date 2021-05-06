<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Course;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'role_id'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function grades()
    {
        return $this->hasManyThrough(
            Grade::class,
                 CourseUser ::class,
            'user_id',
            'course_user_id',
        )->with('course');
    }

    public function fields()
    {
        return $this->belongsToMany(Field::class);
    }

    public function majors()
    {
        return $this->belongsToMany(Field::class)->where('major', true);
    }

    public function minors()
    {
        return $this->belongsToMany(Field::class)->where('major', false);
    }
}
