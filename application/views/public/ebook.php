<?php include('head.php'); ?>
    <body>
    
    <?php include("header.php"); ?>
    
    <!-- ========== Start Main Content ========== -->
     <section class="main-content">

<div class="container">
    <div class="archive-box" style="background:rgb(239, 239, 239);">
        <h1>eBooks</h1>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="row">
              <?php foreach($ebooks as $ebook): ?>  
                <div class="col-sm-3">
                    <div class="post-item">
                        <div class="post-thumbnail">
                      <img class="img-responsive" src="<?=$ebook->ebook_banner_path ?>" alt="..." style="height:38vh">
                        </div>
                        <div class="post-header">
                                <h3 class="post-title"><?=$ebook->ebook_name ?></h3>
                        </div>
                        <div class="post-content">
                            <p><?=substr($ebook->description,0,300);?>...</p>
                        </div>
                        <div class="post-footer" ><span class="download" style="background: #f3a079;padding: 5px 6px;border-radius: 3rem;color: white;"><a style="color: white;" class="download-link" href="<?=$ebook->ebook_path ?>" download> Download <i class="fa fa-download  "></i></a></span></div>
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