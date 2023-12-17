@extends('home.includes.layout', ['title' => 'Self-finance U.G. Courses'])

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
                @include('home.sidebar.course', ['active' => 2])

                <div class="table-responsive">
                    <h3 class="heading-title pull-left">Self-finance U.G. Courses</h3>
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
                                <td>BBA</td>
                                <td>BBA</td>
                                <td>3 Years</td>
                                <td>10+2 with 45% Marks</td>
                                <td>Hindi/English</td>
                                <td>
                                    <a class="btn btn-primary" href="#">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{ asset('data/learning-outcome/self-finance-ug/bba.pdf') }}">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>BCA</td>
                                <td>BCA</td>
                                <td>3 Years</td>
                                <td>10+2 with 45% Marks</td>
                                <td>Hindi/English</td>
                                <td>
                                    <a class="btn btn-primary" href="#">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{ asset('data/learning-outcome/self-finance-ug/bca.pdf') }}">View</a>
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
