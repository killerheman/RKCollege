@extends('home.includes.layout', ['title' => 'About College'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="About College">
                <span>Map of The College</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                <div class="gallery">
                    
                    <a href="{{ asset('college-map/map.jpg') }}"><img src="{{ asset('college-map/map.jpg')}}" alt="image"> </a>
                   
                    </div>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection