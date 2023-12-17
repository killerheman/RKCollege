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
                @include('home.sidebar.admission', ['active' => 5])

                <div class="content-wrapper col-md-10 col-sm-8">
                    <div class="page-row">
                        <h1 class="no-margin-top has-divider text-highlight">Seats Offered</h1>
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <p>
                                    <button type="button" id="btnCollege"
                                        class="btn btn-warning btn-block rounded">
                                        College Seats</button>
                                </p>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <p>
                                    <button type="button" id="btnLuaccet" class="btn btn-primary btn-block">
                                        Demo Seats -2022</button>
                                </p>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <p>
                                    <button type="button" id="btnLuacmat" class="btn btn-success btn-block">
                                        Demo Seats-2022</button>
                                </p>
                            </div>
                        </div>
                        <div class="panel panel-theme" id="pnlCollege">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <b>College Seats</b>
                                </h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>SNo
                                            </th>
                                            <th>Course
                                            </th>
                                            <th width="10%">Regular
                                            </th>
                                            <th width="10%">Self-Finance
                                            </th>
                                            <th width="10%">Total
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.
                                            </td>
                                            <td>B.A.
                                            </td>
                                            <td>320
                                            </td>
                                            <td>120
                                            </td>
                                            <td>440
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2.
                                            </td>
                                            <td>B.Com.
                                            </td>
                                            <td>220
                                            </td>
                                            <td>330
                                            </td>
                                            <td>550
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.
                                            </td>
                                            <td>B.Sc. (Biology Group)
                                            </td>
                                            <td>-
                                            </td>
                                            <td>120
                                            </td>
                                            <td>120
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4.
                                            </td>
                                            <td>B.Sc. (Mathematics Group)
                                            </td>
                                            <td>-
                                            </td>
                                            <td>300</td>
                                            <td>300</td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>B.B.A.
                                            </td>
                                            <td>-
                                            </td>
                                            <td>60
                                            </td>
                                            <td>60
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6.</td>
                                            <td>B.B.A.-MS
                                            </td>
                                            <td>-
                                            </td>
                                            <td>60
                                            </td>
                                            <td>60
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7.</td>
                                            <td>B.C.A.
                                            </td>
                                            <td>-
                                            </td>
                                            <td>60
                                            </td>
                                            <td>60
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8.</td>
                                            <td>B.Com.-Hons.
                                            </td>
                                            <td>-
                                            </td>
                                            <td>60
                                            </td>
                                            <td>60
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9.</td>
                                            <td>B.A.J.M.C.</td>
                                            <td>-</td>
                                            <td>60</td>
                                            <td>60</td>
                                        </tr>
                                        <tr>
                                            <td>10.
                                            </td>
                                            <td>B.Voc. (Banking &amp; Finance)
                                            </td>
                                            <td>-&nbsp;</td>
                                            <td>100</td>
                                            <td>100</td>
                                        </tr>
                                        <tr>
                                            <td>11.
                                            </td>
                                            <td>B.Voc. (Software Development &amp; e-Governance)
                                            </td>
                                            <td>-</td>
                                            <td>100</td>
                                            <td>100</td>
                                        </tr>
                                        <tr>
                                            <td>12.</td>
                                            <td>M.Com
                                            </td>
                                            <td>-
                                            </td>
                                            <td>80
                                            </td>
                                            <td>80
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>13.</td>
                                            <td>M.A./M.Sc. (Anthropology)
                                            </td>
                                            <td>-
                                            </td>
                                            <td>40
                                            </td>
                                            <td>40
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>14.</td>
                                            <td>M.A. (Economics)&nbsp;</td>
                                            <td>-</td>
                                            <td>60</td>
                                            <td>60</td>
                                        </tr>
                                        <tr>
                                            <td>15.</td>
                                            <td>M.A. (English)</td>
                                            <td>-</td>
                                            <td>60</td>
                                            <td>60</td>
                                        </tr>
                                        <tr>
                                            <td>16.</td>
                                            <td>M.A. (Geography)
                                            </td>
                                            <td>-
                                            </td>
                                            <td>60
                                            </td>
                                            <td>60
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>17.</td>
                                            <td>M.A. (Political Science)</td>
                                            <td>-</td>
                                            <td>60</td>
                                            <td>60</td>
                                        </tr>
                                        <tr>
                                            <td>18.</td>
                                            <td>M.A. (Psychology)
                                            </td>
                                            <td>-
                                            </td>
                                            <td>40
                                            </td>
                                            <td>40
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>19.</td>
                                            <td>M.Voc. (Banking, Stocks &amp; Insurance)
                                            </td>
                                            <td>-</td>
                                            <td>50</td>
                                            <td>50</td>
                                        </tr>
                                        <tr>
                                            <td>20.</td>
                                            <td>M.Voc. (Software &amp; e-Governance)
                                            </td>
                                            <td>-</td>
                                            <td>50</td>
                                            <td>50</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--//table-->
                            </div>
                            <!--//table-responsive-->
                        </div>
                        {{-- <div class="panel panel-theme" id="pnlLuacmat">
                            <!--//table-responsive-->
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <b>Seats under LUACMAT-2022</b>
                                </h3>
                            </div>
                            <div class="table-responsive">

                                <table class="table table-responsive table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">College Name</th>
                                            <th scope="col" align="center">BBA</th>
                                            <th scope="col" align="center">BBA-MS</th>
                                            <th scope="col" align="center">BBA-T</th>
                                            <th scope="col" align="center">BCA</th>
                                            <th scope="col" align="center">BCOM-H</th>
                                            <th scope="col" align="center">BAJMC</th>
                                            <th scope="col" align="center">B.VOC - B&amp;F</th>
                                            <th scope="col" align="center">B.VOC-SD&amp;EG</th>
                                            <th scope="col" align="center">TOTAL</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>College of Innovative Management & Science</td>
                                            <td align="center">120</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">60</td>
                                            <td align="center">60</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center" style="font-weight: 700">240</td>
                                        </tr>

                                        <tr>
                                            <td>Dayal Group of Institutions</td>
                                            <td align="center">60</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center" style="font-weight: 700">60</td>
                                        </tr>

                                        <tr>
                                            <td>Himalayan Institute of Technology & Management</td>
                                            <td align="center">60</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center" style="font-weight: 700">60</td>
                                        </tr>

                                        <tr>
                                            <td>Integral & Innovative Sustainable Education <br>College
                                                (IISE College)</td>
                                            <td align="center">60</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">60</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center" style="font-weight: 700">120</td>
                                        </tr>

                                        <tr>
                                            <td>Lucknow Public College of Professional Studies</td>
                                            <td align="center">60</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">60</td>
                                            <td align="center">60</td>
                                            <td align="center">60</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center" style="font-weight: 700">240</td>
                                        </tr>

                                        <tr>
                                            <td>Modern Girls College of Professional Studies</td>
                                            <td align="center">60</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">60</td>
                                            <td align="center">60</td>
                                            <td align="center">60</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center" style="font-weight: 700">240</td>
                                        </tr>

                                        <tr>
                                            <td>National P.G. College</td>
                                            <td align="center">60</td>
                                            <td align="center">60</td>
                                            <td align="center"></td>
                                            <td align="center">60</td>
                                            <td align="center">60</td>
                                            <td align="center">60</td>
                                            <td align="center">100</td>
                                            <td align="center">100</td>
                                            <td align="center" style="font-weight: 700">500</td>
                                        </tr>

                                        <tr>
                                            <td>S.M.T. Degree College</td>
                                            <td align="center">60</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center" style="font-weight: 700">60</td>
                                        </tr>

                                        <tr>
                                            <td>School of Management Sciences</td>
                                            <td align="center">120</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">60</td>
                                            <td align="center">60</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">50</td>
                                            <td align="center" style="font-weight: 700">290</td>
                                        </tr>

                                        <tr>
                                            <td>Sherwood College of Professional Management</td>
                                            <td align="center">60</td>
                                            <td align="center"></td>
                                            <td align="center">60</td>
                                            <td align="center">60</td>
                                            <td align="center">60</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center" style="font-weight: 700">240</td>
                                        </tr>

                                        <tr>
                                            <td>Shri Ramswaroop Memorial College of Management</td>
                                            <td align="center">120</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">120</td>
                                            <td align="center">60</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center" style="font-weight: 700">300</td>
                                        </tr>

                                        <tr>
                                            <td>Sri Sharda Institute of Professional Studies</td>
                                            <td align="center">60</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center" style="font-weight: 700">60</td>
                                        </tr>

                                        <tr>
                                            <td>Total</td>
                                            <td align="center">900</td>
                                            <td align="center">60</td>
                                            <td align="center">60</td>
                                            <td align="center">540</td>
                                            <td align="center">420</td>
                                            <td align="center">180</td>
                                            <td align="center">100</td>
                                            <td align="center">150</td>
                                            <td align="center" style="font-weight: 700">2410</td>
                                        </tr>

                                    </tbody>
                                </table>

                                <!--//table-->
                            </div>
                        </div>
                        <div class="panel panel-theme" id="pnlLuaccet">
                            <!--//table-responsive-->
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <b>Seats under LUACCET-2022</b>
                                </h3>
                            </div>
                            <div class="table-responsive">

                                <table class="table table-responsive table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">College Name</th>
                                            <th scope="col" align="left" class="col-md-2">B.Com</th>
                                            <th scope="col" align="left" class="col-md-2">B.Sc.
                                                (Mathematics)</th>
                                            <th scope="col" align="left" class="col-md-2">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>College of Innovative Management & Science</td>
                                            <td align="left">140</td>
                                            <td align="left"></td>
                                            <td align="left" style="font-weight: 700">140</td>
                                        </tr>

                                        <tr>
                                            <td>Dayal Group of Institutions</td>
                                            <td align="left">60</td>
                                            <td align="left"></td>
                                            <td align="left" style="font-weight: 700">60</td>
                                        </tr>

                                        <tr>
                                            <td>Lucknow Public College of Professional Studies</td>
                                            <td align="left">60</td>
                                            <td align="left">120</td>
                                            <td align="left" style="font-weight: 700">180</td>
                                        </tr>

                                        <tr>
                                            <td>Modern Girls College of Professional Studies</td>
                                            <td align="left">120</td>
                                            <td align="left"></td>
                                            <td align="left" style="font-weight: 700">120</td>
                                        </tr>

                                        <tr>
                                            <td>National P.G. College</td>
                                            <td align="left">550</td>
                                            <td align="left">300</td>
                                            <td align="left" style="font-weight: 700">850</td>
                                        </tr>

                                        <tr>
                                            <td>Sri Sharda Institute of Professional Studies</td>
                                            <td align="left">120</td>
                                            <td align="left"></td>
                                            <td align="left" style="font-weight: 700">120</td>
                                        </tr>

                                        <tr>
                                            <td>Total</td>
                                            <td align="left">1050</td>
                                            <td align="left">420</td>
                                            <td align="left" style="font-weight: 700">1470</td>
                                        </tr>

                                    </tbody>
                                </table>

                                <!--//table-->
                            </div>
                        </div> --}}
                    </div>
                    <!--//page-row-->
                    <!--//page-row-->
                </div>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
