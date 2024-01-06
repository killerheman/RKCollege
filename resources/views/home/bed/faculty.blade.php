@extends('home.includes.layout', ['title' => 'Faculty of B.Ed'])

@section('content')
    <div class="page-wrapper">

        <div class="page-content">
            <div class="row page-row">
                <div class="container">
                        <div class="col-md-12">
                            <div class="vertical-tab" role="tabpanel">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Teaching</a></li>
                                    <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">Non-Teaching</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content tabs">
                                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                                        <h3>Teaching</h3><br>
                                               <a href="{{ asset('faculty/teaching.pdf') }}" class="button" download><i class="fa fa-download"></i>Download</a>
                                            </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Section2">
                                        <h3>Non-Teaching</h3><br>
                                               <a href="{{ asset('faculty/non-teaching.pdf') }}" class="button" download><i class="fa fa-download"></i>Download</a>
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
