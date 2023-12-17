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
                @include('home.sidebar.admission', ['active' => 3])

                <div class="content-wrapper col-md-10 col-sm-8">
                    <div class="page-row">
                        <h1 class="no-margin-top has-divider text-highlight">Eligibility Criteria</h1>

                        <h2>INTERMEDIATE</h2>
                        <ul>
                            <li>1.1. Admission to Class XI</li>
                            <li>1.1. a. Admission to class XI shall be open to such students who have passed the secondary
                                school examination (Class X) of the Bihar school examination Board or an equivalent
                                examination from any other recognized Board/University, and who have been selected for
                                admission by the college on the basis of merit.</li>
                            <li>
                                1.1.b. Class XI examination shall be conducted internally by the college at the end of the
                                session. Students with less than 75 percent attendance will not be permitted to appear in
                                the session-end examination.
                            </li>
                            <li>
                                1.2. Admission to class XII
                            </li>
                            <li>
                                1.2.a. No direct Admission will be entertained to class XII. It is further clarified that
                                admission to class XII shall be offered only to such students who : -
                                <ul>
                                    <li>have completed a regular course of study for class XI.</li>
                                    <li>have passed the class XI examination from the college or from any other
                                        college/School affiliated with the same board.</li>
                                </ul>
                            </li>
                            <li>
                                1.2.b. The board class XII.
                                Candidates who possess 75 percent of attendance and have qualified for the internal tests/
                                examinations being conducted by the college, will be permitted to appear in the XII board
                                examination.
                            </li>
                            <li>
                                1.3. SCHEME OF STUDIES
                                At the intermediate level, different subjects have been classified into two groups, the
                                Literature group & Elective group.
                            </li>
                            <li>
                                1.3.a. Each student is required to study Language Group in class 11th as well as in 12th,
                                out of the following language & literature (LL) subjects comprising 100 marks.
                                <ul>
                                    <li>English</li>
                                    <li>Hindi</li>
                                    <li>Maithili</li>
                                    <li>Persian</li>
                                    <li>Sanskrit</li>
                                    <li>Urdu</li>
                                    <li>Alternative English</li>
                                    <li>Hindi</li>
                                </ul>
                            </li>
                            <li>
                                1.3.b. Elective group.
                                Each student is required to study in class 11th as well as in 12th.
                            </li>
                            <li>
                                1.3.b. (i) For Commerce stream: Any three out of the following, each comprising 100 marks.
                                <ul>
                                    <li>Accountancy</li>
                                    <li>Business studies</li>
                                    <li>Economics</li>
                                    <li>Entrepreneurship</li>
                                </ul>
                            </li>
                            <li>
                                1.3.b(ii) For Arts stream: Any three out of the following.
                                <ul>
                                    <li>Economics</li>
                                    <li>History</li>
                                    <li>Political Science</li>
                                    <li>Philosophy</li>
                                    <li>Sociology</li>
                                    <li>Psychology</li>
                                    <li>Mathematics</li>
                                </ul>
                            </li>
                        </ul>

                        <br /><br />
                        <h2>Three – year Degree Course</h2>
                        <ul>
                            <li>2. The Bachelor’s degree course is an integrated course of three years named as Degree
                                Part-1, Degree Part-II, and degree Part-III.</li>
                            <li>2.1. Admission to degree Part-I shall be open only to such students.
                                <ul>
                                    <li>who have passed the XII examination of the Bihar school examination board or an
                                        equivalent examination from any other recognized board/University, and</li>
                                    <li>who have been selected for admission by the college on the basis of merit.</li>
                                </ul>
                            </li>
                            <li>
                                2.1.b. Degree Part-1 examination shall be conducted by the L.N. Mithila University,
                                Darbhanga at the end of the session. Students having less than 75 per cent attendance will
                                not be permitted to appear in the session-end examination.
                            </li>
                            <li>
                                2.1.c. Admission to degree Part –II shall be allowed only to such students :-
                                <ul>
                                    <li>
                                        Who have passed degree Part – I examinations conducted by LNMU, or
                                    </li>
                                    <li>
                                        Who have been promoted in the degree Part – I examinations but will have to clear
                                        their Paper/Papers before the degree Part-III examinations.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                2.1.d. Degree Part-II examination shall be conducted by the L. N. Mithila University,
                                Darbhanga at the end of the session.
                                Students possessing less than 75 percent attendance will not be permitted to appear in the
                                said examination.
                            </li>
                            <li>
                                2.1.e. Admission to degree Part-III shall be open only to such students:-
                                <ul>
                                    <li>
                                        who have passed the degree part-II examination conducted by the LNMU, or
                                    </li>
                                    <li>
                                        have been promoted in the said examination, but will have to clear their
                                        paper/papers before degree part-III examinations.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                2.1.f. Degree part-I examination shall be conducted by the L N Mithila University, Darbhanga
                                at the end of the session. Students who have not cleared their entire backlog papers either
                                of degree part-I or part-II will not be allowed to appear in degree part-III examination.
                                Students having less than 75 percent attendance will not be permitted to appear in the said
                                examination.
                            </li>
                            <li>
                                2.2. Bachelor of Commerce (Honours) Course.
                                C.M. College impacts bachelor of commerce (Honours) course in the following subjects.
                                Students can opt any one of them for their Honours subject.
                                <ul>
                                    <li>Accounts & Finance</li>
                                    <li>International Business</li>
                                    <li>Marketing</li>
                                </ul>
                            </li>
                            <li>
                                In degree Part – I and degree part-II students are to study two papers of the honours
                                subject, each of 100 marks. In degree part –III there will be four papers of honours subject
                                each of 100 marks again.
                            </li>
                            <li>
                                Students of degree part – I and degree part II are required to study one paper (100 marks)
                                of Rashtrabhasha Hindi. Alternatively, they may opt for one paper of Rashtrabhasha Hindi (50
                                marks), and another paper of Matribhasha (50 marks) from any one of the following three
                                subjects.
                                <ul>
                                    <li>Alternative English</li>
                                    <li>Maithili</li>
                                    <li>Urdu</li>
                                </ul>
                            </li>
                            <li>
                                In degree part –III there will be one paper of General Studies (100 marks) in lieu of
                                Language.
                            </li>
                            <li>
                                In Degree part-III and degree part-II students are required to study two papers of 100 marks
                                each as their subsidiary paper. In degree part-III, there will be no subsidiary paper.
                            </li>

                        </ul>

                        <br /><br />
                        <h2>Post-Graduate Course</h2>
                        <ul>
                            <li>
                                3. C.M. College offers Post Graduate courses in the following subjects.
                                <ul>
                                    <li>Economics</li>
                                    <li>Commerce</li>
                                    <li>Hindi</li>
                                    <li>History</li>
                                    <li>Maithili</li>
                                    <li>Political Science</li>
                                    <li>Urdu</li>
                                    <li>Mathematics</li>
                                    <li>English</li>
                                    <li>Psychology</li>
                                </ul>
                            </li>
                            <li>
                                3.2 Post-graduate course is divided into four semesters. Choice-Based Credit System (CBCS)
                                is followed as per UGC guidelines at the P.G. level.
                            </li>
                        </ul>

                        <p>Note: For a detailed syllabus (either of U.G. or P.G.), visit the college website. Additional
                            information if any, can be obtained through the respective department during college hours.</p>

                        <h1>How to Apply</h1>
                        <p> L. N. Mithila University notifies the advertisement for initiation of the admission process
                            through various media. Admission is secured through a centralized process in online mode.
                            Students eying for admission are advised to visit the university’s website regularly for updated
                            information.</p>
                        <a href="https://lnmu.ac.in/" class="btn btn-info btn-lg">Visit University</a>


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
