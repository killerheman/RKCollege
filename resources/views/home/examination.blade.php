@extends('home.includes.layout', ['title' => 'Examination & Assesments'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="Examination & Assesments">
                <span>Examination & Assesments</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                @include('home.sidebar.exam_assesment', ['active' => 1])

                <article class="content-wrapper col-md-10 col-sm-8">

                    <ol>
                        <li>
                            With a view to conducting the examination of the college properly, the Principal appoints the Centre Superintendent of Examinations.  A few other teachers are appointed as members of the examination department for assistance. Any information related to the examination can be obtained from the Examination department.
                        </li>
                        <li>
                            It is mandatory for each student to appear at the college-level examinations. He/she shall be eligible to take the Board/University exams only after successfully getting through the internal exams conducted by the college.
                        </li>
                        <li>
                            There shall be two internal examinations.
                            <ul>
                                <li>The Term-end examinations are generally held in the month of December and Terminal / Test examinations in the month of April.</li>
                                <li>
                                    Appearing at both examinations is compulsory. A student will be sent up for the final Board/University examination only when he/she scores the qualifying marks in every subject in either of the two examinations.
                                </li>
                            </ul>
                        </li>
                        <li>
                            Announcement of dates related to the college-level examinations or any other relevant announcement is made by the order of the Principal from time to time.
                        </li>
                        <li>
                            Students as well as their Guardians are advised to take note that 75% attendance in classes is essential in order to appear at the Board/University Exams. Students having less than 75 percent of attendance will in no case be permitted to appear either in the internal examination of the college or in any University examination as well
                        </li>
                    </ol>

                    <a class="btn btn-info btn-lg" href="https://lnmu.ac.in/upload/Examination%20calendar.pdf">View Examination Calendar</a>

                </article>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
