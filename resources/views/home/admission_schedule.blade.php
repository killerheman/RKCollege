@extends('home.includes.layout', ['title' => 'Admission'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="Admission">
                <span>Admission</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                @include('home.sidebar.admission', ['active' => 2])

                {{-- <div class="content-wrapper col-md-10 col-sm-8">
                    <div class="page-row">
                        <h1 class="no-margin-top has-divider text-highlight">Admission Schedule</h1>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col" class="col-sm-9">Activity</th>
                                    <th scope="col" class="col-sm-3">Date</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>Start date for Online Application form <br> (B.A., B.Sc., B.Com.,
                                        M.A., M.Sc.,M.Com.)</td>
                                    <td>11 Apr 2022</td>
                                </tr>

                                <tr>
                                    <td>Start date for Online Application form (Professional Courses)** <br>
                                        (BBA, BBA(MS), BCA, BBA(Tourism), BAJMC, BCOM(Hons.), B.Voc., M.Voc.
                                    </td>
                                    <td>11 Apr 2022</td>
                                </tr>

                                <tr>
                                    <td>Last date for Submission of Online Form<br> (B.A., B.Sc., B.Com. )
                                        <b>With late fees ₹ 500.00</b></td>
                                    <td>18 Aug 2022</td>
                                </tr>

                                <tr>
                                    <td>Last date for Submission of Online Form<br> (BBA, BBA(MS), BCA,
                                        BBA(Tourism), BAJMC, BCOM(Hons.), B.Voc. <b>With late fees ₹
                                            500.00</b></td>
                                    <td>18 Aug 2022</td>
                                </tr>

                                <tr>
                                    <td>Last date for Submission of Online Form (Post Graduation Course)
                                        <br> <b>M.A.</b>(Anthropology, Economics, English, Geography,
                                        Political Science, Psychology), <b>M.Sc.</b> (Anthropology),
                                        <b>M.Com., M.Voc. </b>(Banking Stock & Insurance, Software &
                                        e-Governance)</td>
                                    <td>31 Aug 2022</td>
                                </tr>

                            </tbody>
                        </table>



                        <!--//table-->
                        <h2 class="no-margin-top">Entrance Test Dates (Tentative)</h2>
                        <div class="alert alert-danger">
                            Admit Card will be issued before the entrance examination. Please keep visiting
                            the website for further information.
                        </div>

                        <table class="table table-responsive table-striped">
                            <thead>
                                <tr>
                                    <th scope="col" class="col-md-8">Course </th>
                                    <th scope="col" class="col-md-2">Date </th>
                                    <th scope="col" class="col-md-2">Time </th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>B.C.A., B.COM.-HONORS, B.VOC. (SOFTWARE DEVELOPMENT & E-GOVERNANCE)
                                    </td>
                                    <td>22 Aug 2022</td>
                                    <td>11:00 AM</td>
                                </tr>

                                <tr>
                                    <td>B.A.J.M.C., B.B.A., B.B.A.-MS, B.B.A.-TOURISM, B.VOC. (BANKING &
                                        FINANCE)</td>
                                    <td>22 Aug 2022</td>
                                    <td>02:00 PM</td>
                                </tr>

                                <tr>
                                    <td>B.COM.</td>
                                    <td>23 Aug 2022</td>
                                    <td>11:00 AM</td>
                                </tr>

                                <tr>
                                    <td>B.SC. (BIOLOGY GROUP)</td>
                                    <td>23 Aug 2022</td>
                                    <td>02:00 PM</td>
                                </tr>

                                <tr>
                                    <td>B.A.</td>
                                    <td>25 Aug 2022</td>
                                    <td>11:00 AM</td>
                                </tr>

                                <tr>
                                    <td>B.SC. (MATHEMATICS GROUP)</td>
                                    <td>25 Aug 2022</td>
                                    <td>02:00 PM</td>
                                </tr>

                            </tbody>
                        </table>

                        <p>
                            <strong>Note:</strong>
                        </p>
                        <ul>
                            <li>Admission to undergraduate courses will be based on College Admission Test
                                and the
                                merit list for PG Courses M.Com., M.A./M.Sc. will be prepared on the basis
                                of Marks
                                obtained in High School, Intermediate and Graduation. Minimum 50% marks in
                                aggregate
                                at graduation level </li>
                            <li>** Admission through LUACMAT -
                                2022</li>
                        </ul>
                    </div>
                    <!--//page-row-->
                    <!--//page-row-->
                </div> --}}
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
