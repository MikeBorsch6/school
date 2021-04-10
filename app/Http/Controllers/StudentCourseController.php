<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\User;

use Illuminate\Http\Request;

class StudentCourseController extends Controller
{
    public function registerStudent(User $user, Course $course)
    {
       $user
            ->courses()
            ->sync(
                $course
            );
    }

    public function deleteStudentCourse(User $user, Course $course)
    {
        $user
            ->courses()
            ->detach(
                $course
            );
    }
}
