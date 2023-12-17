@extends('home.includes.layout', ['title' => 'Regulation'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="Regulation">
                <span>Regulation</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                <div class="privacy-wrapper col-md-8 col-sm-7">
                    <div class="page-row">
                        <ol>
                            <li>
                                <a href="{{ asset('data/Regulation/CBCS-Ordinance & Regulation for PG Degree Course_Commerce.pdf') }}">
                                    CBCS-Ordinance & Regulation for PG Degree Course_Commerce
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('data/Regulation/CBCS-Ordinance & Regulation for PG Degree Course_Social Science12.pdf') }}">
                                    CBCS-Ordinance & Regulation for PG Degree Course_Social Science
                                </a>
                            </li>

                        </ol>
                    </div>
                </div>
                <!--//privacy-wrapper-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
