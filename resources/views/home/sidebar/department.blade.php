<aside class="page-sidebar col-md-2 col-sm-4 affix-top">
    <section class="widget">
        <ul class="nav">
            <li class="{{ $active == 1 ? 'active' : '' }}"><a href="{{ route('facultyArts') }}">Faculty of Arts & Humanities</a>
            </li>
            <li class="{{ $active == 2 ? 'active' : '' }}"><a href="{{ route('facultyCommerce') }}">Faculty of Commerce</a></li>
            <li class="{{ $active == 3 ? 'active' : '' }}"><a href="{{ route('facultyScience') }}">Faculty of Science</a></li>
            {{-- <li class="{{ $active == 4 ? 'active' : '' }}"><a href="{{ route('facultyManagement') }}">Faculty of Management</a></li>
            <li class="{{ $active == 5 ? 'active' : '' }}"><a href="{{ route('facultyComputerScience') }}">Faculty of Computer Science</a></li>
            <li class="{{ $active == 6 ? 'active' : '' }}"><a href="{{ route('facultyJournalism') }}">Faculty of Journalism & Mass Communication</a></li> --}}
            <li></li>
        </ul>
    </section>
    <!--//widget-->
</aside>
