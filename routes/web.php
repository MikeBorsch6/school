<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\LoginComntroller;
use App\Http\Controller\HomeController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function(){
    return view('home');
})->name('home');

Route::get('/home', function(){
    return view('home');
})->name('home1');

Route::get('/admin', function(){
    return view('layouts.AdminView');
})->middleware('auth')->name('admin');

Route::get('/login', function(){
    return view('login');
})->middleware(['auth'])->name('login');

Route::get('/catalog', function(){
    return view('layouts.catalog');
})->name('catalog');

Route::get('/masterschedule', function(){
    return view('layouts.masterschedule');
})->name('masterschedule');

Route::get('/selDepMaF21', function(){
    return view('layouts.selDepMaF21');
})->name('selDepMaF21');

Route::get('/selDepMaS21', function(){
    return view('layouts.selDepMaS21');
})->name('selDepMaS21');

Route::get('/selDepMaS20', function(){
    return view('layouts.selDepMaS20');
})->name('selDepMaS20');

Route::get('/selDepMaF20', function(){
    return view('layouts.selDepMaF20');
})->name('selDepMaF20');

Route::get('/selDepMaS19', function(){
    return view('layouts.selDepMaS19');
})->name('selDepMaS19');

Route::get('/selDepMaF19', function(){
    return view('layouts.selDepMaF19');
})->name('selDepMaF19');

Route::get('/selDepMaS18', function(){
    return view('layouts.selDepMaS18');
})->name('selDepMaS18');

Route::get('/selDepMaF18', function(){
    return view('layouts.selDepMaF18');
})->name('selDepMaF18');

Route::get('/selDepMaF17', function(){
    return view('layouts.selDepMaF17');
})->name('selDepMaF17');

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

Route::get('/coursePage', function(){
    return view('layouts.coursePage');
})->name('coursePage');

Route::get('/searchCour', function(){
    return view('layouts.searchCour');
})->name('searchCour');

Route::get('/searchStudentG', function(){
    return view('layouts.searchStudentG');
})->name('searchStudentG');

Route::get('/Holds', function(){
    return view('layouts.Holds');
})->name('Holds');

Route::get('/searchStudentH', function(){
    return view('layouts.searchStudentH');
})->name('searchStudentH');

Route::get('/searchUserP', function(){
    return view('layouts.searchUserP');
})->name('searchUserP');

Route::get('/searchUser', function(){
    return view('layouts.searchUser');
})->name('searchUser');

Route::get('/adminPageA', function(){
    return view('layouts.adminPageA');
})->name('adminPageA');

Route::get('/facultyPageA', function(){
    return view('layouts.facultyPageA');
})->name('facultyPageA');

Route::get('/researcherPageA', function(){
    return view('layouts.researcherPageA');
})->name('researcherPageA');

Route::get('/ResearcherView', function(){
    return view('layouts.ResearchView');
})->name('ResearcherView');

Route::get('/studentAttendanceA', function(){
    return view('layouts.studentAttendanceA');
})->name('searchAttendanceA');

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
})->middleware('auth')->name('lockedAccounts');

Route::get('/MyInfoA', function(){
    return view('layouts.MyInfoA');
})->middleware('auth')->name('MyInfoA');

Route::get('/passwordReset', function(){
    return view('layouts.passwordReset');
})->middleware('auth')->name('passwordReset');



/* STUDENT DASHBOARD */
Route::get('/student', function(){
    return view('layouts.StudentView');
})->middleware('auth')->name('StudentView');

Route::get('/registerPage', function(){
    return view('layouts.registerPage');
})->middleware('auth')->name('registerPage');

Route::get('/selDepMaF21', function(){
    return view('layouts.selDepMaF21');
})->name('selDepMaF21');

Route::get('/selDepMaS21', function(){
    return view('layouts.selDepMaS21');
})->name('selDepMaS21');

Route::get('/myHolds', function(){
    return view('layouts.myHolds');
})->middleware('auth')->name('myHolds');

Route::get('/myDegreeEval', function(){
    return view('layouts.myDegreeEval');
})->middleware('auth')->name('myDegreeEval');

Route::get('/studentTranscript', function(){
    return view('layouts.studentTranscript');
})->middleware('auth')->name('studentTranscript');

Route::get('/myForms', function(){
    return view('layouts.myForms');
})->middleware('auth')->name('myForms');

Route::get('/MyInfoS', function(){
    return view('layouts.MyInfoS');
})->middleware('auth')->name('MyInfoS');

Route::get('/adviseeA', function(){
    return view('layouts.adviseeA');
})->name('adviseeA');

Route::get('/faculty', function(){
    return view('layouts.FacultyView');
})->name('FacultyView');

Route::get('/courseHistoryf', function(){
    return view('layouts.courseHistoryf');
})->name('courseHistoryf');

Route::get('/viewClassInfo', function(){
    return view('layouts.viewClassInfo');
})->name('viewClassInfo');

Route::get('/studentTranscriptF', function(){
    return view('layouts.studentTranscriptF');
})->name('studentTranscriptF');

Route::get('/currentClassesf', function(){
    return view('layouts.currentClassesf');
})->name('currentClassesf');

Route::get('/attendanceSheet', function(){
    return view('layouts.attendanceSheet');
})->name('attendanceSheet');

Route::get('/adviseesF', function(){
    return view('layouts.adviseesF');
})->name('adviseesF');

Route::get('/studentPageF', function(){
    return view('layouts.studentPageF');
})->name('studentPageF');

Route::get('/studentDegreeEvalF', function(){
    return view('layouts.studentDegreeEvalF');
})->name('studentDegreeEvalF');

Route::get('/studentAttendanceF', function(){
    return view('layouts.studentAttendanceF');
})->name('studentAttendanceF');

Route::get('/searchStudentFG', function(){
    return view('layouts.searchStudentFG');
})->name('searchStudentFG');

Route::get('/searchStudentF', function(){
    return view('layouts.searchStudentF');
})->name('searchStudentF');

Route::get('/studentFoundf', function(){
    return view('layouts.studentFoundf');
})->name('studentFoundf');

Route::get('/studentFoundfG', function(){
    return view('layouts.studentFoundfG');
})->name('studentFoundfG');

Route::get('/researcher', function(){
    return view('layouts.ResearchView');
})->name('ResearchView');

Route::get('/departmentStats', function(){
    return view('layouts.departmentStats');
})->name('departmentStats');

Route::get('/classStats', function(){
    return view('layouts.classStats');
})->name('classStats');

Route::get('/gradesStats', function(){
    return view('layouts.gradesStats');
})->name('gradesStats');

Route::get('/MyInfoR', function(){
    return view('layouts.MyInfoR');
})->name('MyInfoR');

Route::get('/MyInfoF', function(){
    return view('layouts.MyInfoF');
})->name('MyInfoF');



