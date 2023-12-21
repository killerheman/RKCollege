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
               <img src="{{ asset('annual-plan/plan2021-22.png') }}" alt="image" style="height: 100%; width:100%; padding-bottom:10px;"><br>
               <img src="{{ asset('annual-plan/plan2021-22-2.png') }}" alt="image" style="height: 100%; width:100%">
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection