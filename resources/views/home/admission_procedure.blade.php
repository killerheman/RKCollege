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
                @include('home.sidebar.admission', ['active' => 4])

                <div class="content-wrapper col-md-10 col-sm-8">
                    <div class="page-row">
                        <h1 class="no-margin-top has-divider text-highlight">
                            Admission Procedure</h1>
                        <p>
                            The candidates seeking admission in the college must read the prospectus
                            carefully
                            before filling the application form. Selfattested copies of the following
                            documents
                            must be attached:</p>
                        <ol>
                            <li>Pass Certificate and marksheet of X<sup>th</sup> and XII<sup>th</sup> or
                                equivalent
                                examinations.</li>
                            <li>Marksheet of last examination passed.</li>
                            <li>In case the candidate passed his/her qualifying examination in the year
                                2021
                                or earlier, documentary proof must be furnished to the effect that:
                                <ol>
                                    <li>The candidate had not taken admission in any other College or
                                        University in
                                        2021-22
                                    </li>
                                    <li>Notarized declaration certifying that the candidate was not involved
                                        or under suspicion/trial
                                        under any provision(s) of the IPC.</li>
                                </ol>
                            </li>
                            <li>Character Certificate from the Head of the Institution from where the
                                candidate
                                passed his/her last examination as a regular candidate (original certificate
                                shall
                                have to be submitted at the time of counseling).</li>
                            <li>Applicants who passed their last examination as private candidate should
                                submit
                                Character Certificate from the Superintendent of Police / District
                                Magistrate /
                                Gazetted Officer. The certificate should not have been issued before 28th
                                February
                                2022.</li>
                            <li>Candidates seeking admission on reserved seats must attach attested copy of
                                Caste
                                Certificate/CMO Certificate. Original Certificate must be produced at the
                                time of
                                counseling, failing which the candidate shall not be entitled to any
                                reservation
                                benefits.</li>
                            <li>Application forms completed in all respects along with copies of required
                                documents
                                will be accepted till the last date.</li>
                            <li>No admission form shall be entertained after the due date.</li>
                            <li>Incomplete application forms shall not be considered for admission.</li>
                            <li>Candidates qualifying in the entrance test will be required to appear along
                                with
                                their parents/guardians before the Admission Committee for interview /
                                counseling.</li>
                        </ol>
                        <p>
                            <strong>Note:</strong>
                        </p>
                        <ol>
                            <li>Candidates having passed their 10<sup>th</sup> standard examination, before
                                2018
                                for UG Courses and before
                                2015
                                for PG Courses, need not to apply.</li>
                            <li>Candidates must submit their Character Certificate and Transfer Certificate
                                in original
                                at the time of admission.</li>
                            <li>Candidates employed with state government or in any other establishment
                                should produce
                                No-Objection Certificate from their employer / competent authority for
                                seeking admission
                                in regular courses of the College.</li>
                            <li>Fee-Refund is permissible within Three days from the date of deposit – No
                                Refund
                                is permissible after the expiry of Three days from the date of deposit.</li>
                            <li>No Claim for Fee-Refund shall be entertained from unsuccessful candidates in
                                the
                                semester exams.</li>
                        </ol>
                        <h1 class="no-margin-top has-divider text-highlight">
                            Admission Prohibited</h1>
                        <p>
                            Following categories of candidates shall not be considered for admission in the
                            College:</p>
                        <ol>
                            <li>Candidates having failed in a class cannot seek admission in the same class.
                            </li>
                            <li>Candidates found guilty under IPC or their involvement in any kind of
                                dispute, quarrel
                                or anti-social activity anywhere, or misbehaviour with the college staff or
                                teacher
                                shall not be considered for admission.</li>
                            <li>Candidates found guilty of using unfair means in the examination are also
                                not eligible
                                for admission in the college.</li>
                            <li><strong>Candidates having back paper in 1<sup>st</sup> and/or 2<sup>nd</sup>
                                    semester
                                    shall not be given admission in semester 5<sup>th</sup>. Students shall
                                    be given admission in
                                    Semester 5<sup>th</sup> online if, they don&#39;t have any back-paper in
                                    Semester
                                    1<sup>st</sup> and/or Semester 2<sup>nd</sup> </strong>
                                <ol>
                                    <li>In case, a candidate succeeds in seeking admission by forgery /
                                        hiding facts, his/her
                                        admission shall stand cancelled on revelation.</li>
                                    <li>Students found using unfair means in the examination will be barred
                                        from remaining
                                        papers, their entire examination will be cancelled and admission in
                                        future will
                                        not be granted.</li>
                                </ol>
                            </li>
                        </ol>
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
