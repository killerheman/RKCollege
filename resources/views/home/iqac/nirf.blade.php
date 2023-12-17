@extends('home.includes.layout', ['title' => 'NIRF'])
@section('headerarea')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <style>
        #accordion .panel {
            border: none;
            border-radius: 0;
            box-shadow: none;
            margin: 0 30px 10px 30px;
            overflow: hidden;
            position: relative;
        }

        #accordion .panel-heading {
            padding: 0;
            border: none;
            border-radius: 0;
            position: relative;
        }

        #accordion .panel-title a {
            display: block;
            padding: 15px 20px;
            margin: 0;
            background: #fe7725;
            font-size: 18px;
            font-weight: 700;
            letter-spacing: 1px;
            color: #fff;
            border-radius: 0;
            position: relative;
        }

        #accordion .panel-title a.collapsed {
            background: #1c2336;
        }

        #accordion .panel-title a:before,
        #accordion .panel-title a.collapsed:before {
            content: "\f068";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            width: 30px;
            height: 30px;
            line-height: 25px;
            border-radius: 50%;
            background: #fe7725;
            font-size: 14px;
            font-weight: normal;
            color: #fff;
            text-align: center;
            border: 3px solid #fff;
            position: absolute;
            top: 10px;
            right: 14px;
        }

        #accordion .panel-title a.collapsed:before {
            content: "\f067";
            background: #ababab;
            border: 4px solid #626262;
        }

        #accordion .panel-title a:after,
        #accordion .panel-title a.collapsed:after {
            content: "";
            width: 17px;
            height: 7px;
            background: #fff;
            position: absolute;
            top: 22px;
            right: 0;
        }

        #accordion .panel-title a.collapsed:after {
            width: 19px;
            background: #ababab;
        }

        #accordion .panel-body {
            border-left: 3px solid #fe7725;
            border-top: none;
            background: #fff;
            font-size: 15px;
            color: #1c2336;
            line-height: 27px;
            position: relative;
        }

        #accordion .panel-body:before {
            content: "";
            height: 3px;
            width: 50%;
            background: #fe7725;
            position: absolute;
            bottom: 0;
            left: 0;
        }
    </style>
@endsection
@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="NIRF">
                <span>NIRF</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">

                    <div class="container" >
                        <div class="col-md-10">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFour">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#collapseFour" aria-expanded="false"
                                                aria-controls="collapseFour">
                                                NIRF 2023
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingFour">
                                        <div class="panel-body">
                                            <a href="{{ asset('data/NIRF/NIRF 2023.pdf ') }}">NIRF 2023</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFive">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#collapseFive" aria-expanded="false"
                                                aria-controls="collapseFive">
                                                NIRF 2022
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingFive">
                                        <div class="panel-body">
                                            <a href="{{ asset('data/NIRF/NIRF 2022.pdf') }}">NIRF 2022</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingSix">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#collapseSix" aria-expanded="false"
                                                aria-controls="collapseSix">
                                                NIRF 2021
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingSix">
                                        <div class="panel-body">
                                            <a href="{{ asset('data/NIRF/NIRF 2021.pdf ') }}">NIRF 2021</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingSeven">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#collapseSeven" aria-expanded="false"
                                                aria-controls="collapseSeven">
                                                NIRF 2020
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingSeven">
                                        <div class="panel-body">
                                            <a href="{{ asset('data/NIRF/NIRF 2020.pdf') }}">NIRF 2020</a>
                                        </div>
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
