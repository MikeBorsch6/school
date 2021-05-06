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
            '1' => $query->where('date', '01/25/21-05/19/21'),
            '2' => $query->where('date', '08/03/21-12/15/21'),
            '1' => $query->where('date', '01/25/20-05/19/20'),
            '2' => $query->where('date', '08/03/20-12/15/20'),
            '1' => $query->where('date', '01/25/19-05/19/19'),
            '2' => $query->where('date', '08/03/19-12/15/19'),
            '1' => $query->where('date', '01/25/18-05/19/18'),
            '2' => $query->where('date', '08/03/18-12/15/18'),
            '1' => $query->where('date', '01/25/17-05/19/17'),
            '2' => $query->where('date', '08/03/17-12/15/17')
        };

        return $query->get();

    }
}
