@extends('home.includes.layout', ['title' => 'Naac'])

@section('content')
    <div class="page-wrapper">

        <div class="page-content">

                    <div class="vertical-tab mb-2" role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#Section1" aria-controls="Section1" role="tab" data-toggle="tab">Academic Calandar</a></li>
                            <li role="presentation" ><a href="#Section2" aria-controls="Section2" role="tab" data-toggle="tab">Student Election</a></li>
                            <li role="presentation" ><a href="#Section3" aria-controls="Section3" role="tab" data-toggle="tab">Certificate / Diploma Course</a></li>
                            <li role="presentation" ><a href="#Section4" aria-controls="Section4" role="tab" data-toggle="tab">Value Added Course</a></li>
                            <li role="presentation" ><a href="#Section5" aria-controls="Section5" role="tab" data-toggle="tab">Internship / Training </a></li>
                            <li role="presentation" ><a href="#Section6" aria-controls="Section6" role="tab" data-toggle="tab">Teachers With Phd.D.</a></li>
                            <li role="presentation" ><a href="#Section7" aria-controls="Section7" role="tab" data-toggle="tab">Other State Faculties</a></li>
                            <li role="presentation" ><a href="#Section8" aria-controls="Section8" role="tab" data-toggle="tab">Research</a></li>
                            <li role="presentation" ><a href="#Section9" aria-controls="Section9" role="tab" data-toggle="tab">Books / Publications</a></li>
                            <li role="presentation" ><a href="#Section10" aria-controls="Section10" role="tab" data-toggle="tab">ICT Class Rooms</a></li>
                            <li role="presentation" ><a href="#Section11" aria-controls="Section11" role="tab" data-toggle="tab">E-Pathshala</a></li>
                            <li role="presentation" ><a href="#Section12" aria-controls="Section12" role="tab" data-toggle="tab">E-Governance</a></li>
                            <li role="presentation" ><a href="#Section13" aria-controls="Section13" role="tab" data-toggle="tab">Library</a></li>
                            <li role="presentation" ><a href="#Section14" aria-controls="Section14" role="tab" data-toggle="tab">Internet/Wifi Facility</a></li>
                            <li role="presentation" ><a href="#Section15" aria-controls="Section15" role="tab" data-toggle="tab">Scholarship</a></li>
                            <li role="presentation" ><a href="#Section16" aria-controls="Section16" role="tab" data-toggle="tab">Strategy Development and Deployment</a></li>
                            <li role="presentation" ><a href="#Section17" aria-controls="Section17" role="tab" data-toggle="tab">Culture</a></li>
                        </ul>
                        <!-- Tab panes -->

                        <div class="tab-content tabs">
                            <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                                <h3>Academic Calandar</h3>
                                <ul>
                                    <li><a href="{{asset('uploads/uploads/2023/07/academic-calende.jpg')}}" target="_blank" rel="noopener"><span data-msg="view">Academic Calendar_2016-17</span></a></li>
                                    <li><a href="{{asset('uploads/uploads/2022/12/2018-21.jpg')}}" target="_blank" rel="noopener"><span data-msg="view">Academic Calendar_ 2018-21</span></a></li>
                                    <li><a href="{{asset('uploads/uploads/2022/12/2019-20.jpg')}}" target="_blank" rel="noopener"><span data-msg="view">Academic Calendar_ 2019-20</span></a></li>
                                    <li><a href="{{asset('uploads/uploads/2022/12/Academic-Calendar_-2020-21.pdf')}}" target="_blank" rel="noopener"><span data-msg="view">Academic Calendar_ 2020-21</span></a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2022/12/Academic-Calendar_-2020-21.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                    <li><a href="{{asset('uploads/uploads/2022/12/Academic-Calendar_-2021-22.pdf')}}" target="_blank" rel="noopener"><span data-msg="view">Academic Calendar_ 2021-22</span></a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2022/12/Academic-Calendar_-2021-22.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                    <li><a href="{{asset('uploads/uploads/2022/12/Academic-Calendar_-2022-23.pdf')}}" target="_blank" rel="noopener"><span data-msg="view">Academic Calendar_ 2022-23</span></a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2022/12/Academic-Calendar_-2022-23.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                    <li><a href="{{asset('uploads/uploads/2023/07/PG-ACADEMIC-CALENDER.pdf')}}" target="_blank" rel="noopener"><span data-msg="view">PG Academic Calendar</span></a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2023/07/PG-ACADEMIC-CALENDER.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                </ul>
                            </div>

                            <div role="tabpanel" class="tab-pane fade in " id="Section2">
                            </div>
                            <div role="tabpanel" class="tab-pane fade in " id="Section3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409004.pdf')}}" target="_blank" rel="noopener">17407409004</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409004.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409005.pdf')}}" target="_blank" rel="noopener">17407409005</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409005.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409006.pdf')}}" target="_blank" rel="noopener">17407409006</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409006.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409007.pdf')}}" target="_blank" rel="noopener">17407409007</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409007.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409008.pdf')}}" target="_blank" rel="noopener">17407409008</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409008.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409009.pdf')}}" target="_blank" rel="noopener">17407409009</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409009.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409010.pdf')}}" target="_blank" rel="noopener">17407409010</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409010.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409011.pdf')}}" target="_blank" rel="noopener">17407409011</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409011.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409012.pdf')}}" target="_blank" rel="noopener">17407409012</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409012.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409013.pdf')}}" target="_blank" rel="noopener">17407409013</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409013.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409014.pdf')}}" target="_blank" rel="noopener">17407409014</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409014.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409015.pdf')}}" target="_blank" rel="noopener">17407409015</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409015.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409016.pdf')}}" target="_blank" rel="noopener">17407409016</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409016.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409017.pdf')}}" target="_blank" rel="noopener">17407409017</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409017.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409018.pdf')}}" target="_blank" rel="noopener">17407409018</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409018.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409019.pdf')}}" target="_blank" rel="noopener">17407409019</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409019.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409020.pdf')}}" target="_blank" rel="noopener">17407409020</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409020.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409021.pdf')}}" target="_blank" rel="noopener">17407409021</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409021.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409022.pdf')}}" target="_blank" rel="noopener">17407409022</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409022.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409023.pdf')}}" target="_blank" rel="noopener">17407409023</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409023.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409024.pdf')}}" target="_blank" rel="noopener">17407409024</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409024.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409025.pdf')}}" target="_blank" rel="noopener">17407409025</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409025.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409026.pdf')}}" target="_blank" rel="noopener">17407409026</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409026.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409027.pdf')}}" target="_blank" rel="noopener">17407409027</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409027.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409028.pdf')}}" target="_blank" rel="noopener">17407409028</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409028.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409029.pdf')}}" target="_blank" rel="noopener">17407409029</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409029.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409030.pdf')}}" target="_blank" rel="noopener">17407409030</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409030.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409031.pdf')}}" target="_blank" rel="noopener">17407409031</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409031.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409032.pdf')}}" target="_blank" rel="noopener">17407409032</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409032.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409033.pdf')}}" target="_blank" rel="noopener">17407409033</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409033.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409034.pdf')}}" target="_blank" rel="noopener">17407409034</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409034.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409035.pdf')}}" target="_blank" rel="noopener">17407409035</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409035.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409036.pdf')}}" target="_blank" rel="noopener">17407409036</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409036.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409037.pdf')}}" target="_blank" rel="noopener">17407409037</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409037.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409038.pdf')}}" target="_blank" rel="noopener">17407409038</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409038.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409039.pdf')}}" target="_blank" rel="noopener">17407409039</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409039.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409040.pdf')}}" target="_blank" rel="noopener">17407409040</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409040.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409041.pdf')}}" target="_blank" rel="noopener">17407409041</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409041.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409042.pdf')}}" target="_blank" rel="noopener">17407409042</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409042.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409043.pdf')}}" target="_blank" rel="noopener">17407409043</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409043.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409044.pdf')}}" target="_blank" rel="noopener">17407409044</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409044.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            <li><a href="{{asset('uploads/uploads/2019/10/17407409045.pdf')}}" target="_blank" rel="noopener">17407409045</a><div class="sendToPdfFiller" data-url="{{asset('uploads/uploads/2019/10/17407409045.pdf')}}" style="position: static; width: 40px; display: inline-block; margin-left: 10px;" title="Open with pdfFiller"><img style="background: none" src="chrome-extension://gphandlahdpffmccakmbngmbjnjiiahp/img/icon-fill.png"></div></li>
                                            </ul>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in " id="Section4">

                                In pending 'https://lnmuacin.in/studentnotice/PG%20Subjects/Botany%20CBCS-min.pdf'
                            </div>
                            <div role="tabpanel" class="tab-pane fade in " id="Section5">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img class="aligncenter wp-image-1164 size-full" src="{{asset('uploads/uploads/2019/10/INTERNSHIP-1.jpg')}}" alt="" width="757" height="547" srcset="{{asset('uploads/uploads/2019/10/INTERNSHIP-1.jpg 757w')}}, {{asset('uploads/uploads/2019/10/INTERNSHIP-1-300x217.jpg 300w')}}, {{asset('uploads/uploads/2019/10/INTERNSHIP-1-750x542.jpg 750w')}}" sizes="(max-width: 757px) 25vw, 757px">
                                    </div>
                                    <div class="col-md-12">
                                        <img class="aligncenter wp-image-1165 size-full" src="{{asset('uploads/uploads/2019/10/INTERNSHIP-2.jpg')}}" alt="" width="949" height="701" srcset="{{asset('uploads/uploads/2019/10/INTERNSHIP-2.jpg 949w')}}, {{asset('uploads/uploads/2019/10/INTERNSHIP-2-300x222.jpg 300w')}}, {{asset('uploads/uploads/2019/10/INTERNSHIP-2-768x567.jpg 768w')}}, {{asset('uploads/uploads/2019/10/INTERNSHIP-2-750x554.jpg 750w')}}" sizes="(max-width: 949px) 25vw, 949px">
                                    </div>
                                    <div class="col-md-12">
                                        <img class="aligncenter wp-image-1166 size-full" src="{{asset('uploads/uploads/2019/10/INTERNSHIP-3.jpg')}}" alt="" width="835" height="625" srcset="{{asset('uploads/uploads/2019/10/INTERNSHIP-3.jpg 835w')}}, {{asset('uploads/uploads/2019/10/INTERNSHIP-3-300x225.jpg 300w')}}, {{asset('uploads/uploads/2019/10/INTERNSHIP-3-768x575.jpg 768w')}}, {{asset('uploads/uploads/2019/10/INTERNSHIP-3-750x561.jpg 750w')}}" sizes="(max-width: 835px) 25vw, 835px">
                                    </div>
                                    <div class="col-md-12">
                                        <img class="aligncenter wp-image-1168 size-full" src="{{asset('uploads/uploads/2019/10/INTERNSHIP-5.jpeg')}}" alt="" width="1047" height="713" srcset="{{asset('uploads/uploads/2019/10/INTERNSHIP-5.jpeg 1047w')}}, {{asset('uploads/uploads/2019/10/INTERNSHIP-5-300x204.jpeg 300w')}}, {{asset('uploads/uploads/2019/10/INTERNSHIP-5-768x523.jpeg 768w')}}, {{asset('uploads/uploads/2019/10/INTERNSHIP-5-1024x697.jpeg 1024w')}}, {{asset('uploads/uploads/2019/10/INTERNSHIP-5-750x511.jpeg 750w')}}" sizes="(max-width: 1047px) 25vw, 1047px">
                                    </div>
                                    <div class="col-md-12">
                                        <img class="aligncenter wp-image-1167 size-full" src="{{asset('uploads/uploads/2019/10/INTERNSHIP-4.jpg')}}" alt="" width="999" height="725" srcset="{{asset('uploads/uploads/2019/10/INTERNSHIP-4.jpg 999w')}}, {{asset('uploads/uploads/2019/10/INTERNSHIP-4-300x218.jpg 300w')}}, {{asset('uploads/uploads/2019/10/INTERNSHIP-4-768x557.jpg 768w')}}, {{asset('uploads/uploads/2019/10/INTERNSHIP-4-750x544.jpg 750w')}}" sizes="(max-width: 999px) 100vw, 999px">
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in " id="Section6">
                                <div class="row">

                                    <div class="gallery">
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._S.A.AFSAH_(1)e091.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._S.A.AFSAH_(1)e091.jpg') }}" alt="Dr. S A Afsah(1)" ></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/DR._BHARTI_001_(1)e091.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/DR._BHARTI_001_(1)e091.jpg') }}" alt="Dr. Bharti 0001 (1)" ></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._RAJ_KUMAR_SAH_(1)e091.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._RAJ_KUMAR_SAH_(1)e091.jpg') }}"   alt="Dr. Raj Kumar Sah (1)"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._BIDYANAND_THAKUR_(1)e091.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._BIDYANAND_THAKUR_(1)e091.jpg') }}"   alt="Dr. Bidyanand Thakur (1)"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._PRAKASH_NAYAK_(1)e091.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._PRAKASH_NAYAK_(1)e091.jpg') }}"   alt="Dr. Prakash Nayak (1)"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._BARKHA_AGRAWAL_(1)e091.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._BARKHA_AGRAWAL_(1)e091.jpg') }}"   alt="Dr. Barkha Agrawal (1)"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/DR._SUNIL_KUMAR_(1)e091.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/DR._SUNIL_KUMAR_(1)e091.jpg') }}"   alt="Dr.Sunil Kumar (1)"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._ASHOK_KUMAR_(1)e091.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._ASHOK_KUMAR_(1)e091.jpg') }}"   alt="Dr.Ashok Kumar (1)"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/DR._RAHUL_MANHAR_(1)e091.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/DR._RAHUL_MANHAR_(1)e091.jpg') }}"   alt="Dr. Rahul Manhar (1)"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/DR._AWADHESH_KUMAR_(1)e091.jpeg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/DR._AWADHESH_KUMAR_(1)e091.jpeg') }}"   alt="Dr. Awadhesh Kumar (1)"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/DR._SUDHIR_NARAYAN_(1)e091.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/DR._SUDHIR_NARAYAN_(1)e091.jpg') }}"   alt="Dr. Sudhir Narayan (1)"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._ARVIND_KUMAR_SINGH_JHA_(1)e091.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._ARVIND_KUMAR_SINGH_JHA_(1)e091.jpg') }}"   alt="Dr.Arvind Kumar Singh Jha (1)"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._SHRUTIDHARI_SINGH_(1)e091.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._SHRUTIDHARI_SINGH_(1)e091.jpg') }}"   alt="Dr. Shrutidhari Singh (1)"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/DR._RAM_NAGINA_RAJAK_(1)e091.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/DR._RAM_NAGINA_RAJAK_(1)e091.jpg') }}"   alt="Dr. Ram Nagina Rajak (1)"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._SHREENARAYAN_YADAV_(1)e091.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._SHREENARAYAN_YADAV_(1)e091.jpg') }}"   alt="Dr. Shreenarayan Yadav (1)"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._SHASHI_SHEKHAR_JHA_(1)e091.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._SHASHI_SHEKHAR_JHA_(1)e091.jpg') }}"   alt="Dr. Shashi Shekhar Jha (1)"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._RAMESHWAR_JHA_(1)e091.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._RAMESHWAR_JHA_(1)e091.jpg') }}"   alt="Dr. Rameshwar Jha(1)"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/DR._AWADHESH_KUMAR630a.jpeg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/DR._AWADHESH_KUMAR630a.jpeg') }}"   alt="Dr. Awadhesh Kumar"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._ASHOK_KUMAR630a.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._ASHOK_KUMAR630a.jpg') }}"   alt="Dr. Ashok Kumar"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._JAYANTI_KANT_JHA630a.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._JAYANTI_KANT_JHA630a.jpg') }}"   alt="Dr. Jayanti Kant Jha"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._BIDYANAND_THAKUR630a.jpgpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._BIDYANAND_THAKUR630a.jpg') }}"   alt="Dr. Bidyanand Thakur"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/DR._PRAGATI_KUMARI630a.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/DR._PRAGATI_KUMARI630a.jpg') }}"   alt="Dr. Pragati Kumari"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._BARKHA_AGRAWAL630a.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._BARKHA_AGRAWAL630a.jpg') }}"   alt="Dr. Barkha Agrawal"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._BINOD_KUMAR_JHA630a.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._BINOD_KUMAR_JHA630a.jpg') }}"   alt="Dr. Binod Kumar Jha"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._BIGHNESH_CHANDRA_JHA630a.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._BIGHNESH_CHANDRA_JHA630a.jpg') }}"   alt="Dr. Bighnesh Chandra Jha"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._ARVIND_KUMAR_SINGH_JHA630a.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._ARVIND_KUMAR_SINGH_JHA630a.jpg') }}"   alt="Dr. Arvind Kumar Singh Jha"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/DR._GOPAL_KUMAR630a.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/DR._GOPAL_KUMAR630a.jpg') }}"   alt="Dr. Gopal Kumar"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/DR._BHARTI_001630a.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/DR._BHARTI_001630a.jpg') }}"   alt="Dr. Bharti 001"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/DR._LAV_KUSH_SHARMA630a.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/DR._LAV_KUSH_SHARMA630a.jpg') }}"   alt="Dr. Lav Kush Sharma"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._RAJ_KUMAR_SAH630a.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._RAJ_KUMAR_SAH630a.jpg') }}"   alt="Dr. Raj Kumar Sah"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._MANOJ_KUMAR_SAH630a.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._MANOJ_KUMAR_SAH630a.jpg') }}"   alt="Dr. Manoj Kumar Sah"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._SHRUTIDHARI_SINGH630a.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._SHRUTIDHARI_SINGH630a.jpg') }}"   alt="Dr. Shrutidhari Singh"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/DR._M.K.CHANDAN630a.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/DR._M.K.CHANDAN630a.jpg') }}"   alt="Dr.M.K. Chandan"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/DR._SUDHIR_NARAYAN630a.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/DR._SUDHIR_NARAYAN630a.jpg') }}"   alt="Dr. Sudhir Narayan"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._MUNESHWAR_YADAV630a.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._MUNESHWAR_YADAV630a.jpg') }}"   alt="Dr. Muneshwar Yadav"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._PRAKASH_NAYAK630a.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._PRAKASH_NAYAK630a.jpg') }}"   alt="Dr. Prakash Nayak"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/DR._SUNIL_KUMAR630a.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/DR._SUNIL_KUMAR630a.jpg') }}"   alt="Dr. Sunil Kumar"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/DR._RAHUL_MANHAR630a.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/DR._RAHUL_MANHAR630a.jpg') }}"   alt="Dr. Rahul Manhar"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/DR._RAM_NAGINA_RAJAK630a.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/DR._RAM_NAGINA_RAJAK630a.jpg') }}"   alt="Dr. Ram Nagina Rajak"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._RAMESHWAR_JHA630a.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._RAMESHWAR_JHA630a.jpg') }}"   alt="Dr. Rameshwar Jha"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._S.A.AFSAH630a.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._S.A.AFSAH630a.jpg') }}"   alt="Dr. S.A.Afsah"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._SHASHI_SHEKHAR_JHA630a.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._SHASHI_SHEKHAR_JHA630a.jpg') }}"   alt="Dr. Shashi Shekhar Jha"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._SHREENARAYAN_YADAV630a.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._SHREENARAYAN_YADAV630a.jpg') }}"   alt="Dr.Shreenarayan Yadav"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/DR._SHIV_KUMAR_YADAV630a.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/DR._SHIV_KUMAR_YADAV630a.jpg') }}"   alt="Dr. Shiv Kumar Yadav"></a>
                                        <a href="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._BIGHNESH_CHANDRA_JHA_(1)630a.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/teacher/Dr._BIGHNESH_CHANDRA_JHA_(1)630a.jpg') }}"   alt="Dr. Bighnesh Chandra Jha (1)"></a>

                                      </div>

                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in " id="Section7">

                            </div>
                            <div role="tabpanel" class="tab-pane fade in " id="Section8">
                                <div id="pdf-container" style="height:100%;width:100%">
                                    <iframe id="pdf-viewer" style="border:1px solid #ccc;" src="{{ asset('uploads/uploads/2017/03/report.pdf')}}" width="100%" height="600px"></iframe>
                                    <div id="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: transparent;"></div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in " id="Section9">
                                <div class="row">

                                    <div class="gallery">
                                    @foreach ($imageFileNames as $k=>$img)
                                    <a href="{{ asset('uploads/uploads/photo-gallery/book/'.$img) }}"><img src="{{ asset('uploads/uploads/photo-gallery/book/'.$img) }}" alt="{{ $img }}" ></a>
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in " id="Section10">
                                <div class="row">
                                    <div class="gallery">
                                    @foreach ($imageictFileNames as $k=>$img)
                                    <a href="{{ asset('uploads/uploads/photo-gallery/ictroom/'.$img) }}"><img src="{{ asset('uploads/uploads/photo-gallery/ictroom/'.$img) }}" alt="{{ $img }}" ></a>
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in " id="Section11">
                                <h3>Nothing To Show</h3>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in " id="Section12">
                                <h3>Nothing To Show</h3>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in " id="Section13">
                                <h3>Nothing to show</h3>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in " id="Section14">
                                <div class="">
                                    <p>Dear Sir,</p>
                                    <p>&nbsp;</p>
                                    <ul>
                                    <li>Campus Wi-Fi Project is one of the dream project of Hon’ble CM Bihar under&nbsp;&nbsp;&nbsp;<strong>Viksit Bihar KeSaatNischay.</strong></li>
                                    <li>L&amp;T SWC was awarded the contract for Planning, engineering, Supply, installation, commissioning, Operation and Maintenance of Wi-Fi hotspots in&nbsp;Campus Wi-Fi Project of Hon’ble CM of Bihar under “Viksit Bihar KeSaatNischay”&nbsp;and associated equipment on turnkey basis and maintain the systems for 5 years.</li>
                                    <li>The&nbsp;Campus Wi-Fi Project&nbsp;executed by Smart World and Communications Division of Larsen &amp; Toubro Limited, aim is to provide internet facility using free Wi-Fi network in the campuses of Gov. Universities and it’s Constituent Colleges of the State of Bihar. The scope included 328&nbsp;colleges/University&nbsp;in the state of Bihar &amp;&nbsp;Implemented in 321 colleges/University distributed in 37 Dist. Of Bihar till now.</li>
                                    <li>Campus Wi-Fi Project is one of the dream project of Hon’ble CM of Bihar under&nbsp;&nbsp; Viksit Bihar KeSaatNischay.&nbsp;Project has been awarded to M/S Larsen &amp;Toubro Construction -SWC BU by BSEDC dated 16th Aug’16. Dept. of IT, GoB has launched this ambitious project. The aim is to provide internet facility using free Wi-Fi network in the campuses of Gov. Universities and it’s Constituent Colleges of the State of Bihar to give&nbsp;impulse to the Digital India project &amp; to facilitate &amp; encourage students about “ Digital India Initiative “ &amp; Online Education System in India. This will provide free Wi-Fi facility to help youths to move ahead in life and to become digital smart.</li>
                                    <li>The objective of this exercise is to provide Campus wide Wi-Fi so that the students, faculty and administrative staff of the university can access NKN and thus get connected to the internal resources such as MOOCs courses, NDL and Internet.</li>
                                    <li>Campus&nbsp; Wi-Fi Project declared Go live wef 1st Oct’17.</li>
                                    </ul>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>The Backhaul Bandwidth of R.K. College, Madhubani is 10 MBPS provided by M/S Airtel. The total number of hotspot available in the college is 32 consisting of 28 Indoor Access Point &amp; 4 Outdoor Access Point.</p>
                                    <p>Operation &amp; Maintenance activity is maintained by M/S L&amp;T Construction-SWC BU. For the mentioned purpose Mr. Suraj Kumar has been deployed in the college. Mr. Suraj Kumar is working as a Roaming Engineer in L&amp;T Construction &amp; looking after for the mentioned task since last 4 Years.</p>
                                    <div role="tabpanel" class="tab-pane fade in " id="Section8">
                                        <div id="pdf-container" style="height:100%;width:100%">
                                            <iframe id="pdf-viewer" style="border:1px solid #ccc;" src="{{ asset('uploads/uploads/2023/07/WI-FI.pdf')}}" width="100%" height="600px"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in " id="Section15">
                                <div class="gallery">
                                    <a href="{{ asset('uploads/uploads/2019/10/2-001.jpg') }}"><img src="{{ asset('uploads/uploads/2019/10/2-001.jpg') }}" alt="" ></a>
                                    <a href="{{ asset('uploads/uploads/2019/10/3-001.jpg') }}"><img src="{{ asset('uploads/uploads/2019/10/3-001.jpg') }}" alt="" ></a>
                                    <a href="{{ asset('uploads/uploads/2019/10/4-001.jpg') }}"><img src="{{ asset('uploads/uploads/2019/10/4-001.jpg') }}" alt="" ></a>
                                    <a href="{{ asset('uploads/uploads/2019/10/5-001.jpg') }}"><img src="{{ asset('uploads/uploads/2019/10/5-001.jpg') }}" alt="" ></a>
                                    <a href="{{ asset('uploads/uploads/2019/10/6-001.jpg') }}"><img src="{{ asset('uploads/uploads/2019/10/6-001.jpg') }}" alt="" ></a>
                                    <a href="{{ asset('uploads/uploads/2019/10/1-001.jpg') }}"><img src="{{ asset('uploads/uploads/2019/10/1-001.jpg') }}" alt="" ></a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in " id="Section16">
                                <div id="pdf-container" style="height:100%;width:100%">
                                    <iframe id="pdf-viewer" style="border:1px solid #ccc;" src="{{ asset('uploads/uploads/2023/07/Strategy-Development-and-Deployment.pdf')}}" width="100%" height="600px"></iframe>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in " id="Section17">
                                <div class="row">
                                    <div class="gallery">
                                    @foreach ($imagesptFileNames as $k=>$img)
                                    <a href="{{ asset('uploads/uploads/photo-gallery/sports/'.$img) }}"><img src="{{ asset('uploads/uploads/photo-gallery/sports/'.$img) }}" alt="{{ $img }}" ></a>
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in " id="Section18">
                            </div>
                        </div>
                    </div>
        </div>
    </div>
@endsection
@section('scriptarea')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script>
$(document).ready(function() {
  // add all to same gallery
  $(".gallery a").attr("data-fancybox","mygallery");
  // assign captions and title from alt-attributes of images:
  $(".gallery a").each(function(){
    $(this).attr("data-caption", $(this).find("img").attr("alt"));
    $(this).attr("title", $(this).find("img").attr("alt"));
  });
  // start fancybox:
  $(".gallery a").fancybox();
  });
  </script>
@endsection
@section('scriptarea')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const overlay = document.getElementById('overlay');
        overlay.addEventListener('wheel', function(e) {
            e.stopPropagation();
        });
    });
</script>
@endsection
