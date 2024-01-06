@extends('home.includes.layout', ['title' => 'About College'])

@section('content')
    <div class="page-wrapper">

        <div class="page-content">
            <div class="row page-row" style="overflow: hidden; height:700px;">
                <object data="{{ asset('uploads/uploads/2023/07/minutes-metting-201-22.pdf') }}" style="height:100%; width:100%;"></object>
               <!--//page-content-->
            </div>
            <div class="row page-row" style="overflow: hidden; height:700px;">
                <object data="{{ asset('uploads/uploads/2019/02/IQAC-Meeting-minutes-of-Future-Plans-with-Action-taken-for-next-4-year-academic-plan.pdf') }}" style="height:100%; width:100%;"></object>
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
