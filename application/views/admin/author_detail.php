<?php include("admin_head.php"); ?>
<body>
   <?php include("admin_header.php"); ?>
   <div class="container">
   <h1 class="my-5 ms-5"><?= $authors->name ?></h1>

   <div class="container">
    <p><?= $authors->bio ?></p>
    <p><strong>Instagram:</strong>  <?= $authors->instagram ?></p>
    <p><strong>Facebook:</strong>  <?= $authors->facebook ?></p>
    <p> <strong>Twitter:</strong>  <?= $authors->twitter ?></p>
   </div>

   <?php if(! is_null($authors->image_path)): ?>
 
    <div class="card ">
      <img src="<?= $authors->image_path ?>" alt="" class='figure-img img-fluid rounded' style='height: 350px; width: 350px; margin:auto;'>
  </div>
</div>
   
    <?php endif?>
 </div>
   <?php include("admin_footer.php"); ?>

 <script type="text/javascript" src="<?= base_url('assets/bootstrap/js/bootstrap.js');   ?>"></script> 


</body>
</html>