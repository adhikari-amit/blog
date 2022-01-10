<!DOCTYPE html>

<html class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths" lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Admin</title>
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
  
</head>

<body>
   <div class="animsition">
   <?php include("header.php"); ?>
      <main class="cd-main-content">
        <br>
       <section class="section white-section section-padding-top-bottom">      
         <div class="container">
          <?php echo form_open('login/admin_login'); ?>            
               <div class="blog-big-wrapper grey-section" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">
                <div class="leave-reply grey-section" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">
                  <h6>Admin Login</h6>                   
                   <?php  if($error=$this->session->flashdata('login_faild')): ?>
                      <div class="alert alert-dismissible alert-danger">
                        <strong>Oh snap! </strong> <a href="#" class="alert-link"><?= $error ?></a>. try submitting again.
                      </div>
                   <?php endif; ?>

                  <?php $data = array(
                    'name'          => 'username',
                    'id'            => 'username',
                    'type'          => 'text',
                    'placeholder'   =>"NAME",
                    'value'         => set_value('username'),
                    );

                    echo form_input($data);
                  ?>
                  <?php echo form_error('username', '<p>', '</p>') ?>
                  <!-- <input name="email" type="text"   placeholder="EMAIL *"> -->
                  <?php $data = array(
                    'name'          => 'password',
                    'id'            => 'password',
                    'type'          => 'password',
                    'placeholder'   => "PASSWORD",
                    );

                    echo form_input($data);
                  ?>
                  <?php echo form_error('password', '<p>', '</p>') ?>
                  <!-- <button type="submit" class="post-comment">Login</button> -->
                  <?php $data = array(
                    'name'          => 'submit',
                    'value'         => 'Login',
                    'type'          => 'submit',
                    'class'         => 'post-comment',
                   );
                  echo form_submit($data);
                  ?>
                </div>
             </div>
            <?= form_close(); ?>
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
<script type="text/javascript" src="<?=base_url('assets/js/custom-blog-grid-right.js');?>"></script>     
<!-- ========================= End Document ========================= -->

</body>
</html>


