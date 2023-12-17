@extends('home.includes.layout', ['title' => 'Syllabus'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="Downloads">
                <span>Downloads</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                @include('home.sidebar.download', ['active' => 1])

                <article class="content-wrapper col-md-10 col-sm-8">
                    <h3 class="title">Syllabus</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <p><a class="btn btn-lg btn-primary" href="#UnderGraduate">Under Graduate</a></p>
                                    </th>
                                    <th>
                                        <p><a class="btn btn-lg btn-warning" href="#PostGraduate">Post Graduate</a></p>
                                    </th>
                                    <th>
                                        <p><a class="btn btn-lg btn-info" href="#Certificate">Certificate / Diploma</a></p>
                                    </th>
                                </tr>
                            </thead>
                        </table>
                        <!--//table-->
                    </div>
                    <div class="page-row">
                        <h1 class="no-margin-top has-divider text-highlight" id="UnderGraduate">
                            Under-Graduate</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="has-divider text-highlight">Department of Arts</h3>
                                <ul class="custom-list-style">
                                    <li><i class="fa fa-star"></i><a target="_blank"
                                            href="#">Anthropology</a></li>
                                    <li><i class="fa fa-star"></i><a target="_blank"
                                            href="#">Economics</a></li>
                                    <li><i class="fa fa-star"></i><a target="_blank"
                                            href="#">Education</a></li>
                                    <li><i class="fa fa-star"></i><a target="_blank"
                                            href="#">English Literature</a>
                                    </li>
                                    <li><i class="fa fa-star"></i><a target="_blank"
                                            href="#">Geography</a></li>
                                    <li><i class="fa fa-star"></i><a target="_blank"
                                            href="#">Hindi Literature </a></li>
                                    <li><i class="fa fa-star"></i><a target="_blank"
                                            href="#">Physical
                                            Education</a></li>
                                    <li><i class="fa fa-star"></i><a target="_blank"
                                            href="#">Political
                                            Science</a></li>
                                    <li><i class="fa fa-star"></i><a target="_blank"
                                            href="#">Psychology</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h3 class="has-divider text-highlight">Department of Science</h3>
                                <ul class="custom-list-style">
                                    <li><i class="fa fa-star"></i><a target="_blank"
                                            href="#">Anthropology</a></li>
                                    <li><i class="fa fa-star"></i><a target="_blank"
                                            href="#">Botany</a></li>
                                    <li><i class="fa fa-star"></i><a target="_blank"
                                            href="#">Chemistry</a></li>
                                    <li><i class="fa fa-star"></i><a target="_blank"
                                            href="#">Electronics</a></li>
                                    <li><i class="fa fa-star"></i><a target="_blank"
                                            href="#">Mathematics</a></li>
                                    <li><i class="fa fa-star"></i><a target="_blank"
                                            href="#">Physics</a></li>
                                    <li><i class="fa fa-star"></i><a target="_blank"
                                            href="#">Statistics</a></li>
                                    <li><i class="fa fa-star"></i><a target="_blank"
                                            href="#">Zoology</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="has-divider text-highlight">Department of Commerce</h3>
                                <ul class="custom-list-style">
                                    <li><i class="fa fa-star"></i><a target="_blank"
                                            href="#">B.Com</a></li>
                                    <li><i class="fa fa-star"></i><a target="_blank"
                                            href="#">B.Com - Honors</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h3 class="has-divider text-highlight">Department of Management Science</h3>
                                <ul class="custom-list-style">
                                    <li><i class="fa fa-star"></i><a target="_blank"
                                            href="#">B.B.A.</a></li>
                                    <li><i class="fa fa-star"></i><a target="_blank"
                                            href="#">B.B.A.-MS</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="has-divider text-highlight">Department of Computer Science</h3>
                                <ul class="custom-list-style">
                                    <li><i class="fa fa-star"></i><a target="_blank"
                                            href="#">B.A.</a></li>
                                    <li><i class="fa fa-star"></i><a target="_blank"
                                            href="#">B.Sc.</a></li>
                                    <li><i class="fa fa-star"></i><a target="_blank"
                                            href="#">B.C.A.</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h3 class="has-divider text-highlight">Department of Deen Dayal Upadhyay
                                    Kaushal Kendra</h3>
                                <ul class="custom-list-style">
                                    <li><i class="fa fa-star"></i><a href="#">B.Voc (Banking & Finance)</a>
                                    </li>
                                    <li><i class="fa fa-star"></i><a
                                            href="#">B.Voc (Software
                                            Development & e-Governance)</a></li>
                                </ul>
                            </div>
                        </div>

                        <p>&nbsp;</p>
                        <h1 class="no-margin-top has-divider text-highlight" id="PostGraduate">Post-Graduate
                        </h1>
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="has-divider text-highlight">Department of Arts</h3>
                                <ul class="custom-list-style">
                                    <li><i class="fa fa-star"></i><a target="_blank"
                                            href="#">M.A. / M.Sc.
                                            (Anthropology)</a></li>
                                    <li><i class="fa fa-star"></i><a target="_blank"
                                            href="#">M.A. (Geography)</a>
                                    </li>
                                    <li><i class="fa fa-star"></i><a target="_blank"
                                            href="#">M.A. (Psychology)</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h3 class="has-divider text-highlight">Department of Commerce</h3>
                                <ul class="custom-list-style">
                                    <li><i class="fa fa-star"></i><a target="_blank"
                                            href="#">M.Com.</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="has-divider text-highlight">Department of Deen Dayal Upadhyay
                                    Kaushal Kendra</h3>
                                <ul class="custom-list-style">
                                    <li><i class="fa fa-star"></i><a href="#">M.Voc. (Banking, Stock &
                                            Insurance)</a></li>
                                    <li><i class="fa fa-star"></i><a
                                            href="#">M.Voc. (Software &
                                            e-Governance)</a></li>
                                </ul>
                            </div>
                        </div>
                        <p>&nbsp;</p>
                        <h1 class="no-margin-top has-divider text-highlight" id="Certificate">Certificate /
                            Diploma</h1>
                        <div class="row">
                            <ul class="custom-list-style">
                                <li><i class="fa fa-star"></i><a target="_blank"
                                        href="#">Certificate
                                        Course in Digital Marketing </a></li>
                                <li><i class="fa fa-star"></i><a target="_blank"
                                        href="#">Certificate
                                        Course in Computer Accounting & Taxation</a></li>
                                <li><i class="fa fa-star"></i><a target="_blank"
                                        href="#">Certificate
                                        Course in Investment Management</a></li>
                                <li><i class="fa fa-star"></i><a target="_blank"
                                        href="#">Advance
                                        Diploma In Computer Applications (Dept of Computer Science) </a>
                                </li>
                                <li><i class="fa fa-star"></i><a target="_blank"
                                        href="#">Analytical Techniques
                                        and Instrumental Analysis (Dept of Chemistry) </a></li>
                                <li><i class="fa fa-star"></i><a target="_blank"
                                        href="#">Add On Certificate
                                        Course in Fingerprints and Document Examination (Dept of
                                        Anthropology)</a></li>
                                <li><i class="fa fa-star"></i><a target="_blank"
                                        href="#">Post Graduate Diploma
                                        in Remote Sensing & GIS (Dept of Geography)</a></li>
                            </ul>
                        </div>
                    </div>
                </article>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
