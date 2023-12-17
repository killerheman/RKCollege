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
                @include('home.sidebar.facilities', ['active' => 5])

                <article class="content-wrapper col-md-10 col-sm-8">
                    <h2 class="no-margin-top has-divider text-highlight">NCC, NSS & Scouts and Guides</h2>
                    <p><img class="img-responsive" src="{{ asset('frontend/assets/images/infrastructure/ncc_office.jpeg') }}"
                            alt="" style="height: 400px; width: 800px;" /></p>
                    <h2 class="has-divider text-highlight">National Cadet Corps (NCC)</h2>
                    <p>National Cadet Corps is a voluntary Tri-Services Organization , comprising the Army,
                        Navy and Air Force, engaged in grooming the youth of the country into disciplined
                        and patriotic citizens. It recruits cadets from high schools, colleges and
                        Universities all over India. The Cadets are given basic military training in small
                        arms and parades. The former NCC Cadets of National P.G. College have excelled in
                        every nation building endeavour. The cadets have successfully participated in
                        various camps and won several medals and trophies individually and collectively. The
                        Cadets of both wings have successfully participated in:</p>
                    <ul class="custom-list-style">
                        <li><i class="fa fa-star"></i>Annual training camps</li>
                        <li><i class="fa fa-star"></i>D.G organised camps conducted by U.P Directorate</li>
                        <li><i class="fa fa-star"></i>D.G. organised camps conducted by office Directorates
                        </li>
                        <li><i class="fa fa-star"></i>Trekking Expeditions</li>
                        <li><i class="fa fa-star"></i>Boat pulling and sailing expenditrues</li>
                        <li><i class="fa fa-star"></i>Attachment with Army Navy and Air</li>
                        <li><i class="fa fa-star"></i>Republic Day Camp.</li>
                    </ul>

                    <h2 class="has-divider text-highlight">National Service Scheme (NSS)</h2>
                    <p>One of the major programs for the implementation of outreach activities of the
                        college is its national social service NSS program.</p>
                    <p>There are three units of NSS in the college (Two units of Girls and one unit of Boys)
                    </p>
                    <p>The main activities of the scheme include the programmes related to: National
                        Harmony, Adoption of villages and slums for cleanliness and literacy drives,
                        Environmental conservation, AIDS Awareness programme, Health and
                        Immunization/Participation in pulse polio drive, Organisation of Exhibitions, Winter
                        Relief/Cold relief/Flood Relief, Training of Programme Officers.</p>

                    <h2 class="has-divider text-highlight">Scouts and Guides</h2>
                    <p>The unit of Scouts and Guides in the college successfully promotes the motto of the
                        institution by inculcating virtues of determination, service to the poor and nation
                        and to be always performing to the best of one’s capacity with honour. The college
                        organises regularly the rally of Rovers and Rangers every year. </p>
                </article>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
