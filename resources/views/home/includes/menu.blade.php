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
                        data-close-others="false" href="#" accesskey="2">About<i
                            class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('isoCertified')}}">ISO Certified</a></li>
                        <li><a href="{{route('history')}}">History</a></li>
                        <li><a href="{{route('missionVission')}}">Mission & Vision</a></li>
                        <li><a href="{{route('kulgeet')}}">Kulgeet</a></li>
                        <li><a href="{{route('mou')}}">MOU</a></li>
                        <li><a href="{{route('naac')}}">Progress according to NAAC</a></li>
                        <li><a href="{{route('practice')}}">Institution Best Practice</a></li>
                        <li class="dropdown-submenu">
                            <a class="trigger" tabindex="-1" href="Academics-CoursesUG.html">Infrastructures<i
                                    class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu">
                                <li><a tabindex="-1" href="{{route('lab')}}">Labs</a>
                                </li>
                                <li><a href="{{route('auditoirum')}}">Late P.N. Singh Memorial Auditorium</a></li>
                                <li><a href="{{route('conferenceHall')}}">Conference/Seminar Hall</a></li>
                                <li><a href="{{route('indoorStadium')}}">Indoor Stadium</a></li>
                                <li><a href="{{route('mediaCenter')}}">Media Center</a></li>
                                <li><a href="{{route('smartClasses')}}">Smart Classes & Class Rooms</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0"
                        data-close-others="false" href="#" accesskey="4">Administration<i
                            class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('facilityIncharge')}}">Faculty Incharge</a></li>
                        <li><a href="{{route('administrativeStructure')}}">Administrative Structure</a></li>
                        <li><a href="{{route('administrativeSection')}}">Administrative Section</a></li>
                        <li><a href="{{route('accountSection')}}">Account Section</a></li>
                        <li><a href="{{route('laboratory')}}">Laboratory</a></li>
                        <li><a href="{{route('library')}}">Library Section</a></li>

                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0"
                        data-close-others="false" href="#" accesskey="3">Academics<i
                            class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('admission')}}">Admission</a></li>
                        <li><a href="{{route('activity')}}">Academic Activities</a></li>
                        <li><a href="{{route('curriculum')}}">Academic Curriculum</a></li>
                        <li><a href="{{route('enhancementProgram')}}">Capability & Efficiency Enhancement Programs</a></li>
                        <li><a href="{{route('pso')}}">PO,PSO & CO</a></li>
                        <li><a href="{{route('otherProgram')}}">Other Programs</a></li>
                        <li><a href="{{route('orientationClass')}}">Orientation & Bridge Classes</a></li>
                        <li><a href="{{route('socialAwareness')}}">Social Awareness & Moral Builidng</a></li>
                        <li><a href="{{route('addOnCourse')}}">UGC Sponsored Add-on Courses</a></li>
                        <li><a href="{{route('annualReport')}}">Annual Report</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0"
                        data-close-others="false" href="#" accesskey="4">Courses<i
                            class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('informationBulletinAdmission') }}">Vedic Mathematics</a>
                        </li>
                        <li><a href="{{ route('admissionSchedule') }}">Entrepreneurship & Skill Development Program</a></li>
                        <li><a href="{{ route('eligibilityCriteria') }}">Yoga Philosophy</a></li>
                        <li><a href="{{ route('admissionProcedure') }}">Indology</a></li>
                        <li><a href="{{ route('seatsOffered') }}">Gender & Society</a></li>
                        <li><a href="http://lnmu.ac.in/">Film & Culture</a></li>
                        <li><a href="http://lnmu.ac.in/">Human Right</a></li>
                        <li><a href="http://lnmu.ac.in/">Entrepreneurship</a></li>
                        <li><a href="http://lnmu.ac.in/">Record & Document Management</a></li>
                        <li><a href="http://lnmu.ac.in/">Emotional Intelligence</a></li>
                        <li><a href="http://lnmu.ac.in/">Mass Media</a></li>

                    </ul>
                </li>
                <!--//dropdown-->
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0"
                        data-close-others="false" href="#" accesskey="6">Activities<i
                            class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Sports Activities</a></li>
                        <li><a href="#">NSS</a></li>
                        <li class="dropdown-submenu">
                            <a class="trigger" tabindex="-1" href="#">Departmental Activities<i
                                    class="fa fa-angle-right"></i></a>
                            {{-- <ul class="dropdown-menu">

                            </ul> --}}
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a class="trigger" tabindex="-1" href="#">Commerce<i
                                            class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Academic Activity</a></li>
                                        <li><a href="#">Student Forum</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="trigger" tabindex="-1" href="#">Economics<i
                                            class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Academic Activity</a></li>
                                        <li><a href="#">Student Forum</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="trigger" tabindex="-1" href="#">Hindi<i
                                            class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Academic Activity</a></li>
                                        <li><a href="#">Student Forum</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="trigger" tabindex="-1" href="#">English<i
                                            class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Academic Activity</a></li>
                                        <li><a href="#">Student Forum</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="trigger" tabindex="-1" href="#">Sanskrit<i
                                            class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Academic Activity</a></li>
                                        <li><a href="#">Student Forum</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="trigger" tabindex="-1" href="#">Philosophy<i
                                            class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Academic Activity</a></li>
                                        <li><a href="#">Student Forum</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="trigger" tabindex="-1" href="#">AIHC<i
                                            class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Academic Activity</a></li>
                                        <li><a href="#">Student Forum</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="trigger" tabindex="-1" href="#">Urdu<i
                                            class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Academic Activity</a></li>
                                        <li><a href="#">Student Forum</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="trigger" tabindex="-1" href="#">History<i
                                            class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Academic Activity</a></li>
                                        <li><a href="#">Student Forum</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="trigger" tabindex="-1" href="#">Psychology<i
                                            class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Academic Activity</a></li>
                                        <li><a href="#">Student Forum</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="trigger" tabindex="-1" href="#">Political Science<i
                                            class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Academic Activity</a></li>
                                        <li><a href="#">Student Forum</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="trigger" tabindex="-1" href="#">Socialogy<i
                                            class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Academic Activity</a></li>
                                        <li><a href="#">Student Forum</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li><a href="#">Cultural Activities</a></li>
                        <li><a href="#">NCC</a></li>

                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0"
                        data-close-others="false" href="#" accesskey="2">Faculty<i
                            class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('iqac') }}">Faculty of Commerce</a></li>
                        <li class="dropdown-submenu">
                            <a class="trigger" tabindex="-1" href="#">Faculty of Arts<i
                                    class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Department of A.I.H.C. & Arch.</a></li>
                                <li><a href="#">Department of English</a></li>
                                <li><a href="#">Department of Hindi</a></li>
                                <li><a href="#">Department of Philosophy</a></li>
                                <li><a href="#">Department of Sanskrit</a></li>
                                <li><a href="#">Department of Urdu</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="trigger" tabindex="-1" href="#">Faculty of Social Science<i
                                    class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Department of Economics</a></li>
                                <li><a href="#">Department of History</a></li>
                                <li><a href="#">Department of Poltical Science</a></li>
                                <li><a href="#">Department of Psychology</a></li>
                                <li><a href="#">Department of Socialogy</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('aqar') }}">Faculty of Physical Education</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0"
                        data-close-others="false" href="#" accesskey="2">IQAC<i
                            class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('iqac') }}">About IQAC</a></li>
                        <li class="dropdown-submenu">
                            <a class="trigger" tabindex="-1" href="#">SSR<i
                                    class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">SSR Report</a></li>
                                <li><a href="#">SSR Related Links</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="trigger" tabindex="-1" href="#">AQAR<i
                                    class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">AQAR Report</a></li>
                                <li><a href="#">Links related to AQAR</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('aqar') }}">Green Audit Report 2017-21</a></li>
                        <li><a href="{{ route('iqacComposition') }}">Academic Audit Report</a></li>
                        <li><a href="{{ route('minutesOfMeeting') }}">IQAC Meeting Minutes</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0"
                    data-close-others="false" href="#" accesskey="2">NAAC<i
                        class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('accreditation') }}">Accreditation</a></li>
                        <li><a href="{{ route('annualsystem') }}">Annual Gender Sensitization Action Plan</a></li>
                        <li><a href="#">IQAC Meeting Minutes</a></li>
                        <li><a href="#">AQAR</a></li>
                        <li><a href="#">IIQA</a></li>
                        <li><a href="#">SSR 2013 Report</a></li>
                        <li><a href="#">Sanctioned Post of Faculty</a></li>
                        <li><a href="#">Class Room Facility</a></li>
                        <li><a href="#">Computer Details</a></li>
                        <li><a href="#">CBSC Program</a></li>
                        <li><a href="#">ICT Facility</a></li>
                        <li><a href="{{ route('student-corner') }}">Student Corner</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0"
                        data-close-others="false" href="#" accesskey="2">B.Ed<i
                            class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('showbed') }}">About B.Ed</a></li>
                        <li><a href="{{ route('faculty') }}">Faculty of B.ed</a></li>
                        <li><a href="{{ route('infrastructure') }}">Infrastructure & facility</a></li>
                        <li><a href="{{ route('map') }}">Map of The College</a></li>
                        <li><a href="{{ route('academic') }}">academic calendar</a></li>
                        <li><a href="{{ route('gallery') }}">B.ed Gallery</a></li>
                        <!-- <li class="dropdown-submenu">
                            <a class="trigger" tabindex="-1" href="#" > SSR<i
                                    class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">SSR Report</a></li>
                                <li><a href="#">SSR Related Links</a></li>
                            </ul>
                        </li> -->
                         <!-- <li class="dropdown-submenu">
                            <a class="trigger" tabindex="-1" href="#">AQAR<i
                                    class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">B.Ed Report</a></li>
                                <li><a href="#">Links related to B.Ed</a></li>
                            </ul>
                        </li>  -->
                        <!-- <li><a href="#">Green Audit Report 2017-21</a></li>
                        <li><a href="#">Academic Audit Report</a></li>
                        <li><a href="#"> Meeting Minutes</a></li> -->
                    </ul>
                </li>
                <li class="nav-item"><a href="{{ route('nirf') }}" >NIRF</a></li>
                <li class="nav-item"><a href="#" >Alumni</a></li>
            </ul>
            <!--//nav-->
        </div>
        <!--//navabr-collapse-->
    </div>
    <!--//container-->
</nav>
