<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use function PHPUnit\Framework\matches;

class CourseController extends Controller
{
    public function index()
    {
        return view('courses', ['courses' => Course::all()]);
    }

    public function create()
    {
        if(Auth::user()->role_id === 1) {
            return true;
        }
        else {
             //return a view to create a course if the current user is a giga admin

        }

    }

    public function store(Request $request)
    {
        Course::create(
            $request->all()
        );

    }

    public function show(Course $course)
    {
        return $course;
    }

    public function edit(Course $course)
    {
        //return a view that you gf creates to edits a selected schedule
    }

    public function update(Request $request, Course $course)
    {
        $course::update(
            $request->all()
        );
    }

    public function destroy(Course $course)
    {
        $course->delete();
    }

    public function showCurrentYearCourses($year, $semester)
    {
         $query = Course::whereYear('created_at', $year);

        match ($semester) {
            '1' => $query->where('date', '01/25-05/19'),
            '2' => $query->where('date', '08/03-12/15')
        };

        return $query->get();

    }
}
