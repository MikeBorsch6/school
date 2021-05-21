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
        return $this->belongsToMany(Course::class)->withPivot('id');;
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
                $result = 0;
                if($grade->grade >= 90)
                {
                    $result=4;
                }
                elseif( $grade->grade >= 80 && $grade->grade)
                {
                    $result =3;
                }
                elseif($grade->grade >= 70 && $grade->grade <= 79)
                {
                    $result = 2 ;
                }
                elseif($grade->grade >= 60 && $grade->grade <= 69) {
                    $result = 1;
                }
                else {
                    $result = 0;
                }

                $this->gpa += $result;

            });

        return $this->grades()->count() > 0
            ?  round($this->gpa / $this->grades()->count(), 2)
            : 0;

    }

    public function calculateLetterGrades($grade)
    {
        if($grade->grade >= 90)
        {
            return 'A';
        }
        elseif( $grade->grade >= 80 && $grade->grade)
        {
            return 'B';
        }
        elseif($grade->grade >= 70 && $grade->grade <= 79)
        {
            return 'C' ;
        }
        elseif($grade->grade >= 60 && $grade->grade <= 69) {
            return 'D';
        }
        else {
            return 'F';
        }
    }

    public function holds()
    {
        return $this->belongsToMany(Hold::class);
    }

    public function degreeEval()
    {
        $courses = Course::select('courses.title', 'courses.course')
            ->whereIn('field_id', $this->fields->pluck('id'))
            ->groupBy('course', 'title')
            ->orderBy('courses.course', 'ASC')
            ->get();

        $coursesTaken = $courses->map(function($course) {
           $grade = $this->grades->filter(function($grade) use ($course) {
              return $grade->course->course->title === $course->title;
           });
           if(!$grade->isEmpty()) {
               $course->grade = $grade->first()->grade;
               $course->date = $grade->first()->course->course->date;
               return $course;
           }
           else {
               $course->grade = null;
               $course->date = 'TBA';
               return $course;
           }
        });

        return $coursesTaken;
    }
}
