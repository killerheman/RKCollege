@extends('home.includes.layout', ['title' => 'IQAC'])
@section('headerarea')
    <style>
        a:hover,
        a:focus {
            text-decoration: none;
            outline: none;
        }

        .tab {
            font-family: 'Nunito', sans-serif;
        }

        .tab .nav-tabs {
            background-color: transparent;
            border: none;
        }

        .tab .nav-tabs li a {
            color: #222;
            background: transparent;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 1px;
            text-align: center;
            text-transform: uppercase;
            padding: 15px 15px 10px;
            margin: 0;
            border: none;
            border-radius: 0;
            overflow: hidden;
            position: relative;
            z-index: 1;
            transition: all 0.3s ease 0s;
        }

        .tab .nav-tabs li:last-child a {
            margin-right: 0;
        }

        .tab .nav-tabs li a:hover,
        .tab .nav-tabs li.active a {
            color: #222;
            background: #fff;
            border: none;
        }

        .tab .nav-tabs li.active a {
            color: #800000;
        }

        .tab .nav-tabs li a:before,
        .tab .nav-tabs li a:after {
            content: "";
            background-color: #d1d1d1;
            height: 7px;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            transition: all 0.5s ease 0s;
        }

        .tab .nav-tabs li a:after {
            background-color: #800000;
            height: 100%;
            opacity: 0;
        }

        .tab .nav-tabs li.active a:before,
        .tab .nav-tabs li a:hover:before {
            height: 100%;
            opacity: 0;
        }

        .tab .nav-tabs li.active a:after,
        .tab .nav-tabs li a:hover:after {
            height: 7px;
            opacity: 1;
        }

        .tab .tab-content {
            color: #555;
            background: #fff;
            font-size: 15px;
            letter-spacing: 1px;
            line-height: 23px;
            padding: 20px;
        }

        .tab .tab-content h3 {
            color: #222;
            font-size: 22px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin: 0 0 7px 0;
        }

        @media only screen and (max-width: 479px) {
            .tab .nav-tabs li {
                width: 100%;
            }

            .tab .nav-tabs li a {
                margin: 0 0 10px;
            }

            .tab .tab-content h3 {
                font-size: 18px;
            }
        }

        #accordion .panel {
            border: none;
            background: transparent;
            box-shadow: none;
            border-radius: 0;
            padding-left: 40px;
            margin-bottom: 10px;
        }

        #accordion .panel-heading {
            padding: 0;
        }

        #accordion .panel-title a {
            display: block;
            padding: 15px;
            background: #fff;
            font-size: 15px;
            font-weight: bold;
            color: #800000;
            text-transform: uppercase;
            border: 2px solid #800000;
            border-left: none;
            border-radius: 0 8px 8px 0;
            box-shadow: none;
            position: relative;
            transition: all 0.3s ease 0s;
        }

        #accordion .panel-title a span {
            display: block;
            width: 40px;
            height: 110%;
            line-height: 70px;
            background: #800000;
            font-size: 16px;
            color: #fff;
            text-align: center;
            position: absolute;
            top: -2px;
            left: -40px;
        }

        #accordion .panel-title a span:before,
        #accordion .panel-title a span:after {
            content: "";
            border-top: 20px solid #fff;
            border-left: 20px solid transparent;
            border-right: 20px solid transparent;
            position: absolute;
            left: 0;
        }

        #accordion .panel-title a span:before {
            top: -1px;
        }

        #accordion .panel-title a span:after {
            border-top-color: #800000;
            bottom: -20px;
            z-index: 1;
        }

        #accordion .panel-body {
            font-size: 14px;
            color: #808080;
            line-height: 23px;
            border-top: none;
        }

        #accordion .panel-body p {
            margin-bottom: 0;
        }
    </style>
