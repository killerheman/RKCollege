@extends('home.includes.layout', ['title' => 'Academics-Curriculum'])

@section('content')
    <div class="page-wrapper">

        <div class="page-content">
            <div class="row page-row mb-5">
                <iframe src="{{ route('show-pdf',['upload_home','ACADEMIC CURRICULUM.pdf']) }}" width="100%" height="600px" ></iframe>

            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
