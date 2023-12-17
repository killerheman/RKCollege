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
                @include('home.sidebar.facilities', ['active' => 6])

                <article class="content-wrapper col-md-10 col-sm-8">
                    <h2 class="no-margin-top has-divider text-highlight">Medical Facilities</h2>
                    {{-- <p><img class="img-responsive"
                            src="{{ asset('frontend/assets/images/infrastructure/building.jpg') }}" alt="" />
                    </p> --}}
                    <p>All the departments of the college have been provided with first-aid kits to meet any
                        emergency. Medical centres are situated quite close to the college where patients
                        from the college are attended on priority bases. </p>

                </article>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
