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
    return view('layouts.catalog');
})->middleware(['auth'])->name('catalog');;

Route::get('/masterschedule', function(){
    return view('layouts.masterschedule');
})->middleware(['auth'])->name('masterschedule');;

Route::get('/selectCal', function(){
    return view('layouts.selectCal');
})->middleware(['auth'])->name('selectCal');;

Route::get('/departments/americanstudies', function(){
    return view("layouts.americanstudy");
})->middleware(['auth'])->name('catalog');;

Route::get('/departments/americanstudiesM', function(){
    return view("layouts.americanstudyM");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/americanstudiesM1', function(){
    return view("layouts.americanstudyM1");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/bioscience', function(){
    return view("layouts.bioSci");
})->middleware(['auth'])->name('catalog');;

Route::get('/departments/bioscienceM', function(){
    return view("layouts.bioSciM");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/bioscienceM1', function(){
    return view("layouts.bioSciM1");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/business', function(){
    return view("layouts.business");
})->middleware(['auth'])->name('catalog');;

Route::get('/departments/businessM', function(){
    return view("layouts.businessM");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/businessM1', function(){
    return view("layouts.businessM1");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/chemphy', function(){
    return view("layouts.chemPhy");
})->middleware(['auth'])->name('catalog');;

Route::get('/departments/chemphyM', function(){
    return view("layouts.chemPhyM");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/chemphyM1', function(){
    return view("layouts.chemPhyM1");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/comlearning', function(){
    return view("layouts.comLearn");
})->middleware(['auth'])->name('catalog');;

Route::get('/departments/comlearningM', function(){
    return view("layouts.comLearnM");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/comlearningM1', function(){
    return view("layouts.comLearnM1");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/compscience', function(){
    return view("layouts.compSci");
})->middleware(['auth'])->name('catalog');;

Route::get('/departments/compsciM', function(){
    return view("layouts.compSciM");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/compsciM1', function(){
    return view("layouts.compSciM1");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/criminology', function(){
    return view("layouts.crimi");
})->middleware(['auth'])->name('catalog');;

Route::get('/departments/criminologyM', function(){
    return view("layouts.crimiM");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/criminologyM1', function(){
    return view("layouts.crimiM1");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/education', function(){
    return view("layouts.educa");
})->middleware(['auth'])->name('catalog');;

Route::get('/departments/educationM', function(){
    return view("layouts.educaM");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/educationM1', function(){
    return view("layouts.educaM1");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/english', function(){
    return view("layouts.english");
})->middleware(['auth'])->name('catalog');;

Route::get('/departments/englishM', function(){
    return view("layouts.englishM");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/englishM1', function(){
    return view("layouts.englishM1");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/firstyear', function(){
    return view("layouts.firstYr");
})->middleware(['auth'])->name('catalog');;

Route::get('/departments/firstyearM', function(){
    return view("layouts.firstYrM");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/firstyearM1', function(){
    return view("layouts.firstYrM1");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/genstudy', function(){
    return view("layouts.genStudy");
})->middleware(['auth'])->name('catalog');;

Route::get('/departments/genstudyM', function(){
    return view("layouts.genStudyM");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/genstudyM1', function(){
    return view("layouts.genStudyM1");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/histphil', function(){
    return view("layouts.histPhil");
})->middleware(['auth'])->name('catalog');;

Route::get('/departments/histphilM', function(){
    return view("layouts.histPhilM");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/histphilM1', function(){
    return view("layouts.histPhilM1");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/libstudy', function(){
    return view("layouts.libStudy");
})->middleware(['auth'])->name('catalog');;

Route::get('/departments/libstudyM', function(){
    return view("layouts.libStudyM");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/libstudyM1', function(){
    return view("layouts.libStudyM1");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/math', function(){
    return view("layouts.mathC");
})->middleware(['auth'])->name('catalog');;

Route::get('/departments/mathM', function(){
    return view("layouts.mathM");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/mathM1', function(){
    return view("layouts.mathM1");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/mental', function(){
    return view("layouts.mental");
})->middleware(['auth'])->name('catalog');;

Route::get('/departments/mentalM', function(){
    return view("layouts.mentalM");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/mentalM1', function(){
    return view("layouts.mentalM1");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/modernlan', function(){
    return view("layouts.modernLan");
})->middleware(['auth'])->name('catalog');;

Route::get('/departments/modernlanM', function(){
    return view("layouts.modernLanM");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/modernlanM1', function(){
    return view("layouts.modernLanM1");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/musicd', function(){
    return view("layouts.musicD");
})->middleware(['auth'])->name('catalog');;

Route::get('/departments/musicdM', function(){
    return view("layouts.musicDM");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/musicdM1', function(){
    return view("layouts.musicDM1");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/polecolaw', function(){
    return view("layouts.polEcoLaw");
})->middleware(['auth'])->name('catalog');;

Route::get('/departments/polecolawM', function(){
    return view("layouts.polEcoLawM");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/polecolawM1', function(){
    return view("layouts.polEcoLawM1");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/prostudy', function(){
    return view("layouts.proStudy");
})->middleware(['auth'])->name('catalog');;

Route::get('/departments/prostudyM', function(){
    return view("layouts.proStudyM");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/prostudyM1', function(){
    return view("layouts.proStudyM1");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/psychology', function(){
    return view("layouts.psych");
})->middleware(['auth'])->name('catalog');;

Route::get('/departments/psychologyM', function(){
    return view("layouts.psychM");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/psychologyM1', function(){
    return view("layouts.psychM1");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/publichealth', function(){
    return view("layouts.publicHeal");
})->middleware(['auth'])->name('catalog');;

Route::get('/departments/publichealthM', function(){
    return view("layouts.publicHealM");
})->middleware(['auth'])->name('masterschedule');

Route::get('/departments/publichealthM1', function(){
    return view("layouts.publicHealM1");
})->middleware(['auth'])->name('masterschedule');

Route::get('/departments/sociology', function(){
    return view("layouts.socio");
})->middleware(['auth'])->name('catalog');;

Route::get('/departments/sociologyM', function(){
    return view("layouts.socioM");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/sociologyM1', function(){
    return view("layouts.socioM1");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/visualarts', function(){
    return view("layouts.visualA");
})->middleware(['auth'])->name('catalog');;

Route::get('/departments/visualartsM', function(){
    return view("layouts.visualAM");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/visualartsM1', function(){
    return view("layouts.visualAM1");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/womenstudies', function(){
    return view("layouts.womenStudy");
})->middleware(['auth'])->name('catalog');;

Route::get('/departments/womenstudiesM', function(){
    return view("layouts.womenStudyM");
})->middleware(['auth'])->name('masterschedule');;

Route::get('/departments/womenstudiesM1', function(){
    return view("layouts.womenStudyM1");
})->middleware(['auth'])->name('masterschedule');;





require __DIR__.'/auth.php';
