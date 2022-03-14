<?php include("admin_head.php"); ?>
<body>
   <?php include("admin_header.php"); ?>
   <div class="container">
   <h1 class="my-5 ms-5"><?= $authors->author_name ?></h1>

   <div class="container">
    <p><?= $authors->author_bio ?></p>
    <p><strong>Instagram:</strong>  <?= $authors->author_instagram ?></p>
    <p><strong>Facebook:</strong>  <?= $authors->author_facebook ?></p>
    <p> <strong>Twitter:</strong>  <?= $authors->author_twitter ?></p>
   </div>
 </div>
   <?php include("admin_footer.php"); ?>

 <script type="text/javascript" src="<?= base_url('assets/bootstrap/js/bootstrap.js');   ?>"></script> 


</body>
</html>