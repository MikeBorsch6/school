<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Grade;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Field;
use CreateCourseUserTable;

class UserSeeder extends Seeder
{
   public function run()
   {
       $user = User::all();

       $fields = Field::all();

       $user->each(function ($user) use ($fields) {

           if (in_array($user->role->id, [3, 4, 5, 6, 7])) {
               $user->fields()->sync(
                   [
                       $fields->random()->id => [
                           'major' => true
                       ]
                   ]
               );
           }

           if ($user->role->id === 3) {
               $user->courses()->sync(
                   Course::whereNull('parent_id')
                       ->take(rand(2, 6))
                       ->get()
               );
           } elseif ($user->role->id === 4) {

               $user->courses()->sync(
                   Course::where('field_id', $user->fields->first()->id)->inRandomOrder()->take(7)->get()
               );
           } elseif ($user->role->id === 5) {
               $user->courses()->sync(
                   Course::where('field_id', $user->fields->first()->id)->inRandomOrder()->take(12)->get()
               );
           } elseif ($user->role->id === 6) {
               $user->courses()->sync(
                   Course::where('field_id', $user->fields->first()->id)->inRandomOrder()->take(17)->get()
               );
           }

           if (in_array($user->role->id, [3, 4, 5, 6])) {
               $user->courses->each(function ($course) {
                   Grade::create(
                       [
                           'course_user_id' => $course->pivot->id,
                           'grade' => rand(65,100)
                       ]
                   );
               });
           }
       });
   }
}
