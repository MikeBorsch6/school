<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use User;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'crn',
        'subject',
        'course',
        'section',
        'campus_id',
        'credits',
        'title',
        'days',
        'time',
        'capacity',
        'section_actual',
        'section_remaining',
        'user_id',
        'date',
        'location',
        'field_id',
        'parent_id'
    ];

    public function users()
    {
        return $this->belongsToMany(\App\Models\User::class);
    }

    public function teacher()
    {
        return $this->belongsTo(\App\Models\User::class,'user_id', 'id');
    }

    public function grade()
    {
        return $this->hasOne(Grade::class, 'course_user_id');
    }
}
