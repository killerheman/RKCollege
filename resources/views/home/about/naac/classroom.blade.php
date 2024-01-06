@extends('home.includes.layout', ['title' => 'Classroom'])

@section('content')
    <div class="page-wrapper">


        <div class="page-content">
            <div class="gallery">

                @foreach($imageFileNames as $fileName)
                <a href="{{asset('uploads/uploads/photo-gallery/class_room/' . $fileName)  }}"><img src="{{ asset('uploads/uploads/photo-gallery/class_room/' . $fileName) }}" alt="{{ $fileName }}"></a>
                @endforeach

            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
@section('scriptarea')
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script>
$(document).ready(function() {
  // add all to same gallery
  $(".gallery a").attr("data-fancybox","mygallery");
  // assign captions and title from alt-attributes of images:
  $(".gallery a").each(function(){
    $(this).attr("data-caption", $(this).find("img").attr("alt"));
    $(this).attr("title", $(this).find("img").attr("alt"));
  });
  // start fancybox:
  $(".gallery a").fancybox();
  });
  </script>
@endsection
