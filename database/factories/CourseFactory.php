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
        static $count = 0;
        $current = rand(10,30);

        $course = [
            'History' => 'Something History',
            'CS' => 'Data Stuctures',
            'Science' => 'Biology'
        ];

        $selectedCourse = array_rand($course);

        $records = Course::select('subject', 'course','section','campus_id','credits','title','days','time','capacity','user_id')
            ->groupBy('subject', 'course','section','campus_id','credits','title','days','time','capacity','user_id')
            ->havingRaw('COUNT(*) = 9')
            ->whereNotNull('user_id')
            ->get();
        $course = $records[$count];

        $count += 1;
        if($course){
            $course->crn = rand(70001,75000);
            $course->section_actual = $current;
            $course->section_remaining = 30-$current;
            $course->date = '08/03/17-12/16/17';
            $course->location = rand(100,657);
            return $course->toArray();
}

        return [
            'crn' => rand(20000, 29999),
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
            'user_id' => null,
            'date' => '01/25/20-05/19/20',
            'location' => rand(100, 657),
        ];
    }
}
