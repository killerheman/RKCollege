@extends('home.includes.layout', ['title' => 'Facilities'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="Facilities">
                <span>Facilities</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                @include('home.sidebar.facilities', ['active' => 7])

                <article class="content-wrapper col-md-10 col-sm-8">
                    <h2 class="no-margin-top has-divider text-highlight">Infrastructure</h2>
                    <p>The college has been keeping pace with the growing activities and academic demands.
                        Faculty of Science, faculty of Management Studies and the faculty of Computer
                        Science were introduced and required numbers of labs were set up.</p>
                    <p>There has been immense addition to the infrastructure as an auditorium with a seating
                        capacity of 800, Evaluation cell, Secrecy cell, Administrative block, Central
                        library, underground parking, hostel for girls, sports ground were added.</p>
                    <p>The college provides all departments with facilities like office rooms and common
                        rooms. There are separate common rooms for female students in every academic block
                        with washrooms for female students, male students and staff separately.</p>
                    <p>The college is made accessible by the installation of elevator and ramps are being
                        constructed for the use of physically challenged students. Audio books,
                        screen-reading software, Braille display and scanning facilities are available for
                        the visually challenged students. Special attention is paid to the students
                        suffering from dyslexia and hearing-impairment.</p>

                    <table align="center">
                        <tr>
                            <td>
                                <h3>College Building</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Administrative Block"
                                    href="{{ asset('frontend/assets/images/infrastructure/block1.jpg') }}"><img
                                        class="img-responsive img-thumbnail"
                                        src="{{ asset('frontend/assets/images/infrastructure/block1.jpg') }}"
                                        alt="Administrative Block"></a>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Academic Block"
                                    href="{{ asset('frontend/assets/images/infrastructure/block2.jpg') }}"><img
                                        class="img-responsive img-thumbnail"
                                        src="{{ asset('frontend/assets/images/infrastructure/block2.jpg') }}" alt="Academic Block">
                                </a>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Academic Block"
                                    href="{{ asset('frontend/assets/images/infrastructure/block3.jpg') }}"><img
                                        class="img-responsive img-thumbnail"
                                        src="{{ asset('frontend/assets/images/infrastructure/block3.jpg') }}"
                                        alt="Academic Block">
                                </a>

                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Academic Block"
                                    href="{{ asset('frontend/assets/images/infrastructure/block4.jpg') }}"><img
                                        class="img-responsive img-thumbnail"
                                        src="{{ asset('frontend/assets/images/infrastructure/block4.jpg') }}"
                                        alt="Academic Block">
                                </a>

                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Academic Block"
                                    href="{{ asset('frontend/assets/images/infrastructure/block5.jpg') }}"><img
                                        class="img-responsive img-thumbnail"
                                        src="{{ asset('frontend/assets/images/infrastructure/block5.jpg') }}"
                                        alt="Academic Block">
                                </a>

                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Academic Block"
                                    href="{{ asset('frontend/assets/images/infrastructure/block6.jpg') }}"><img
                                        class="img-responsive img-thumbnail"
                                        src="{{ asset('frontend/assets/images/infrastructure/block6.jpg') }}"
                                        alt="Academic Block">
                                </a>




                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3>IT Infrastructure</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Computer Lab with Digital Board"
                                    href="{{ asset('frontend/assets/images/infrastructure/computer_lab.jpeg') }}">
                                    <img class="img-responsive img-thumbnail"
                                        src="{{ asset('frontend/assets/images/infrastructure/computer_lab.jpeg') }}"
                                        alt="Computer Lab with Digital Board" />
                                </a>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Computer Lab with Digital Board"
                                    href="{{ asset('frontend/assets/images/infrastructure/computer_lab1.jpeg') }}">
                                    <img class="img-responsive img-thumbnail"
                                        src="{{ asset('frontend/assets/images/infrastructure/computer_lab1.jpeg') }}"
                                        alt="Computer Lab with Digital Board" />
                                </a>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Research Lab / Digital Librrary"
                                    href="{{ asset('frontend/assets/images/infrastructure/computer_lab2.jpeg') }}">
                                    <img class="img-responsive img-thumbnail"
                                        src="{{ asset('frontend/assets/images/infrastructure/computer_lab2.jpeg') }}"
                                        alt="Research Lab / Digital Librrary" />
                                </a>
                                {{-- <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Research Lab / Digital Librrary"
                                    href="{{ asset('frontend/assets/images/infrastructure/computer_lab3.jpg') }}">
                                    <img class="img-responsive img-thumbnail"
                                        src="{{ asset('frontend/assets/images/infrastructure/computer_lab3.jpg') }}"
                                        alt="Research Lab / Digital Librrary" />
                                </a> --}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3>Laboratories/Department</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Arts Department"
                                    href="{{ asset('frontend/assets/images/infrastructure/arts_department.jpeg') }}">
                                    <img class="img-responsive img-thumbnail"
                                        src="{{ asset('frontend/assets/images/infrastructure/arts_department.jpeg') }}"
                                        alt="Arts Department" />
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3>Auditoriums & Seminar Hall</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Auditorium I "
                                    href="{{ asset('frontend/assets/images/infrastructure/hall1.jpeg') }}">
                                    <img class="img-responsive img-thumbnail"
                                        src="{{ asset('frontend/assets/images/infrastructure/hall1.jpeg') }}"
                                        alt="Auditorium I " />
                                </a>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Auditorium I "
                                    href="{{ asset('frontend/assets/images/infrastructure/hall2.jpeg') }}">
                                    <img class="img-responsive img-thumbnail"
                                        src="{{ asset('frontend/assets/images/infrastructure/hall2.jpeg') }}"
                                        alt="Auditorium I " />
                                </a>

                            </td>
                        </tr>
                    </table>
                </article>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
