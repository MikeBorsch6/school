<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Grade;

class CourseUser extends Model
{
    use HasFactory;

    protected $table = 'course_user';

    public function grade()
    {
        return $this->hasOne(Grade::class, 'course_user_id');
    }
}
