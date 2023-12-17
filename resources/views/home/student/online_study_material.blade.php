@extends('home.includes.layout', ['title' => 'Online Study Material'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="About College">
                <span>Downloads</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                @include('home.sidebar.download', ['active' => 2])

                <article class="content-wrapper col-md-10 col-sm-8">


                    <div class="page-row">
                        <h3>CBCS Study Material</h3>
                        <div class="row">
                            <ul class="custom-list-style">
                                <li><i class="fa fa-star"></i><a target="_blank"
                                        href="https://drive.google.com/drive/folders/17Vk-xU8U38Gh_z6hfqGatz5efhhje7eM?usp=sharing">FOREIGN
                                        LANGUAGE : FRENCH</a></li>
                                <li><i class="fa fa-star"></i><a target="_blank"
                                        href="https://drive.google.com/drive/folders/1MDMpY0KVyEtVDvYfhZk5ANEPs4xLoC_U?usp=sharing">GEOGRAPHY
                                        OF UTTAR PRADESH</a></li>
                                <li><i class="fa fa-star"></i><a target="_blank"
                                        href="https://drive.google.com/drive/folders/1ZLHRrO-cEBV3BbUocTWicVHZihTAtrGn?usp=sharing">INVESTMENT
                                        MANAGEMENT</a></li>
                                <li><i class="fa fa-star"></i><a target="_blank"
                                        href="https://drive.google.com/drive/folders/1GV-Oac-FTxIks_yk-d8_gdbSRhqLFrqn?usp=sharing">SOCIAL
                                        CHANGE AND SOCIAL DYNAMICS</a></li>
                                <li><i class="fa fa-star"></i><a target="_blank"
                                        href="https://drive.google.com/drive/folders/1rJ4mGqP9tozbNn_SRgL3uvmWTBPvKyBT?usp=sharing">YOGA,
                                        MEDITATION & HEALTH</a></li>
                            </ul>
                            <br /><br /><br />
                        </div>
                        <div class="row">
                            <ul class="custom-list-style">
                                <li><i class="fa fa-star"></i><a target="_blank"
                                        href="https://1drv.ms/f/s!AiceEZN7SajLb-_rUR0eVfk_o1c">Department of
                                        Commerce</a></li>
                                <li><i class="fa fa-star"></i><a target="_blank"
                                        href="https://drive.google.com/open?id=10hLAQBUbA4Ea3Il1ysX3AhZAo-FmlVTJ">Department
                                        of Economics</a></li>
                                <li><i class="fa fa-star"></i><a target="_blank"
                                        href="https://drive.google.com/open?id=15wa_npxKXgyWCxdMs03Pq3A7uh468gbb">Department
                                        of DDUKK-Banking & Finance</a></li>
                                <li><i class="fa fa-star"></i><a target="_blank"
                                        href="https://drive.google.com/drive/folders/0B0UVNwOWSof3fjl0ZFg0WmNiQTBpUmlRZjRxWUJFQTNETnhxeDRidklDTEs3aUUyQ1Z3cWc?usp=sharing">Department
                                        of DDUKK-Software Development & E-Governance</a></li>
                            </ul>
                        </div>
                        <h3>More e-Learning Contents</h3>
                        <div class="row">
                            <ul class="custom-list-style">
                                <li><i class="fa fa-star"></i><a target="_blank"
                                        href="https://swayam.gov.in/">SWAYAM</a></li>
                                <li><i class="fa fa-star"></i><a target="_blank"
                                        href="https://diksha.gov.in/">Diksha</a></li>
                                <li><i class="fa fa-star"></i><a target="_blank"
                                        href="http://epathshala.nic.in/">e-Pathshala</a></li>
                                <li><i class="fa fa-star"></i><a target="_blank"
                                        href="https://epgp.inflibnet.ac.in//">e-PG Pathshala</a></li>
                                <li><i class="fa fa-star"></i><a target="_blank"
                                        href="https://ndl.iitkgp.ac.in/">National Digital Library</a></li>
                            </ul>
                        </div>
                        <p></p>
                        <p style="Color:Red"><b>Disclaimer:</b>The e-content has been prepared to facilitate
                            the teaching-learning process. No originality is being claimed.</p>
                    </div>
                </article>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
