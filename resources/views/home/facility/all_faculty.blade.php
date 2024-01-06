@extends('home.includes.layout', ['title' => 'Facilities'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="Facilities">
                <span>Faculty</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                @foreach ($faculties as $faculty )  
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                            
                        <img src="{{ asset($faculty->image??'') }}" style="height: 250px;">
                        <div class="box-content">
                            <h3 class="title">{{ $faculty->name??'' }}</h3>
                            <span class="post">{{ $faculty->designation??'' }}</span>
                        </div>
                    </div>
                    <div class="text-center fw-bold" style="background-color: #f19833; color: whitesmoke;">
                        <h4>{{ $faculty->name??'' }}</h4>
                        <p class="text-center">{{ $faculty->designation??'' }}</p>
                    </div>
                   
                </div>
                @endforeach
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
