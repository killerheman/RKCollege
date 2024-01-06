@extends('home.includes.layout', ['title' => 'About College'])

@section('content')
<div class="page-wrapper">

    <header class="page-heading clearfix">
        <div class="text-effect" data-content="About College">
            <span>Administration</span>
        </div>
        <!--//breadcrumbs-->
    </header>
    <div class="page-content">
        <div class="row page-row">
            <div class="container">
                <div class="col-md-8">
                    <div class="vertical-tab" role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab"
                                    data-toggle="tab">Centre Superintendent </a></li>
                            <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab"
                                    data-toggle="tab">Controller of Examination</a></li>
                            <li role="presentation"><a href="#Section3" aria-controls="profile" role="tab"
                                    data-toggle="tab">Prof. – In – Charge</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabs">
                            <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                                <h3>Centre Superintendent</h3><br>
                                <ul>
                                    <li>
                                        Prof. (Dr.) Phulo Paswan
                                    </li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section2">
                                <h3>Controller of Examination</h3><br>
                                <ul>
                                    <li>
                                        <h5>Prof. (Dr.) Ashok Kumar</h5>
                                    </li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section3">
                                <h3>Prof. – In – Charge</h3><br>
                                <ul>
                                    <li>
                                        Prof. (Dr.) Ashok Kumar
                                    </li>
                                    <li>
                                        Dr. Arvind Verma
                                    </li>
                                    <li>
                                        Dr. Arvind Kumar Singh Jha
                                    </li>
                                    <li>
                                        Sri Niraj Kumar
                                    </li>
                                    <li>
                                        Dr. Kumari Jyoti
                                    </li>
                                    <li>
                                        Md. Marghoob Alam
                                    </li>
                                    <li>
                                        Dr. Dhirendra Kumar Roy
                                    </li>
                                </ul>
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
