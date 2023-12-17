@extends('home.includes.layout', ['title' => 'Distance Learning Center'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="Distance Learning Center">
                <span>Distance Learning Center</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                <article class="welcome col-md-8 col-sm-7">
                    <p><img class="img-responsive"
                            src="{{ asset('frontend/assets/images/infrastructure/building.jpg') }}"
                            alt="" /></p>
                    <p>Study centre for IGNOU and Uttar Pradesh Rajarshi Tandon Open University, Allahabad
                        are offering a number of certificate, diploma and degree programs in distant mode.
                        Regular consultation classes and remedial sessions are held for the students of the
                        programs under IGNOU and UPRTOU.</p>

                </article>
                <!--//page-content-->
                {{-- <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">
                    <section class="widget has-divider">
                        <h2 class="title">LNMU</h2>
                        <a class="img-responsive" href="http://www.ignou.ac.in/" target="_blank"><img
                                src="assets/images/CollegeInfrastructure/Building/IGNOU-LOgo.png" /></a>
                    </section>
                    <!--//widget-->
                    <section class="widget has-divider">
                        <h2 class="title">UPRTOU</h2>
                        <a class="img-responsive" href="http://www.uprtou.ac.in/" target="_blank"><img
                                src="assets/images/CollegeInfrastructure/Building/UPRTOU-LOgo.jpg" /></a>
                    </section>
                    <!--//widget-->
                </aside> --}}
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
