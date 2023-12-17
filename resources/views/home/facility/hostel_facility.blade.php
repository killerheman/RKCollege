@extends('home.includes.layout', ['title' => 'Facilities'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="Facilities">
                <span>Facilities</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                @include('home.sidebar.facilities', ['active' => 4])

                <article class="content-wrapper col-md-10 col-sm-8">
                    <h2 class="no-margin-top has-divider text-highlight">Hostel Facilities</h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <img class="img-responsive" src="{{ asset('frontend/assets/images/misc/solar_facility.jpeg') }}" style="height: 350px; width:600px;"  alt="" />
                        </div>
                        <div class="col-sm-6">
                            <img class="img-responsive" src="{{ asset('frontend/assets/images/misc/toilet.jpeg') }}" style="height: 350px; width:600px;" alt="" />
                        </div>
                    </div>
                    <p>A number of students from other cities and states are studying in the college. To
                        provide accommodation to both boys and girls, the college is providing accommodation
                        facility. There is a hostel for the girls with a capacity of 155 girls and there is
                        also hostel for the boys with a capacity of 100 boys. </p>
                    <p>The hostels of the college are properly managed without any problem of discipline.
                    </p>

                    <h3 class="has-divider text-highlight">Facilities</h3>
                    <ul class="custom-list-style">
                        <li><i class="fa fa-star"></i>Internet access</li>
                        <li><i class="fa fa-star"></i>Air-conditioned Rooms</li>
                        <li><i class="fa fa-star"></i>Generator Sets</li>
                        <li><i class="fa fa-star"></i>Photocopier machine</li>
                        <li><i class="fa fa-star"></i>Water cooler with purifier</li>
                        <li><i class="fa fa-star"></i>Geysers</li>
                        <li><i class="fa fa-star"></i>Meditation rooms</li>
                        <li><i class="fa fa-star"></i>Cultural hall</li>
                        <li><i class="fa fa-star"></i>Common reading area</li>
                        <li><i class="fa fa-star"></i>Common rooms with televisions having DTH</li>
                        <li><i class="fa fa-star"></i>Gymnasium</li>
                        <li><i class="fa fa-star"></i>Yoga Center</li>
                        <li><i class="fa fa-star"></i>Badminton court</li>
                        <li><i class="fa fa-star"></i>Indoor games</li>
                        <li><i class="fa fa-star"></i>Mess</li>
                        <li><i class="fa fa-star"></i>CCTV for security</li>
                        <li><i class="fa fa-star"></i>Medical facilities </li>
                        <li><i class="fa fa-star"></i>Furnished guest house for the parents of inmates</li>
                    </ul>
                </article>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
