<aside class="page-sidebar col-md-2 col-sm-4 affix-top">
    <section class="widget">
        <ul class="nav">
            <li class="{{ $active == 1 ? 'active' : '' }}"><a href="{{ route('collegeCanteen') }}">College Canteen</a>
            </li>
            <li class="{{ $active == 2 ? 'active' : '' }}"><a href="{{ route('sportsGames') }}">Sports & Games</a></li>
            <li class="{{ $active == 3 ? 'active' : '' }}"><a href="{{ route('magazinePublications') }}">Magazines & Publications</a></li>
            <li class="{{ $active == 4 ? 'active' : '' }}"><a href="{{ route('hostelFacilities') }}">Hostel Facilities</a></li>
            <li class="{{ $active == 5 ? 'active' : '' }}"><a href="{{ route('nccNssScoutsGuides') }}">NCC,NSS,Scouts & Guides</a></li>
            <li class="{{ $active == 6 ? 'active' : '' }}"><a href="{{ route('medicalFacilites') }}">Medical Facilities</a></li>
            <li class="{{ $active == 7 ? 'active' : '' }}"><a href="{{ route('collegeInfrastructure') }}">Infrastructure</a></li>
            <li></li>
        </ul>
    </section>
    <!--//widget-->
</aside>
