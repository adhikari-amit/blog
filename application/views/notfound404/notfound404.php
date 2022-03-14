<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="FusionBlog - Personal Blog Theme">
        <meta name="keywords" content="Html, Css, jQuery, JavaScript, FusionBlog, blog, personal blog, template, news theme">
        
       
        <title>Kahaniyaa - STORIES, POEMS, OLD STORIES, REVIEWS</title>
       
        <link rel="icon" href="images/icon.png">
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap">
        <link rel="stylesheet" href="<?=base_url('assets/css/font-awesome.min.css');?>">       
        <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css');?>">     
        <link rel="stylesheet" href="<?=base_url('assets/css/slick.min.css');?>">    
        <link rel="stylesheet" href="<?=base_url('assets/css/main.css');?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/fontawesome/css/all.min.css');?>">

</head>
	<body>
		 <!-- ========== Start Loading ========== -->
    
     <div class="loading">
            <div class="loading-content">
                <div class="inner-item"></div>
                <div class="inner-item"></div>
                <div class="inner-item"></div>
                <div class="inner-item"></div>
                <div class="inner-item"></div>
            </div>
        </div>
    
    <!-- ========== End Loading ========== -->
    
    <!-- ========== Start Header ========== -->
    
    <header>
        <div class="site-brand text-center">
        <div class="container">
          <a href="/">
            <div class="header-with-logo" style="display:flex; flex-wrap: nowrap; align-items: baseline;"><h2 class="site-logo-name" style="font-family: Samarkan;">Kahaniyaa..</h2><img class="img-responsive-header" src="<?=base_url('assets/images/logo.png');?>"></div></a>
          </a>
        </div>
      </div>
            <div class="header-inner">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-sm-8 col-xs-3 pos-s">
                <button class="menu-toggle">
                  <span class="bar"></span>
                  <span class="bar"></span>
                  <span class="bar"></span>
                </button>
                  <nav class="navbar navbar-default">
                    <div class="collapse navbar-collapse">
                      <ul class="nav navbar-nav">
                        <li class="menu-item active">
                          <a href="<?=base_url(); ?>">Home</a>
                        </li>
                        <li class="menu-item dropdown">
                          <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Chronicles <span class="caret"></span></a>
                                <ul role="menu" class=" dropdown-menu">
                                  <li class="menu-item"><a href="archive.html">Sci-Fi</a></li>
                                  <li class="menu-item"><a href="author.html">Triller</a></li>
                                  <li class="menu-item"><a href="category.html">Fantasy</a></li>
                                  <li class="menu-item"><a href="tag.html">Horror</a></li>
                                  <li class="menu-item"><a href="404.html">Action</a></li>
                                  <li class="menu-item"><a href="404.html">Comedy</a></li>
                                  <li class="menu-item"><a href="404.html">Mythology</a></li>
                                  <li class="menu-item"><a href="404.html">Romance</a></li>
                                  <li class="menu-item"><a href="404.html">Adventure</a></li>
                                </ul>
                        </li>
                        <li class="menu-item">
                          <a href="category.html">Poetry</a>
                        </li>
                        <li class="menu-item">
                          <a href="category.html">Old Stories</a>
                        </li>
                        <li class="menu-item">
                          <a href="category.html">Puzzles</a>
                        </li>
                        <li class="menu-item dropdown">
                          <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Review <span class="caret"></span></a>
                                <ul role="menu" class=" dropdown-menu">
                                  <li class="menu-item"><a href="archive.html">Book Review</a></li>
                                  <li class="menu-item"><a href="author.html">Movie Review</a></li>
                                </ul>
                        </li>
                        <li class="menu-item">
                          <a href="about.html">Events</a>
                        </li>
                        <li class="menu-item">
                           <a href="<?=base_url('about');?>">About</a>
                        </li>
                        <li class="menu-item">
                           <a href="<?=base_url('contact'); ?>">Contact</a>
                        </li>
                        <li class="menu-item">
                           <a href="<?=base_url('submitarticle');?>">Submit Article</a>
                        </li>
                      </ul>
                   </div>
                </nav>
              </div>
              <div class="col-md-3 col-sm-4 col-xs-9 text-md-center">
              <div class="search-toggle">
                  <i class="fa fa-search"></i>
              </div>
              <ul class="social-icons-menu list-unstyled">
                <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
              </ul>
              </div>
            </div>  
                </div>
            </div>
      <div class="search-area">
        <span class="close-search">
          <i class="fa fa-close"></i>
        </span>
        <div class="display-table">
          <div class="display-table-cell">

             <?php echo form_open('blog/search_item'); ?>
              <div id="cd-search" class="search-form">
              <?php $data = array(
                  'name'          => 'query',
                  'id'            => 'query',
                  'class'         =>'search-form',
                  'placeholder'   =>"Search our blogs...",
                  'type'          =>"search",
                  'value' => set_value('query'),
                  );

                  echo form_input($data);          
              ?>
                <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>  
               </div>
            <?= form_close(); ?>

         
          </div>
        </div>
      </div>
      
  </header>
		
		<!-- ========== End Header ========== -->
		
        <section class="main-content">
            <div class="container">
		        <main id="main" class="site-main" role="main">
			        <section class="error-404 not-found">
				        <header class="page-header">
					        <h1 class="page-title">404</h1>
				        </header>
				        <div class="page-content">
                            <p>We are sorry. But the page you are looking for cannot be found.</p>
                            <span class="back"><a href="<?=base_url(); ?>">Back To Home</a></span>
				        </div>
			        </section>
                </main>
            </div>
	    </section>
		
      <div class="footer text-center">
    <div class="footer-info">
      <div class="container">
        <div class="row">
          <br>            
          <img class="img-responsive-header" src="<?=base_url('assets/images/footer.webp') ?>" alt="..." style="width:45%; height:40%; margin-left:30px">
        </div>
        <div class="row">
          <br>
          <div class="footerlinks">
            <h3>Discover</h3>
            <a class="linksinfooter" href="/authors">Our Authors</a>
            <a class="linksinfooter" href="/about">About Us</a>
            <a class="linksinfooter" href="/submitarticle">Submit Article</a>
            <a class="linksinfooter" href="/tandc">Terms of Use</a>
          </div>
        </div>
        <div class="row">
          <br>
          <div class="footerlinks">
            <h4>Connect with Us</h4>
            <ul class="social-icons-menu list-unstyled">
              <li><a target="_blank" href="https://www.facebook.com/kahaniyaa.official"><i class="fab fa-facebook"></i></a></li>
              <li><a target="_blank" href="https://www.instagram.com/kahaniyaa.official/"><i class="fab fa-instagram"></i></a></li>
              <li><a target="_blank" href="https://kahaniyaa.com/contactus"><i class="fa fa-envelope"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright-only">

      <p class="copyright">Copyright © 2021 Kahaniyaa. All rights reserved.
    </div>
  </div>
  <!-- ========== Js ========== -->
<script type="text/javascript" src="<?= base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/slick.min.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/main.js'); ?>"></script>