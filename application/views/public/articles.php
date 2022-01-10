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
    
   <main class="cd-main-content">
   <!-- ========================== TOP SECTION ======================== -->  
      <section class="section parallax-section parallax-section-padding-top-bottom-pagetop section-page-top-title">
    
      <div class="parallax-blog-2"></div>
    
      <div class="container">
        <div class="eight columns">
          <h1>blog</h1>
        </div>
        <div class="eight columns">
          <div id="owl-top-page-slider" class="owl-carousel owl-theme">
            <div class="item">
              <div class="page-top-icon">&#xf0a1;</div>
              <div class="page-top-text"><?= $this->articlesmodel->numofrows_all_articles()?> posts</div>
            </div>
            <div class="item">
              <div class="page-top-icon"><i class="fas fa-eye"></i></div>
              <div class="page-top-text"><?= $total_view ?> Views</div>
            </div>
            <div class="item">
              <div class="page-top-icon"><i class="fas fa-list"></i></div>
              <div class="page-top-text"><?php echo count($categories)?> Category</div>
            </div>
          </div>
        </div>
      </div>
        
    </section>  
  <!-- ========================= SECTION ========================= -->  
  
    <section class="section white-section section-padding-top-bottom">
    
      <div class="container">
        <div class="sixteen columns">
          <div id="portfolio-filter">
            <ul id="filter">
              <li><a href="#" class="current" data-filter="*" title="">Show All</a></li>
              <li><a href="#" data-filter=".horror" title="">Horror</a></li>
              <li><a href="#" data-filter=".anime" title="">Anime</a></li>              
              <li><a href="#" data-filter=".comedy" title="">Comedy</a></li>
              <li><a href="#" data-filter=".thrill" title="">Thrill</a></li> 
            </ul>
          </div>
        </div>
      </div>
      
      <div class="clear"></div>      
      <div class="container">
        <div class="twelve columns remove-top">
          <div class="blog-wrapper">
            <div id="blog-grid-masonry" style="position: relative; overflow: hidden; height: 2004px;" class="isotope">
              <?php if(! $anime == []): ?>  
              <?php foreach ($anime as $article): ?>
                <a href='<?= base_url("blog/article/{$article->slug}") ?>' class="animsition-link">
                  <div class="blog-box-3 half-blog-width anime isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">              
                    <div class="blog-box-1 grey-section">
                      <img src="<?= $article->image_path ?>" alt="...">
                      <div class="blog-date-1"><i class="fas fa-calendar-days"></i> <?=$article->created_at ?></div>
                      <div class="blog-comm-1"><i class="fas fa-eye"></i> <?=$article->article_views ?><span></span></div>
                      <h6><?=$article->title ?></h6>
                      <p><?=$article->description ?></p><div class="link">&#10149;</div>
                    </div>
                  </div>
                </a>
             <?php endforeach; ?>
            <?php endif; ?>

            <?php if(!$horror == []): ?>  
              <?php foreach ($horror as $article): ?>
                <a href='<?= base_url("blog/article/{$article->slug}") ?>' class="animsition-link">
                  <div class="blog-box-3 half-blog-width horror isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">              
                    <div class="blog-box-1 grey-section">
                      <img src="<?= $article->image_path ?>" alt="...">
                      <div class="blog-date-1"><i class="fas fa-calendar-days"></i> <?=$article->created_at ?></div>
                      <div class="blog-comm-1"><i class="fas fa-eye"></i> <?=$article->article_views ?><span></span></div>
                      <h6><?=$article->title ?></h6>
                      <p><?=$article->description ?></p><div class="link">&#10149;</div>
                    </div>
                  </div>
                </a>
             <?php endforeach; ?>
            <?php endif; ?>
            <?php if(!$comedy == []): ?>  
              <?php foreach ($comedy as $article): ?>
                <a href='<?= base_url("blog/article/{$article->slug}") ?>' class="animsition-link">
                  <div class="blog-box-3 half-blog-width comedy isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">              
                    <div class="blog-box-1 grey-section">
                      <img src="<?= $article->image_path ?>" alt="...">
                      <div class="blog-date-1"><i class="fas fa-calendar-days"></i> <?=$article->created_at ?></div>
                      <div class="blog-comm-1"><i class="fas fa-eye"></i> <?=$article->article_views ?><span></span></div>
                      <h6><?=$article->title ?></h6>
                      <p><?=$article->description ?></p><div class="link">&#10149;</div>
                    </div>
                  </div>
                </a>
             <?php endforeach; ?>
            <?php endif; ?>
            <?php if(!$thrill == []): ?>  
              <?php foreach ($thrill as $article): ?>
                <a href='<?= base_url("blog/article/{$article->slug}") ?>' class="animsition-link">
                  <div class="blog-box-3 half-blog-width thrill isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">              
                    <div class="blog-box-1 grey-section">
                      <img src="<?= $article->image_path ?>" alt="...">
                      <div class="blog-date-1"><i class="fas fa-calendar-days"></i> <?=$article->created_at ?></div>
                      <div class="blog-comm-1"><i class="fas fa-eye"></i> <?=$article->article_views ?><span></span></div>
                      <h6><?=$article->title ?></h6>
                      <p><?=$article->description ?></p><div class="link">&#10149;</div>
                    </div>
                  </div>
                </a>
             <?php endforeach; ?>
            <?php endif; ?> 
            </div>
          </div>
        </div>
        <div class="four columns" data-scroll-reveal="enter top-bottom move 200px over 1s after 0.3s">
          <div class="post-sidebar"  >
            <?php echo form_open('blog/search_item'); ?>
            <?php $data = array(
            'name'          => 'query',
            'id'            => 'query',
            'placeholder'   =>"type to search and hit enter",
            'type'          =>"text",
            'value' => set_value('query'),
            );

            echo form_input($data);          
            ?>
            <?= form_close(); ?>
            <div class="separator-sidebar"></div>
            <h6>Categories</h6>
            <ul class="link-recents">
              <?php foreach ($categories as $category): ?>
                <li><a href='<?= base_url("blog/category/{$category->title}");?>' ><?=$category->title ?></a></li>
              <?php endforeach; ?>
            </ul>

            <div class="separator-sidebar"></div>
            <h6>recent posts</h6>
            <ul class="link-recents">
              <?php foreach ($new_articles as $newarticle): ?>
              <li><a href='<?= base_url("blog/article/{$newarticle->slug}");?>'><?= $newarticle->title ?></a></li>
               <?php endforeach; ?>
            </ul>
             <div class="separator-sidebar"></div>
              <h6>Most Viewed</h6>
              <ul class="link-recents">
               <?php foreach ($most_articles as $mostarticle): ?>
                  <li><a href='<?= base_url("blog/article/{$mostarticle->slug}") ?>'><?= $mostarticle->title ?>(<?=$mostarticle->article_views ?>)</a></li>
               <?php endforeach; ?>
              </ul>  
        
            <div class="separator-sidebar"></div>
            <h6>tags</h6>
            <ul class="link-tag">
            <?php foreach($tags as $t): ?>
              <li><a href="<?=base_url("blog/tag/{$t->tag}");?>"><?=($t->tag);?></a></li>  
             <?php endforeach ?>  
            </ul>

            <div class="separator-sidebar"></div>
            <h6>Subscribe to Our Newslatter</h6>
             <div class="leave-reply grey-section" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s"> 
              <?php echo form_open('blog/subscribe_to_newslatter'); ?>
              <?php $data = array(
              'name'          => 'email',
              'id'            => 'email',
              'placeholder'   =>"enter youre email",
              'type'          =>"email",
              'value' => set_value('email'),
              );
              echo form_input($data);          
              ?>
              <?php echo form_error('email', '<p>', '</p>') ?>
              <?php $data = array(
              'name'          => 'submit',
              'value'         => 'Subscribe',
              'type'          => 'submit',
             );
              echo form_submit($data);
              ?>
              <?= form_close(); ?>
              </div>

          </div>
        </div>
      </div>
    </section>    
        

  <!-- ========================= SECTION ========================= -->  
  
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
</body></html>