<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Field;

class UserSeeder extends Seeder
{
   public function run()
   {
       $user = User::all();

       $courses = Course::all();

       $fields = Field::all();

       $user->each(function($user) use($courses, $fields) {

           $user->fields()->attach(
               $fields->random()->first(),
                   [
                       'major' => rand(0,1)
                   ]
           );

           if($user->role->id === 3) {
               $user->courses()->attach(
                   Course::query()
                       ->whereNull('parent_id')
                       ->get()
                       ->pluck('id')
               );
           }
           elseif($user->role->id === 4) {
               $user->courses()->attach(
                   Course::take(7)
                       ->pluck('id')
               );
           }
           elseif($user->role->id === 5) {
               $user->courses()->attach(
                   Course::inRandomOrder()
                       ->take(12)
                       ->pluck('id')
               );
           }
           elseif($user->role->id === 5) {
               $user->courses()->attach(
                   Course::inRandomOrder()
                       ->take(16)
                       ->pluck('id')
               );
           }
       });
   }
}
