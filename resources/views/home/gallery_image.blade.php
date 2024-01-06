@extends('home.includes.layout', ['title' => 'Event Gallery'])
@section('headerarea')
@endsection
@section('content')
    <div class="page-wrapper">

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
