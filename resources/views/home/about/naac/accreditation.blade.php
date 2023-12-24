@extends('home.includes.layout', ['title' => 'About College'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="About College">
                <span>Accreditation</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
               <img src="{{ asset('/uploads/uploads/2018/02/NAAC2-001-min.jpg') }}" alt="image" style="height: 100%; width:100%; padding-bottom:10px;"><br>
               <img src="{{ asset('/uploads/uploads/2018/02/NAAC3-001-min.jpg') }}" alt="image" style="height: 100%; width:100%">
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection