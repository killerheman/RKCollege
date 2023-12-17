@extends('home.includes.layout', ['title' => 'IQAC'])
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
            <div class="text-effect" data-content="IQAC">
                <span>IQAC</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                @include('home.sidebar.iqac', ['active' => 2])


                    <h3 class="title" >AQAR</h3><br/>
                    <div class="container" >
                        <div class="col-md-10">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" href="{{ route('criteria') }}">
                                                AQAR 2020-21
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            @isset($session)
                            @foreach ($session as $data)
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#collapse{{$loop->index + 1}}" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                AQAR {{$data->session}}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse{{$loop->index + 1}}" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <a href="{{url($data->upload)}}" target="_blank">{{$data->title}}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @endisset
                                {{-- <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                                AQAR 2018-19
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <a href="{{ asset('data/aqar/AQAR 2018-2019.pdf') }}">AQAR 2018-19</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFour">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#collapseFour" aria-expanded="false"
                                                aria-controls="collapseFour">
                                                AQAR 2017-18
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingFour">
                                        <div class="panel-body">
                                            <a href="{{ asset('data/aqar/AQAR 2017-2018.pdf ') }}">AQAR 2017-18</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFive">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#collapseFive" aria-expanded="false"
                                                aria-controls="collapseFive">
                                                AQAR 2016-17
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingFive">
                                        <div class="panel-body">
                                            <a href="{{ asset('data/aqar/AQAR 2016-2017.pdf') }}">AQAR 2016-17</a>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@section('scriptarea')
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
@endsection
@endsection
