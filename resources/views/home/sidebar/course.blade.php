<aside class="page-sidebar col-md-2 col-sm-4 affix-top">
    <section class="widget">
        <ul class="nav">
            <li class="{{ $active == 1 ? 'active' : '' }}"><a href="{{ route('underGraduateCourses') }}">U.G. Courses</a>
            </li>
            <li class="{{ $active == 2 ? 'active' : '' }}"><a href="{{ route('diplomaCourses') }}">Self-finance U.G. Courses</a></li>
            <li class="{{ $active == 3 ? 'active' : '' }}"><a href="{{ route('postGraduateCourses') }}">P. G. Courses</a></li>
            <li class="{{ $active == 4 ? 'active' : '' }}"><a href="{{ route('certificateCourses') }}">Certificate Courses</a></li>
            <li></li>
        </ul>
    </section>
    <!--//widget-->
</aside>
