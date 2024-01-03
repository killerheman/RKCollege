<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Criteria;
use App\Models\Event;
use App\Models\EventGallery;
use App\Models\Faculty;
use App\Models\SessionWiseModel;
use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::orderBy('id','desc')->get();
        $notices = Notice::orderBy('id','desc')->get();
        $tenders = Notice::where('category','tenders')->orderBy('id','desc')->get();
        $topnotices = Notice::orderBy('id','desc')->take(3)->get();
        // dd($topnotices);
        $events = Event::orderBy('id','desc')->take(5)->get();
        return view('home.index', compact('notices', 'events','topnotices','tenders', 'banners'));
    }

    //Academics Section
    public function underGraduateCourses()
    {
        return view('home.course.ug_course');
    }

    public function postGraduateCourses()
    {
        return view('home.course.pg_course');
    }

    public function diplomaCourses()
    {
        return view('home.course.diploma_course');
    }

    public function certificateCourses()
    {
        return view('home.course.certification_course');
    }

    public function examination()
    {
        return view('home.examination');
    }

    public function assesments()
    {
        return view('home.assesments');
    }

    public function faculty_arts()
    {
        return view('home.department.faculty_arts');
    }

    public function faculty_commerce()
    {
        return view('home.department.faculty_commerce');
    }

    public function faculty_science()
    {
        return view('home.department.faculty_science');
    }

    public function faculty_management()
    {
        return view('home.department.faculty_management');
    }

    public function faculty_computer_science()
    {
        return view('home.department.faculty_computer_science');
    }

    public function faculty_journalism_mass_communication()
    {
        return view('home.department.faculty_journalism_mass_communication');
    }

    public function collegeResearch()
    {
        return view('home.research');
    }

    public function distanceLearningCenter()
    {
        return view('home.distance_learning');
    }

    //Admission Section
    public function informationBulletinAdmission()
    {
        return view('home.information_bulletin_admission');
    }

    public function admissionSchedule()
    {
        return view('home.admission_schedule');
    }

    public function eligibilityCriteria()
    {
        return view('home.eligibility_criteria');
    }

    public function admissionProcedure()
    {
        return view('home.admission_procedure');
    }

    public function seatsOffered()
    {
        return view('home.seats_offered');
    }

    //Library Section
    public function collegeLibrary()
    {
        return view('home.about_library');
    }

    public function libraryRules()
    {
        return view('home.library_rules');
    }

    public function libraryNList()
    {
        return view('home.library_nlist');
    }

    //College Facilities Section
    public function collegeCanteen()
    {
        return view('home.facility.college_canteen');
    }

    public function sportsGames()
    {
        return view('home.facility.sports_games');
    }

    public function magazinePublications()
    {
        return view('home.facility.magazine_publication');
    }

    public function hostelFacilities()
    {
        return view('home.facility.hostel_facility');
    }

    public function nccNssScoutsGuides()
    {
        return view('home.facility.ncc_nss');
    }

    public function medicalFacilites()
    {
        return view('home.facility.medical_facility');
    }

    public function collegeInfrastructure()
    {
        return view('home.facility.college_infrastructure');
    }

    //Students Corner Section
    public function result()
    {
        return view('home.student.result');
    }

    public function examinationDatesheet()
    {
        return view('home.student.exam_datesheet');
    }

    public function downloadSyllabus()
    {
        return view('home.student.syllabus');
    }

    public function downloadOnlineStudyMaterial()
    {
        return view('home.student.online_study_material');
    }

    public function collegePlacement()
    {
        return view('home.student.college_placements');
    }

    public function regulation()
    {
        return view('home.regulation');
    }

    //PhotoGallery Section
    public function eventGallery()
    {
        $events = Event::all();
        return view('home.photo_gallery', compact('events'));
    }

    public function photoGalleryImage($event_id)
    {
        $event = Event::find(Crypt::decrypt($event_id));
        $photos = EventGallery::where('event_id',Crypt::decrypt($event_id))->get();
        Log::info('photos'.json_encode($photos));
        return view('home.gallery_image', compact('photos', 'event'));
    }

    //News Section
    public function news()
    {
        return view('home.news');
    }

    //PressRelease Section
    public function pressRelease()
    {
        return view('home.press_release');
    }

    //Contact Us Section
    public function contactUs()
    {
        return view('home.contact_us');
    }

    //IQAC Section
    public function iqac()
    {
        return view('home.iqac.iqac');
    }

    public function aqar()
    {
        $session = SessionWiseModel::get()->all();
        return view('home.iqac.aqar',compact('session'));
        // return view('home.iqac.aqar');
    }

    public function iqacComposition()
    {
        return view('home.iqac.composition');
    }

    public function minutesOfMeeting()
    {
        return view('home.iqac.minutes_of_meeting');
    }

    public function ssr()
    {
        return view('home.iqac.ssr');
    }

    public function aisheReport()
    {
        return view('home.iqac.aishe_report');
    }

    public function naacGrade()
    {
        return view('home.iqac.naac_grade');
    }

    public function sss()
    {
        return view('home.iqac.sss');
    }

    public function nirf(){
        return view('home.iqac.nirf');
    }

    public function criteria(){
        $criteria1 = Criteria::where('criteria_id',1)->orderBy('name')->get();
        $criteria2 = Criteria::where('criteria_id',2)->orderBy('name')->get();
        $criteria3 = Criteria::where('criteria_id',3)->orderBy('name')->get();
        $criteria4 = Criteria::where('criteria_id',4)->orderBy('name')->get();
        $criteria5 = Criteria::where('criteria_id',5)->orderBy('name')->get();
        $criteria6 = Criteria::where('criteria_id',6)->orderBy('name')->get();
        $criteria7 = Criteria::where('criteria_id',7)->orderBy('name')->get();
        return view('home.iqac.criteria',compact('criteria1', 'criteria2','criteria3','criteria4','criteria5', 'criteria6','criteria7'));
    }


    public function showBed(){
        return view('home.bed.about_bed');
    }
    public function academic(){
        return view('home.bed.academic');
    }
    public function faculty(){
        return view('home.bed.faculty');
    }
    public function gallery(){
        return view('home.bed.gallery');
    }
    public function infrastructure(){
        return view('home.bed.infrastructure');
    }
    public function map(){
        return view('home.bed.map');
    }
    public function accreditation(){
        return view('home.about.naac.accreditation');
    }
    public function AnnualPlan(){
        return view('home.about.naac.annualplan');
    }
    public function iqacMeeting(){
        return view('home.about.naac.iqac');
    }
    public function aqarNaac(){
        return view('home.about.naac.aqar');
    }
    public function iiqa(){
        return view('home.about.naac.iiqa');
    }
    public function sanctioned(){
        return view('home.about.naac.sanctionedpost');
    }
    public function classRoom(){

        $imageFolder = public_path('uploads/uploads/photo-gallery/class_room');
        $imageFiles = glob($imageFolder . '/*.{jpg,png}', GLOB_BRACE); 
        $imageFileNames = array_map('basename', $imageFiles);
        return view('home.about.naac.classroom ', compact('imageFileNames'));
    }
    public function computerDetails(){
        return view('home.about.naac.computerdetails');
    }
    public function cbscProgram(){
        return view('home.about.naac.cbscprogram');
    }
    public function ictFacility(){
        $imageFolder = public_path('uploads/uploads/photo-gallery/ict');
        $imageFiles = glob($imageFolder . '/*.{jpg,png}', GLOB_BRACE); 
        $imageFileNames = array_map('basename', $imageFiles);
        return view('home.about.naac.ictfacility', compact('imageFileNames'));
        
    }

    //About Section
    public function about()
    {
        return view('home.about.about_college');
    }
    public function isoCertified()
    {
        return view('home.about.isoCertified');
    }
    public function CollegeHistory()
    {
        return view('home.about.history');
    }
    public function missionVission()
    {
        return view('home.about.vision_mission');
    }
    public function kulgeet()
    {
        return view('home.about.kulgeet');
    }
    public function mou()
    {
        return view('home.about.mou');
    }
    public function naac()
    {
        return view('home.about.naac.naac');
    }
    public function practice()
    {
        return view('home.about.instituationPractice');
    }
    public function lab()
    {
        return view('home.about.infrastructure.lab');
    }
    public function auditoirum()
    {
        return view('home.about.infrastructure.auditorium');
    }
    public function conferenceHall()
    {
        return view('home.about.infrastructure.conference_hall');
    }
    public function indoorStadium()
    {
        return view('home.about.infrastructure.indoor_stdium');
    }
    public function mediaCenter()
    {
        return view('home.about.infrastructure.mediaCenter');
    }
    public function smartClasses()
    {
        return view('home.about.infrastructure.classes');
    }

    //Administrator

    public function facilityIncharge()
    {
        return view('home.administrator.facility_incharge');
    }
    public function administrativeStructure()
    {
        return view('home.administrator.admiinstrativeStructure');
    }
    public function administrativeSection()
    {
        return view('home.administrator.administrativeSection');
    }
    public function accountSection()
    {
        return view('home.administrator.accountSection');
    }
    public function laboratory()
    {
        return view('home.administrator.labaoratory');
    }
    public function library()
    {
        return view('home.administrator.library');
    }

    //Academics
    public function admission()
    {
        return view('home.academics.admission');
    }
    public function activity()
    {
        return view('home.academics.activities');
    }
    public function curriculum()
    {
        return view('home.academics.curriculum');
    }
    public function enhancementProgram()
    {
        return view('home.academics.enhancementProgram');
    }
    public function pso()
    {
        return view('home.academics.pso');
    }
    public function otherProgram()
    {
        return view('home.academics.otherProgram');
    }
    public function orientationClass()
    {
        return view('home.academics.orientationClass');
    }
    public function socialAwareness()
    {
        return view('home.academics.socialAwerness');
    }
    public function addOnCourse()
    {
        return view('home.academics.add_on_course');
    }
    public function annualReport()
    {
        return view('home.academics.annualReport');
    }


    //Courses

    public function vedicMathematics()
    {
        return view('home.course.vedicMathmatics');
    }
    public function skillDevelopmentProgram()
    {
        return view('home.course.skillDevelopmentProgram');
    }
    public function yogaPhilosophy()
    {
        return view('home.course.yogaphilosphy');
    }
    public function indology()
    {
        return view('home.course.indology');
    }
    public function genderSociety()
    {
        return view('home.course.society');
    }
    public function filmCulture()
    {
        return view('home.course.film_culture');
    }
    public function humanRight()
    {
        return view('home.course.human_right');
    }
    public function entrepreneurship()
    {
        return view('home.course.entrepreneurship');
    }
    public function recordDocument()
    {
        return view('home.course.record_document');
    }
    public function emotionalIntelligence()
    {
        return view('home.course.emotional_intelligence');
    }
    public function massMedia()
    {
        return view('home.course.mass_media');
    }

    //Activities
    public function sportActivity()
    {
        return view('home.activities.sport_activity');
    }
    public function nss()
    {
        return view('home.activities.nss');
    }
    public function cultureActivities()
    {
        return view('home.activities.culture_activities');
    }
    public function ncc()
    {
        return view('home.activities.ncc');
    }

    //departmental Activities

    public function commerceAcademicActivity()
    {
        return view('home.activities.departmental.commerce.academic_activity');
    }
    public function commerceStudentForum()
    {
        return view('home.activities.departmental.commerce.student_forum');
    }

    public function economicsAcademicActivity()
    {
        return view('home.activities.departmental.economics.academic_activity');
    }
    public function economicsStudentForum()
    {
        return view('home.activities.departmental.economics.student_forum');
    }

    public function hindiAcademicActivity()
    {
        return view('home.activities.departmental.hindi.academic_activity');
    }
    public function hindiStudentForum()
    {
        return view('home.activities.departmental.hindi.student_forum');
    }


    public function englishAcademicActivity()
    {
        return view('home.activities.departmental.english.academic_activity');
    }
    public function englishStudentForum()
    {
        return view('home.activities.departmental.english.student_forum');
    }

    public function sanskritAcademicActivity()
    {
        return view('home.activities.departmental.sanskrit.academic_activity');
    }
    public function sanskritStudentForum()
    {
        return view('home.activities.departmental.sanskrit.student_forum');
    }

    public function philosophyAcademicActivity()
    {
        return view('home.activities.departmental.philosophy.academic_activity');
    }
    public function philosophyStudentForum()
    {
        return view('home.activities.departmental.philosophy.student_forum');
    }
    public function urduAcademicActivity()
    {
        return view('home.activities.departmental.urdu.academic_activity');
    }
    public function urduStudentForum()
    {
        return view('home.activities.departmental.urdu.student_forum');
    }
    public function historyAcademicActivity()
    {
        return view('home.activities.departmental.history.academic_activity');
    }
    public function historyStudentForum()
    {
        return view('home.activities.departmental.history.student_forum');
    }
    public function psychologyAcademicActivity()
    {
        return view('home.activities.departmental.psychology.academic_activity');
    }
    public function psychologyStudentForum()
    {
        return view('home.activities.departmental.psychology.student_forum');
    }
    public function politicalScienceAcademicActivity()
    {
        return view('home.activities.departmental.political_science.academic_activity');
    }
    public function politicalScienceStudentForum()
    {
        return view('home.activities.departmental.political_science.student_forum');
    }
    public function socialogyAcademicActivity()
    {
        return view('home.activities.departmental.socialogy.academic_activity');
    }
    public function socialogyStudentForum()
    {
        return view('home.activities.departmental.socialogy.student_forum');
    }

    public function student_corner(){
        return view('home.student.student_corner');
    }

    public function allFaculty(){
        $faculties = Faculty::all();
        return view('home.facility.all_faculty',compact('faculties'));
    }
}
