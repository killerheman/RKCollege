@extends('home.includes.layout', ['title' => 'Event Gallery'])
@section('headerarea')
@endsection
@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="Event Gallery">
                <span>Event Gallery</span>
            </div>
            <div class="breadcrumbs pull-right">
                <ul class="breadcrumbs-list">
                    <li class="breadcrumbs-label">You are here:</li>
                    <li><a href="Default.html">Home</a><i class="fa fa-angle-right"></i></li>
                    <li><a href="GalleryAlbum.html">Event Gallery</a><i class="fa fa-angle-right"></i></li>
                    <li class="current"><span id="ctl00_ContentPlaceHolder1_lblSideHeading">{{ $event->name }}</span></li>
                </ul>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">

                @if( count($photos)>0 )
                @foreach ($photos as $pic)
                    <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" alt=''
                    href='{{ asset($pic->image) }}'>
                    <img class="img-responsive img-thumbnail" src='{{ asset($pic->image) }}'
                        alt='' height="500" width="500" />
                    </a>
                @endforeach
                @else
                <h4 class="text-center">No photos available....</h4>
                @endif
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@section('scriptarea')
    <script type="text/javascript" src="assets/plugins/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
    <script type="text/javascript" src="assets/plugins/pretty-photo/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="assets/plugins/jflickrfeed/jflickrfeed.min.js"></script>
@endsection
@endsection
