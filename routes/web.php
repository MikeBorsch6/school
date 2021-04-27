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
})->middleware(['auth'])->name('login');

Route::get('/catalog', function(){
    return view('layouts.catalog');
})->middleware(['auth'])->name('catalog');

Route::get('/masterschedule', function(){
    return view('layouts.masterschedule');
})->middleware(['auth'])->name('masterschedule');

Route::get('/masterschedule/selDepMaF21', function(){
    return view('layouts.selDepMaF21');
})->middleware(['auth'])->name('selDepMaF21');

Route::get('/masterschedule/selDepMaS21', function(){
    return view('layouts.selDepMaS21');
})->middleware(['auth'])->name('selDepMaS21');

Route::get('/selectCal', function(){
    return view('layouts.selectCal');
})->middleware(['auth'])->name('selectCal');

Route::get('/selectCal/academicCFall', function(){
    return view('layouts.academicCFall');
})->middleware(['auth'])->name('academicCalCFall');

Route::get('/selectCal/academicCSpring', function(){
    return view('layouts.academicCSpring');
})->middleware(['auth'])->name('academicCSpring');

Route::get('/departments/americanstudies', function(){
    return view("layouts.americanstudies");
})->middleware(['auth']);

Route::get('/departments/americanstudiesM', function(){
    return view("layouts.americanstudiesM");
})->middleware(['auth']);

Route::get('/departments/americanstudiesM1', function(){
    return view("layouts.americanstudiesM1");
})->middleware(['auth']);

Route::get('/departments/bioscience', function(){
    return view("layouts.bioSci");
})->middleware(['auth']);

Route::get('/departments/bioscienceM', function(){
    return view("layouts.bioSciM");
})->middleware(['auth']);

Route::get('/departments/bioscienceM1', function(){
    return view("layouts.bioSciM1");
})->middleware(['auth']);

Route::get('/departments/business', function(){
    return view("layouts.business");
})->middleware(['auth']);

Route::get('/departments/businessM', function(){
    return view("layouts.businessM");
})->middleware(['auth']);

Route::get('/departments/businessM1', function(){
    return view("layouts.businessM1");
})->middleware(['auth']);

Route::get('/departments/chemphy', function(){
    return view("layouts.chemPhy");
})->middleware(['auth']);

Route::get('/departments/chemphyM', function(){
    return view("layouts.chemPhyM");
})->middleware(['auth']);

Route::get('/departments/chemphyM1', function(){
    return view("layouts.chemPhyM1");
})->middleware(['auth']);

Route::get('/departments/comlearning', function(){
    return view("layouts.comLearn");
})->middleware(['auth']);

Route::get('/departments/comlearningM', function(){
    return view("layouts.comLearnM");
})->middleware(['auth']);

Route::get('/departments/comlearningM1', function(){
    return view("layouts.comLearnM1");
})->middleware(['auth']);

Route::get('/departments/compscience', function(){
    return view("layouts.compSci");
})->middleware(['auth']);

Route::get('/departments/compscienceM', function(){
    return view("layouts.compSciM");
})->middleware(['auth']);

Route::get('/departments/compscienceM1', function(){
    return view("layouts.compSciM1");
})->middleware(['auth']);

Route::get('/departments/criminology', function(){
    return view("layouts.crimi");
})->middleware(['auth']);

Route::get('/departments/criminologyM', function(){
    return view("layouts.crimiM");
})->middleware(['auth']);

Route::get('/departments/criminologyM1', function(){
    return view("layouts.crimiM1");
})->middleware(['auth']);

Route::get('/departments/education', function(){
    return view("layouts.educa");
})->middleware(['auth']);

Route::get('/departments/educationM', function(){
    return view("layouts.educaM");
})->middleware(['auth']);

Route::get('/departments/educationM1', function(){
    return view("layouts.educaM1");
})->middleware(['auth']);

Route::get('/departments/english', function(){
    return view("layouts.english");
})->middleware(['auth']);

Route::get('/departments/englishM', function(){
    return view("layouts.englishM");
})->middleware(['auth']);

Route::get('/departments/englishM1', function(){
    return view("layouts.englishM1");
})->middleware(['auth']);

Route::get('/departments/firstyear', function(){
    return view("layouts.firstYr");
})->middleware(['auth']);

Route::get('/departments/firstyearM', function(){
    return view("layouts.firstYrM");
})->middleware(['auth']);

Route::get('/departments/firstyearM1', function(){
    return view("layouts.firstYrM1");
})->middleware(['auth']);

Route::get('/departments/genstudy', function(){
    return view("layouts.genStudy");
})->middleware(['auth']);

