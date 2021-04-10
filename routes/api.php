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
    ->group(function() {
        /**
         * Users
         */
        Route::get('users/{user}/courses', 'UserController@teachers');
        Route::apiResource('users', 'UserController');
        Route::get('users/{user}/courses/{course}', 'StudentCourseController@registerStudent');
        Route::get('users/{user}/courses/{course}/delete', 'StudentCourseController@deleteStudentCourse');
        /*
         * courses
         */
        Route::get('courses/{year}/{semester}', 'CourseController@showCurrentYearCourses');

    });
