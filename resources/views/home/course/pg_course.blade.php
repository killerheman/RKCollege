@extends('home.includes.layout', ['title' => 'Post-Graduate Courses'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="Courses">
                <span>Courses</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                @include('home.sidebar.course', ['active' => 3])

                <div class="table-responsive">
                    <h3 class="heading-title pull-left">Post-Graduate Courses</h3>
                    <table class="table table-striped table-hover table-responsive">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Course Code</th>
                                <th>Course Name</th>
                                <th>Duration</th>
                                <th>Eligibility </th>
                                <th>Medium of instruction</th>
                                <th>Syllabus</th>
                                <th>Learning Outcome</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>M. A- Eco</td>
                                <td>M. A- Economics</td>
                                <td>4 Semesters</td>
                                <td>Bachelor Degree with 45%</td>
                                <td>Hindi/English</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ asset('data/syllabus/pg/PG Economics-CBCS-Syll_compressed.pdf') }}">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{ asset('data/learning-outcome/pg/Economics.pdf') }}">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>M. A- Eng</td>
                                <td>M. A- English</td>
                                <td>4 Semesters</td>
                                <td>Bachelor Degree with 45%</td>
                                <td>Hindi/English</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ asset('data/syllabus/pg/English Syllabus-min-compressed-ilovepdf-compressed.pdf') }}">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{ asset('data/learning-outcome/pg/English.pdf') }}">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>M. A- Hin</td>
                                <td>M. A- Hindi  </td>
                                <td>4 Semesters</td>
                                <td>Bachelor Degree with 45%</td>
                                <td>Hindi/English</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ asset('data/syllabus/pg/hindi Syllabus-min.pdf') }}">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{ asset('data/learning-outcome/pg/Hindi.pdf') }}">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>M. A- His</td>
                                <td>M. A- History</td>
                                <td>4 Semesters</td>
                                <td>Bachelor Degree with 45%</td>
                                <td>Hindi/English</td>
                                <td>
                                    <a class="btn btn-primary" href="#">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{ asset('data/learning-outcome/pg/History.pdf') }}">View</a>
                                </td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>M. A- Maithili </td>
                                <td>M. A- Maithili </td>
                                <td>4 Semesters</td>
                                <td>Bachelor Degree with 45%</td>
                                <td>Hindi/English</td>
                                <td>
                                    <a class="btn btn-primary" href="#">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="#">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>M. A- Maths</td>
                                <td>M. A- Maths </td>
                                <td>4 Semesters</td>
                                <td>Bachelor Degree with 45%</td>
                                <td>Hindi/English</td>
                                <td>
                                    <a class="btn btn-primary" href="#">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{ asset('data/learning-outcome/pg/Mathematics.pdf') }}">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>M. A- Pol. Sc.</td>
                                <td>M. A- Political Science </td>
                                <td>4 Semesters</td>
                                <td>Bachelor Degree with 45%</td>
                                <td>Hindi/English</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ asset('data/syllabus/pg/Political Science CBCS-min.pdf') }}">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{ asset('data/learning-outcome/pg/Pol. Sc..pdf') }}">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>M. A- Psy. </td>
                                <td>M. A- Psychology</td>
                                <td>4 Semesters</td>
                                <td>Bachelor Degree with 45%</td>
                                <td>Hindi/English</td>
                                <td>
                                    <a class="btn btn-primary" href="#">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="#">View</a>
                                </td>
                            </tr>

                            <tr>
                                <td>9</td>
                                <td>M. A- Socio</td>
                                <td>M. A- Sociology</td>
                                <td>4 Semesters</td>
                                <td>Bachelor Degree with 45%</td>
                                <td>Hindi/English</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ asset('data/syllabus/pg/PG Sociology Syllabus.pdf') }}">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{ asset('data/learning-outcome/pg/Sociology.pdf') }}">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>M. A- Urdu</td>
                                <td>M. A- Urdu </td>
                                <td>4 Semesters</td>
                                <td>Bachelor Degree with 45%</td>
                                <td>Hindi/English</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ asset('data/syllabus/pg/Urdu-min.pdf') }}">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{ asset('data/learning-outcome/pg/Urdu.pdf') }}">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>M. A- Pol. Sc.</td>
                                <td>M. A- Political Science </td>
                                <td>4 Semesters</td>
                                <td>Bachelor Degree with 45%</td>
                                <td>Hindi/English</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ asset('data/syllabus/pg/Political Science CBCS-min.pdf') }}">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{ asset('data/learning-outcome/pg/Pol. Sc..pdf') }}">View</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!--//table-->
                </div>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
