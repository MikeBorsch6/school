<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class  CourseFactory extends Factory
{

    protected $model = Course::class;


    public function definition()
    {
        $current = rand(10,30);

        $course = [
            'History' => 'Something History',
            'CS' => 'Data Stuctures',
            'Science' => 'Biology'
        ];

        $selectedCourse = array_rand($course);

        return [
            'crn' => rand(10000, 19999),
            'subject' => $selectedCourse,
            'course' => 1500,
            'section' => 001,
            'campus_id' => 1,
            'credits' => 4.00,
            'title' => $course[$selectedCourse],
            'days' => 'na',
            'time' => 'na',
            'capacity' => 30,
            'section_actual' => $current,
            'section_remaining' => 30-$current,
            'user_id' => User::factory(),
            'date' => '01/25-05/19',
            'location' => 'REMOTE'
        ];
    }
}
