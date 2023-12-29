@extends('home.includes.layout', ['title' => 'About College'])

@section('content')
<style>
    
    details {
  margin: 5px;
  font-size: 18px;
}
details > * {
  padding: .75rem;
}
summary {
  border-radius: 5px;
  font-size: 20px;
  font-family: sans-serif;
  font-weight: bold;
  color: #fff;
  background: maroon;
  cursor: pointer;
  position: relative;
 
}
summary::marker {
  content: "";
}
summary::before {
  content:"";
  position:absolute;
  inset: .75rem;
  left: auto;
  aspect-ratio: 1;
  background: 
   conic-gradient(from 90deg at 33% 33%, #0000 90deg, #fff 0) 
    100% 100%/60% 60%;
  clip-path: inset(1px);
}
details[open] summary::before {
  background: linear-gradient(#fff 0 0) 50%/100% 25% no-repeat;
}
details[open] summary {
  border-radius: 5px 5px 0 0;
}
details > div {
  background: #ddd;
  border-radius: 0 0 5px 5px;
  transition: max-height 0.3s ease-in-out;
}
</style>
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="About College">
                <span>B.Ed. College</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                <div class="container">
                    {{-- <div class="row"> --}}
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
                                    {{-- <li role="presentation"><a href="#Section10" aria-controls="home" role="tab" data-toggle="tab">Hyperlinks</a></li> --}}
                                    <li role="presentation"><a href="#Section11" aria-controls="home" role="tab" data-toggle="tab">IQAC</a></li>
                                    <li role="presentation"><a href="#Section12" aria-controls="home" role="tab" data-toggle="tab">FDR</a></li>
                                    <li role="presentation"><a href="#Section13" aria-controls="home" role="tab" data-toggle="tab">Building Completion Certificate</a></li>
                                    <li role="presentation"><a href="#Section14" aria-controls="home" role="tab" data-toggle="tab">PAR-2018-19</a></li>
                                    <li role="presentation"><a href="#Section15" aria-controls="home" role="tab" data-toggle="tab">Pariksha Pe Charcha</a></li>
                                    <li role="presentation"><a href="#Section16" aria-controls="home" role="tab" data-toggle="tab">Faculty List Approved By Affiliating Body</a></li>
                                    <li role="presentation"><a href="#Section17" aria-controls="home" role="tab" data-toggle="tab">Vacancy</a></li>
                                    <li role="presentation"><a href="#Section18" aria-controls="home" role="tab" data-toggle="tab">B.Ed. Contact</a></li>
                                    <li role="presentation"><a href="#Section19" aria-controls="home" role="tab" data-toggle="tab">Download</a></li>
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

                                    <div role="tabpanel" class="tab-pane fade" style="overflow: hidden; height:600px; width:100%;" id="Section5">
                                        <h3>Affiliation of B.Ed.</h3>
                                        <object data="{{ asset('affiliation/AFFILIATION_LETTER_UNIVERSITY-min.pdf') }}" style="height:100%; width:100%;"></object>
                                     </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Section6">
                                        <h3>Managing Committee</h3>
                                        <img src="{{ asset('managing-commitee/MANAGING-COMMITTEE.jpg') }}" alt="image" style="height: 100%; width:100%;">
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Section7">
                                        <h3>Student List</h3>
                                        <div class="accordion">
                                            <details>
                                                <summary>2014-15</summary>
                                              <div>
                                                <a href="{{ asset('uploads/uploads/2017/04/B.Ed_.-STUDENT-LIST-BY-L.N.M.U.-2014-15.pdf') }}" class="button" download><i class="fa fa-download"></i> B.Ed. STUDENT LIST BY L.N.M.U. 2014-15</a>
                                              </div>
                                            </details>
                                              <details>
                                                <summary>2015-17</summary>
                                                <div>
                                                    <a href="{{ asset('uploads/uploads/2017/04/STUDENTS-LIST-1-2015-17.pdf') }}" class="button" download><i class="fa fa-download"></i> B.Ed. STUDENT LIST-1 BY L.N.M.U. 2015-17</a><br>
                                                    <a href="{{ asset('uploads/uploads/2017/04/STUDENTS-LIST-2-2015-17.pdf') }}" class="button" download><i class="fa fa-download"></i> B.Ed. STUDENT LIST-2 BY L.N.M.U. 2015-17</a><br>
                                                    <a href="{{ asset('uploads/uploads/2017/04/STUDENTS-LIST-3-2015-17.pdf') }}" class="button" download><i class="fa fa-download"></i> B.Ed. STUDENT LIST-3 BY L.N.M.U. 2015-17</a>
                                                   </div>
                                            
                                            </details>
                                              <details>
                                                <summary>2016-18</summary>
                                                <div>
                                                    <a href="{{ asset('uploads/uploads/2017/04/STUDENTS-LIST-1-2016-18.pdf') }}" class="button" download><i class="fa fa-download"></i> B.Ed. STUDENT LIST-1 BY L.N.M.U. 2016-18</a><br>
                                                    <a href="{{ asset('uploads/uploads/2017/04/STUDENTS-LIST-2-2016-18.pdf') }}" class="button" download><i class="fa fa-download"></i> B.Ed. STUDENT LIST-2 BY L.N.M.U. 2016-18</a><br>
                                                    <a href="{{ asset('uploads/uploads/2017/04/STUDENTS-LIST-3-2016-18.pdf') }}" class="button" download><i class="fa fa-download"></i> B.Ed. STUDENT LIST-3 BY L.N.M.U. 2016-18</a>
                                                </div>
                                            </details>
                                              <details>
                                                <summary>2017-19</summary>
                                                <div>
                                                    <a href="{{ asset('uploads/uploads/2018/03/2017-19.xlsx') }}" class="button" download><i class="fa fa-download"></i> B.Ed. STUDENT LIST-3 BY L.N.M.U. 2017-19</a>
                                                   </div>
                                            </details>
                                              <details>
                                                <summary>2018-20</summary>
                                                <div>
                                                   
                                                    <a href="{{ asset('uploads/uploads/2019/09/B.ED.-STUDENTS-DETAILS-2018-20.docx') }}" class="button" download><i class="fa fa-download"></i> B.Ed. STUDENT LIST-1 BY L.N.M.U. 2018-20</a>
                                                   </div>
                                            </details>
                                              <details>
                                                <summary>2019-21</summary>
                                                <div>
                                                   
                                                    <a href="{{ asset('uploads/uploads/2019/08/STUDENTS-DETAILS-B.Ed_.-2019-21.xlsx') }}" class="button" download><i class="fa fa-download"></i> B.Ed. STUDENT LIST OF SESSION - 2019-21</a>
                                                   </div>
                                            </details>
                                              <details>
                                                <summary>2020-22</summary>
                                                <div>
                                                    
                                                    <a href="{{ asset('uploads/uploads/2021/01/ADMITTED-2020-2022-converted.pdf') }}" class="button" download><i class="fa fa-download"></i> B.Ed. STUDENTS LIST OF SESSION 2020-22</a>
                                                   </div>
                                            </details>
                                              <details>
                                                <summary>2021-23</summary>
                                                <div>
                                                    
                                                    <a href="{{ asset('uploads/uploads/2021/11/B.ED.-ADMITTED-STUDENTS-LIST-OF-2021-23.pdf') }}" class="button" download><i class="fa fa-download"></i> B.Ed. STUDENT LIST OF SESSION - 2021-23</a>
                                                   </div>
                                            </details>
                                              <details>
                                                <summary>2022-24</summary>
                                                <div>
                                                    
                                                    <a href="{{ asset('uploads/uploads/2022/10/B.ED.-2022-24.pdf') }}" class="button" download><i class="fa fa-download"></i> B.Ed. STUDENT LIST OF SESSION - 2022-24</a>
                                                   </div>
                                                 </details>
                                              <details>
                                                <summary>2023-25</summary>
                                                <div>
                                                    
                                                    <a href="{{ asset('uploads/uploads/2023/07/admitted-2023-25.xlsx') }}" class="button" download><i class="fa fa-download"></i> B.Ed. STUDENT LIST OF SESSION - 2023-25</a>
                                                   </div>
                                                 </details>
                                            </div>
                                        
                                        </div>
                                
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="Section8">
                                        <h3>Audit Report Annually</h3>
                                        <div class="accordion">
                                            <details>
                                                <summary>2012-13</summary>
                                              <div>
                                                <a href="#" class="button" download><i class="fa fa-download"></i> List-1</a><br>
                                                <a href="#" class="button" download><i class="fa fa-download"></i> List-2</a><br>
                                                <a href="#" class="button" download><i class="fa fa-download"></i> List-3</a><br>
                                                <a href="#" class="button" download><i class="fa fa-download"></i> List-4</a>
                                              </div>
                                            </details>
                                              <details>
                                                <summary>2013-14</summary>
                                                <div>
                                                    
                                                <a href="#" class="button" download><i class="fa fa-download"></i> List-1</a><br>
                                                <a href="#" class="button" download><i class="fa fa-download"></i> List-2</a><br>
                                                <a href="#" class="button" download><i class="fa fa-download"></i> List-3</a><br>
                                                <a href="#" class="button" download><i class="fa fa-download"></i> List-4</a>
                                                </div>
                                            
                                            </details>
                                              <details>
                                                <summary>2014-15</summary>
                                                <div>
                                                   
                                                <a href="#" class="button" download><i class="fa fa-download"></i> List-1</a><br>
                                                <a href="#" class="button" download><i class="fa fa-download"></i> List-2</a><br>
                                                <a href="#" class="button" download><i class="fa fa-download"></i> List-3</a><br>
                                                <a href="#" class="button" download><i class="fa fa-download"></i> List-4</a>
                                                </div>
                                            </details>
                                              <details>
                                                <summary>2015-16</summary>
                                                <div>
                                                   
                                                <a href="#" class="button" download><i class="fa fa-download"></i> List-1</a><br>
                                                <a href="#" class="button" download><i class="fa fa-download"></i> List-2</a><br>
                                                <a href="#" class="button" download><i class="fa fa-download"></i> List-3</a><br>
                                                <a href="#" class="button" download><i class="fa fa-download"></i> List-4</a>
                                                </div>
                                            </details>
                                              <details>
                                                <summary>2016-17</summary>
                                                <div>
                                                    <a href="{{ asset('uploads/uploads/2019/10/2016-17-1.pdf') }}" class="button" download><i class="fa fa-download"></i> List-1</a>
                                                   </div>
                                            </details>
                                              <details>
                                                <summary>2017-18</summary>
                                                <div>
                                                   
                                                    <a href="{{ asset('uploads/uploads/2019/10/2017-18.pdf') }}" class="button" download><i class="fa fa-download"></i> List-1</a>
                                                   </div>
                                            </details>
                                              <details>
                                                <summary>2018-19</summary>
                                                <div>
                                                    
                                                    <a href="{{ asset('uploads/uploads/2019/10/2018-19.pdf') }}" class="button" download><i class="fa fa-download"></i> List-1</a>
                                                   </div>
                                            </details>
                                              <details>
                                                <summary>2019-20</summary>
                                                <div>
                                                    
                                                    <a href="{{ asset('uploads/uploads/2020/09/BedAuditrkc.pdf') }}" class="button" download><i class="fa fa-download"></i> List-1</a>
                                                   </div>
                                            </details>
                                              <details>
                                                <summary>2020-21</summary>
                                                <div>
                                                    
                                                    <a href="{{ asset('uploads/uploads/2023/02/AUDIT-REPORT-2020-21.pdf') }}" class="button" download><i class="fa fa-download"></i> List-1</a>
                                                   </div>
                                                 </details>
                                              <details>
                                                <summary>2021-22</summary>
                                                <div>
                                                    <a href="{{ asset('uploads/uploads/2023/02/AUDIT-REPORT-2021-2022.pdf') }}" class="button" download><i class="fa fa-download"></i> List-1</a>
                                                   </div>
                                                 </details>
                                            </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" style="overflow: hidden; height:600px; width:100%;" id="Section9">
                                        <h3>Letter for B.Ed. Course(Govt. of Bihar)</h3>
                                        <object data="{{ asset('uploads/uploads/2019/01/Letter-ilovepdf-compressed.pdf') }}" style="height:100%; width:100%;"></object>
                                     </div>
                                    {{-- <div role="tabpanel" class="tab-pane fade" id="Section10">
                                        <h3>Hyperlinks</h3>
                                        <p>contents to be uploaded soon</p>
                                    </div> --}}
                                    <div role="tabpanel" class="tab-pane fade" id="Section11">
                                        <h3>IQAC</h3>
                                        <p>contents to be uploaded soon</p>                                 
                                       </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Section12">
                                        <h3>FDR</h3>
                                        <img src="{{ asset('uploads/uploads/2023/04/FDR-2023-2024.jpg') }}" alt="image" style="height: 100%; width:100%;">                                  
                                     </div>
                                    <div role="tabpanel" class="tab-pane fade" style="overflow: hidden; height:600px; width:100%;" id="Section13">
                                        <h3>Building Completion Certificate</h3>
                                        <object data="{{ asset('uploads/uploads/2019/11/BUILDING-COMPLETION-PDF.pdf') }}" style="height:100%; width:100%;"></object>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" style="overflow: hidden; height:600px; width:100%;" id="Section14">
                                        <h3>PAR-2018-19</h3>
                                        <object data="{{ asset('uploads/uploads/2019/12/PAYMENT-OF-PAR-FEE.pdf') }}" style="height:100%; width:100%;"></object>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Section15">
                                        <h3>Pariksha Pe Charcha</h3>
                                        <div class="gallery">
                                            <a href="{{ asset('uploads/uploads/photo-gallery/PARIKSHA_PE_CHARCHA/19b96.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/PARIKSHA_PE_CHARCHA/19b96.jpg') }}" alt="Pariksha Pe Charcha"></a>
                                            <a href="{{ asset('uploads/uploads/photo-gallery/PARIKSHA_PE_CHARCHA/29b96.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/PARIKSHA_PE_CHARCHA/29b96.jpg') }}" alt="Pariksha Pe Charcha"></a>
                                            <a href="{{ asset('uploads/uploads/photo-gallery/PARIKSHA_PE_CHARCHA/39b96.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/PARIKSHA_PE_CHARCHA/39b96.jpg') }}" width="100" height="75" alt="Pariksha Pe Charcha"></a>
                                            <a href="{{ asset('uploads/uploads/photo-gallery/PARIKSHA_PE_CHARCHA/49b96.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/PARIKSHA_PE_CHARCHA/49b96.jpg') }}" title="Pariksha Pe Charcha"></a>
                                            <a href="{{ asset('uploads/uploads/photo-gallery/PARIKSHA_PE_CHARCHA/59b96.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/PARIKSHA_PE_CHARCHA/59b96.jpg') }}" alt="Pariksha Pe Charcha"></a>
                                            <a href="{{ asset('uploads/uploads/photo-gallery/PARIKSHA_PE_CHARCHA/69b96.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/PARIKSHA_PE_CHARCHA/69b96.jpg') }}" alt="Pariksha Pe Charcha"></a>
                                            <a href="{{ asset('uploads/uploads/photo-gallery/PARIKSHA_PE_CHARCHA/79b96.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/PARIKSHA_PE_CHARCHA/79b96.jpg') }}" alt="Pariksha Pe Charcha"></a>
                                            <a href="{{ asset('uploads/uploads/photo-gallery/PARIKSHA_PE_CHARCHA/89b96.jpg') }}"><img src="{{ asset('uploads/uploads/photo-gallery/PARIKSHA_PE_CHARCHA/89b96.jpg') }}" alt="Pariksha Pe Charcha"></a>
                                            <video controls="controls" style="height: 300px; width:100%;"><source src="{{ asset('uploads/uploads/2020/01/Video-2020-01-16.mp4') }}" type="video/mp4"><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" 
                                                    class="mce_SELRES_start">&#xFEFF;</span></video>
                                            </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Section16">
                                        <h3>Faculty List Approved By Affiliating Body</h3>
                                        <img src="{{ asset('uploads/uploads/2021/07/ERCAPP1123-1-001-compressed.jpg') }}" alt="image" style="height: 100%; width:100%;">
                                        <img src="{{ asset('uploads/uploads/2021/07/ERCAPP1123-2-001-compressed.jpg') }}" alt="image" style="height: 100%; width:100%;">
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade"  id="Section17">
                                        <h3>Vacancy</h3>
                                        <p> <a href="{{ asset('uploads/uploads/2019/11/application_form_pdf.pdf')}}" class="button" download title="Download"><i class="fa fa-dot-circle-o"></i>Application Form</a></p> 
                                        <p> <a href="{{ asset('uploads/uploads/2019/11/B.Ed.-Advertise-Teacher-2019.pdf')}}" class="button" download title="Download"><i class="fa fa-dot-circle-o"></i>B.ED. HEAD/ASSISTANT PROFESSOR VACANCY</a></p> 
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Section18">
                                        <h3>B.Ed. Contact</h3>
                                        <P>B.Ed. Department,</P>
                                        <P>R.K.College, Madhubani – 847211 (Bihar)</P>
                                        <P>E-mail – bedrkcollegemadhubani@gmail.com</P>
                                        <P>Tel. No. – 06276 – 227666 / 222264</P>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Section19">
                                        
                                            <h3>Download</h3>
                                           <p> <a href="{{ asset('uploads/uploads/2017/05/16-05-2017.zip')}}" class="button" download title="Download"><i class="fa fa-dot-circle-o"></i>N.C.T.E. INSPECTION HELD ON 16.05.17.</a></p>
                                           <p> <a href="{{ asset('uploads/uploads/2017/05/APPLICATION-min.pdf')}}" class="button" download title="Download"><i class="fa fa-dot-circle-o"></i>APPLICATION</a></p>
                                            <p> <a href="{{ asset('uploads/uploads/2017/05/CHALLAN-min.pdf')}}" class="button" download title="Download"><i class="fa fa-dot-circle-o"></i>CHALLAN</a></p>
                                                <p><a href="{{ asset('uploads/uploads/2017/05/PROSPECTUS-B.ED_.-2017-19.compressed.pdf')}}" class="button" download title="Download"><i class="fa fa-dot-circle-o"></i>PROSPECTUS-B.ED-2017-19</a></p>
                                                    <p><a href="#" class="button" download title="Download"><i class="fa fa-dot-circle-o"></i>B.-Ed.-Syllabus</a></p>
                                                        <p>  <a href="{{ asset('uploads/uploads/2017/04/E-MONITORING-PORTAL-_-Student-Report-PDF-min.pdf')}}" class="button" download title="Download"><i class="fa fa-dot-circle-o"></i>E-MONITORING PORTAL _Student Report</a></p>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    {{-- </div> --}}
                </div>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
@section('scriptarea')
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
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