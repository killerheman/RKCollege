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
                @include('home.sidebar.facilities', ['active' => 1])

                <article class="content-wrapper col-md-10 col-sm-8">
                    <h2 class="no-margin-top has-divider text-highlight">College Canteen</h2>
                    <p><img class="img-responsive" src="{{ asset('frontend/assets/images/infrastructure/building.jpg') }}" alt="" /></p>
                    <p>There is a canteen in the college campus. It caters to the nutritional needs of students and teachers in most hygienic conditioned on subsidized rates.</p>
                    <p>The spacious and well-furnished canteen with intercom facility is situated within the campus next to the car park. The canteen menu offers a wide range of vegetarian North Indian, South Indian and Continental dishes, beverages, flavoured milk, Tea and Coffee.</p>
                    <blockquote class="custom-quote">
                            <p><i class="fa fa-quote-left"></i>Eat Drinking and be Merry...!!!</p>
                        </blockquote>
            </article>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
