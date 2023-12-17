<aside class="page-sidebar col-md-2 col-sm-4 affix-top">
    <section class="widget">
        <ul class="nav">
            <li class="{{ $active == 1 ? 'active' : '' }}"><a href="{{ route('downloadSyllabus') }}">Syllabus</a>
            </li>
            <li class="{{ $active == 2 ? 'active' : '' }}"><a href="{{ route('downloadOnlineStudyMaterial') }}">Online Study Material</a></li>
            <li></li>
        </ul>
    </section>
    <!--//widget-->
</aside>
