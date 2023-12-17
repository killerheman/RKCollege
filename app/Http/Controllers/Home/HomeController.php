<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Criteria;
use App\Models\Event;
use App\Models\EventGallery;
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

    //About Section
    public function aboutCollege()
    {
        return view('home.about_college');
    }

    public function visionMission()
    {
        return view('home.vision_mission');
    }

    public function viceChancellorDesk()
    {
        return view('home.vice_chancellor_desk');
    }

    public function principalDesk()
    {
        return view('home.principal_desk');
    }

    public function collegeAchievements()
    {
        return view('home.college_achievments');
    }

    public function administrationCommittees()
    {
        return view('home.administration_committees');
    }

    public function organogram()
    {
        return view('home.organogram');
    }

    public function annualReport()
    {
        return view('home.annual_report');
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

}
