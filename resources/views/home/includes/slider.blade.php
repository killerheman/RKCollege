<div id="promo-slider" class="slider flexslider mb-3">
    <ul class="slides">

        @if ($banners)
            @foreach ($banners as $banner)
                <li>
                    <img src="{{ asset($banner->banner) }}"
                        alt="{{ $banner->title1 }}" height="500px" />
                    <p class="flex-caption text-center">
                        <a href="{{ $banner->link }}" target="_blank"><span class="main" style="background: #80000069 !important;">{{ $banner->title1 }}</span></a>
                        <br />
                        <a href="{{ $banner->link }}" target="_blank"><span class="secondary clearfix">{{ $banner->title2 }}</span></a>
                    </p>
                </li>
            @endforeach
        @else
            <li>
                <img src="{{ asset('frontend/assets/images/slider/banner6.jpeg') }}"
                    alt="Welcome to National P.G. College, We Design the Future and Set Trends for others to follow."  />
                <p class="flex-caption text-center">
                    <span class="main">Welcome to Chandradhari Mithila College, Darbhanga</span>
                    <br />
                    <span class="secondary clearfix">We Design the Future and Set Trends for others to
                        follow.</span>
                </p>
            </li>
            <li>
                <img src="{{ asset('frontend/assets/images/slider/banner7.jpeg') }}" alt="" />
                <p class="flex-caption">
                    <span class="main">AgniVeer Yojna</span>
                    <br />
                    <span class="secondary clearfix"><a href="#">Click
                            Here to Know More</a></span>
                </p>
            </li>
            <li>
                <img src="{{ asset('frontend/assets/images/slider/banner8.jpeg') }}"
                    alt="Welcome to National P.G. College, We Design the Future and Set Trends for others to follow." />
                <p class="flex-caption">
                    <span class="main">Welcome to C.M. College</span>
                    <br />
                    <span class="secondary clearfix">We Design the Future and Set Trends for others to
                        follow.</span>
                </p>
            </li>

            <li>
                <img src="{{ asset('frontend/assets/images/slider/banner9.jpeg') }}" alt="" />
                <p class="flex-caption">
                    <span class="main">AgniVeer Yojna</span>
                    <br />
                    <span class="secondary clearfix"><a href="#">Click
                            Here to Know More</a></span>
                </p>
            </li>
            <li>
                <img src="{{ asset('frontend/assets/images/slider/banner1.jpg') }}" alt="" />
                <p class="flex-caption">
                    <span class="main">AgniVeer Yojna</span>
                    <br />
                    <span class="secondary clearfix"><a href="#">Click
                            Here to Know More</a></span>
                </p>
            </li>
        @endif

    </ul>
    <!--//slides-->
</div>
