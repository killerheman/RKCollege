@extends('home.includes.layout', ['title' => 'News'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="Newspaper">
                <span>Newspaper</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">

                <table width="95%" align="center">
                    <tr>
                        <td>
                            <h1 class="heading-title pull-left">
                                <span
                                    id="ctl00_ContentPlaceHolder1_RptrNewsHeading_ctl00_lblNewsHeading">October,
                                    2022</span>
                            </h1>
                        </td>
                    </tr>
                    <tr>
                        <td>

                            <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                alt='Tender of Answer Sheet Printing and Supply'
                                href='#'>
                                <img class="img-responsive img-thumbnail"
                                    src='#'
                                    alt='Tender of Answer Sheet Printing and Supply' /></a>

                            <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                alt='Examination News' href='#'>
                                <img class="img-responsive img-thumbnail"
                                    src='#'
                                    alt='Examination News' /></a>

                        </td>
                    </tr>
                </table>

            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
