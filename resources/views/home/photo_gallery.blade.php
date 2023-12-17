@extends('home.includes.layout', ['title' => 'Events'])
@section('headerarea')
@endsection
@section('content')
    <div class="page-wrapper" style="margin-bottom: 50px;">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="Events">
                <span>Events</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="page-row">
                <p></p>
            </div>
            <div class="container">
                <div class="row">
                    @if ($events)
                        @foreach ($events as $event)
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <a href="{{ route('photoGalleryImage', Crypt::encrypt($event->id)) }}">
                                    <img src="{{ asset($event->thumbnail) }}">
                                    <div class="box-content">
                                        <h3 class="title">{{ $event->name }}</h3>
                                    </div>
                                    {{-- <ul class="icon">
                                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                    </ul> --}}
                                    <h4 class="text-center">{{ $event->name }}</h4>
                                </a>
                                </div>


                            </div>
                        @endforeach
                    @else
                        <h3 class="text-center">No Events Uploaded</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!--//page-row-->
@section('scriptarea')
    <script type="text/javascript" src="assets/plugins/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
    <script type="text/javascript" src="assets/plugins/pretty-photo/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="assets/plugins/jflickrfeed/jflickrfeed.min.js"></script>
@endsection
@endsection
