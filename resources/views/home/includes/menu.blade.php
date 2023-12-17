<nav class="main-nav" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--//nav-toggle-->
        </div>
        <!--//navbar-header-->
        <!--//navbar-header-->
        <div class="navbar-collapse collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a href="{{ route('home') }}" accesskey="1">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0"
                        data-close-others="false" href="#" accesskey="2">About Us<i
                            class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('aboutCollege') }}">About the College</a></li>
                        <li><a href="{{ route('visionMission') }}">Vision and Mission</a></li>
                        <li><a href="{{ route('viceChancellorDesk') }}">From Vice-Chancellor's Desk</a></li>
                        <li><a href="{{ route('principalDesk') }}">From Principal's Desk</a></li>
                        <li><a href="{{ route('collegeAchievements') }}">Achievements</a></li>
                        <li><a href="{{ route('administrationCommittees') }}">Administration & Committtes</a></li>
                        <li><a href="{{ route('organogram') }}">Organogram</a></li>
                        <li><a href="{{ route('annualReport') }}">Annual Report</a></li>
                        <li><a href="#">Code of conduct</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0"
                        data-close-others="false" href="#" accesskey="3">Academics<i
                            class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a class="trigger" tabindex="-1" href="Academics-CoursesUG.html">Courses<i
                                    class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu">
                                <li><a tabindex="-1" href="{{ route('underGraduateCourses') }}">U. G. Courses</a>
                                </li>
                                <li><a href="{{ route('diplomaCourses') }}">Self-finance U.G. Courses</a></li>
                                <li><a href="{{ route('postGraduateCourses') }}">P.G. Courses</a></li>
                                <li><a href="{{ route('certificateCourses') }}">Certificate Courses</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('examination') }}">Examination and Assesments</a></li>
                        <li><a href="{{ route('facultyArts') }}">Departments & Faculties</a></li>
                        <li><a href="{{ route('collegeResearch') }}">Research</a></li>
                        <li><a href="https://lnmu.ac.in/academic-calendar">Academic Calendar</a></li>
                        <li><a href="{{ route('distanceLearningCenter') }}">Distance Learning Centre</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0"
                        data-close-others="false" href="#" accesskey="4">Admission<i
                            class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('informationBulletinAdmission') }}">Information Bulletin Admission</a>
                        </li>
                        <li><a href="{{ route('admissionSchedule') }}">Admission Schedule</a></li>
                        <li><a href="{{ route('eligibilityCriteria') }}">Eligibility Criteria</a></li>
                        <li><a href="{{ route('admissionProcedure') }}">Admission Procedure</a></li>
                        <li><a href="{{ route('seatsOffered') }}">Seats Offered</a></li>
                        <li><a href="http://lnmu.ac.in/">Apply Online</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0"
                        data-close-others="false" href="{{ route('collegeLibrary') }}">Library<i
                            class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('collegeLibrary') }}">About the Library</a></li>
                        <li><a href="{{ route('libraryRules') }}">Rules</a></li>



                        <li><a href="http://lnmu.ac.in/" target="_blank">N-List</a></li>
                    </ul>
                </li>
                <!--//dropdown-->
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0"
                        data-close-others="false" href="#" accesskey="6">Facilities<i
                            class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('collegeCanteen') }}">College Canteen</a></li>
                        <li><a href="{{ route('sportsGames') }}">Sports and Games</a></li>
                        <li><a href="{{ route('magazinePublications') }}">Magazines & Publications</a></li>
                        <li><a href="{{ route('hostelFacilities') }}">Hostel Facilities</a></li>
                        <li><a href="{{ route('nccNssScoutsGuides') }}">NCC, NSS and Scouts & Guides</a></li>
                        <li><a href="{{ route('medicalFacilites') }}">Medical Facilities</a></li>
                        <li><a href="{{ route('collegeInfrastructure') }}">Infrastructure</a></li>
                        <li></li>
                    </ul>
                </li>
                <!--//dropdown-->
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0"
                        data-close-others="false" href="#">Student Corner<i
                            class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://lnmu.ac.in/">Result</a></li>
                        <li><a href="{{ route('examinationDatesheet') }}">Semester-End Examination Datesheet</a></li>
                        <li><a href="http://lnmu.ac.in/">Examination Form</a></li>
                        {{-- <li class="dropdown-submenu">
                            <a class="trigger" tabindex="-1" href="#" data-close-others="false">Downloads<i
                                    class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu">
                                <li><a tabindex="-1" href="{{ route('downloadSyllabus') }}">Syllabus</a></li>
                                <li><a tabindex="-1" href="{{ route('downloadOnlineStudyMaterial') }}">Online Study
                                        Material</a></li>
                            </ul>
                        </li> --}}
                        <li><a href="{{ route('collegePlacement') }}">Placements</a></li>
                        <li><a href="{{ route('regulation') }}">Regulation</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0"
                        data-close-others="false" href="#" accesskey="2">NAAC<i
                            class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('iqac') }}">IQAC</a></li>
                        <li><a href="{{ route('aqar') }}">AQAR</a></li>
                        <li><a href="{{ route('iqacComposition') }}">Comparison</a></li>
                        <li><a href="{{ route('minutesOfMeeting') }}">Minutes of meeting</a></li>
                        <li><a href="{{ route('ssr') }}">SSR</a></li>
                        {{-- <li><a href="{{ route('aisheReport') }}">AISHE Report</a></li> --}}
                        <li><a href="{{ route('naacGrade') }}">NAAC Grade</a></li>
                        <li><a href="{{ route('sss') }}">Student's Satisfaction Survey</a></li>
                        {{-- <li><a href="{{ route('nirf') }}">NIRF</a></li> --}}
                    </ul>
                </li>
                <li class="nav-item"><a href="{{ route('nirf') }}" >NIRF</a></li>
                <li class="nav-item"><a href="{{ route('aisheReport') }}" >AISHE Report</a></li>
                {{-- <li class="nav-item"><a href="{{ route('pressRelease') }}" >Press Release</a></li> --}}
            </ul>
            <!--//nav-->
        </div>
        <!--//navabr-collapse-->
    </div>
    <!--//container-->
</nav>
