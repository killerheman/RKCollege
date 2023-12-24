@extends('home.includes.layout', ['title' => 'About College'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="About College">
                <span>Accreditation</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content" >
            <div class="row page-row">
                <div class="gallery">
                    
                    <a href="{{ asset('/uploads/uploads/2018/02/NAAC2-001-min.jpg') }}"><img src="{{ asset('/uploads/uploads/2018/02/NAAC2-001-min.jpg') }}" alt="image"> </a>
                   
                     <a href="{{ asset('/uploads/uploads/2018/02/NAAC3-001-min.jpg') }}"><img src="{{ asset('/uploads/uploads/2018/02/NAAC3-001-min.jpg') }}" alt="image"> </a>
                  </div>
            </div>
        </div>
    </div>

    
@endsection