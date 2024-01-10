<div class="inner-page-banner-area" style="background: url({{ $path ?? asset('frontend/assets/images/slider/breadcrumb_image.jpg') }}) center/cover no-repeat; margin-bottom:30px; height:50%;">
    <div class="overlay"></div>
    <div class="container breadcrumb-container">
        <div class="pagination-area">
            <div class="text-effect3">
                <span>{{ $title }}</span>
            </div>
            <ul style="margin-top: 20px;">
                <li class="font__fontrols__style"><a href="{{ route('home') }}">Home</a> -</li>
                <li class="font__fontrols__style">{{ $title }}</li>
            </ul>
        </div>
    </div>
</div>
