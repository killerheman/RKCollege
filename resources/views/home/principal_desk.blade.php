@extends('home.includes.layout', ['title' => 'Principals Desk'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="From Principal's Desk">
                <span>From Principal's Desk</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                @include('home.sidebar.about', ['active' => 4])

                <article class="content-wrapper col-md-10 col-sm-8">

                    <h3 class="title">
                        From Principal's Desk</h3>
                    <div class="row">
                        <div class="col-sm-8">
                            <p>
                                Dear Students/Parents,
                            </p>
                            <p>
                                It gives me immense pleasure to invite you to RK college, a premier institution of formal education in Bihar. Our college is accredited with a B++ Grade (CGPA-2.84) from the National Assessment and Accreditation Council (NAAC). In today's globalised competitive world which has become a melting pot of cross-cultural changes and cutting-edge technologies, it has become important to gain a worthwhile qualification. So, choosing a course which suits both skills and career aspirations is a challenging task.
                            </p>
                            <p>
                                At RK College we have an extensive range of programmes at Undergraduate and Postgraduate levels, in areas as diverse as Social Sciences, Humanities, Commerce, Computer Application, Library and Information Science, Journalism and a host of other related courses.  This College is known for its strong commitment to quality and value- based education. I do hope that your achievement will further result in value addition to this college. I would also like you to share your ideas, dreams and vision to make the learning process at RK College an even more exciting experience. Wishing you all the very best for your future career aspirations!
                            </p>
                        </div>
                        <div class="col-sm-4">
                            <img class="img-responsive" src="{{ asset('frontend/assets/images/officer/principal.jpg') }}"
                            alt="Principal, C.M. College, Darbhanga" />
                            <p class="people"><span class="name" style="color: #6699FF; font-weight:bold;">Dr. Anil Kumar Mandal</span><br><span class="title">Principal, R.K..College, Madhubani</span></p>
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
