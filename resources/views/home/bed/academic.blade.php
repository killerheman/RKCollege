@extends('home.includes.layout', ['title' => 'Academic Calendar'])

@section('content')
    <div class="page-wrapper">

        <div class="page-content">
            <div class="row page-row">
                <div class="container">
                    <div class="col-md-12">
                        <div class="vertical-tab" role="tabpanel">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Academic Calendar</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content tabs">
                                <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                                    <h3>Academic Calendar</h3><br>
                                           <a href="{{ asset('calendar/ACADEMIC-CALENDER.docx') }}" class="button" download><i class="fa fa-download"></i>Download Calendar</a>
                                        </div>


                            </div>
                        </div>
                    </div>
            </div>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
