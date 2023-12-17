@extends('home.includes.layout', ['title' => 'Faculty of Commerce'])

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
                @include('home.sidebar.department', ['active' => 2])

                <div class="team-wrapper col-md-10 col-sm-7">
                    <h2 class="no-margin-top has-divider text-highlight">Faculty of Commerce</h2>
                    <h3 class="no-margin-top has-divider text-highlight">Department of Accounting & Finance</h3>

                    <div class="row page-row">
                        <div class="col-sm-4">
                            <figure class="thumb">
                                <img class="img-responsive"
                                    src='{{ asset('frontend/assets/images/icon/male.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Dr. D. P. Gupta</h3>
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
                                    src='{{ asset('frontend/assets/images/icon/male.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Dr. A. K. Poddar</h3>
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
                                    src='{{ asset('frontend/assets/images/icon/male.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Dr. B. Sahu</h3>
                                {{-- <h4>
                                    Associate Professor</h4>
                                <p>
                                    M.A., Ph.D.
                                </p> --}}
                            </div>
                        </div>


                    </div>

                    <div class="row page-row">
                        <div class="col-sm-4">
                            <figure class="thumb">
                                <img class="img-responsive"
                                    src='{{ asset('frontend/assets/images/icon/female.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Dr. Divya Sharma</h3>
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
                                    src='{{ asset('frontend/assets/images/icon/male.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Prof. Lalit Sharma</h3>
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
                                <h3 class="title text-center">
                                    Prof. Ritika Maurya</h3>
                                {{-- <h4>
                                    Associate Professor</h4>
                                <p>
                                    M.A., Ph.D.
                                </p> --}}
                            </div>
                        </div>


                    </div>

                    <div class="row page-row">
                        <div class="col-sm-4">
                            <figure class="thumb">
                                <img class="img-responsive"
                                    src='{{ asset('frontend/assets/images/icon/female.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Prof. Meenu Kumari</h3>
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
                                    src='{{ asset('frontend/assets/images/icon/male.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Dr. Alok Kumar (Guest Faculty)</h3>
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
                                    src='{{ asset('frontend/assets/images/icon/male.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Dr. Md. Shakir Alam (Guest Faculty)</h3>
                                {{-- <h4>
                                    Associate Professor</h4>
                                <p>
                                    M.A., Ph.D.
                                </p> --}}
                            </div>
                        </div>


                    </div>

                    <div class="row page-row">
                        <div class="col-sm-4">
                            <figure class="thumb">
                                <img class="img-responsive"
                                    src='{{ asset('frontend/assets/images/icon/male.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Dr. Ajit Kumar (Guest Faculty)</h3>
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
                                <h3 class="title text-center">
                                    Dr. Shiba Shabbir (Guest Faculty)</h3>
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
                                    src='{{ asset('frontend/assets/images/icon/male.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Dr. Sujeet Kumar Sharma (Guest Faculty)</h3>
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
