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
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\FacultyController;
use App\Http\Controllers\Admin\SubDepartmentController;
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


//oldWebsites

Route::get('/from-principal-desk', [HomeController::class, 'principalDesk'])->name('principalDesk');
Route::get('/college-committee', [HomeController::class, 'collegeCommitte'])->name('collegeCommitte');
Route::get('/administration', [HomeController::class, 'administration'])->name('administration');
Route::get('/facilities', [HomeController::class, 'facilities'])->name('facilities');

//About Menu
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/iso-certified', [HomeController::class, 'isoCertified'])->name('isoCertified');
Route::get('/college-history', [HomeController::class, 'CollegeHistory'])->name('CollegeHistory');
Route::get('/vision-mission', [HomeController::class, 'missionVision'])->name('missionVision');
Route::get('/kulgeet', [HomeController::class, 'kulgeet'])->name('kulgeet');
Route::get('/mou', [HomeController::class, 'mou'])->name('mou');
Route::get('/naac', [HomeController::class, 'naac'])->name('naac');
Route::get('/institution-practice', [HomeController::class, 'practice'])->name('practice');
Route::get('/lab', [HomeController::class, 'lab'])->name('lab');
Route::get('/auditoirum', [HomeController::class, 'auditoirum'])->name('auditoirum');
Route::get('/conference-hall', [HomeController::class, 'conferenceHall'])->name('conferenceHall');
Route::get('/indoor-stadium', [HomeController::class, 'indoorStadium'])->name('indoorStadium');
Route::get('/media-center', [HomeController::class, 'mediaCenter'])->name('mediaCenter');
Route::get('/smart-classes', [HomeController::class, 'smartClasses'])->name('smartClasses');





Route::get('/college-achievements', [HomeController::class, 'collegeAchievements'])->name('collegeAchievements');

//Administration
Route::get('/facility-incharge', [HomeController::class, 'facilityIncharge'])->name('facilityIncharge');
Route::get('/administrative-structure', [HomeController::class, 'administrativeStructure'])->name('administrativeStructure');
Route::get('/administrative-section', [HomeController::class, 'administrativeSection'])->name('administrativeSection');
Route::get('/account-section', [HomeController::class, 'accountSection'])->name('accountSection');
Route::get('/laboratory', [HomeController::class, 'laboratory'])->name('laboratory');
Route::get('/library', [HomeController::class, 'library'])->name('library');


//Academics
Route::get('/admission', [HomeController::class, 'admission'])->name('admission');
Route::get('/academic-activities', [HomeController::class, 'activity'])->name('activity');
Route::get('/academic-curriculum', [HomeController::class, 'curriculum'])->name('curriculum');
Route::get('/enhancement-program', [HomeController::class, 'enhancementProgram'])->name('enhancementProgram');
Route::get('/pso', [HomeController::class, 'pso'])->name('pso');
Route::get('/other-program', [HomeController::class, 'otherProgram'])->name('otherProgram');
Route::get('/orientation-class', [HomeController::class, 'orientationClass'])->name('orientationClass');
Route::get('/social-awareness', [HomeController::class, 'socialAwareness'])->name('socialAwareness');
Route::get('/add-on-course', [HomeController::class, 'addOnCourse'])->name('addOnCourse');
Route::get('/annual-report', [HomeController::class, 'annualReport'])->name('annualReport');

//Courses
Route::get('/vedic-mathematics', [HomeController::class, 'vedicMathematics'])->name('vedicMathematics');
Route::get('/skill-development-program', [HomeController::class, 'skillDevelopmentProgram'])->name('skillDevelopmentProgram');
Route::get('/yoga-philosophy', [HomeController::class, 'yogaPhilosophy'])->name('yogaPhilosophy');
Route::get('/indology', [HomeController::class, 'indology'])->name('indology');
Route::get('/gender-society', [HomeController::class, 'genderSociety'])->name('genderSociety');
Route::get('/film-culture', [HomeController::class, 'filmCulture'])->name('filmCulture');
Route::get('/human-right', [HomeController::class, 'humanRight'])->name('humanRight');
Route::get('/entrepreneurship', [HomeController::class, 'entrepreneurship'])->name('entrepreneurship');
Route::get('/record-document', [HomeController::class, 'recordDocument'])->name('recordDocument');
Route::get('/emotional-intelligence', [HomeController::class, 'emotionalIntelligence'])->name('emotionalIntelligence');
Route::get('/mass-media', [HomeController::class, 'massMedia'])->name('massMedia');

//Activities

Route::get('/sports-activity', [HomeController::class, 'sportActivity'])->name('sportActivity');
Route::get('/nss', [HomeController::class, 'nss'])->name('nss');
Route::get('/culture-activity', [HomeController::class, 'cultureActivities'])->name('cultureActivities');
Route::get('/ncc', [HomeController::class, 'ncc'])->name('ncc');

Route::get('/commerce/academic-activity', [HomeController::class, 'commerceAcademicActivity'])->name('commerceAcademicActivity');
Route::get('/commerce/student-forum', [HomeController::class, 'commerceStudentForum'])->name('commerceStudentForum');

Route::get('/economics/academic-activity', [HomeController::class, 'economicsAcademicActivity'])->name('economicsAcademicActivity');
Route::get('/economics/student-forum', [HomeController::class, 'economicsStudentForum'])->name('economicsStudentForum');

Route::get('/hindi/academic-activity', [HomeController::class, 'hindiAcademicActivity'])->name('hindiAcademicActivity');
Route::get('/hindi/student-forum', [HomeController::class, 'hindiStudentForum'])->name('hindiStudentForum');

