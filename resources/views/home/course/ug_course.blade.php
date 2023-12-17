@extends('home.includes.layout', ['title' => 'Under-Graduate Courses'])

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
                @include('home.sidebar.course', ['active' => 1])

                <div class="table-responsive">
                    <h3 class="heading-title pull-left">Under-Graduate Courses</h3>
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
                                <td>B. A- Eco (Hons)</td>
                                <td>B. A- Economics</td>
                                <td>3 Years</td>
                                <td>10+2 with 45% Marks</td>
                                <td>Hindi/English</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ asset('data/syllabus/ug/economics.pdf') }}">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{ asset('data/learning-outcome/ug/economics.pdf') }}">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>B. A- Eng (Hons)</td>
                                <td>B. A- English</td>
                                <td>3 Years</td>
                                <td>10+2 with 45% Marks</td>
                                <td>Hindi/English</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ asset('data/syllabus/ug/english.pdf') }}">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{ asset('data/learning-outcome/ug/english.pdf') }}">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>B. A- Hin (Hons)</td>
                                <td>B. A- Hindi </td>
                                <td>3 Years</td>
                                <td>10+2 with 45% Marks</td>
                                <td>Hindi/English</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ asset('data/syllabus/ug/hindi.pdf') }}">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{ asset('data/learning-outcome/ug/hindi.pdf') }}">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>B. A- His (Hons)</td>
                                <td>B. A- History</td>
                                <td>3 Years</td>
                                <td>10+2 with 45% Marks</td>
                                <td>Hindi/English</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ asset('data/syllabus/ug/history.pdf') }}">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{ asset('data/learning-outcome/ug/history.pdf') }}">View</a>
                                </td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>B. A- Maithili (Hons)</td>
                                <td>B. A- Maithili </td>
                                <td>3 Years</td>
                                <td>10+2 with 45% Marks</td>
                                <td>Hindi/English</td>
                                <td>
                                    <a class="btn btn-primary" href="#">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{ asset('data/learning-outcome/ug/maithili.pdf') }}">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>B. A- Maths (Hons)</td>
                                <td>B. A- Maths </td>
                                <td>3 Years</td>
                                <td>10+2 with 45% Marks</td>
                                <td>Hindi/English</td>
                                <td>
                                    <a class="btn btn-primary" href="#">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{ asset('data/learning-outcome/ug/math.pdf') }}">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>B. A- Phil (Hons)</td>
                                <td>B. A- Philosophy </td>
                                <td>3 Years</td>
                                <td>10+2 with 45% Marks</td>
                                <td>Hindi/English</td>
                                <td>
                                    <a class="btn btn-primary" href="#">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{ asset('data/learning-outcome/ug/philosophy.pdf') }}">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>B. A- Pol. Sc. (Hons)</td>
                                <td>B. A- Political Science</td>
                                <td>3 Years</td>
                                <td>10+2 with 45% Marks</td>
                                <td>Hindi/English</td>
                                <td>
                                    <a class="btn btn-primary" href="#">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{ asset('data/learning-outcome/ug/political_science.pdf') }}">View</a>
                                </td>
                            </tr>

                            <tr>
                                <td>9</td>
                                <td>B. A- Psy. (Hons)</td>
                                <td>B. A- Psychology</td>
                                <td>3 Years</td>
                                <td>10+2 with 45% Marks</td>
                                <td>Hindi/English</td>
                                <td>
                                    <a class="btn btn-primary" href="#">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{ asset('data/learning-outcome/ug/psychology.pdf') }}">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>B. A- Sans (Hons)</td>
                                <td>B. A- Sanskrit </td>
                                <td>3 Years</td>
                                <td>10+2 with 45% Marks</td>
                                <td>Hindi/English</td>
                                <td>
                                    <a class="btn btn-primary" href="#">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{ asset('data/learning-outcome/ug/sanskrit.pdf') }}">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>B. A- Socio (Hons)</td>
                                <td>B. A- Sociology</td>
                                <td>3 Years</td>
                                <td>10+2 with 45% Marks</td>
                                <td>Hindi/English</td>
                                <td>
                                    <a class="btn btn-primary" href="#">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{ asset('data/learning-outcome/ug/sociology.pdf') }}">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>B. A- Urdu (Hons)</td>
                                <td>B. A- Urdu </td>
                                <td>3 Years</td>
                                <td>10+2 with 45% Marks</td>
                                <td>Hindi/English</td>
                                <td>
                                    <a class="btn btn-primary" href="#">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{ asset('data/learning-outcome/ug/urdu.pdf') }}">View</a>
                                </td>
                            </tr>

                            <tr>
                                <td>13</td>
                                <td>B. Com - Acct. (Hons)</td>
                                <td>B. Com - Accounting and Finance</td>
                                <td>3 Years</td>
                                <td>10+2 with 45% Marks</td>
                                <td>Hindi/English</td>
                                <td>
                                    <a class="btn btn-primary" href="#">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="#">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>B. Com - Markt. (Hons)</td>
                                <td>B. Com - Marketing</td>
                                <td>3 Years</td>
                                <td>10+2 with 45% Marks</td>
                                <td>Hindi/English</td>
                                <td>
                                    <a class="btn btn-primary" href="#">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="#">View</a>
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
