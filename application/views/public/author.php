<!DOCTYPE html>

<html class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths" lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Articulos</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ======================== CSS ========================== -->
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/base.css');       ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/skeleton.css');   ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/layout.css');     ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/settings.css');   ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/fontawesome/css/fontawesome.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/fontawesome/css/all.min.css');         ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/owl.css');        ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/retina.css');     ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/colorbox.css');   ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/animsition.css'); ?>">
  
</head>

<body>  
   <div class="animsition" style="animation-duration: 1.5s; opacity: 1;">
   <?php include("header.php"); ?>
    <?php if(!$author==[]): ?>
     <main class="cd-main-content">
      <br>
     
      <section class="section grey-section section-padding-top-bottom"> 
      <div class="container">
        <div class="sixteen columns">
          <div class="section-title">
            <h3>OUR BELOVED WRITER</h3>
          </div>
        </div>
        <div class="sixteen columns">
          <div class="item blockquotes-1">
              <img src="<?= $author->image_path ?>" alt="..." >
              <h6 class="company-name"><?=$author->name ?></h6>
              <p>"<?= $author->bio ?> "</p>
              <!-- <div class="company-name">Writer, Company Name</div> -->
            </div>
          </div>  
        </div>
    </section>
  
<!-- ======================== SECTION  ========================== -->  
    <section class="section white-section section-padding-top-bottom">
  
      <div class="container">
        <div class="sixteen columns">
          <div class="social-contact">
            <ul class="list-contact">
              <li class="contact-soc">
                <a class="tooltip-shop" href="<?=$author->twitter?>"><i class="fab fa-twitter"></i><span class="tooltip-content-shop"><span class="tooltip-text-shop"><span class="tooltip-inner-shop">Twitter</span></span></span></a>
              </li>
              <li class="contact-soc">
                <a class="tooltip-shop" href='<?=$author->facebook  ?>' target="_blank"><i class="fab fa-facebook"></i><span class="tooltip-content-shop"><span class="tooltip-text-shop"><span class="tooltip-inner-shop">Facebook</span></span></span></a>
              </li>    
              <li class="contact-soc">
                <a class="tooltip-shop" href="<?=$author->instagram?>" target="_blank"><i class="fab fa-instagram"></i><span class="tooltip-content-shop"><span class="tooltip-text-shop"><span class="tooltip-inner-shop">Instagram</span></span></span></a>
              </li>
            </ul> 
          </div>
        </div>
      </div>      
    </section>      
    


<!-- ======================== SECTION  ========================== -->  
    <section class="section grey-section section-padding-top-bottom">
    
      <div class="container">
        <div class="sixteen columns">
          <div class="section-title">
            <h3>Blogs By <?=$author->name ?></h3>
            <div class="subtitle">swipe right to left to move</div>
          </div>
        </div>
        <div class="sixteen columns">
          <ul id="owl-carousel-3" class="owl-carousel owl-theme">
          <?php foreach ($author_blog as $blog):?>          
            <li>
              <a href='<?= base_url("blog/article/{$blog->slug}") ?>' class="animsition-link">
                <div class="blog-box-1 white-section">
                  <img src="<?=$blog->image_path  ?>"  alt="">
                  <div class="blog-date-1"><?= $blog->created_at ?></div>
                  <div class="blog-comm-1"><i class="fas fa-eye"></i> <?=$blog->article_views ?></div>
                  <h6><?= $blog->title ?></h6>
                  <p><?= substr($blog->description,0,100);?>...</p>
                  <div class="link">&#xf178;</div>
                </div>
              </a>
            </li>
          <?php endforeach ?>  
          </ul>
        </div>
      </div>
        
    </section> 
    <?php else : ?>
            
          <a href='#' class="animsition-link">
                <div class="blog-box-3 half-blog-width photo isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">              
                  <div class="blog-box-1 grey-section">
                    <div class="blog-date-1">Nothing to Show!!</div> 
                    <h6>No articles Found</h6>
                  </div>
                </div>
          </a>
          <?php endif; ?> 

  
  </main>   
   <?php include("footer.php"); ?>

  <div class="scroll-to-top">&#xf106;</div>
  
  
  </div>
  
  
    
  
  <!-- ======================= JAVASCRIPT =========================== -->
<div class="fit-vids-style" id="fit-vids-style" style="display: none;">­<style>.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style></div>
<script type="text/javascript" src="<?=base_url('assets/js/jquery-2.js');    ?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/modernizr.js');  ?>"></script> 
<script type="text/javascript" src="<?=base_url('assets/js/jquery_006.js'); ?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/retina-1.js');   ?>"></script>   
<script type="text/javascript" src="<?=base_url('assets/js/jquery_004.js'); ?>"></script>
<script type="text/javascript">
(function($) { "use strict";
  $(document).ready(function() {
    
    $(".animsition").animsition({
    
    inClass               :   'zoom-in-sm',
    outClass              :   'zoom-out-sm',
    inDuration            :    1500,
    outDuration           :    800,
    linkElement           :   '.animsition-link', 
    loading               :    true,
    loadingParentElement  :   'body', //animsition wrapper element
    loadingClass          :   'animsition-loading',
    unSupportCss          : [ 'animation-duration', '-webkit-animation-duration','-o-animation-duration'],
    //"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser. 
    //The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
    
    overlay               :   false,
    
    overlayClass          :   'animsition-overlay-slide',
    overlayParentElement  :   'body'
    });
  });  
})(jQuery);
</script>
<script type="text/javascript" src="<?=base_url('assets/js/jquery_005.js'); ?>"></script> 
<script type="text/javascript" src="<?=base_url('assets/js/jquery_003.js'); ?>"></script> 
<script type="text/javascript">
  $('.header-top').hidescroll();
</script>

<script type="text/javascript" src="<?=base_url('assets/js/jquery_002.js'); ?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/owl.js'); ?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/masonry.js'); ?>"></script> 
<script type="text/javascript" src="<?=base_url('assets/js/isotope.js'); ?>"></script> 
<script type="text/javascript" src="<?=base_url('assets/js/scrollReveal.js'); ?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/jquery.js'); ?>"></script>
<script type="text/javascript">
(function($) { "use strict";
      window.scrollReveal = new scrollReveal();
})(jQuery);
</script>
<script type="text/javascript"> 
(function($) { "use strict";          
      jQuery(document).ready(function() {
        var offset = 450;
        var duration = 500;
        jQuery(window).scroll(function() {
          if (jQuery(this).scrollTop() > offset) {
            jQuery('.scroll-to-top').fadeIn(duration);
          } else {
            jQuery('.scroll-to-top').fadeOut(duration);
          }
        });
        
        jQuery('.scroll-to-top').click(function(event) {
          event.preventDefault();
          jQuery('html, body').animate({scrollTop: 0}, duration);
          return false;
        })
      });
})(jQuery);
</script>

<script type="text/javascript" src="<?=base_url('assets/js/custom-blog-grid-right.js');?>"></script>   
<script type="text/javascript" src="<?=base_url('assets/js/owl.carousel.min.js');?>"></script>   
<script type="text/javascript" src="<?=base_url('assets/js/custom-carousels.js');?>"></script>    
</body></html>