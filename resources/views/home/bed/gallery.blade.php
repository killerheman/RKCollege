@extends('home.includes.layout', ['title' => 'About College'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="About College">
                <span>B.ed Gallery</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">

<div class="gallery">
  <a href="https://home.et.utwente.nl/slootenvanf/div/fancybox_images/Chrysanthemum.jpg"><img src="https://home.et.utwente.nl/slootenvanf/div/fancybox_images/tn/Chrysanthemum.jpg" alt="Chrysanthemum: nice flower."></a>
  <a href="https://home.et.utwente.nl/slootenvanf/div/fancybox_images/Desert.jpg"><img src="https://home.et.utwente.nl/slootenvanf/div/fancybox_images/tn/Desert.jpg" alt="Desert mountains"></a>
  <a href="https://home.et.utwente.nl/slootenvanf/div/fancybox_images/Hydrangeas.jpg"><img src="https://home.et.utwente.nl/slootenvanf/div/fancybox_images/tn/Hydrangeas.jpg" width="100" height="75" alt="Hydrangeas, called 'Hortensia' in Dutch"></a>
  <a href="https://home.et.utwente.nl/slootenvanf/div/fancybox_images/Jellyfish.jpg"><img src="https://home.et.utwente.nl/slootenvanf/div/fancybox_images/tn/Jellyfish.jpg" title="Jellyfish"></a>
  <a href="https://home.et.utwente.nl/slootenvanf/div/fancybox_images/Koala.jpg"><img src="https://home.et.utwente.nl/slootenvanf/div/fancybox_images/tn/Koala.jpg" alt="Koala"></a>
  <a href="https://home.et.utwente.nl/slootenvanf/div/fancybox_images/Lighthouse.jpg"><img src="https://home.et.utwente.nl/slootenvanf/div/fancybox_images/tn/Lighthouse.jpg" alt="Lighthouse"></a>
  <a href="https://home.et.utwente.nl/slootenvanf/div/fancybox_images/Penguins.jpg"><img src="https://home.et.utwente.nl/slootenvanf/div/fancybox_images/tn/Penguins.jpg" alt="Penguins"></a>
  <a href="https://home.et.utwente.nl/slootenvanf/div/fancybox_images/Tulips.jpg"><img src="https://home.et.utwente.nl/slootenvanf/div/fancybox_images/tn/Tulips.jpg" alt="Yellow tulips"></a>
</div>

         
                
               
                    

            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
        <!-- Below we include the jQuery Library -->

  
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