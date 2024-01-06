@extends('home.includes.layout', ['title' => 'Map of The College'])

@section('content')
    <div class="page-wrapper">

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
