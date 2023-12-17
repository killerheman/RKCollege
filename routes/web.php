<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AqarController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\CriteriaController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SessionWiseController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Admin\BannerController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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


// Frontend Routes
//Home Menu
Route::get('/', [HomeController::class, 'index'])->name('home');

//About Menu
Route::get('/about-college', [HomeController::class, 'aboutCollege'])->name('aboutCollege');
Route::get('/vision-mission', [HomeController::class, 'visionMission'])->name('visionMission');
Route::get('/from-vice-chancellor-desk', [HomeController::class, 'viceChancellorDesk'])->name('viceChancellorDesk');
Route::get('/from-principal-desk', [HomeController::class, 'principalDesk'])->name('principalDesk');
Route::get('/college-achievements', [HomeController::class, 'collegeAchievements'])->name('collegeAchievements');
Route::get('/administration-committees', [HomeController::class, 'administrationCommittees'])->name('administrationCommittees');
Route::get('/organogram', [HomeController::class, 'organogram'])->name('organogram');
Route::get('/annual-report', [HomeController::class, 'annualReport'])->name('annualReport');

//Academics Menu
Route::get('/under-graduate-courses', [HomeController::class, 'underGraduateCourses'])->name('underGraduateCourses');
Route::get('/post-graduate-courses', [HomeController::class, 'postGraduateCourses'])->name('postGraduateCourses');
Route::get('/self-finance-ug-courses', [HomeController::class, 'diplomaCourses'])->name('diplomaCourses');
Route::get('/certificate-courses', [HomeController::class, 'certificateCourses'])->name('certificateCourses');

Route::get('/examination', [HomeController::class, 'examination'])->name('examination');
Route::get('/assesments', [HomeController::class, 'assesments'])->name('assesments');

Route::get('/faculty_of_arts', [HomeController::class, 'faculty_arts'])->name('facultyArts');
Route::get('/faculty_of_commerce', [HomeController::class, 'faculty_commerce'])->name('facultyCommerce');
Route::get('/faculty_of_science', [HomeController::class, 'faculty_science'])->name('facultyScience');
Route::get('/faculty_of_management', [HomeController::class, 'faculty_management'])->name('facultyManagement');
Route::get('/faculty_of_computer_science', [HomeController::class, 'faculty_computer_science'])->name('facultyComputerScience');
Route::get('/faculty_of_journalism_&_mass_communication', [HomeController::class, 'faculty_journalism_mass_communication'])->name('facultyJournalism');

Route::get('/college-research', [HomeController::class, 'collegeResearch'])->name('collegeResearch');
Route::get('/distance-learning-center', [HomeController::class, 'distanceLearningCenter'])->name('distanceLearningCenter');


//Admission Menu
Route::get('/information-bulletin-admission', [HomeController::class, 'informationBulletinAdmission'])->name('informationBulletinAdmission');
Route::get('/admission-schedule', [HomeController::class, 'admissionSchedule'])->name('admissionSchedule');
Route::get('/eligibility-criteria', [HomeController::class, 'eligibilityCriteria'])->name('eligibilityCriteria');
Route::get('/admission-procedure', [HomeController::class, 'admissionProcedure'])->name('admissionProcedure');
Route::get('/seats-offered', [HomeController::class, 'seatsOffered'])->name('seatsOffered');
Route::get('/apply-online', [HomeController::class, 'applyOnline'])->name('applyOnline');


//Library Menu
Route::get('/college-library', [HomeController::class, 'collegeLibrary'])->name('collegeLibrary');
Route::get('/library-rules', [HomeController::class, 'libraryRules'])->name('libraryRules');
Route::get('/library-n-list', [HomeController::class, 'libraryNList'])->name('libraryNList');

//College Facilities Menu
Route::get('/college-canteen', [HomeController::class, 'collegeCanteen'])->name('collegeCanteen');
Route::get('/sports-games', [HomeController::class, 'sportsGames'])->name('sportsGames');
Route::get('/magazines-publications', [HomeController::class, 'magazinePublications'])->name('magazinePublications');
Route::get('/hostel-facilities', [HomeController::class, 'hostelFacilities'])->name('hostelFacilities');
Route::get('/ncc-nss-scouts-guides', [HomeController::class, 'nccNssScoutsGuides'])->name('nccNssScoutsGuides');
Route::get('/medical-facilities', [HomeController::class, 'medicalFacilites'])->name('medicalFacilites');
Route::get('/college-infrastructure', [HomeController::class, 'collegeInfrastructure'])->name('collegeInfrastructure');

