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
        'role_id',
        'locked'
    ];

    protected $gpa = 0;

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

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function teaches()
    {
        return $this->hasMany(Course::class);
    }

    public function minors()
    {
        return $this->belongsToMany(Field::class)->where('major', false);
    }

    public function gpa()
    {

        $this->grades
            ->each(function($grade){
                $result = match (true) {
                    $grade->grade >= 90 => 4,
                    $grade->grade >= 80 && $grade->grade <= 89 => 3,
                    $grade->grade >= 70 && $grade->grade <= 79 => 2,
                    $grade->grade >= 60 && $grade->grade <= 69 => 1,
                    default => 0,
                };

                $this->gpa += $result;
            });

        return $this->grades()->count() > 0
            ?  $this->gpa / $this->grades()->count()
            : 0;

    }

    public function calculateLetterGrades($grade)
    {
        return match (true) {
            $grade >= 90 => 'A',
            $grade >= 80 && $grade <= 89 => 'B',
            $grade >= 70 && $grade <= 79 => 'C',
            $grade >= 60 && $grade <= 69 => 'D',
            default => 'F',
        };
    }

    public function holds()
    {
        return $this->belongsToMany(Hold::class);
    }
}
