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
                @include('home.sidebar.exam_assesment', ['active' => 2])

                <article class="content-wrapper col-md-10 col-sm-8">
                    <h2 class="no-margin-top has-divider text-highlight">
                        Assessments</h2>
                    <h3 class="title" align="center">
                        30 Steps Evaluation System</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Six Papers into two tests in each semester </td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td>Six Papers into one assignment</td>
                                    <td>6</td>
                                </tr>
                                <tr>
                                    <td>Six Papers into one (Class Presentation & Attendance)</td>
                                    <td>6</td>
                                </tr>
                                <tr>
                                    <td>Six into one (Term end Semester Exam)</td>
                                    <td>6</td>
                                </tr>
                                <tr>
                                    <td><strong>Total</strong></td>
                                    <td>30</td>
                                </tr>
                            </tbody>
                        </table>
                        <!--//table-->
                    </div>

                    <h3 class="title" align="center">
                        Objective and Transparent Examination System
                    </h3>
                    <ul class="custom-list-style">
                        <li><i class="fa fa-star"></i>Preparation of Question Paper without moderation.
                        </li>
                        <li><i class="fa fa-star"></i>Getting Model Answers from the paper setters.</li>
                        <li><i class="fa fa-star"></i>Coding of Roll Numbers on answer books.</li>
                        <li><i class="fa fa-star"></i>100% Scrutiny of answer books after evaluation.</li>
                        <li><i class="fa fa-star"></i>Declaration of result through SMS to individual
                            student.</li>
                        <li><i class="fa fa-star"></i>Declaration of result within stipulated period.</li>
                        <li><i class="fa fa-star"></i>Uploading of Result on web with facility to print
                            marksheet.</li>
                        <li><i class="fa fa-star"></i>Distribution of Computerized marksheets.</li>
                        <li><i class="fa fa-star"></i>Display of Answer book of toppers in the Library.</li>
                    </ul>
                </article>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