Route::namespace('App\Http\Controllers')
    ->middleware('auth')
    ->group(function() {
        Route::post('courses', function(Request $request) {
            \App\Models\Course::create(
                [
                    'crn' => $request->crn,
                    'subject' => $request->subject,
                    'course' => $request->course,
                    'section' => $request->section,
                    'campus_id' =>$request->campus_id,
                    'credits' =>$request->credits,
                    'title' =>$request->title,
                    'days' =>$request->days,
                    'time' =>$request->time,
                    'capacity' => $request->capacity,
                    'section_actual' => $request->section_actual,
                    'section_remaining' => $request->section_remaining,
                    'user_id' => $request->user_id,
                    'date' => $request->date,
                    'location' => $request->location,
                    'field_id' => $request->field_id
                ]
            );
        })->name('course.create');

        Route::get('course/{course}',  function(\App\Models\Course $course) {;
            return view('layouts.courseEditPage', ['course' => $course]);
        })->name('course.edit');

        Route::put('course/{course}', function(Request $request, \App\Models\Course $course) {
            $course->update(
                [
                    'crn' => $request->crn,
                    'subject' => $request->subject,
                    'course' => $request->course,
                    'section' => $request->section,
                    'campus_id' =>$request->campus_id,
                    'credits' =>$request->credits,
                    'title' =>$request->title,
                    'days' =>$request->days,
                    'time' =>$request->time,
                    'capacity' => $request->capacity,
                    'section_actual' => $request->section_actual,
                    'section_remaining' => $request->section_remaining,
                    'user_id' => $request->user_id,
                    'date' => $request->date,
                    'location' => $request->location,
                    'field_id' => $request->field_id,
                    'parent_id' => $request->parent_id,
                    'subject_id' => $request->subject_id
                ]
            );
            return redirect()->back();

        })->name('course.update');

        Route::get('users/{user}/courses', 'UserController@teachers');
        Route::resource('users', 'UserController');
        Route::post('user-course', 'StudentCourseController@registerStudent')->name('user-course');
        Route::post('users-course-delete', 'StudentCourseController@deleteStudentCourse')->name('user-course-delete');
        /*
         * courses
         */
        Route::get('courses/{year}/{semester}', 'CourseController@showCurrentYearCourses');

        Route::get('/user/{user}/password', ['App\Http\Controllers\UserController', 'resetPasswordView']);
        Route::post('/user/{user}/reset', ['App\Http\Controllers\UserController', 'resetPassword'])->name('user.reset');
        Route::post('/user/{user}/reset', ['App\Http\Controllers\UserController', 'resetPassword'])->name('user.reset');

        Route::get('/studentTranscriptA/{user}', function(App\Models\User $user) {
            return view('layouts.studentTranscriptA', ['user' => $user]);
        })->name('studentTranscriptA');

        Route::get('/enterGrade/{grade}', function(\App\Models\Grade $grade){
            return view('layouts.enterGrade', ['grade' => $grade]);
        })->name('enterGrade');

        Route::put('/grade/{grade}', function(Request $request, \App\Models\Grade $grade) {
            $grade->update(
                [
                    'grade' => $request->grade
                ]
            );

            return redirect(route('searchUser'));

        })->name('user.grade.edit');

        Route::get('/studentDegreeEval/{user}', function(\App\Models\User $user){
            return view('layouts.studentDegreeEval', ['user' => $user]);
        })->name('searchDegreeEval');

        Route::get('/studentHolds/{user}', function(\App\Models\User $user) {
            return view('layouts.studentHolds', ['user' => $user]);
        })->name('student.holds');

        Route::post('/student/holds/{user}', function(Request $request, \App\Models\User $user) {

            $hold = \App\Models\Hold::find($request->hold);

            $user->holds()->save($hold);

            return redirect(route('searchStudentH'));

        })->name('student.holds.post');

        Route::post('/fields', function(Request $request) {
           \App\Models\Field::create(
               [
                   'name' => $request->name
               ]
           );

           return redirect(route('selectDepartment'));
        })->name('field.create');

        Route::get('/editMajor/{field}', function(\App\Models\Field $field){
            return view('layouts.editMajor', ['field' => $field]);
        })->name('editMajor');

        Route::put('/editMajor/{field}', function(Request $request, \App\Models\Field $field) {
            $field->update(['name' => $request->name]);

            return redirect(\route('searchMajor'));
        });

        Route::get('/classRosterF/{course}', function(\App\Models\Course $course){
            return view('layouts.classRosterF', ['course' => $course]);
        })->name('classRosterF');

        Route::get('/searchClassRosterS/{course}', function(\App\Models\Course $course){
            return view('layouts.searchClassRosterS21', ['course' => $course]);
        })->name('searchClassRosterS21');

        Route::get('/course/{user}/{course}', function(\App\Models\User $user, \App\Models\Course $course) {
            $user
                ->courses()
                ->detach(
                    $course
                );

            return redirect()->back();
        });

        Route::get('/createCour', function(){
            return view('layouts.createCour');
        })->name('createCour');

        Route::post('createCour', function(Request $request) {
           \App\Models\Subject::create(
               [
                   'name' => $request->name
               ]
           );

           return redirect()->back();

        })->name('subject.create');

        Route::get('/editClass/{subject}', function(\App\Models\Subject  $subject){
            return view('layouts.editClass', ['subject' => $subject]);
        })->name('editClass');

        Route::put('/editCourse/{subject}', function(Request $request, \App\Models\Subject  $subject){
            $subject->update(
                [
                    'name' => $request->name
                ]
            );

            return redirect()->back();

        })->name('editClass');

        Route::get('/prerequiPage/{course}', function(\App\Models\Course $course){
            $parents = \App\Models\Course::select()
                ->where('date', '08/03/21-12/16/21')
                ->where('course', $course->parent_id)
                ->where('field_id', $course->field_id)
                ->get();

            return view('layouts.prerequiPage', ['course' => $course, 'parents' => $parents]);
        })->name('prerequiPage');

        Route::get('/studentAttendanceA/{user}', function(App\Models\User $user){
            return view('layouts.studentAttendanceA', ['user' => $user]);
        })->name('searchAttendanceA');

        Route::get('/courseHistoryfA/{user}', function(App\Models\User $user){
            return view('layouts.courseHistoryfA', ['user' => $user]);
        })->name('courseHistoryfA');

        Route::get('/viewClassInfoA/{course}', function(App\Models\Course $course){
            return view('layouts.viewClassInfoA', ['course' => $course]);
        })->name('viewClassInfoA');
    });


require __DIR__.'/auth.php';
