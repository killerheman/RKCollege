@extends('home.includes.layout', ['title' => 'Faculty of Science'])

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
                @include('home.sidebar.department', ['active' => 3])

                <div class="team-wrapper col-md-10 col-sm-7">
                    <h2 class="no-margin-top has-divider text-highlight">Faculty of Science</h2>
                    <h3 class="no-margin-top has-divider text-highlight">Department of Mathematics</h3>

                    <div class="row page-row">
                        <div class="col-sm-4">
                            <figure class="thumb">
                                <img class="img-responsive"
                                    src='{{ asset('frontend/assets/images/icon/male.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title">
                                    Dr. Anupam Kumar Singh</h3>
                                {{-- <h4>
                                    Associate Professor</h4>
                                <p>
                                    M.A., Ph.D.
                                </p> --}}
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <figure class="thumb">
                                <img class="img-responsive"
                                    src='{{ asset('frontend/assets/images/icon/female.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title">
                                    Dr. Manami Chatterjee (Guest Faculty)</h3>
                                {{-- <h4>
                                    Associate Professor</h4>
                                <p>
                                    M.A., Ph.D.
                                </p> --}}
                            </div>
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