Route::get('/departments/genstudyM', function(){
    return view("layouts.genStudyM");
})->middleware(['auth']);

Route::get('/departments/genstudyM1', function(){
    return view("layouts.genStudyM1");
})->middleware(['auth']);

Route::get('/departments/histphil', function(){
    return view("layouts.histPhil");
})->middleware(['auth']);

Route::get('/departments/histphilM', function(){
    return view("layouts.histPhilM");
})->middleware(['auth']);

Route::get('/departments/histphilM1', function(){
    return view("layouts.histPhilM1");
})->middleware(['auth']);

Route::get('/departments/libstudy', function(){
    return view("layouts.libStudy");
})->middleware(['auth']);

Route::get('/departments/libstudyM', function(){
    return view("layouts.libStudyM");
})->middleware(['auth']);

Route::get('/departments/libstudyM1', function(){
    return view("layouts.libStudyM1");
})->middleware(['auth']);

Route::get('/departments/math', function(){
    return view("layouts.mathC");
})->middleware(['auth']);

Route::get('/departments/mathM', function(){
    return view("layouts.mathM");
})->middleware(['auth']);

Route::get('/departments/mathM1', function(){
    return view("layouts.mathM1");
})->middleware(['auth']);

Route::get('/departments/mental', function(){
    return view("layouts.mental");
})->middleware(['auth']);

Route::get('/departments/mentalM', function(){
    return view("layouts.mentalM");
})->middleware(['auth']);

Route::get('/departments/mentalM1', function(){
    return view("layouts.mentalM1");
})->middleware(['auth']);

Route::get('/departments/modernlan', function(){
    return view("layouts.modernLan");
})->middleware(['auth']);

Route::get('/departments/modernlanM', function(){
    return view("layouts.modernLanM");
})->middleware(['auth']);

Route::get('/departments/modernlanM1', function(){
    return view("layouts.modernLanM1");
})->middleware(['auth']);

Route::get('/departments/musicd', function(){
    return view("layouts.musicD");
})->middleware(['auth']);

Route::get('/departments/musicdM', function(){
    return view("layouts.musicDM");
})->middleware(['auth']);

Route::get('/departments/musicdM1', function(){
    return view("layouts.musicDM1");
})->middleware(['auth']);

Route::get('/departments/polecolaw', function(){
    return view("layouts.polEcoLaw");
})->middleware(['auth']);

Route::get('/departments/polecolawM', function(){
    return view("layouts.polEcoLawM");
})->middleware(['auth']);

Route::get('/departments/polecolawM1', function(){
    return view("layouts.polEcoLawM1");
})->middleware(['auth']);

Route::get('/departments/prostudy', function(){
    return view("layouts.proStudy");
})->middleware(['auth']);

Route::get('/departments/prostudyM', function(){
    return view("layouts.proStudyM");
})->middleware(['auth']);

Route::get('/departments/prostudyM1', function(){
    return view("layouts.proStudyM1");
})->middleware(['auth']);

Route::get('/departments/psychology', function(){
    return view("layouts.psych");
})->middleware(['auth']);

Route::get('/departments/psychologyM', function(){
    return view("layouts.psychM");
})->middleware(['auth']);

Route::get('/departments/psychologyM1', function(){
    return view("layouts.psychM1");
})->middleware(['auth']);

Route::get('/departments/publichealth', function(){
    return view("layouts.publicHeal");
})->middleware(['auth']);

Route::get('/departments/publichealthM', function(){
    return view("layouts.publicHealM");
})->middleware(['auth']);

Route::get('/departments/publichealthM1', function(){
    return view("layouts.publicHealM1");
})->middleware(['auth']);

Route::get('/departments/sociology', function(){
    return view("layouts.socio");
})->middleware(['auth']);

Route::get('/departments/sociologyM', function(){
    return view("layouts.socioM");
})->middleware(['auth']);

Route::get('/departments/sociologyM1', function(){
    return view("layouts.socioM1");
})->middleware(['auth']);

Route::get('/departments/visualarts', function(){
    return view("layouts.visualA");
})->middleware(['auth']);

Route::get('/departments/visualartsM', function(){
    return view("layouts.visualAM");
})->middleware(['auth']);

Route::get('/departments/visualartsM1', function(){
    return view("layouts.visualAM1");
})->middleware(['auth']);

Route::get('/departments/womenstudies', function(){
    return view("layouts.womenStudy");
})->middleware(['auth']);

Route::get('/departments/womenstudiesM', function(){
    return view("layouts.womenStudyM");
})->middleware(['auth']);

Route::get('/departments/womenstudiesM1', function(){
    return view("layouts.womenStudyM1");
})->middleware(['auth']);





require __DIR__.'/auth.php';
