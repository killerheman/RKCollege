<aside class="page-sidebar col-md-2 col-sm-4 affix-top">
    <section class="widget">
        <ul class="nav">
            <li class="{{ $active == 1 ? 'active' : '' }}"><a href="{{ route('iqac') }}">IQAC</a>
            </li>
            <li class="{{ $active == 2 ? 'active' : '' }}"><a href="{{ route('aqar') }}">AQAR</a></li>
            <li class="{{ $active == 3 ? 'active' : '' }}"><a href="{{ route('iqacComposition') }}">Composition</a></li>
            <li class="{{ $active == 4 ? 'active' : '' }}"><a href="{{ route('minutesOfMeeting') }}">Minutes Of Meeting</a></li>
            <li class="{{ $active == 5 ? 'active' : '' }}"><a href="{{ route('ssr') }}">SSR</a></li>
            {{-- <li class="{{ $active == 6 ? 'active' : '' }}"><a href="{{ route('aisheReport') }}">AISHE Report</a></li> --}}
            <li class="{{ $active == 7 ? 'active' : '' }}"><a href="{{ route('naacGrade') }}">NAAC Grade</a></li>
            <li class="{{ $active == 8 ? 'active' : '' }}"><a href="{{ route('sss') }}">Student's Satisfaction Survey</a></li>
            {{-- <li class="{{ $active == 9 ? 'active' : '' }}"><a href="{{ route('nirf') }}">NIRF</a></li> --}}
            <li></li>
        </ul>
    </section>
    <!--//widget-->
</aside>
