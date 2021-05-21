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

        $myCourses = Auth::user()->courses()->where('date', '08/03/21-12/16/21')
            ->where('days', $course->days)
            ->where('time', $course->time)
            ->get();

        $grades = Auth::user()->grades
            ->filter(function($grade) use($course) {
               return $grade->course->course->course === $course->parent_id;
            });

        if(!$grades->isEmpty() && $grades->first()->grade >= 70 && $myCourses->isEmpty())
        {
            $user = Auth::user();

            $user
                ->courses()
                ->attach(
                    $course
                );
            return redirect()->back();
        }
        elseif (!$myCourses->isEmpty())
        {
            return redirect()->back()->withErrors(['Time Slot Conflict']);
        }
        else {
            return redirect()->back()->withErrors(['Could Not Register, No Prereq Grade ']);
        }

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
