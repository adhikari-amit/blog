<?php include('head.php'); ?>
    <body>
    
    <?php include("header.php"); ?>
    
    <!-- ========== Start Main Content ========== -->
   <section class="main-content post-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="row">
                         <center><h3>OUR BELOVED WRITER</h3></center> 
                          <br>
                            <div class="col-xs-12">                                
                                    <!-- Author bio -->
                                    <div class="author-box" style="background-color:#efefef; ">
                                        <div class="author-image">
                                 <img class="img-responsive" src="<?=$author->image_path ?>" alt="" height="107" width="107">
                                        </div>
                                        <div class="author-info">
                                            <h3 class="author-name"><?=$author->name ?></h3>
                                            <p class="author-desc"><?=$author->bio ?></p>
                                            <div class="social-icons">
                                                <ul class="social-icons-menu list-unstyled">
                                                   <li><a href="<?=$author->twitter ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                   <li><a href="<?=$author->instagram ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                  
                                                   <li><a href="<?=$author->facebook ?>" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                             </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                    
                                      <h3><i class="fa fa-edit"></i> Articles from <?=$author->name ?></h3>
                                 
                                 </div>
                                  <div class="category-owl">
                                    <?php foreach($author_blog as $article): ?>
                                    <div class="category-item">
                                          <div class="category-bg" style="background-image: url('<?=$article->image_path ?>');"></div>
                                        <div class="category-info">
                                          <a href="<?= base_url("category/{$article->slug}");?>"><?=$article->title ?></a>
                                        </div>
                                    </div>
                                    <?php endforeach ?>              
                                    </div>                                                                 
        </div>
                        </div>
                    </div>     
                </div>
            </div>
         </section>
    
         <!-- ========== End Main Content ========== -->
    
         <!-- ========== Start Scroll To Top ========== -->
    
         <a href="#" class="scroll-top">
                 <span><i class="fa fa-arrow-up"></i></span>
             </a>
    
         <!-- ========== End Scroll To Top ========== -->
    
        <?php include('footer.php'); ?>
        <?php include('foot.php'); ?>
    </body> 
</html>