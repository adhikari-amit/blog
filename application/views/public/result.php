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
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/fontawesome/css/fontawesome.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/fontawesome/css/all.css');         ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/owl.css');        ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/retina.css');     ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/colorbox.css');   ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/animsition.css'); ?>">
  
  <link rel="alternate stylesheet" type="text/css" href="<?=base_url('assets/css/colors/color-gold.css');?>" title="1" disabled="">
  <link rel="alternate stylesheet" type="text/css" href="<?=base_url('assets/css/colors/color-2.css');   ?>"    title="2" disabled="">
  <link rel="alternate stylesheet" type="text/css" href="<?=base_url('assets/css/colors/color-3.css');   ?>"   title="3" disabled="">
  <link rel="alternate stylesheet" type="text/css" href="<?=base_url('assets/css/colors/color-4.css');   ?>"   title="4" disabled="">
  <link rel="alternate stylesheet" type="text/css" href="<?=base_url('assets/css/colors/color-5.css');   ?>"   title="5" disabled=""> 
  <link rel="alternate stylesheet" type="text/css" href="<?=base_url('assets/css/colors/color-6.css');   ?>"   title="6" disabled=""> 
  <link rel="alternate stylesheet" type="text/css" href="<?=base_url('assets/css/colors/color-7.css');   ?>"   title="7" disabled="">
  
</head>
<body>
    <div class="animsition">
    <?php include("header.php"); ?>
      
   <main class="cd-main-content">
  

  <!--======================= SECTION =========================== -->  
    <section class="section white-section section-padding-top-bottom">
    
      <div class="container">
        <div class="sixteen columns">
          <div id="portfolio-filter">
            <ul id="filter">
              <li><a href="#" class="current" data-filter="*" title="">Show All</a></li>
              <li><a href="#" data-filter=".photo" title="">Photo</a></li>
              <li><a href="#" data-filter=".media" title="">Media</a></li>
              <li><a href="#" data-filter=".news" title="">News</a></li>
              <li><a href="#" data-filter=".links" title="">Links</a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="clear"></div>      
      <div class="container">
        <div class="twelve columns remove-top">
          <div class="blog-wrapper">
            <div id="blog-grid-masonry" style="position: relative; overflow: hidden; height: 2004px;" class="isotope">
            <?php if(! $articles == []): ?>  
            <?php foreach ($articles as $article): ?>
              <a href='<?= base_url("blog/article/{$article->slug}") ?>' class="animsition-link">
                <div class="blog-box-3 half-blog-width photo isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">              
                  <div class="blog-box-1 grey-section">
                    <!-- <img src="<?=$article->image_path ?>" alt=" "> -->
                    <div class="blog-date-1"><?=$article->created_at  ?></div>
                    <div class="blog-comm-1"><?=$article->article_views ?><span>&#128064;</span></div>
                    <h6><?=$article->title ?></h6>
                    <p><?=$article->description ?></p><div class="link">&#10149;</div>
                  </div>
                </div>
              </a>
            <?php endforeach; ?>
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
            </div>
          </div>
        </div>
        <div class="four columns">
          <div class="post-sidebar">
            <div class="separator-sidebar"></div>
            <h6>Categories</h6>
            <ul class="link-recents">
              <?php foreach ($categories as $category): ?>
                <li><a href='<?= base_url("blog/category/{$category->title}") ?>' ><?= $category->title ?></a></li>
              <?php endforeach; ?>
            </ul>

            <div class="separator-sidebar"></div>
            <h6>recent posts</h6>
            <ul class="link-recents">
              <?php foreach ($new_articles as $newarticle): ?>
              <li><a href='<?= base_url("blog/article/{$newarticle->slug}") ?>'><?= $newarticle->title ?></a></li>
               <?php endforeach; ?>
            </ul>
            
            
            <div class="separator-sidebar"></div>
            <h6>tags</h6>
            <ul class="link-tag">
              <li><a href="#">Art</a></li>  
              <li><a href="#">Articles</a></li>  
              <li><a href="#">Audio</a></li> 
              <li><a href="#">Business</a></li>  
              <li><a href="#">Culture</a> </li> 
              <li><a href="#">Development</a> </li> 
              <li><a href="#">Ecology</a></li>  
              <li><a href="#">Events</a> </li> 
              <li><a href="#">Information</a> </li> 
              <li><a href="#">Inspiration</a></li>  
              <li><a href="#">Nature</a> </li> 
              <li><a href="#">Opportunities</a> </li> 
              <li><a href="#">Science</a> </li> 
              <li><a href="#">Trends</a> </li> 
              <li><a href="#">Video</a></li> 
            </ul>
          </div>
        </div>
      </div>
    </section>    
        

  <!--- ======================== SECTION ========================== -->  
  
    <section class="section grey-section section-padding-top-bottom">
    
      <div class="container">
        <div class="sixteen columns">
           <?= $this->pagination->create_links(); ?>
        </div>
      </div>
      
    </section>    
 
    <?php include("footer.php"); ?>

  </main>  
    <div class="scroll-to-top">&#xf106;</div>
    </div>    
  
   
  <!-- ========================= JAVASCRIPT ========================= -->

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

<script type="text/javascript" src="<?=base_url('assets/js/styleswitcher.js');         ?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/custom-blog-grid-right.js');?>"></script>     
</body>
</html>


