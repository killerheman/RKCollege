@extends('home.includes.layout', ['title' => 'Central Library'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="Central Library">
                <span>Central Library</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                <article class="welcome col-md-8 col-sm-7">
                    <h3 class="title">Welcome to Central Library</h3>
                    <p><img class="img-responsive"
                            src="{{ asset('frontend/assets/images/library/library14.jpg') }}" alt="" style="height: 500px; width: 700px;" /></p>
                    <p>The college library, besides being a conventional storehouse of printed material, has
                        following segments</p>
                    <ul class="custom-list-style">
                        <li><i class="fa fa-star"></i>Conventional Section of Books, Journals and
                            Periodicals </li>
                        <li><i class="fa fa-star"></i>E-Research Section</li>
                        <li><i class="fa fa-star"></i>E-Library with the facility of accessing INFLIBNET and
                            a number of web resources through internet</li>
                        <li><i class="fa fa-star"></i>Audio Visual study material with facility to play CDs
                            and DVDs</li>
                        <li><i class="fa fa-star"></i>Research Section with Advanced Reference Books for
                            Teachers and PG Students</li>
                        <li><i class="fa fa-star"></i>Separate Airconditioned Reading Area for Students and
                            Teachers</li>
                        <li><i class="fa fa-star"></i>Section for students having answer copies of Toppers
                            and Question Papers of previous years</li>
                        <li><i class="fa fa-star"></i>Photocopying and Printout Section</li>
                        <li><i class="fa fa-star"></i>News Paper, Employment News and Competitive Study
                            Material </li>
                        <li><i class="fa fa-star"></i>Students Information Section</li>
                    </ul>
                    <div class="col-md-6">
                        <h3 class="has-divider text-highlight">Working Hours of the Library</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>On Working Days</td>
                                        <td>08 Hrs.</td>
                                    </tr>
                                    <tr>
                                        <td>Before Examination Days</td>
                                        <td>08 Hrs.</td>
                                    </tr>
                                    <tr>
                                        <td>During Examination Days</td>
                                        <td>10 Hrs.</td>
                                    </tr>
                                    <tr>
                                        <td>During Vacations</td>
                                        <td>04 Hrs.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--//table-->

                        </div>
                        <!--//table-responsive-->
                    </div>

                </article>
                <!--//page-content-->
                <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">
                    <section class="widget">
                        <h3 class="title">Library Holdings</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Print <br />(Books, back volumes and thesis)</td>
                                        <td>65000+</td>
                                    </tr>
                                    <tr>
                                        <td>Non Print (Microfiche, AV)</td>
                                        <td>350</td>
                                    </tr>
                                    <tr>
                                        <td>Special Collection </td>
                                        <td>40300</td>
                                    </tr>
                                    <tr>
                                        <td>References <br />(eg. Text book, Reference books, standards,
                                            patents)</td>
                                        <td>8000</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--//table-->
                        </div>
                    </section>
                    <!--//widget-->
                    <section class="widget">
                        <h3 class="title">Library</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Total area of the Library</td>
                                        <td>743.22 Sq.Mtr.</td>
                                    </tr>
                                    <tr>
                                        <td><span>Lounge area for browsing and relaxed reading</span></td>
                                        <td>500 Sq ft.</td>
                                    </tr>
                                    <tr>
                                        <td>Total Seating Capacity</td>
                                        <td>80</td>
                                    </tr>
                                    <tr>
                                        <td><span>Individual reading carrels</span></td>
                                        <td>52</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--//table-->
                        </div>
                    </section>
                </aside>
            </div>
            <!--//page-row-->

            <table>
                <tr>
                    <td>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                            title="Library"
                            href="{{ asset('frontend/assets/images/library/library1.jpg') }}">
                            <img class="img-responsive img-thumbnail"
                                src="{{ asset('frontend/assets/images/library/library1.jpg') }}"
                                alt="Library" />
                        </a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                            title="Library"
                            href="{{ asset('frontend/assets/images/library/library2.jpg') }}">
                            <img class="img-responsive img-thumbnail"
                                src="{{ asset('frontend/assets/images/library/library2.jpg') }}"
                                alt="Library" />
                        </a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                            title="Library"
                            href="{{ asset('frontend/assets/images/library/library3.jpg') }}">
                            <img class="img-responsive img-thumbnail"
                                src="{{ asset('frontend/assets/images/library/library3.jpg') }}"
                                alt="Library" />
                        </a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                            title="Library"
                            href="{{ asset('frontend/assets/images/library/library4.jpg') }}">
                            <img class="img-responsive img-thumbnail"
                                src="{{ asset('frontend/assets/images/library/library4.jpg') }}"
                                alt="Library" />
                        </a>

                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                            title="Library"
                            href="{{ asset('frontend/assets/images/library/library9.jpg') }}">
                            <img class="img-responsive img-thumbnail"
                                src="{{ asset('frontend/assets/images/library/library9.jpg') }}"
                                alt="Library" />
                        </a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                            title="Library"
                            href="{{ asset('frontend/assets/images/library/library10.jpg') }}">
                            <img class="img-responsive img-thumbnail"
                                src="{{ asset('frontend/assets/images/library/library10.jpg') }}"
                                alt="Library" />
                        </a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                            title="Library"
                            href="{{ asset('frontend/assets/images/library/library11.jpg') }}">
                            <img class="img-responsive img-thumbnail"
                                src="{{ asset('frontend/assets/images/library/library11.jpg') }}"
                                alt="Library" />
                        </a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                            title="Library"
                            href="{{ asset('frontend/assets/images/library/library12.jpg') }}">
                            <img class="img-responsive img-thumbnail"
                                src="{{ asset('frontend/assets/images/library/library12.jpg') }}"
                                alt="Library" />
                        </a>

                    </td>
                </tr>
            </table>
        </div>
        <!--//page-content-->
    </div>
@endsection
