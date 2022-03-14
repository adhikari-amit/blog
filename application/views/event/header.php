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
                          <a href="<?=base_url('event')?>">Events</a>
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