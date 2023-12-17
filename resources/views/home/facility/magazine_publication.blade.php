@extends('home.includes.layout', ['title' => 'Facilities'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="Facilities">
                <span>Facilities</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                @include('home.sidebar.facilities', ['active' => 3])

                <article class="content-wrapper col-md-10 col-sm-8">
                    <h2 class="no-margin-top has-divider text-highlight">Magazines and Publications</h2>
                    <p><img class="img-responsive"
                            src="{{ asset('frontend/assets/images/infrastructure/building.jpg') }}" alt="" /></p>
                    <h2 class="has-divider text-highlight">Magazines</h2>
                    <p>The college brings out following regular publication :</p>

                    <h4 class="has-divider text-highlight">Abhivyakti</h4>
                    <p>Abhivyakti is annual college magazine. Students and faculty members contribute to the
                        publication by submitting their orginial writings including poems, short stories,
                        articals, news items and material on other topics of interest. The magazine also
                        showcases various sports, co-curricular activities and major events of the preceding
                        year in the college as colored and monochrome photographs. Extraordinary
                        achievements of the students along with their photograph are also published in
                        college magazine "Abhivyakti ". There are Messages from the Principal, the manager
                        of the college and some other person of repute.</p>
                    <h4 class="has-divider text-highlight">In-Sight</h4>
                    <p>In-Sight focuses on the special events, workshops and seminars of the month and
                        administrative and academic announcements of students' interest.</p>
                    <h2 class="has-divider text-highlight">Publications</h2>
                    <p>Department and faculties also bring out e-News Letter from time to time highlighting
                        various achevements of the departments, faculty member and students, workshop and
                        seminar organised by the respective department and other information regarding
                        emplyment and future prospects</p>
                    <p>The EPOCH Making Study center which provides extensive scholarly research and
                        advanced study facilities on gandhi and nehru regularly publishes monograms,
                        research papers, leaflets and pamphlets. Some of the major publications of Epoch
                        Making CStudy Center are :</p>

                    <p>Souvenirs owned special occasions particularly whenever National and International
                        Seminar are orgained, are also published to mark the occassion. </p>
                </article>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
