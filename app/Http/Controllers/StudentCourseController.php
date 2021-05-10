<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentCourseController extends Controller
{
    public function registerStudent(Request $request)
    {
        $course = Course::where('crn', $request->get('CRN'))->first();

        $user = Auth::user();

           $user
                ->courses()
                ->sync(
                    $course
                );

           return redirect()->back();
    }

    public function deleteStudentCourse(Request $request)
    {
        $course = Course::where('crn', $request->get('CRN'))->first();

        $user = Auth::user();

        $user
            ->courses()
            ->detach(
                $course
            );

        return redirect()->back();
    }
}