@endsection
@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="Criteria">
                <span>Criteria</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                @include('home.sidebar.iqac', ['active' => 2])

                <article class="content-wrapper col-md-10 col-sm-8">
                    <h3 class="title text-center">
                        Criteria 2020-21</h3>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="tab" role="tabpanel">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home"
                                            role="tab" data-toggle="tab">Criteria 1</a></li>
                                    <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab"
                                            data-toggle="tab">Criteria 2</a></li>
                                    <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab"
                                            data-toggle="tab">Criteria 3</a></li>
                                    <li role="presentation"><a href="#Section4" aria-controls="home" role="tab"
                                            data-toggle="tab">Criteria 4</a></li>
                                    <li role="presentation"><a href="#Section5" aria-controls="profile" role="tab"
                                            data-toggle="tab">Criteria 5</a></li>
                                    <li role="presentation"><a href="#Section6" aria-controls="messages" role="tab"
                                            data-toggle="tab">Criteria 6</a></li>
                                    <li role="presentation"><a href="#Section7" aria-controls="messages" role="tab"
                                            data-toggle="tab">Criteria 7</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content tabs">
                                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                                        <h3>Curricular Aspects</h3>
                                        <div class="row">
                                            @foreach ($criteria1 as $data)
                                                <div class="col-md-12">
                                                    <div class="panel-group" id="accordion" role="tablist"
                                                        aria-multiselectable="true">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading{{ $data->id }}">
                                                                <h4 class="panel-title">
                                                                    <a role="button" data-toggle="collapse"
                                                                        data-parent="#accordion" href="#collapse{{ $data->id }}"
                                                                        aria-expanded="true" aria-controls="collapse{{ $data->id }}">
                                                                        <span>{{ $loop->index+1 }}</span>
                                                                        {{ $data->name ?? '' }}
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse{{ $data->id }}" class="panel-collapse"
                                                                role="tabpanel" aria-labelledby="heading{{ $data->id }}">
                                                                <div class="panel-body">
                                                                    <a href="{{ asset($data->path ?? '') }}">View Data</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Section2">
                                        <h3>Teacher-Learning & Evaluation</h3>
                                        <div class="row">
                                            @foreach ($criteria2 as $data)
                                                <div class="col-md-12">
                                                    <div class="panel-group" id="accordion" role="tablist"
                                                        aria-multiselectable="true">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading{{ $data->id }}">
                                                                <h4 class="panel-title">
                                                                    <a role="button" data-toggle="collapse"
                                                                        data-parent="#accordion" href="#collapse{{ $data->id }}"
                                                                        aria-expanded="true" aria-controls="collapse{{ $data->id }}">
                                                                        <span>{{ $loop->index+1 }}</span>
                                                                        {{ $data->name ?? '' }}
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse{{ $data->id }}" class="panel-collapse"
                                                                role="tabpanel" aria-labelledby="heading{{ $data->id }}">
                                                                <div class="panel-body">
                                                                    <a href="{{ asset($data->path ?? '') }}">View Data</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Section3">
                                        <h3>Research, Innovations & Extension</h3>
                                        <div class="row">
                                            @foreach ($criteria3 as $data)
                                                <div class="col-md-12">
                                                    <div class="panel-group" id="accordion" role="tablist"
                                                        aria-multiselectable="true">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading{{ $data->id }}">
                                                                <h4 class="panel-title">
                                                                    <a role="button" data-toggle="collapse"
                                                                        data-parent="#accordion" href="#collapse{{ $data->id }}"
                                                                        aria-expanded="true" aria-controls="collapse{{ $data->id }}">
                                                                        <span>{{ $loop->index+1 }}</span>
                                                                        {{ $data->name ?? '' }}
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse{{ $data->id }}" class="panel-collapse "
                                                                role="tabpanel" aria-labelledby="heading{{ $data->id }}">
                                                                <div class="panel-body">
                                                                    <a href="{{ asset($data->path ?? '') }}">View Data</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Section4">
                                        <h3>Infrastructure & Learning Resources</h3>
                                        <div class="row">
                                            @foreach ($criteria4 as $data)
                                                <div class="col-md-12">
                                                    <div class="panel-group" id="accordion" role="tablist"
                                                        aria-multiselectable="true">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading{{ $data->id }}">
                                                                <h4 class="panel-title">
                                                                    <a role="button" data-toggle="collapse"
                                                                        data-parent="#accordion" href="#collapse{{ $data->id }}"
                                                                        aria-expanded="true" aria-controls="collapse{{ $data->id }}">
                                                                        <span>{{ $loop->index+1 }}</span>
                                                                        {{ $data->name ?? '' }}
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse{{ $data->id }}" class="panel-collapse collapse in"
                                                                role="tabpanel" aria-labelledby="heading{{ $data->id }}">
                                                                <div class="panel-body">
                                                                    <a href="{{ asset($data->path ?? '') }}">View Data</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Section5">
                                        <h3>Student Support & Progression</h3>
                                        <div class="row">
                                            @foreach ($criteria5 as $data)
                                                <div class="col-md-12">
                                                    <div class="panel-group" id="accordion" role="tablist"
                                                        aria-multiselectable="true">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading{{ $data->id }}">
                                                                <h4 class="panel-title">
                                                                    <a role="button" data-toggle="collapse"
                                                                        data-parent="#accordion" href="#collapse{{ $data->id }}"
                                                                        aria-expanded="true" aria-controls="collapse{{ $data->id }}">
                                                                        <span>{{ $loop->index+1 }}</span>
                                                                        {{ $data->name ?? '' }}
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse{{ $data->id }}" class="panel-collapse collapse in"
                                                                role="tabpanel" aria-labelledby="heading{{ $data->id }}">
                                                                <div class="panel-body">
                                                                    <a href="{{ asset($data->path ?? '') }}">View Data</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Section6">
                                        <h3>Governance, Leadership & Management</h3>
                                        <div class="row">
                                            @foreach ($criteria6 as $data)
                                                <div class="col-md-12">
                                                    <div class="panel-group" id="accordion" role="tablist"
                                                        aria-multiselectable="true">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading{{ $data->id }}">
                                                                <h4 class="panel-title">
                                                                    <a role="button" data-toggle="collapse"
                                                                        data-parent="#accordion" href="#collapse{{ $data->id }}"
                                                                        aria-expanded="true" aria-controls="collapse{{ $data->id }}">
                                                                        <span>{{ $loop->index+1 }}</span>
                                                                        {{ $data->name ?? '' }}
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse{{ $data->id }}" class="panel-collapse collapse in"
                                                                role="tabpanel" aria-labelledby="heading{{ $data->id }}">
                                                                <div class="panel-body">
                                                                    <a href="{{ asset($data->path ?? '') }}">View Data</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Section7">
                                        <h3>Institutional values of best practices</h3>
                                        <div class="row">
                                            @foreach ($criteria7 as $data)
                                                <div class="col-md-12">
                                                    <div class="panel-group" id="accordion" role="tablist"
                                                        aria-multiselectable="true">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading{{ $data->id }}">
                                                                <h4 class="panel-title">
                                                                    <a role="button" data-toggle="collapse"
                                                                        data-parent="#accordion" href="#collapse{{ $data->id }}"
                                                                        aria-expanded="true" aria-controls="collapse{{ $data->id }}">
                                                                        <span>{{ $loop->index+1 }}</span>
                                                                        {{ $data->name ?? '' }}
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse{{ $data->id }}" class="panel-collapse collapse in"
                                                                role="tabpanel" aria-labelledby="heading{{ $data->id }}">
                                                                <div class="panel-body">
                                                                    <a href="{{ asset($data->path ?? '') }}">View Data</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
