@extends('home.includes.layout', ['title' => 'Institution Best Practice'])

@section('content')
    <div class="page-wrapper">

        <div class="page-content" >
            <div class="row page-row">
                <iframe src="{{ asset('uploads/uploads/2023/07/BEST-PRATICE-2020-21.pdf') }}" width="100%" height="600px"></iframe>
                <iframe src="{{ asset('/uploads/uploads/2023/07/Institutional-two-best-Pratices-2016-17-1.pdf') }}" width="100%" height="600px"></iframe>

            </div>
        </div>
    </div>


@endsection
