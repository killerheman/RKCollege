@extends('home.includes.layout', ['title' => 'PSO & CO'])

@section('content')
    <div class="page-wrapper">

        <div class="page-content">
            <div class="row page-row mb-5">
                <iframe src="{{ route('show-pdf',['upload_home','PO, CO.pdf']) }}" width="100%" height="600px" ></iframe>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
