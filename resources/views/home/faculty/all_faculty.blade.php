@extends('home.includes.layout', ['title' => 'Faculty'])

@section('content')
    <div class="page-wrapper">

        <div class="page-content">
            <div class="row page-row">
                @forelse ($faculties as $faculty )
                    <div class="col-md-3 col-sm-6">
                        <div class="box">

                            <img src="{{ asset($faculty->image ?? '') }}" style="height: 250px;">
                            <div class="box-content">
                                <h3 class="title">{{ $faculty->name ?? '' }}</h3>
                                <span class="post">{{ $faculty->designation ?? '' }}</span>
                            </div>
                        </div>
                        <div class="text-center fw-bold" style="background-color: #f19833; color: whitesmoke;">
                            <h4>{{ $faculty->name ?? '' }}</h4>
                            <p class="text-center">{{ $faculty->designation ?? '' }}</p>
                        </div>

                    </div>
                @empty
                <h3>No data available</h3>
                @endforelse
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
