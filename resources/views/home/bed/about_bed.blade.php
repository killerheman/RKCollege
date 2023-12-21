@extends('home.includes.layout', ['title' => 'About College'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="About College">
                <span>About College</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="vertical-tab" role="tabpanel">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Affidavit</a></li>
                                    <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">Recognition of B.Ed.</a></li>
                                    <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab">Bio-Matrics Attendance Report</a></li>
                                    <li role="presentation"><a href="#Section4" aria-controls="home" role="tab" data-toggle="tab">Routine of B.Ed.</a></li>
                                    <li role="presentation"><a href="#Section5" aria-controls="home" role="tab" data-toggle="tab">Affiliation of B.Ed.</a></li>
                                    <li role="presentation"><a href="#Section6" aria-controls="home" role="tab" data-toggle="tab">Managing Committee</a></li>
                                    <li role="presentation"><a href="#Section7" aria-controls="home" role="tab" data-toggle="tab">Student List</a></li>
                                    <li role="presentation"><a href="#Section8" aria-controls="home" role="tab" data-toggle="tab">Audit Report Annually</a></li>
                                    <li role="presentation"><a href="#Section9" aria-controls="home" role="tab" data-toggle="tab"> Letter for B.Ed. Course(Govt. of Bihar)</a></li>
                                    <li role="presentation"><a href="#Section10" aria-controls="home" role="tab" data-toggle="tab">Hyperlinks</a></li>
                                    <li role="presentation"><a href="#Section11" aria-controls="home" role="tab" data-toggle="tab">IQAC</a></li>
                                    <li role="presentation"><a href="#Section12" aria-controls="home" role="tab" data-toggle="tab">FDR</a></li>
                                    <li role="presentation"><a href="#Section13" aria-controls="home" role="tab" data-toggle="tab">Building Completion Certificate</a></li>
                                    <li role="presentation"><a href="#Section14" aria-controls="home" role="tab" data-toggle="tab">PAR-2018-19</a></li>
                                    <li role="presentation"><a href="#Section15" aria-controls="home" role="tab" data-toggle="tab">Pariksha Pe Charcha</a></li>
                                    <li role="presentation"><a href="#Section16" aria-controls="home" role="tab" data-toggle="tab">Faculty List Approved By Affiliating Body</a></li>
                                    <li role="presentation"><a href="#Section17" aria-controls="home" role="tab" data-toggle="tab">Vacancy</a></li>
                                    <li role="presentation"><a href="#Section18" aria-controls="home" role="tab" data-toggle="tab">B.Ed. Contact</a></li>
                                </ul>
                                {{-- <a href="{{ asset('recognition/recognition.pdf') }}" class="button" download><i class="fa fa-download"></i>Download Recognition</a> --}}

                                <!-- Tab panes -->
                                <div class="tab-content tabs">
                                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                                        <h3>Affidavit</h3>
                                        <a href="{{ asset('affidavit/affidavit.pdf') }}" class="button" download><i class="fa fa-download"></i>Download Affidavit</a>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Section2" style="border:none; overflow:hidden;">
                                        <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0" style="height:600px;">
                                            <h4 style="font-weight: 400">FIRST RECOGNITION LETTER BY NCTE</h4>
                                            <object data="{{ asset('recognition/recognition.pdf') }}" style="height:100%; width:100%;"></object>
                                          </div>
                                      
                                           <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0" style="height:600px;margin-top:50px;">
                                            <h4 style="font-weight: 400">SECOND RECOGNITION LETTER BY NCTE</h4>
                                            <object data="{{ asset('recognition/recognition2.pdf') }}" style="height:100%; width:100%;"></object>
                                          </div>
                                          <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0" style="height:600px;margin-top:50px;">
                                            <h4 style="font-weight: 400">THIRD RECOGNITION LETTER BY NCTE</h4>
                                            <object data="{{ asset('recognition/recognition3.pdf') }}" style="height:100%; width:100%;"></object>
                                          </div> 
                                         
                                        </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Section3">
                                        <h3>Bio-Matrics Attendance Report</h3>
                                      <p> <a href="{{ asset('biomatric/01.10.19-to-25.10.19-STUDENTS.xlsx')}}" class="button" download title="Download"><i class="fa fa-dot-circle-o"></i>TEACHING NON TEACHING 01.10.19 to 25.10</a></p> 
                                        
                                      <p> <a href="{{ asset('biomatric/01.10.19-to-25.10.19-STUDENTS.xlsx')}}" class="button" download title="Download"><i class="fa fa-dot-circle-o"></i>01.10.19 to 25.10.19 STUDENTS</a></p> 
                                      <p> <a href="{{ asset('biomatric/FACULTY-ATTENDANCE-02.09.19-TO-07.09.19.pdf')}}" class="button" download title="Download"><i class="fa fa-dot-circle-o"></i>FACULTIES ATTENDANCE REPORT </a></p> 
                                      <p> <a href="{{ asset('biomatric/NON-TEACHING-ATTENDANCE-02.09.19-TO-07.09.19.pdf')}}" class="button" download title="Download"><i class="fa fa-dot-circle-o"></i>NON-TEACHING ATTENDANCE REPORT</a></p> 
                                      <p> <a href="{{ asset('biomatric/STUDENTS-ATTENDENCE-2018-20-02.09.19-TO-07.09.19.pdf')}}" class="button" download title="Download"><i class="fa fa-dot-circle-o"></i>STUDENTS ATTENDANCE REPORT 2018-20</a></p> 
                                      <p> <a href="{{ asset('biomatric/STUDENTS-ATTENDENCE-2019-21-02.09.19-TO-07.09.19.pdf')}}" class="button" download title="Download"><i class="fa fa-dot-circle-o"></i>STUDENTS ATTENDANCE REPORT 2019-21</a></p> 
                                      
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Section4">
                                        <h3>Routine of B.Ed.</h3>
                                        <img src="{{ asset('routing/001.jpg') }}" alt="image" style="width:100%; height:100%; padding-bottom:10px;">
                                        <a href="{{ asset('routing/001.jpg') }}" class="button" download><i class="fa fa-download"></i>Routine of B.Ed. 1st</a><br>
                                        <img src="{{ asset('routing/002.jpg') }}" alt="image" style="width:100%; height:100%; padding-top:10px;">
                                        <a href="{{ asset('routing/002.jpg') }}" class="button" download><i class="fa fa-download"></i>Routine of B.Ed. 2nd</a>
                                    </div>

                                    <div role="tabpanel" class="tab-pane fade" id="Section5">
                                        <h3>Affiliation of B.Ed.</h3>
                                        <p>contents to be uploaded soon</p>
                                        {{-- <img src="{{ asset('managing-commitee/MANAGING-COMMITTEE.jpg') }}" alt="image" style="height: 100%; width:100%;"> --}}
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Section6">
                                        <h3>Managing Committee</h3>
                                        <img src="{{ asset('managing-commitee/MANAGING-COMMITTEE.jpg') }}" alt="image" style="height: 100%; width:100%;">
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Section7">
                                        <h3>Student List</h3>
                                        <p>contents to be uploaded soon</p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Section8">
                                        <h3>Audit Report Annually</h3>
                                        <p>contents to be uploaded soon</p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Section9">
                                        <h3>Letter for B.Ed. Course(Govt. of Bihar)</h3>
                                        <p>contents to be uploaded soon</p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Section10">
                                        <h3>Hyperlinks</h3>
                                        <p>contents to be uploaded soon</p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Section11">
                                        <h3>IQAC</h3>
                                        <p>contents to be uploaded soon</p>                                 
                                       </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Section12">
                                        <h3>FDR</h3>
                                        <p>contents to be uploaded soon</p>                                   
                                     </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Section13">
                                        <h3>Building Completion Certificate</h3>
                                        <p>contents to be uploaded soon</p> 
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Section14">
                                        <h3>PAR-2018-19</h3>
                                        <p>contents to be uploaded soon</p> 
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Section15">
                                        <h3>Pariksha Pe Charcha</h3>
                                        <p>contents to be uploaded soon</p> 
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Section16">
                                        <h3>Faculty List Approved By Affiliating Body</h3>
                                        <p>contents to be uploaded soon</p> 
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Section17">
                                        <h3>Vacancy</h3>
                                        <p>contents to be uploaded soon</p> 
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Section18">
                                        <h3>B.Ed. Contact</h3>
                                        <p>contents to be uploaded soon</p> 
                                    </div>
                                    
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