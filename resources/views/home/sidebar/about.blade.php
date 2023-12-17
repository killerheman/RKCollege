<aside class="page-sidebar col-md-2 col-sm-4 affix-top">
    <section class="widget">
        <ul class="nav">
            <li class="{{ $active == 1 ? 'active' : '' }}"><a href="{{ route('aboutCollege') }}">About the College</a>
            </li>
            <li class="{{ $active == 2 ? 'active' : '' }}"><a href="{{ route('visionMission') }}">Vision and Mission</a></li>
            <li class="{{ $active == 3 ? 'active' : '' }}"><a href="{{ route('viceChancellorDesk') }}">From Vice-Chancellor's Desk</a></li>
            <li class="{{ $active == 4 ? 'active' : '' }}"><a href="{{ route('principalDesk') }}">From Principal's Desk</a></li>
            <li class="{{ $active == 5 ? 'active' : '' }}"><a href="{{ route('collegeAchievements') }}">Achievements</a></li>
            <li class="{{ $active == 6 ? 'active' : '' }}"><a href="{{ route('administrationCommittees') }}">Administration & Committees</a></li>
            <li class="{{ $active == 7 ? 'active' : '' }}"><a href="{{ route('annualReport') }}">Annual Report</a></li>
            <li class="{{ $active == 8 ? 'active' : '' }}"><a href="{{ route('organogram') }}">Organogram</a></li>
            <li></li>
        </ul>
    </section>
    <!--//widget-->
</aside>
