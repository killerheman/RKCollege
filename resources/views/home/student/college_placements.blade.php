@extends('home.includes.layout', ['title' => 'Placements'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="Placements">
                <span>Placements</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                <article class="welcome col-md-8 col-sm-7">
                    <div class="table-responsive">
                        <img src="{{ asset('frontend/assets/images/icon/placement.jpg')}}" class="img-responsive" />
                        <p>
                            Observing and appreciating the high academic competence,
                            intelligence and discipline among the meritorious students of the college ,
                            various Multinational organizations and other institutions have been doing
                            recruitment in the past few years.
                            In the previous academic year 2012-13, 170 students got placement with a minimum
                            package of 2,50,000 per annum.
                    </div>

                </article>
                <!--//page-content-->
                <aside class="page-sidebar col-md-4 col-sm-3">
                    <section class="course-finder">
                        <h1 class="section-heading text-highlight"><span class="line">Placement
                                Notices</span></h1>
                        <div class="section-content">

                            <p>
                                <a href='#'><i
                                        class="fa fa-long-arrow-right" aria-hidden="true"
                                        style="color:white;"></i>Placement Notice: Decathlon Internship</a>
                                <img id="ctl00_ContentPlaceHolder1_RptrPlacementNotice_ctl00_imgBadge" />
                            </p>

                            <p>
                                <a href='#'><i
                                        class="fa fa-long-arrow-right" aria-hidden="true"
                                        style="color:white;"></i>Placement Notice : Pre-Placement
                                    Training</a>
                                <img id="ctl00_ContentPlaceHolder1_RptrPlacementNotice_ctl01_imgBadge" />
                            </p>

                            <p>
                                <a href='#'><i
                                        class="fa fa-long-arrow-right" aria-hidden="true"
                                        style="color:white;"></i>Placement Notice : Jaro Education</a>
                                <img id="ctl00_ContentPlaceHolder1_RptrPlacementNotice_ctl02_imgBadge" />
                            </p>

                            <p>
                                <a href='#'><i
                                        class="fa fa-long-arrow-right" aria-hidden="true"
                                        style="color:white;"></i>Placement Notice : TCS BPS Fresher
                                    Hiring</a>
                                <img id="ctl00_ContentPlaceHolder1_RptrPlacementNotice_ctl03_imgBadge" />
                            </p>

                            <p>
                                <a href='#'><i
                                        class="fa fa-long-arrow-right" aria-hidden="true"
                                        style="color:white;"></i>Placement Notice : Skorion Technologies
                                    Pvt. Ltd.</a>
                                <img id="ctl00_ContentPlaceHolder1_RptrPlacementNotice_ctl04_imgBadge" />
                            </p>

                            <h5 class="no-margin-top has-divider text-highlight"></h5>
                            <a class="read-more" href="#">All Placement
                                Notices<i class="fa fa-chevron-right"></i></a>
                        </div>
                        <!--//section-content-->
                    </section>
                    <section class="course-finder">
                        <h1 class="section-heading text-highlight"><span class="line">Placement
                                Recruitment</span></h1>
                        <div class="section-content">

                            <h5 class="no-margin-top has-divider text-highlight"></h5>
                            <a class="read-more" href="#">All
                                Placement Recruitment<i class="fa fa-chevron-right"></i></a>
                        </div>
                        <!--//section-content-->
                    </section>
                </aside>
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
