@extends('home.includes.layout', ['title' => 'IQAC'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="IQAC">
                <span>IQAC</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                @include('home.sidebar.iqac', ['active' => 4])

                <article class="content-wrapper col-md-10 col-sm-8">
                    <h3 class="title">
                        Minutes Of Meetings</h3>
                    {{-- <p>
                        <img class="img-responsive" src="assets/images/CollegeInfrastructure/Building/Building-1.jpg"
                            alt="" />
                    </p> --}}

                    <p>
                        Demo IQAC
                    </p>
                </article>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
