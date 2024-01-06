@extends('home.includes.layout', ['title' => 'B.Ed Courses'])

@section('content')
    <div class="page-wrapper">

        <div class="page-content">
                <p style="text-align: center;"><strong>B.Ed. (Regular Course (Secondary School Level)<br>
                        Recognized by NCTEBhuwaneshwar, Affiliated in L.N.M.U., Darbhanga</strong></p>
                <p><strong><u>Admission</u></strong></p>
                <ol>
                    <li>Students should apply for admission on prescribed admission form available at college counter. After
                        proper scrutiny of admission form, merit list is prepared by the admission committee on the basis of
                        marks in the previous examination. Students get enrolled after the publication of faculty-wise list
                        and category-wise as per Government of Bihar reservation rule.</li>
                    <li>All notification of selection lists, admission date etc., will be announced only on college notice
                        board and website. No individual intimation will be sent to candidates. Candidates are therefore,
                        advised to regularly visit our website <a href="{{ route('home') }}"> <b>www.rkclnmu.ac.in</b></a> for any updates or any other matter related
                        to the admission process.</li>
                    <li>At the time of admission in this college students should apply on the prescribed form and attach
                        photocopies of following documents along with the application form.<br>
                        SLC or CLC or TC from previous School/College<br>
                        b. Admit Card of Last Exam<br>
                        c. Mark Sheet of Last Exam<br>
                        d. At the time of admission students should submit the original copies of documents a, b and c.
                        Documents a and b will not be returned after admission.<br>
                        e. Four colour passport size recent photographs.<br>
                        f. Candidates of SC, ST and OBC should submit Cast Certificate and Income Certificate along with
                        application form.<br>
                        g. Migration Certificate is compulsory for the students of University other than LNMU without
                        Migration Certificate admission is not be taken.</li>
                    <li>The provisional selection list along with procedures for admission will be announced on the college
                        Notice Board and website. No separate intimation will be sent to candidates. Provisionally selected
                        candidates will be required to take admission within the specified period, failing which vacant
                        seats will be allotted to wait listed candidates.</li>
                </ol>
                <p><strong><u>&nbsp;</u></strong></p>
                <p><strong><u>Govt. Reservation Policy for Admission</u></strong></p>
                <table class="table table-hover" border="2" width="100%">
                        <thead>
                            <td width="44%"><strong>Category</strong></td>
                            <td width="55%"><strong>Percentage</strong></td>
                        </thead>
                    <tbody>

                        <tr>
                            <td width="44%">Scheduled Caste (SC)</td>
                            <td width="55%">16.0</td>
                        </tr>
                        <tr>
                            <td width="44%">Scheduled Tribe (ST)</td>
                            <td width="55%">01.0</td>
                        </tr>
                        <tr>
                            <td width="44%">Extremely Backward Class (EBC/OBCI)</td>
                            <td width="55%">18.0</td>
                        </tr>
                        <tr>
                            <td width="44%">Backward Class (OBCII)</td>
                            <td width="55%">12.0</td>
                        </tr>
                        <tr>
                            <td width="44%">Women OBC</td>
                            <td width="55%">03.0</td>
                        </tr>
                    </tbody>
                </table>
                <ul>
                    <li>Students interested to get admission on sports/cultural/Person with disability (PWD) quota must
                        submit appropriate certificate with application form. They will be selected from his/her own
                        category not crossing the reservation limit.</li>
                </ul>
        </div>
        <!--//page-content-->
    </div>
@endsection
