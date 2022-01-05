<!DOCTYPE html>

<html class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths" lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Clymene</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ======================== CSS ========================== -->
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/base.css');                        ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/skeleton.css');                    ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/layout.css');                      ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/settings.css');                    ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/fontawesome/css/fontawesome.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/fontawesome/css/all.css');         ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/owl.css');                         ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/retina.css');                      ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/colorbox.css');                    ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/animsition.css');                  ?>">
  
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
     
   <!-- ======================== TOP SECTION ========================== -->
   
      <section class="section white-section section-home-padding-top">
      
         <div class="container">
            <div class="sixteen columns">
               <div class="section-title left">
                  <h1><?=$article->title ?></h1>
                  <div class="subtitle left big">Autor:<?= $article->author ?></div>
                  <br>
                  <p> <strong>Description:</strong><?=$article->description  ?> </p>
                  <br>
                  <P> <i class=" fas fa-eye"></i> <strong>Views:</strong> <?=$article->article_views ?> </P>
               </div>
            </div>
         </div>
            
      </section>  

   <!-- ========================= SECTION ========================= -->  
   
      <section class="section white-section section-padding-bottom">
      
         <div class="container">
            <div class="twelve columns">
            
               <div class="blog-big-wrapper grey-section" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">
                  <div class="big-post-date"><span>&#x1F4C5;</span> <?= $article->created_at; ?></div>
                  <img src="<?=$article->image_path; ?>" alt="">
                  <?= htmlspecialchars_decode($article->body) ?>             
               </div>   
               <div class="post-tags-categ grey-section" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">
                  <p>Category: <a href="#"><?=$article->categories?></a>,<span>|</span>Tags: <a href="#"><?= ($article_tag->tag)  ?></a></p>
               </div>   
               <div class="post-content-share grey-section" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">
                  <div class="social-share">
                     <span>share:</span>
                     <ul class="list-social-share">
                       
                        <li class="icon-soc-share">
                           <a href="" target="_blank" class="facebook-btn">
                              <i class="fab fa-facebook"></i>
                           </a>
                        </li>
                          <li class="icon-soc-share">
                           <a href="" target="_blank" class="twitter-btn">
                               <i class="fab fa-twitter"></i>
                           </a>
                        </li>
                        <li class="icon-soc-share">
                           <a href="#" target="_blank" class="whatsapp-btn"><i class="fab fa-whatsapp"></i></a>
                        </li>
                     </ul>
                  </div>            
               </div>   
               <div class="post-content-com-top grey-section" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">   
                  <p>COMMENTS <span>(3)</span></p>
               </div>   
               
               <div class="post-content-comment grey-section" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">
                  <img  src="images/team11.jpg" alt="" />
                  <h6>ALEX ANDREWS</h6>   
                  <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>  
                  <a href="#"><div class="reply">reply</div></a>
               </div>   
               
               <div class="post-content-comment reply-in grey-section" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">
                  <img  src="images/team22.jpg" alt="" />
                  <h6>KARA KULIS</h6>
                  <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p> 
                  <a href="#"><div class="reply">reply</div></a>
               </div>
               
               <div class="post-content-comment grey-section" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">
                  <img  src="images/team33.jpg" alt="" />
                  <h6>FRANK FURIOUS</h6>
                  <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p> 
                  <a href="#"><div class="reply">reply</div></a>
               </div>
               
               <div class="leave-reply grey-section" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">
                  <h6>LEAVE A REPLY</h6>
                  <p>Your email address will not be published. Required fields are marked *</p> 
                  <input name="name" type="text"   placeholder="NAME *"/>
                  <input name="email" type="text"   placeholder="EMAIL *"/>
                  <input name="website" type="text"   placeholder="website"/>
                  <textarea name="website"  placeholder="COMMENT"></textarea>
                  <button class="post-comment">post comment</button>
               </div>
               
            </div>
            <div class="four columns" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">
               <div class="post-sidebar">
                  <div class="separator-sidebar"></div>
                  <h6>Categories</h6>
                  <ul class="link-recents">
                     <?php foreach ($categories as $category): ?>
                        <li><a  href='<?= base_url("blog/category/{$category->title}") ?>' ><?= $category->title ?></a></li>
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
                     <li><a href="#">Analysis</a></li> 
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
            
      
   <!-- ========================= SECTION ========================= -->  
   
      <section class="section grey-section section-padding-top-bottom">
         <div class="container">
            <div class="sixteen columns">
               <div class="section-title">
                  <h3>Related Posts</h3>
               </div>
            </div>
            <?php foreach ($related_articles as $key): ?>               
            <div class="one-third column" data-scroll-reveal="enter left move 200px over 1s after 0.3s">
               <a href='<?= base_url("blog/article/{$key->slug}") ?>' class="animsition-link">
                  <div class="blog-box-1 white-section">
                     <img src="<?=$key->image_path ?>"  alt="">
                     <div class="blog-date-1"><?= $key->created_at?></div>
                     <div class="blog-comm-1">3 <span>&#xf086;</span></div>
                     <h6><?=$key->title ?></h6>
                     <P> <i class=" fas fa-eye"></i> <strong>Views:</strong> <?=$article->article_views ?> </P>
                     <div class="link">&#xf178;</div>
                  </div>
               </a>
            </div>
            <?php endforeach; ?>                      
         </div>
      </section>    
      
   <!-- ======================== FOOTER ========================== -->  

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
<script type="text/javascript" src="<?=base_url('assets/js/socialmedia.js')  ;?>"></script>     
<!-- ========================= End Document ========================= -->


<!-- ========================= Share Button ========================= -->
</body>
</html>


