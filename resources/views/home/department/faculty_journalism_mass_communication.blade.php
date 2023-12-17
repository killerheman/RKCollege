@extends('home.includes.layout', ['title' => 'Faculty of Journalism & Mass Communication'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="Departments & Faculties">
                <span>Departments & Faculties</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                @include('home.sidebar.department', ['active' => 6])

                <div class="team-wrapper col-md-10 col-sm-7">
                    <h2 class="no-margin-top has-divider text-highlight">Faculty of Journalism & Mass Communication</h2>
                    <h3 class="no-margin-top has-divider text-highlight">Demo Department</h3>

                    <div class="row page-row">
                        <figure class="thumb col-md-3 col-sm-4 col-xs-6">
                            <img class="img-responsive"
                                src='{{ asset('frontend/assets/images/icon/male.png')}}'
                                alt="" />
                        </figure>
                        <div class="details col-md-9 col-sm-8 col-xs-6">
                            <h3 class="title">
                                Demo Teacher</h3>
                            <h4>
                                Associate Professor</h4>
                            <p>
                                M.A., Ph.D.
                            </p>
                        </div>
                    </div>
                </div>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
