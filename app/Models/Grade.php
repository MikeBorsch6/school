<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_user_id',
        'grade'
    ];

    public function course()
    {
        return $this->belongsTo(CourseUser::class, 'course_user_id', 'id')->with('course');
    }
}
