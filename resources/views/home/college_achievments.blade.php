@extends('home.includes.layout', ['title' => 'Achievements'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="Achievements">
                <span>Achievements</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                @include('home.sidebar.about', ['active' => 5])

                <article class="content-wrapper col-md-10 col-sm-8">
                    <h2 class="no-margin-top has-divider text-highlight">Achievements</h2>
                    <ul class="custom-list-style">
                        <li><i class="fa fa-star"></i><span style="font-size: 15px;font-weight: 700;">English Language Lab</span>
                            <ul style="padding-top: 10px;">
                                <p>
                                    The newly built fully air-conditioned modern English Language Lab of the College is equipped with 30 computers and network-based teaching software, designed to train students in Spoken English through a well-defined curriculum focusing on the skills of listening, reading, speaking and writing. Students are linked to the teacher console that enables a teacher to remotely control, monitor, broadcast, and assist students in teacher PC directly. With powerful functions and friendly user interface, our English Language Lab not only facilitates the teaching process but also brings fun and efficiency to learning.
                                </p>
                            </ul>
                        </li>
                        <li><i class="fa fa-star"></i><span style="font-size: 15px;font-weight: 700;">Seminar Hall</span>
                            <ul style="padding-top: 10px;">
                                <p>
                                    C M College regularly keeps on holding National & International level conferences and seminars on various themes and disciplines. In order to cater to the diverse needs of participants and presenters, the College has also added a seminar hall in its block.  The fully air-conditioned seminar hall with LCD Projector, smart board and state of the art sound system with seating capacity of 124 is developed. The experts from academia and industry share knowledge, expertise and their life in seminars, workshops and conferences organised in the Seminar Hall.
                                </p>
                            </ul>
                        </li>
                        <li><i class="fa fa-star"></i><span style="font-size: 15px;font-weight: 700;">Smart Class</span>
                            <ul style="padding-top: 10px;">
                                <p>
                                    C M College uses innovative learning methodologies for students to understand the technical concepts with ease. The college has 5 audio-visual/ multimedia ready class rooms, with capacity of 45 students each, suitable for presentations, video lectures, online material access etc., inside the classroom. These class rooms are equipped with the interactive digital whiteboard, a computer, a projector and white-boarding software. The components are connected wirelessly or via USB or serial cables. A projector connected to the computer displays the desktop image on the interactive whiteboard. The whiteboard accepts touch input from a finger, pen or other solid object.
                                </p>
                            </ul>
                        </li>
                        <li><i class="fa fa-star"></i><span style="font-size: 15px;font-weight: 700;">Computer Lab</span>
                            <ul style="padding-top: 10px;">
                                <p>
                                    As we are moving towards a paperless working environment, the computer has become the heart and soul of operations. Every academic and administrative department of the College is equipped with computers. We have two state-of-the-art, spacious computer labs—one for General Course students and another for Professional Course— that offer free internet-enabled computer access and printing services for students. The entire Eastern Campus of the College has been brought under Wi-Fi Coverage that provides wireless high-speed Internet and network connections through-out the campus.
                                </p>
                            </ul>
                        </li>
                        <li><i class="fa fa-star"></i><span style="font-size: 15px;font-weight: 700;">Psychology Lab</span>
                            <ul style="padding-top: 10px;">
                                <p>
                                    The psychology laboratory has been shifted to the first floor of the newly constructed Block-B of the Academic Building of the College. The lab is equipped with multiple pods of psycho-physiology equipment. It allows faculty in the Psychology Department to introduce students to psychological experimentation that helps to elucidate psychological science while demonstrating its application to real-life phenomena. It is furnished with many resources, including smart digital board, computers that are connected to the College network, which allows for fast internet connection and access to INFLIBNET, a research engine.
                                </p>
                            </ul>
                        </li>
                        <li><i class="fa fa-star"></i><span style="font-size: 15px;font-weight: 700;">BCA Course</span>
                            <ul style="padding-top: 10px;">
                                <p>
                                    With a newly approved Regulation, teaching of Bachelor of Computer Applications (BCA) Course is being re-introduced in RK college from the Academic Session: 2015-16. The BCA programme provides student with necessary skill to make successful career as IT professional and in other allied fields. It also prepares students to proceed with confidence for higher studies in the form of MCA, MBA and others.
                                </p>
                            </ul>
                        </li>
                        <li><i class="fa fa-star"></i><span style="font-size: 15px;font-weight: 700;">Multi-Purpose Hall</span>
                            <ul style="padding-top: 10px;">
                                <p>
                                    The College has a state-of-the-art Multi-purpose Hall having a seating capacity of 750 persons. This first-class facility was designed to accommodate a diversity of College and Community Group activities with a focus on contemporary architecture, modern appeal and functionality. These include lighting and sound equipment, a spacious off-stage area, excellent acoustics and full back-drop and curtain facilities. It has six well-furnished rooms also to accommodate guests/visitors. The basement of the Hall can be utilised for storage.
                                </p>
                            </ul>
                        </li>
                        <li><i class="fa fa-star"></i><span style="font-size: 15px;font-weight: 700;">Canteen</span>
                            <ul style="padding-top: 10px;">
                                <p>
                                    The College Canteen is running in a large area, with a view of greenery all around and a variety of refreshments and meals available. It is frequented by students and faculty members and is useful not only for physical refreshment but also for student bonding and discussions
                                </p>
                            </ul>
                        </li>
                    </ul>
                </article>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
