<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::namespace('App\Http\Controllers')
    ->middleware('auth')
    ->group(function() {
        Route::get('users/{user}/courses', 'UserController@teachers');
        Route::resource('users', 'UserController');
        Route::post('user-course', 'StudentCourseController@registerStudent')->name('user-course');
        Route::get('users/{user}/courses/{course}/delete', 'StudentCourseController@deleteStudentCourse');
        /*
         * courses
         */
        Route::get('courses/{year}/{semester}', 'CourseController@showCurrentYearCourses');

    });
