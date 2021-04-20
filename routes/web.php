<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\LoginComntroller;
use App\Http\Controller\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('home');
})->middleware(['auth'])->name('home');

Route::get('/login', function(){
    return view('login');
})->middleware(['auth'])->name('login');;

Route::get('/catalog', function(){
    return view('catalog');
})->middleware(['auth'])->name('catalog');;

Route::get('/masterschedule', function(){
    return view('masterschedule');
})->middleware(['auth'])->name('masterschedule');;



require __DIR__.'/auth.php';
