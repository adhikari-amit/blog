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
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/base.css');                        ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/skeleton.css');                    ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/layout.css');                      ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/settings.css');                    ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/fontawesome/css/fontawesome.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/fontawesome/css/all.min.css');         ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/owl.css');                         ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/retina.css');                      ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/colorbox.css');                    ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/animsition.css');                  ?>">
    
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
                  <div class="subtitle left big"><?= $article->author ?></div>
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
            
               <div class="blog-big-wrapper grey-section">
                  <div class="big-post-date"><i class="fas fa-calendar-days"></i><?= $article->created_at;?></div>
                  <img src="<?=$article->image_path; ?>" alt="...">
                  <?= htmlspecialchars_decode($article->body) ?>             
               </div>   
               <div class="post-tags-categ grey-section" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">
                  <p>Category: <a href="#"><?=$article->categories?></a><span>|</span>Tags: 

                    <?php foreach($article_tag as $item): ?>
                     <a href="<?=base_url("blog/tag/{$item->tag}");?>">#<?= $item->tag ?> </a>
                  <?php endforeach ?>
               </p>
                     
               </div>   
               <div class="post-content-share grey-section" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">
                  <div class="social-share">
                     <span>share:</span>
                     <ul class="list-social-share">
                       
                        <li class="icon-soc-share">
                           <a href="" target="_blank" class="facebook-btn" rel="noreferrer">
                              <i class="fab fa-facebook"></i>
                           </a>
                        </li>
                          <li class="icon-soc-share">
                           <a href="" target="_blank" class="twitter-btn" rel="noreferrer">
                               <i class="fab fa-twitter"></i>
                           </a>
                        </li>
                        <li class="icon-soc-share">
                           <a href="#" target="_blank" class="whatsapp-btn"><i class="fab fa-whatsapp" rel="noreferrer"></i></a>
                        </li>
                     </ul>
                  </div>            
               </div>

               <div class="post-content-com-top grey-section" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">   
                  <p>COMMENTS <span>(<?php echo count($comments) ?>)</span></p>
               </div>
                  
               <?php foreach ($comments as $comment): ?>
               <div class="post-content-comment grey-section" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">
                  <h6><?=$comment->user_name ?></h6>
                  <div class='blog-date-1'>Commented On: <?= $comment->createdOn?></div>     
                  <p><?= $comment->comments?></p>  
               </div>                  
              <?php endforeach ;?>

               <?php echo form_open('blog/add_comments'); ?> 
               <div class="leave-reply grey-section" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">
                  <h6>LEAVE A COMMENT</h6>
                  <p>Your email address will not be published. Required fields are marked *</p>
                  <?php echo form_hidden('article_id',$article->id );?>
                  <?php echo form_hidden('time',date("Y/m/d")); ?>
                  <?php echo form_hidden('article_slug',$article->slug ); ?>
                   <?php $data = array(
                    'name'          => 'name',
                    'id'            => 'name',
                    'type'          => 'text',
                    'placeholder'   =>"NAME *",
                    'value'         => set_value('name'),
                    );

                    echo form_input($data);
                  ?>
                  <?php echo form_error('name', '<p>', '</p>') ?> 
                   <?php $data = array(
                    'name'          => 'email',
                    'id'            => 'email',
                    'type'          => 'email',
                    'placeholder'   =>"EMAIL *",
                    'value'         => set_value('email'),
                    );

                    echo form_input($data);
                  ?>
                  <?php echo form_error('email', '<p>', '</p>') ?>
                 
                  <?php $data = array(
                    'name'          => 'comment',
                    'id'            => 'comment',
                    'type'          => 'textarea',
                    'placeholder'   =>"COMMENT ",
                    'value'         => set_value('comment'),
                    );

                    echo form_textarea($data);
                  ?>
                  <?php echo form_error('comment', '<p>', '</p>') ?> 


                  <?php $data = array(
                    'name'          => 'submit',
                    'value'         => 'Post Comment',
                    'type'          => 'submit',
                    'class'         => 'post-comment',
                   );
                  echo form_submit($data);
                  ?>
               </div>
               <?= form_close(); ?>

               
            </div>
            <div class="four columns" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">
               <div class="post-sidebar">
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
                    <?php echo form_open('blog/newslatter'); ?>
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
                     <div class="blog-comm-1"><i class=" fas fa-eye"></i> <?=$key->article_views ?></div>
                     <h6><?=$key->title ?></h6>
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


<!-- ========================= Share Button ========================= -->
<script type="text/javascript" src="<?=base_url('assets/js/custom-blog-grid-right.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/socialmedia.js')  ;?>"></script>

<!-- ========================= Comment System ========================= -->
<script type="text/javascript" src="<?=base_url('assets/js/comment.js');?>"></script> 

</body>
</html>


