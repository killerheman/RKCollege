@extends('home.includes.layout', ['title' => 'About College'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="About College">
                <span>SANCTIONED POST OF FACULTY</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <object data="{{ asset('uploads/uploads/2019/10/SANCTIONED-POST-OF-FACULTY.jpg') }}" style="height:100%; width:100%; border:2px solid maroon"></object>                                 
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
