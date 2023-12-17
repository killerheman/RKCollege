@extends('home.includes.layout', ['title' => 'Home'])
@section('content')
    @include('home.includes.slider')
    <!--//flexslider-->

    <div class="row page-row" style="margin-bottom: 25px;">
        <div class="col-sm-1" style="background-color: #800000;color:whitesmoke;">
            <span style="font-size: 1.6rem;font-weight: bold;">Notice - </span>
        </div>
        <div class="col-sm-11" style="background-color: #f5f5f5;color:black;">
            <marquee style="font-size: 12pt">
                @if ($topnotices)
                    @foreach ($topnotices as $notice)
                        @if ($notice->type == 'link')
                        <span style="color: black;">
                            <a href='{{ $notice->filename }}' target="_blank"><i class="fa fa-hand-o-right"
                                    aria-hidden="true"></i>&nbsp;&nbsp;{{ $notice->title }}</a>
                            <img src="{{ asset('frontend/assets/images/misc/new_red.gif') }}"
                                id="ctl00_ContentPlaceHolder1_RptrAnnouncement_ctl00_imgBadge" />
                        </span>
                        &nbsp;&nbsp;&nbsp;
                        @elseif($notice->type == 'file')
                            <span style="color: black;">
                                <a href='{{ asset($notice->filename) }}' target="_blank"><i class="fa fa-hand-o-right"
                                        aria-hidden="true"></i> &nbsp;&nbsp;{{ $notice->title }}</a>
                                <img src="{{ asset('frontend/assets/images/misc/new_red.gif') }}"
                                    id="ctl00_ContentPlaceHolder1_RptrAnnouncement_ctl00_imgBadge" />
                            </span>
                        @endif
                        &nbsp;&nbsp;&nbsp;
                    @endforeach
                @else
                <span>Welcome to official website of R.K.College, Darbhanga </span>
                @endif
            </marquee>
        </div>
    </div>

    <!--//promo-->
    @include('home.includes.heading')
    <!--//news-->


    <div class="row cols-wrapper" style="margin-top: 70px;">

        <div class="col-md-8">
            <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Notice</a></li>
                    <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">Exam</a></li>
                    <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab">Admission</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabs">
                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                        @if ($notices)
                        @foreach ($notices as $notice)
                            @if ($notice->type == 'link')
                                <p style="color: black;">
                                    <a href='{{ $notice->filename }}'><i class="fa fa-hand-o-right"
                                            aria-hidden="true"></i>{{ $notice->title }}</a>
                                    <img src="{{ asset('frontend/assets/images/misc/new_red.gif') }}"
                                        id="ctl00_ContentPlaceHolder1_RptrAnnouncement_ctl00_imgBadge" />
                                </p>
                            @elseif($notice->type == 'file')
                                <p style="color: black;">
                                    <a href='{{ asset($notice->filename) }}'><i class="fa fa-hand-o-right"
                                            aria-hidden="true"></i> {{ $notice->title }}</a>
                                    <img src="{{ asset('frontend/assets/images/misc/new_red.gif') }}"
                                        id="ctl00_ContentPlaceHolder1_RptrAnnouncement_ctl00_imgBadge" />
                                </p>
                            @endif
                        @endforeach
                    @else
                        <p>No notice uploaded</p>
                    @endif
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Section2">
                        <h3>Exam</h3>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Section3">
                        <p>Admissions</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <!--//links-->
                <section class="links">
                <h1 class="section-heading text-highlight"><span class="line"
                        style="color: #fa8303;font-weight: 700;">Important Links</span></h1>
                <div class="section-content">
                    <p><a href="https://ugceresources.in/"><i class="fa fa-caret-right"></i>UGC e-Resources</a>
                    </p>
                    {{-- <p><a href="ddukk.html"><i class="fa fa-caret-right"></i>Deen Dayal Upadhyay Kaushal Kendra
                            (DDUKK)</a></p> --}}
                    <p><a href="#"><i class="fa fa-caret-right"></i>Commercepedia</a></p>
                    <p><a href="#"><i class="fa fa-caret-right"></i>Commercepedia
                            (Student Edition)</a></p>
                    <p><a href="#"><i class="fa fa-caret-right"></i>Online
                            Study Material</a></p>
                    <p><a href="{{ route('news') }}"><i class="fa fa-caret-right"></i>Press News</a></p>

                </div>
                <!--//section-content-->
            </section>

            <!--//links-->
        </div>
        <!--//col-md-3-->
    </div>

    <div class="container" style="margin-top: 20px;">
        <div class="text-effect1">
            <span>Our Mentors</span>
        </div>
        <div class="row" style="margin-top: 20px;">
            <div class="col-md-3 col-sm-6">
                <div class="box">
                    <img src="{{ asset('frontend/assets/images/officer/bihar_governor.jpg') }}" style="height: 250px;" >
                    <div class="box-content">
                        <h3 class="title">Shri Rajendra Vishwanath Arlekar</h3>
                        <span class="post">Governor</span>
                    </div>
                </div>
                <div class="text-center fw-bold" style="background-color: #f19833; color: whitesmoke;">
                    <h4>Shri Rajendra Vishwanath Arlekar</h4>
                    <p class="text-center">Governor</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="box">
                    <img src="{{ asset('frontend/assets/images/officer/cm_bihar.jpg') }}" style="height: 250px;" >
                    <div class="box-content">
                        <h3 class="title">Nitish Kumar</h3>
                        <span class="post">Chief Minister</span>
                    </div>
                </div>
                <div class="text-center fw-bold" style="background-color: #f19833; color: whitesmoke;">
                    <h4>Nitish Kumar</h4>
                    <p class="text-center">Chief Minister</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="box">
                    <img src="{{ asset('frontend/assets/images/officer/vc.jpeg') }}" style="height: 250px;" >
                    <div class="box-content">
                        <h3 class="title">Prof. Surendra Pratap Singh</h3>
                        <span class="post">Vice-Chancellor</span>
                    </div>
                </div>
                <div class="text-center fw-bold" style="background-color: #f19833; color: whitesmoke;">
                    <h4>Prof. Surendra Pratap Singh</h4>
                    <p class="text-center">Vice-Chancellor</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="box">
                    <img src="{{ asset('frontend/assets/images/officer/principal.jpg') }}" style="height: 250px;" >
                    <div class="box-content">
                        <h3 class="title">Arvind Kumar Malan</h3>
                        <span class="post">Principal</span>
                    </div>
                </div>
                <div class="text-center fw-bold" style="background-color: #f19833; color: whitesmoke;">
                    <h4>Arvind Kumar Mandal</h4>
                    <p class="text-center">Principal</p>
                </div>
            </div>
        </div>


    </div>

@endsection
