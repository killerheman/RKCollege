@extends('home.includes.layout', ['title' => 'Admission'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="Admission">
                <span>Admission</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                @include('home.sidebar.admission', ['active' => 1])

                <article class="content-wrapper col-md-10 col-sm-8">
                    <h3 class="title">
                        Information Bulletin Admission</h3>
                    <p>
                        Demo Information Bulletin Admission
                    </p>


                </article>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
