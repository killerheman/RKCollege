@extends('home.includes.layout', ['title' => 'IQAC'])

@section('content')
    <div class="page-wrapper">

        <div class="page-content">
            <div class="row page-row">
                @include('home.sidebar.iqac', ['active' => 1])

                <article class="content-wrapper col-md-10 col-sm-8">
                    <h3 class="title">
                        Internal Quality Assurance Cell</h3>
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
