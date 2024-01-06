@extends('home.includes.layout', ['title' => 'About College'])

@section('content')
<div class="page-wrapper">

    <header class="page-heading clearfix">
        <div class="text-effect" data-content="About College">
            <span>Administration</span>
        </div>
        <!--//breadcrumbs-->
    </header>
    <div class="page-content">
        <div class="row page-row">
            <div class="container">
                <div class="col-md-12">
                    <div class="vertical-tab" role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab"
                                    data-toggle="tab">National Cadet Core (NCC) </a></li>
                            <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab"
                                    data-toggle="tab">National Service Scheme (NSS)</a></li>
                            <li role="presentation"><a href="#Section3" aria-controls="profile" role="tab"
                                    data-toggle="tab">Cultural Activities</a></li>
                            <li role="presentation"><a href="#Section4" aria-controls="profile" role="tab"
                                    data-toggle="tab">Placement</a></li>
                            <li role="presentation"><a href="#Section5" aria-controls="profile" role="tab"
                                    data-toggle="tab">Sports Facilities</a></li>
                            <li role="presentation"><a href="#Section6" aria-controls="profile" role="tab"
                                    data-toggle="tab">College Rules (Identity Card)</a></li>
                            <li role="presentation"><a href="#Section7" aria-controls="profile" role="tab"
                                    data-toggle="tab">Support Facilities at R.K. College</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabs">
                            <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                                <h3>National Cadet Core (NCC)</h3><br>
                                <p>
                                    Our college has one unit of army wing. After two year of successful training
                                    the cadet become eligible for ‘B’ certificate and with one additional year
                                    of training they qualify for ‘C’ certificate. ‘C’ certificate holders become
                                    eligible for direct commission in armed force through the service selection
                                    board and get preference in Police and other para military services. Our
                                    students have been selected and awarded at district level and participated
                                    in Republic Day parade at N. Delhi also. The college has shooting range in
                                    the campus.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section2">
                                <h3>National Service Scheme (NSS)</h3><br>
                                <p>
                                    Two units of the NSS are functioning in college campus each has intake capacity of
                                    100 volunteers. The college organizes extension activities related to community
                                    development in number of areas like social work, environmental awareness, AIDS
                                    awareness, literacy, health & hygiene awareness, blood donation campus and relief
                                    camps, populated growth and child care etc. The extension activities are carried on
                                    by the NSS. Volunteers in the interest of the community.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section3">
                                <h3>Cultural Activities</h3><br>
                                <p>
                                    College provides excellent opportunity for students to exhibit their aptitude in the
                                    field of dramatics, music and dance. Potential students of the college exhibit their
                                    excellence in youth festival of the University in various cultural activities. The
                                    college family is proud of their excellence in various cultural activities at youth
                                    festival in University and inter University level competition.
                                </p>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="Section4">
                                <h3>Placement</h3><br>
                                <p>
                                    There is a “Career & Counseling Cell” at this college which invites companies and
                                    institutions for the Placement of Students, passing Graduation and Post Graduation
                                    Courses.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section5">
                                <h3>Sports Facilities</h3><br>
                                <p>
                                    The college provides both indoor and outdoor sports facilities. The college has a
                                    play ground for cricket, football and well maintained court for basket ball, lawn
                                    tennis and volleyball. The college also provides facilities for indoor game like
                                    table tennis, badminton, carom and chess. A gymnasium in the college gives on
                                    opportunity to the students has successfully participated in state and national
                                    level of tournament with achievement. The college boasts of its sports and cultural
                                    department whose constant and sustained efforts make the college champion in inter
                                    college tournament in cricket, football, table tennis and badminton in the session
                                    2014-15 as ever.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section6">
                                <h3>Identity Card</h3><br>
                                <p>
                                    Students should avail their college Identity Card just after their admission.
                                    Identity Card is compulsory for every students and they should keep it with them
                                    inside the campus. Students will be to use Library, Laboratory, Sports facility and
                                    other college facilities only after showing their Identity Card.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section7">
                                <h3>Support Facilities at R.K. College</h3><br>
                                <ul>
                                    <li>Equal Opportunity Centre - Dr. Prakash Nayak, Advisor</li>
                                    <li>Career & Counselling Cell - Dr. Prakash Nayak</li>
                                    <li>Remedial Coaching - Sri Arbind Singh Jha </li>
                                    </li>
                                    <li>Entry-In-Services - Sri Manoj Kumar Sah </li>
                                    </li>
                                    <li>Red Ribbon Club - Sri Arbind Singh Jha</li>
                                    </li>
                                    <li>Human Right Education - Dr. Ashok Kumar </li>
                                    </li>
                                    <li>NSS Unit-I - Sri Ashok Kumar </li>
                                    </li>
                                    <li>NSS Unit-II - Sri Arbind Singh Jha </li>
                                    </li>
                                    <li>NCC 1/34 Coy - Sri Manoj Kumar Sah </li>
                                    </li>
                                    <li>NCC 5/34 Coy - Dr. R. K. Sah, NCC Officer </li>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--//page-content-->
        </div>
        <!--//page-row-->
    </div>
    <!--//page-content-->
</div>
@endsection
