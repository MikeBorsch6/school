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
})->name('home');

Route::get('/admin', function(){
    return view('layouts.AdminView');
})->name('admin');

Route::get('/login', function(){
    return view('login');
})->middleware(['auth'])->name('login');

Route::get('/catalog', function(){
    return view('layouts.catalog');
})->name('catalog');

Route::get('/masterschedule', function(){
    return view('layouts.masterschedule');
})->name('masterschedule');

Route::get('/masterschedule/selDepMaF21', function(){
    return view('layouts.selDepMaF21');
})->name('selDepMaF21');

Route::get('/masterschedule/selDepMaS21', function(){
    return view('layouts.selDepMaS21');
})->name('selDepMaS21');

Route::get('/selectCal', function(){
    return view('layouts.selectCal');
})->name('selectCal');

Route::get('/selectCal/academicCFall21', function(){
    return view('layouts.academicCFall21');
})->name('academicCalCFall21');

Route::get('/selectCal/academicCSpring21', function(){
    return view('layouts.academicCSpring21');
})->name('academicCSpring21');

Route::get('/departments/americanstudies', function(){
    return view("layouts.americanstudies");
});

Route::get('/departments/americanstudiesM', function(){
    return view("layouts.americanstudiesM");
});

Route::get('/departments/americanstudiesM1', function(){
    return view("layouts.americanstudiesM1");
});

Route::get('/departments/bioscience', function(){
    return view("layouts.bioSci");
});

Route::get('/departments/bioscienceM', function(){
    return view("layouts.bioSciM");
});

Route::get('/departments/bioscienceM1', function(){
    return view("layouts.bioSciM1");
});

Route::get('/departments/business', function(){
    return view("layouts.business");
});

Route::get('/departments/businessM', function(){
    return view("layouts.businessM");
});

Route::get('/departments/businessM1', function(){
    return view("layouts.businessM1");
});

Route::get('/departments/chemphy', function(){
    return view("layouts.chemPhy");
});

Route::get('/departments/chemphyM', function(){
    return view("layouts.chemPhyM");
});

Route::get('/departments/chemphyM1', function(){
    return view("layouts.chemPhyM1");
});

Route::get('/departments/comlearning', function(){
    return view("layouts.comLearn");
});

Route::get('/departments/comlearningM', function(){
    return view("layouts.comLearnM");
});

Route::get('/departments/comlearningM1', function(){
    return view("layouts.comLearnM1");
});

Route::get('/departments/compscience', function(){
    return view("layouts.compSci");
});

Route::get('/departments/compscienceM', function(){
    return view("layouts.compSciM");
});

Route::get('/departments/compscienceM1', function(){
    return view("layouts.compSciM1");
});

Route::get('/departments/criminology', function(){
    return view("layouts.crimi");
});

Route::get('/departments/criminologyM', function(){
    return view("layouts.crimiM");
});

Route::get('/departments/criminologyM1', function(){
    return view("layouts.crimiM1");
});

Route::get('/departments/education', function(){
    return view("layouts.educa");
});

Route::get('/departments/educationM', function(){
    return view("layouts.educaM");
});

Route::get('/departments/educationM1', function(){
    return view("layouts.educaM1");
});

Route::get('/departments/english', function(){
    return view("layouts.english");
});

Route::get('/departments/englishM', function(){
    return view("layouts.englishM");
});

Route::get('/departments/englishM1', function(){
    return view("layouts.englishM1");
});

Route::get('/departments/firstyear', function(){
    return view("layouts.firstYr");
});

Route::get('/departments/firstyearM', function(){
    return view("layouts.firstYrM");
});

Route::get('/departments/firstyearM1', function(){
    return view("layouts.firstYrM1");
});

Route::get('/departments/genstudy', function(){
    return view("layouts.genStudy");
});

Route::get('/departments/genstudyM', function(){
    return view("layouts.genStudyM");
});

Route::get('/departments/genstudyM1', function(){
    return view("layouts.genStudyM1");
});

Route::get('/departments/histphil', function(){
    return view("layouts.histPhil");
});

Route::get('/departments/histphilM', function(){
    return view("layouts.histPhilM");
});

Route::get('/departments/histphilM1', function(){
    return view("layouts.histPhilM1");
});

