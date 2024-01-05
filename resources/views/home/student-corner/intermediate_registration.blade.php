@extends('home.includes.layout', ['title' => 'Intemediate-Registration'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="Intemediate Registration">
                <span>Intemediate Registration</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row mb-5">

                <div class="alterna-toggle alterna-accordion">
                    <div class="accordion-heading">
                        <h4 class="accordion-title"><a class="accordion-toggle collapsed" data-toggle="collapse"
                                href="#toggle-5"><span class="accordion-icon btn-theme"><i
                                        class="fa fa-plus"></i></span>Intermediate Registration for session 2017-2019</a>
                        </h4>
                    </div>
                    <div id="toggle-5" class="accordion-collapse collapse ">
                        <div class="accordion-body">

                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <!--<h4 style="text-align: left;"><strong>Bachelor Degree</strong></h4>-->
                                    <ul>
                                        <li>
                                            <a href="{{ asset('uploads/uploads/2018/07/Intermediate-Registration-2017-2019-Notice-001-min.jpg')}}"
                                                target="_blank" rel="noopener noreferrer">Intermediate Registration 2017-
                                                2019 Notice</a>
                                            </li>
                                        <li><a href="{{ asset('uploads/uploads/2018/07/student_registration_advertisement-of-Bihar-Board-Patna-min.jpg')}}"
                                                target="_blank" rel="noopener noreferrer">Student Registration Advertisement
                                                of Bihar Board, Patna<br>
                                            </a></li>
                                        <li><a href="{{ asset('uploads/uploads/2018/07/intermediate_registration_form_2017_19_arts-min.pdf')}}"
                                                target="_blank" rel="noopener noreferrer">Intermediate Registration Form
                                                2017-19 Arts</a></li>
                                        <li><a href="{{ asset('uploads/uploads/2018/07/intermediate_registration_form_2017_19_commerce-min.pdf')}}"
                                                target="_blank" rel="noopener noreferrer">Intermediate Registration Form
                                                2017-19 Commerce<br>
                                            </a></li>
                                        <li><a href="{{ asset('uploads/uploads/2018/07/intermediate_registration_form_2017_19_science-min.pdf')}}"
                                                target="_blank" rel="noopener noreferrer">Intermediate Registration Form
                                                2017-19 Science</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