Route::get('/english/academic-activity', [HomeController::class, 'englishAcademicActivity'])->name('englishAcademicActivity');
Route::get('/english/student-forum', [HomeController::class, 'englishStudentForum'])->name('englishStudentForum');

Route::get('/sanskrit/academic-activity', [HomeController::class, 'sanskritAcademicActivity'])->name('sanskritAcademicActivity');
Route::get('/sanskrit/student-forum', [HomeController::class, 'sanskritStudentForum'])->name('sanskritStudentForum');

Route::get('/philosophy/academic-activity', [HomeController::class, 'philosophyAcademicActivity'])->name('philosophyAcademicActivity');
Route::get('/philosophy/student-forum', [HomeController::class, 'philosophyStudentForum'])->name('philosophyStudentForum');

Route::get('/aihc/academic-activity', [HomeController::class, 'aihcAcademicActivity'])->name('aihcAcademicActivity');
Route::get('/aihc/student-forum', [HomeController::class, 'aihcStudentForum'])->name('aihcStudentForum');

Route::get('/urdu/academic-activity', [HomeController::class, 'urduAcademicActivity'])->name('urduAcademicActivity');
Route::get('/urdu/student-forum', [HomeController::class, 'urduStudentForum'])->name('urduStudentForum');

Route::get('/history/academic-activity', [HomeController::class, 'historyAcademicActivity'])->name('historyAcademicActivity');
Route::get('/history/student-forum', [HomeController::class, 'historyStudentForum'])->name('historyStudentForum');

Route::get('/psychology/academic-activity', [HomeController::class, 'psychologyAcademicActivity'])->name('psychologyAcademicActivity');
Route::get('/psychology/student-forum', [HomeController::class, 'psychologyStudentForum'])->name('psychologyStudentForum');

Route::get('/political-science/academic-activity', [HomeController::class, 'politicalScienceAcademicActivity'])->name('politicalScienceAcademicActivity');
Route::get('/political-science/student-forum', [HomeController::class, 'politicalScienceStudentForum'])->name('politicalScienceStudentForum');

Route::get('/socialogy/academic-activity', [HomeController::class, 'socialogyAcademicActivity'])->name('socialogyAcademicActivity');
Route::get('/socialogy/student-forum', [HomeController::class, 'socialogyStudentForum'])->name('socialogyStudentForum');



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
Route::get('/naac-more',[HomeController::class,'naac_more'])->name('naac-more');
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


//bed route
Route::get('bed',[HomeController::class,'showBed'])->name('showbed');
Route::get('academic-calendar',[HomeController::class,'academic'])->name('academic');
Route::get('faculty-of-bed',[HomeController::class,'faculty'])->name('faculty');
Route::get('gallery-bed',[HomeController::class,'gallery'])->name('gallery');
Route::get('infrastructure-bed',[HomeController::class,'infrastructure'])->name('infrastructure');
Route::get('map-college',[HomeController::class,'map'])->name('map');
Route::get('annual-system',[HomeController::class,'AnnualPlan'])->name('annualsystem');
Route::get('accreditation-clg',[HomeController::class,'accreditation'])->name('accreditation');
Route::get('iqac-meeting',[HomeController::class,'iqacMeeting'])->name('iqacMeeting');
Route::get('aqar-naac',[HomeController::class,'aqarNaac'])->name('aqarNaac');
Route::get('iiqa-naac',[HomeController::class,'iiqa'])->name('iiqa');
Route::get('sanctioned-post',[HomeController::class,'sanctioned'])->name('sanctioned');
Route::get('class-room',[HomeController::class,'classRoom'])->name('classroom');
Route::get('computer-details',[HomeController::class,'computerDetails'])->name('computerdetails');
Route::get('cbsc-program',[HomeController::class,'cbscProgram'])->name('cbscprogram');
Route::get('ict-facility',[HomeController::class,'ictFacility'])->name('ictfacility');

//Faculty Route
Route::get('all-faculty',[Homecontroller::class,'allFaculty'])->name('all_faculty');


//Student Corner Routes
Route::get('alumni',[Homecontroller::class,'alumni'])->name('alumni');
Route::get('scholarship',[Homecontroller::class,'scholarship'])->name('scholarship');
Route::get('merit-list',[Homecontroller::class,'meritList'])->name('meritList');
Route::get('intermediate-registartion',[Homecontroller::class,'intermediateRegistration'])->name('intermediateRegistration');
Route::get('electoral-roll',[Homecontroller::class,'electoralRoll'])->name('electoralRoll');


//Courses
Route::get('/courses-offered', [HomeController::class, 'coursesOffered'])->name('coursesOffered');
Route::get('/special-courses', [HomeController::class, 'specialCourses'])->name('specialCourses');
Route::get('/bed-courses', [HomeController::class, 'bedCourses'])->name('bedCourses');
Route::get('/bba-bca-courses', [HomeController::class, 'bbaBcaCourses'])->name('bbaBcaCourses');

// pdf view
Route::get('/pdf/{path}/{pdfName}', [HomeController::class,'showPdf'])->name('show-pdf');

//all gallery
Route::get('all-gallery',[HomeController::class,'allGallery'])->name('all-gallery');






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
    Route::resource('department',DepartmentController::class);
    Route::resource('subdepartment',SubDepartmentController::class);
    Route::resource('faculty',FacultyController::class);
    Route::get('sub-faculty/{id}',[FacultyController::class,'subDepartment'])->name('add_faculty');




});

Route::get('lockscreen', [UserController::class, 'lockscreen'])->name('lockscreen');


Route::get('/optimize', function(){
    Artisan::call('optimize');
});
Route::get('/optimize-clear', function(){
    Artisan::call('optimize:clear');
});