//Student Corners Menu
Route::get('/result', [HomeController::class, 'result'])->name('result');
Route::get('/examination-datesheet', [HomeController::class, 'examinationDatesheet'])->name('examinationDatesheet');
Route::get('/examination-form', [HomeController::class, 'examinationForm'])->name('examinationForm');
Route::get('/download-syllabus', [HomeController::class, 'downloadSyllabus'])->name('downloadSyllabus');
Route::get('/download-online-study-material', [HomeController::class, 'downloadOnlineStudyMaterial'])->name('downloadOnlineStudyMaterial');
Route::get('/college-placement', [HomeController::class, 'collegePlacement'])->name('collegePlacement');
Route::get('/regulation', [HomeController::class, 'regulation'])->name('regulation');

//PhotoGallery Menu
Route::get('/event-gallery', [HomeController::class, 'eventGallery'])->name('eventGallery');
Route::get('/gallery-image/{id}', [HomeController::class, 'photoGalleryImage'])->name('photoGalleryImage');
//News Menu
Route::get('/news', [HomeController::class, 'news'])->name('news');
//PressRelease Menu
Route::get('/press-release', [HomeController::class, 'pressRelease'])->name('pressRelease');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contactUs');

//IQAC Menu
Route::get('/iqac', [HomeController::class, 'iqac'])->name('iqac');
Route::get('/aqar', [HomeController::class, 'aqar'])->name('aqar');
Route::get('/iqac-composition', [HomeController::class, 'iqacComposition'])->name('iqacComposition');
Route::get('/minutes-of-meeting', [HomeController::class, 'minutesOfMeeting'])->name('minutesOfMeeting');
Route::get('/ssr', [HomeController::class, 'ssr'])->name('ssr');
Route::get('/aishe-report', [HomeController::class, 'aisheReport'])->name('aisheReport');
Route::get('/naac-grade', [HomeController::class, 'naacGrade'])->name('naacGrade');
Route::get('/students-satisfaction-survey', [HomeController::class, 'sss'])->name('sss');
Route::get('/nirf', [HomeController::class, 'nirf'])->name('nirf');
Route::get('/criteria', [HomeController::class, 'criteria'])->name('criteria');




// Backend Routes
Route::get('/admin',[LoginController::class, 'index'])->name('admin');
Route::post('/login',[LoginController::class, 'store'])->name('login');

Route::group(['prefix'=>'admin','as'=>'admin.', 'middleware' => 'auth'],function(){
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
    Route::get('/logout',[AdminController::class,'logout'])->name('logout');

    Route::resource('/user', UserController::class);
    Route::get('user-profile/{id?}',[UserController::class,'profile'])->name('profile');
    Route::get('edit-user-profile/{id?}',[UserController::class,'editProfile'])->name('editprofile');
    Route::post('user-profile-update',[UserController::class,'updateProfile'])->name('userupdate');
    Route::post('user-pass-update',[UserController::class,'updatePassword'])->name('uppass');

    Route::resource('/role', RoleController::class);
    Route::resource('/permission', PermissionController::class);
    Route::get('/role-has-permission',[PermissionController::class,'rolePermission'])->name('rolePermission');
    Route::post('/fetch-permission',[PermissionController::class,'fetchPermission'])->name('fetchPermission');
    Route::post('/assign-permission',[PermissionController::class,'assignPermission'])->name('assignPermission');
    Route::resource('/notice', NoticeController::class);
    Route::resource('/event', EventController::class);
    Route::resource('/gallery', GalleryController::class);
    Route::resource('/aqar', AqarController::class);
    Route::resource('/criteria', CriteriaController::class);
    Route::resource('/banner', BannerController::class);
    Route::resource('/sessionwise', SessionWiseController::class);


});

Route::get('lockscreen', [UserController::class, 'lockscreen'])->name('lockscreen');


Route::get('/optimize', function(){
    Artisan::call('optimize');
});
Route::get('/optimize-clear', function(){
    Artisan::call('optimize:clear');
});

