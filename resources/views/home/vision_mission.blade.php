@extends('home.includes.layout', ['title' => 'Vision & Mission'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="Vision & Mission">
                <span>Vision & Mission</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                @include('home.sidebar.about', ['active' => 2])

                <article class="content-wrapper col-md-10 col-sm-8">

                    <h3 class="title">
                        Vision and Mission</h3>
                  <br/>
                    <h3>Vision </h3>

                    <p>Affirming and building upon its heritage, RK College is committed to maintain high educational standards, to foster and inspire student success and to create diverse opportunities for lifelong learning. By attracting strong leadership and distinguished faculty to a college of excellence, we are committed to create an enriched learning environment that empowers students to transform their lives.</p>
                    <h3>Mission</h3>
                    <p>The mission of RK College is to educate and develop the all-round and holistic personality development of the students. Our endeavor is to educate and train our students so that they become leaders and aspire to lead an ethical, healthy and fulfilling life with a strong sense of personal accountability and civic responsibility.</p>
                    <p>
                        To provide a foundation for a lifetime of learning, the college is dedicated to fostering intellectual growth, aesthetic appreciation, and character development in our students. This institution thrives on the principle that knowledge is acquired through discipline, competence is established when knowledge is tempered by experience, and character is developed when competence is exercised for the benefit of others.
                    </p>
                </article>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
