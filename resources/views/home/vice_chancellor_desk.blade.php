@extends('home.includes.layout', ['title' => 'Vice-Chancellors Desk'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="From Vice-Chancellor's Desk">
                <span>From Vice-Chancellor's Desk</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                @include('home.sidebar.about', ['active' => 3])

                <article class="content-wrapper col-md-10 col-sm-8">

                    <h3 class="title">
                        From Vice-Chancellor's Desk</h3>
                    <p><img class="img-responsive" src="{{ asset('frontend/assets/images/officer/vc.jpeg') }}"
                            alt="Hon'ble Vice-Chancellor, LNMU" /></p>

                    <p class="people"><span class="name" style="color: #6699FF; font-weight:bold;">Prof. Surendra Pratap Singh</span><br><span class="title">Hon'ble Vice-Chancellor, LNMU</span></p>

                </article>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
