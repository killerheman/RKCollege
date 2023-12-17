@extends('home.includes.layout', ['title' => 'Faculty of Arts'])

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
                @include('home.sidebar.department', ['active' => 1])

                <div class="team-wrapper col-md-10 col-sm-7">
                    <h2 class="no-margin-top has-divider text-highlight">Faculty of Arts & Humanities</h2>
                    <h3 class="no-margin-top has-divider text-highlight">Department of English</h3>

                    <div class="row page-row">
                        <div class="col-sm-4">
                            <figure class="thumb">
                                <img class="img-responsive"
                                    src='{{ asset('frontend/assets/images/icon/male.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Subrata Kumar Das</h3>
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
                                    Dr. Tanima Kumari</h3>
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
                                    Dr. Shambhawi</h3>
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
                                    Prof. Manoj Kr. Singh(Guest Faculty)</h3>
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
                                    Ebrahim Sk. (Guest Faculty)</h3>
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
                                    Umme Salma (Guest Faculty)</h3>
                                {{-- <h4>
                                    Associate Professor</h4>
                                <p>
                                    M.A., Ph.D.
                                </p> --}}
                            </div>
                        </div>


                    </div>

                    <br/>
                    <h3 class="no-margin-top has-divider text-highlight">Department of History</h3>

                    <div class="row page-row">
                        <div class="col-sm-4">
                            <figure class="thumb">
                                <img class="img-responsive"
                                    src='{{ asset('frontend/assets/images/icon/male.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Prof. Diwakar Kumar Singh</h3>
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
                                    Dr. Akhilesh Kumar Bibhu</h3>
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
                                    Mukesh Kumar Rajak</h3>
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
                                    Dr  Sandeep Kumar</h3>
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
                                    Dr. Alka Singh (Guest Faculty)</h3>
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
                                    Dr. Atul Kumar Jaiswal(Guest Faculty)</h3>
                                {{-- <h4>
                                    Associate Professor</h4>
                                <p>
                                    M.A., Ph.D.
                                </p> --}}
                            </div>
                        </div>


                    </div>

                    <br/>
                    <h3 class="no-margin-top has-divider text-highlight">Department of Economics</h3>

                    <div class="row page-row">
                        <div class="col-sm-4">
                            <figure class="thumb">
                                <img class="img-responsive"
                                    src='{{ asset('frontend/assets/images/icon/male.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Prof. Yadawendra Singh</h3>
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
                                    Dr. Reena Kumari</h3>
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
                                    Prof. Niraj Kumar</h3>
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
                                    Prof. Vikash Kumar</h3>
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
                                    Dr. Md. Safdar Ali(Guest Faculty)</h3>
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
                                    Md. Absar Alam</h3>
                                {{-- <h4>
                                    Associate Professor</h4>
                                <p>
                                    M.A., Ph.D.
                                </p> --}}
                            </div>
                        </div>


                    </div>

                    <br/>
                    <h3 class="no-margin-top has-divider text-highlight">Department of Political Science</h3>

                    <div class="row page-row">
                        <div class="col-sm-4">
                            <figure class="thumb">
                                <img class="img-responsive"
                                    src='{{ asset('frontend/assets/images/icon/female.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Prof. Divya Jha</h3>
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
                                    Dr. Shailendra Srivastava</h3>
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
                                    Dr. Sudhanshu Kumar</h3>
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
                                    Prof. Alok Ranjan</h3>
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
                                    Dr. Aashish Kumar Bariyar</h3>
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
                                    Sanjay Kumar Pal(Guest Faculty)</h3>
                                {{-- <h4>
                                    Associate Professor</h4>
                                <p>
                                    M.A., Ph.D.
                                </p> --}}
                            </div>
                        </div>


                    </div>

                    <br/>
                    <h3 class="no-margin-top has-divider text-highlight">Department of Philosophy</h3>

                    <div class="row page-row">
                        <div class="col-sm-4">
                            <figure class="thumb">
                                <img class="img-responsive"
                                    src='{{ asset('frontend/assets/images/icon/male.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Prof. Shashank Shukla</h3>
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
                                    Jyotsana Chaturbedi (Guest Faculty)</h3>
                                {{-- <h4>
                                    Associate Professor</h4>
                                <p>
                                    M.A., Ph.D.
                                </p> --}}
                            </div>
                        </div>
                    </div>

                    <br/>
                    <h3 class="no-margin-top has-divider text-highlight">Department of Maithili</h3>

                    <div class="row page-row">
                        <div class="col-sm-3">
                            <figure class="thumb">
                                <img class="img-responsive"
                                    src='{{ asset('frontend/assets/images/icon/female.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Smt. Ragini Ranjan</h3>
                                {{-- <h4>
                                    Associate Professor</h4>
                                <p>
                                    M.A., Ph.D.
                                </p> --}}
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <figure class="thumb">
                                <img class="img-responsive"
                                    src='{{ asset('frontend/assets/images/icon/male.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Dr. Suresh Paswan</h3>
                                {{-- <h4>
                                    Associate Professor</h4>
                                <p>
                                    M.A., Ph.D.
                                </p> --}}
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <figure class="thumb">
                                <img class="img-responsive"
                                    src='{{ asset('frontend/assets/images/icon/female.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Miss Abhilasha Kumari</h3>
                                {{-- <h4>
                                    Associate Professor</h4>
                                <p>
                                    M.A., Ph.D.
                                </p> --}}
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <figure class="thumb">
                                <img class="img-responsive"
                                    src='{{ asset('frontend/assets/images/icon/male.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Dr. Surendra Bharadwaj</h3>
                                {{-- <h4>
                                    Associate Professor</h4>
                                <p>
                                    M.A., Ph.D.
                                </p> --}}
                            </div>
                        </div>

                    </div>

                    <br/>
                    <h3 class="no-margin-top has-divider text-highlight">Department of Psychology</h3>

                    <div class="row page-row">
                        <div class="col-sm-4">
                            <figure class="thumb">
                                <img class="img-responsive"
                                    src='{{ asset('frontend/assets/images/icon/male.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Prof. Amrit Kr. Jha</h3>
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
                                    Dr. (Mrs.) Ekta Srivastava</h3>
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
                                    Dr. Vijaysen Pandey</h3>
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
                                    Dr. Pragati Kumari (Guest Faculty)</h3>
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
                                    Dr. Nishat Shaheen (Guest Faculty)</h3>
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
                                    Smt. Punita Kumari</h3>
                                {{-- <h4>
                                    Associate Professor</h4>
                                <p>
                                    M.A., Ph.D.
                                </p> --}}
                            </div>
                        </div>


                    </div>

                    <br/>
                    <h3 class="no-margin-top has-divider text-highlight">Department of Sociology</h3>

                    <div class="row page-row">
                        <div class="col-sm-4">
                            <figure class="thumb">
                                <img class="img-responsive"
                                    src='{{ asset('frontend/assets/images/icon/male.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Dr. P.K. Chy.</h3>
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
                                    Dr. Mayank Srivastava</h3>
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
                                    Dr. Rafia Kazami</h3>
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
                                    Prof. sanjeev Kumar</h3>
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
                                    Rajani Singh (Guest Faculty)</h3>
                                {{-- <h4>
                                    Associate Professor</h4>
                                <p>
                                    M.A., Ph.D.
                                </p> --}}
                            </div>
                        </div>


                    </div>

                    <br/>
                    <h3 class="no-margin-top has-divider text-highlight">Department of Hindi</h3>

                    <div class="row page-row">
                        <div class="col-sm-4">
                            <figure class="thumb">
                                <img class="img-responsive"
                                    src='{{ asset('frontend/assets/images/icon/male.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Prof. Akhilesh Kumar Rathore</h3>
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
                                    Dr. Rita Dubey</h3>
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
                                    Dr. Meenakshirana</h3>
                                {{-- <h4>
                                    Associate Professor</h4>
                                <p>
                                    M.A., Ph.D.
                                </p> --}}
                            </div>
                        </div>


                    </div>

                    <div class="row page-row">
                        <div class="col-sm-3">
                            <figure class="thumb">
                                <img class="img-responsive"
                                    src='{{ asset('frontend/assets/images/icon/male.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Dr. Rupendra Kr. Jha</h3>
                                {{-- <h4>
                                    Associate Professor</h4>
                                <p>
                                    M.A., Ph.D.
                                </p> --}}
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <figure class="thumb">
                                <img class="img-responsive"
                                    src='{{ asset('frontend/assets/images/icon/male.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Dr. Alok Kumar Roy</h3>
                                {{-- <h4>
                                    Associate Professor</h4>
                                <p>
                                    M.A., Ph.D.
                                </p> --}}
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <figure class="thumb">
                                <img class="img-responsive"
                                    src='{{ asset('frontend/assets/images/icon/female.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Dr. Bindu Chauhan</h3>
                                {{-- <h4>
                                    Associate Professor</h4>
                                <p>
                                    M.A., Ph.D.
                                </p> --}}
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <figure class="thumb">
                                <img class="img-responsive"
                                    src='{{ asset('frontend/assets/images/icon/male.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Dr. Abhishek Partap Singh (Guest)</h3>
                                {{-- <h4>
                                    Associate Professor</h4>
                                <p>
                                    M.A., Ph.D.
                                </p> --}}
                            </div>
                        </div>


                    </div>

                    <br/>
                    <h3 class="no-margin-top has-divider text-highlight">Department of Urdu & Persian</h3>
                    <div class="row page-row">
                        <div class="col-sm-3">
                            <figure class="thumb">
                                <img class="img-responsive"
                                    src='{{ asset('frontend/assets/images/icon/male.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Prof. Abdul Hai</h3>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <figure class="thumb">
                                <img class="img-responsive"
                                    src='{{ asset('frontend/assets/images/icon/male.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Faizan Haidar</h3>
                                {{-- <h4>
                                    Associate Professor</h4>
                                <p>
                                    M.A., Ph.D.
                                </p> --}}
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <figure class="thumb">
                                <img class="img-responsive"
                                    src='{{ asset('frontend/assets/images/icon/male.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Saud Alam(Guest Faculty)</h3>
                                {{-- <h4>
                                    Associate Professor</h4>
                                <p>
                                    M.A., Ph.D.
                                </p> --}}
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <figure class="thumb">
                                <img class="img-responsive"
                                    src='{{ asset('frontend/assets/images/icon/female.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Shabnam (Guest Faculty)</h3>
                                {{-- <h4>
                                    Associate Professor</h4>
                                <p>
                                    M.A., Ph.D.
                                </p> --}}
                            </div>
                        </div>


                    </div>

                    <div class="row page-row">
                        <div class="col-sm-3">
                            <figure class="thumb">
                                <img class="img-responsive"
                                    src='{{ asset('frontend/assets/images/icon/male.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Md. Shamsher Ali (Guest Faculty)</h3>
                            </div>
                        </div>


                    </div>

                    <br/>
                    <h3 class="no-margin-top has-divider text-highlight">Department of Sanskrit</h3>
                    <div class="row page-row">
                        <div class="col-sm-3">
                            <figure class="thumb">
                                <img class="img-responsive"
                                    src='{{ asset('frontend/assets/images/icon/male.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Dr. Sanjeet Kumar Jha</h3>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <figure class="thumb">
                                <img class="img-responsive"
                                    src='{{ asset('frontend/assets/images/icon/male.png')}}'
                                    alt="" />
                            </figure>
                            <div class="details">
                                <h3 class="title text-center">
                                    Dr. Shashi Bhushan Bhatt (Guest Faculty)</h3>
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
