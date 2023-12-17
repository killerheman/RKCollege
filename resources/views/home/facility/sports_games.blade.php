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
                @include('home.sidebar.facilities', ['active' => 2])

                <article class="content-wrapper col-md-10 col-sm-8">
                    <h2 class="no-margin-top has-divider text-highlight">Sports & Games</h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <img class="img-responsive" src="{{ asset('frontend/assets/images/infrastructure/sport1.jpeg') }}" alt="" />
                        </div>
                        <div class="col-sm-6">
                            <img class="img-responsive" src="{{ asset('frontend/assets/images/infrastructure/sports2.jpeg') }}" style="height: 350px; width:600px;" alt="" />
                        </div>
                    </div>
                    <p>Sports spiced with physical education is an integral part of academic curriculum which is undeniably and beyond all the levels of discussions incomplete without co-curricular activities. There is a fully time permanent faculty for sports and Physical Education under whose able guidance and directions various sports activities, competitions, tournaments and events are organised. Students get proper training for participation in both indoor and outdoor games. Inter degree collegiate cricket tournaments and Annual athletic needs are held by the department of Sports and Physical Education. Students are provided equipment and facilities to participate in sport events organised by other agencies and institutions of Higher Education. Special training to girls’ students is given for self-defence..</p>
                    {{-- <blockquote class="custom-quote">
                            <p><i class="fa fa-quote-left"></i>Eat Drinking and be Merry...!!!</p>
                        </blockquote> --}}
            </article>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
