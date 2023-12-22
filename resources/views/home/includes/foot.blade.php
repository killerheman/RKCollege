<!-- Javascript -->
<script src="{{ asset('frontend/assets/js/jquery-3.2.1.slim.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/plugins/jquery-1.12.3.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/plugins/bootstrap-hover-dropdown.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/plugins/back-to-top.js')}}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/plugins/jquery-placeholder/jquery.placeholder.js')}}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/plugins/pretty-photo/js/jquery.prettyPhoto.js')}}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/plugins/flexslider/jquery.flexslider-min.js')}}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/plugins/jflickrfeed/jflickrfeed.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/main.js')}}"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
