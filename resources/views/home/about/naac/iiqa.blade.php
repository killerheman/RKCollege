@extends('home.includes.layout', ['title' => 'About College'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="About College">
                <span>IIQA</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <p> <a href="{{ asset('uploads/uploads/2019/06/SUBMITTED-IIQA-WITH-EDITED.pdf')}}" class="button" download title="Download"><i class="fa fa-dot-circle-o"></i> IIQA</a></p>
                                        
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
