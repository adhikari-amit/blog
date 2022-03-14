<?php include('head.php'); ?>
    <body>
    
    <?php include("header.php"); ?>
    
    <!-- ========== Start Main Content ========== -->
     <section class="main-content">

<div class="container">
    <div class="archive-box">
        <h1>Our Authors</h1>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="row">
              <?php foreach($authors as $author): ?>  
                <div class="col-sm-3">
                    <div class="post-item">
                        <div class="post-thumbnail">
                        <a href='<?= base_url("author/{$author->slug}") ?>'><img class="img-responsive" src="<?=$author->image_path ?>" alt="..." style="height:38vh"></a>
                        </div>
                        <div class="post-category">
                            <ul class="post-categories">
                                <li><a href="<?=$author->facebook ?>"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="<?=$author->instagram ?>"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="<?=$author->twitter ?>"><i class="fab fa-twitter"></i></a></li>
                            </ul></div><div class="post-header">
                                <h3 class="post-title"><?=$author->name ?></h3>
                        </div>
                        <div class="post-content">
                            <p><?=substr($author->bio,0,100);?>...</p>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>  
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