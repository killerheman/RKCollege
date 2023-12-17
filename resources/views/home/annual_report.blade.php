@extends('home.includes.layout', ['title' => 'Annual Report'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="Annual Report">
                <span>Annual Report</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                @include('home.sidebar.about', ['active' => 7])

                <article class="content-wrapper col-md-10 col-sm-8">
                    <h2 class="no-margin-top has-divider text-highlight">Annual Report</h2>
                    <ul class="custom-list-style">
                        <li><i class="fa fa-check"></i><a
                                href="#">2020 - 21</a></li>
                        <li><i class="fa fa-check"></i><a
                                href="#">2019 - 20</a></li>
                        <li><i class="fa fa-check"></i><a
                                href="#">2018 - 19</a></li>
                        <li><i class="fa fa-check"></i><a
                                href="#">2017 - 18</a></li>
                        <li><i class="fa fa-check"></i><a
                                href="#">2016 - 17</a></li>

                    </ul>
                </article>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