Route::get('/departments/libstudy', function(){
    return view("layouts.libStudy");
});

Route::get('/departments/libstudyM', function(){
    return view("layouts.libStudyM");
});

Route::get('/departments/libstudyM1', function(){
    return view("layouts.libStudyM1");
});

Route::get('/departments/math', function(){
    return view("layouts.mathC");
});

Route::get('/departments/mathM', function(){
    return view("layouts.mathM");
});

Route::get('/departments/mathM1', function(){
    return view("layouts.mathM1");
});

Route::get('/departments/mental', function(){
    return view("layouts.mental");
});

Route::get('/departments/mentalM', function(){
    return view("layouts.mentalM");
});

Route::get('/departments/mentalM1', function(){
    return view("layouts.mentalM1");
});

Route::get('/departments/modernlan', function(){
    return view("layouts.modernLan");
});

Route::get('/departments/modernlanM', function(){
    return view("layouts.modernLanM");
});

Route::get('/departments/modernlanM1', function(){
    return view("layouts.modernLanM1");
});

Route::get('/departments/musicd', function(){
    return view("layouts.musicD");
});

Route::get('/departments/musicdM', function(){
    return view("layouts.musicDM");
});

Route::get('/departments/musicdM1', function(){
    return view("layouts.musicDM1");
});

Route::get('/departments/polecolaw', function(){
    return view("layouts.polEcoLaw");
});

Route::get('/departments/polecolawM', function(){
    return view("layouts.polEcoLawM");
});

Route::get('/departments/polecolawM1', function(){
    return view("layouts.polEcoLawM1");
});

Route::get('/departments/prostudy', function(){
    return view("layouts.proStudy");
});

Route::get('/departments/prostudyM', function(){
    return view("layouts.proStudyM");
});

Route::get('/departments/prostudyM1', function(){
    return view("layouts.proStudyM1");
});

Route::get('/departments/psychology', function(){
    return view("layouts.psych");
});

Route::get('/departments/psychologyM', function(){
    return view("layouts.psychM");
});

Route::get('/departments/psychologyM1', function(){
    return view("layouts.psychM1");
});

Route::get('/departments/publichealth', function(){
    return view("layouts.publicHeal");
});

Route::get('/departments/publichealthM', function(){
    return view("layouts.publicHealM");
});

Route::get('/departments/publichealthM1', function(){
    return view("layouts.publicHealM1");
});

Route::get('/departments/sociology', function(){
    return view("layouts.socio");
});

Route::get('/departments/sociologyM', function(){
    return view("layouts.socioM");
});

Route::get('/departments/sociologyM1', function(){
    return view("layouts.socioM1");
});

Route::get('/departments/visualarts', function(){
    return view("layouts.visualA");
});

Route::get('/departments/visualartsM', function(){
    return view("layouts.visualAM");
});

Route::get('/departments/visualartsM1', function(){
    return view("layouts.visualAM1");
});

Route::get('/departments/womenstudies', function(){
    return view("layouts.womenStudy");
});

Route::get('/departments/womenstudiesM', function(){
    return view("layouts.womenStudyM");
});

Route::get('/departments/womenstudiesM1', function(){
    return view("layouts.womenStudyM1");
});

///// ADMIN DASHBOARD STUFF
///
Route::get('/usersPage', function(){
    return view('layouts.usersPage');
})->name('usersPage');

Route::get('/createUser', function(){
    return view('layouts.createUser');
})->name('createUser');

Route::get('/searchUser', function(){
    return view('layouts.searchUserP');
})->name('searchUserP');

Route::get('/coursePage', function(){
    return view('layouts.coursePage');
})->name('coursePage');

Route::get('/createCour', function(){
    return view('layouts.createCour');
})->name('createCour');

Route::get('/courseEditPage', function(){
    return view('layouts.courseEditPage');
})->name('courseEditPage');

Route::get('/searchCour', function(){
    return view('layouts.searchCour');
})->name('searchCour');

Route::get('/searchStudentG', function(){
    return view('layouts.searchStudentG');
})->name('searchStudentG');

Route::get('/studentTranscriptA', function(){
    return view('layouts.studentTranscriptA');
})->name('studentTranscriptA');

Route::get('/enterGrade', function(){
    return view('layouts.enterGrade');
})->name('enterGrade');

