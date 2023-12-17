@extends('home.includes.layout', ['title' => 'Administration & Committees'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="Administration & Committees">
                <span>Administration & Committees</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                @include('home.sidebar.about', ['active' => 6])

                <article class="content-wrapper col-md-10 col-sm-8">
                    <h3 class="title">
                        Administration & Committees</h3>
                    <p>
                        <img class="img-responsive" src="assets/images/CollegeInfrastructure/Building/Building-1.jpg"
                            alt="" />
                    </p>

                    <p>
                        Demo
                    </p>


                </article>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
