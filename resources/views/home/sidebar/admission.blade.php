<aside class="page-sidebar col-md-2 col-sm-4 affix-top">
    <section class="widget">
        <ul class="nav">
            <li class="{{ $active == 1 ? 'active' : '' }}"><a href="{{ route('informationBulletinAdmission') }}">Information Bulletin Admission</a>
            </li>
            <li class="{{ $active == 2 ? 'active' : '' }}"><a href="{{ route('admissionSchedule') }}">Admission Schedule</a></li>
            <li class="{{ $active == 3 ? 'active' : '' }}"><a href="{{ route('eligibilityCriteria') }}">Eligibility Criteria</a></li>
            <li class="{{ $active == 4 ? 'active' : '' }}"><a href="{{ route('admissionProcedure') }}">Admission Procedure</a></li>
            <li class="{{ $active == 5 ? 'active' : '' }}"><a href="{{ route('seatsOffered') }}">Seats Offered</a></li>
            <li></li>
        </ul>
    </section>
    <!--//widget-->
</aside>
