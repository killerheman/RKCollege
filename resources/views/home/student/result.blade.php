@extends('home.includes.layout', ['title' => 'About College'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="About College">
                <span>About College</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                @include('home.sidebar.about', ['active' => 1])

                <article class="content-wrapper col-md-10 col-sm-8">
                    <h3 class="title">
                        Welcome to C.M. College, Darbhanga</h3>
                    <p>
                        <img class="img-responsive" src="assets/images/CollegeInfrastructure/Building/Building-1.jpg"
                            alt="" />
                    </p>

                    <p>
                        Chandradhari Mithila College remains one of the oldest colleges in Darbhanga. The college offers quality educational opportunities to the students with a focus on development of both knowledge and skills in the field of education. The main objective of the college is to groom students for social and technological changes that they will foresee in their lifetime. The college believes that education is quite important for developing a society that is productive. It is essential to promote the sense of worth, ethical standards and values of every individual. The college remains committed to provide a platform for quality education in the field of commerce, science and arts to the students. In addition, the faculty at the college helps the students to discover their inner potential and professional qualities that will assist them in meeting their life goals.
                    </p>


                </article>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