Route::get('/Holds', function(){
    return view('layouts.Holds');
})->name('Holds');

Route::get('/searchStudentH', function(){
    return view('layouts.searchStudentH');
})->name('searchStudentH');

Route::get('/studentHolds', function(){
    return view('layouts.studentHolds');
})->name('studentHolds');

Route::get('/searchUserP', function(){
    return view('layouts.searchUserP');
})->name('searchUserP');

Route::get('/passwordReset', function(){
    return view('layouts.passwordReset');
})->name('passwordReset');

Route::get('/classPage', function(){
    return view('layouts.classPage');
})->name('classPage');

Route::get('/createClass', function(){
    return view('layouts.createClass');
})->name('createClass');

Route::get('/searchClass', function(){
    return view('layouts.searchClass');
})->name('searchClass');

Route::get('/editClass', function(){
    return view('layouts.editClass');
})->name('editClass');

Route::get('/selectPrerequi', function(){
    return view('layouts.selectPrerequi');
})->name('selectPrerequi');

Route::get('/prerequiPage', function(){
    return view('layouts.prerequiPage');
})->name('prerequiPage');

Route::get('/selectDepartment', function(){
    return view('layouts.selectDepartment');
})->name('selectDepartment');

Route::get('/minmajPage', function(){
    return view('layouts.minmajPage');
})->name('minmajPage');

Route::get('/createMajor', function(){
    return view('layouts.createMajor');
})->name('createMajor');

Route::get('/createMinor', function(){
    return view('layouts.createMinor');
})->name('createMinor');

Route::get('/searchMajor', function(){
    return view('layouts.searchMajor');
})->name('searchMajor');

Route::get('/editMajor', function(){
    return view('layouts.editMajor');
})->name('editMajor');

Route::get('/searchMinors', function(){
    return view('layouts.searchMinors');
})->name('searchMinors');

Route::get('/editMinor', function(){
    return view('layouts.editMinor');
})->name('editMinor');

Route::get('/departments', function(){
    return view('layouts.departPage');
})->name('departPage');

Route::get('/createDepart', function(){
    return view('layouts.createDepart');
})->name('createDepart');

Route::get('/searchDepart', function(){
    return view('layouts.searchDepart');
})->name('searchDepart');

Route::get('/editDepart', function(){
    return view('layouts.editDepart');
})->name('editDepart');

Route::get('/selectSemestRost', function(){
    return view('layouts.selectSemestRost');
})->name('selectSemestRost');

Route::get('/searchClassRosterF21', function(){
    return view('layouts.searchClassRosterF21');
})->name('searchClassRosterF21');

Route::get('/classRosterF', function(){
    return view('layouts.classRosterF');
})->name('classRosterF');

Route::get('/searchClassRosterS21', function(){
    return view('layouts.searchClassRosterS21');
})->name('searchClassRosterS21');

Route::get('/classRosterS', function(){
    return view('layouts.classRosterS');
})->name('classRosterS');

Route::get('/lockedAccounts', function(){
    return view('layouts.lockedAccounts');
})->name('lockedAccounts');

Route::get('/MyInfoA', function(){
    return view('layouts.MyInfoA');
})->name('MyInfoA');

/* STUDENT DASHBOARD */
Route::get('/student', function(){
    return view('layouts.StudentView');
})->name('StudentView');

Route::get('/registerPage', function(){
    return view('layouts.registerPage');
})->name('registerPage');

Route::get('/selDepMaF21', function(){
    return view('layouts.selDepMaF21');
})->name('selDepMaF21');

Route::get('/selDepMaS21', function(){
    return view('layouts.selDepMaS21');
})->name('selDepMaS21');

Route::get('/myHolds', function(){
    return view('layouts.myHolds');
})->name('myHolds');

Route::get('/myDegreeEval', function(){
    return view('layouts.myDegreeEval');
})->name('myDegreeEval');

Route::get('/studentTranscript', function(){
    return view('layouts.studentTranscript');
})->name('studentTranscript');

Route::get('/myForms', function(){
    return view('layouts.myForms');
})->name('myForms');

Route::get('/MyInfoS', function(){
    return view('layouts.MyInfoS');
})->name('MyInfoS');







require __DIR__.'/auth.php';
