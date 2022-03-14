<?php include("admin_head.php"); ?>
<body>
   <?php include("admin_header.php"); ?>
   <div class="container">
   <h1 class="my-5 ms-5"><?= $category->title ?></h1>
   <div class="container">
    <p><?= $category->description?></p>
   </div>
   
   <?php if(! is_null($category->image_path)): ?>
 
    <div class="card text-center">
      <img src="<?= $category->image_path ?>" alt=""class='figure-img img-fluid rounded' style='height: 550px; width:750px; margin: auto;'>
  </div>
</div>
   
    <?php endif?>
 </div>
   <?php include("admin_footer.php"); ?>

 <script type="text/javascript" src="<?= base_url('assets/bootstrap/js/bootstrap.js');   ?>"></script> 


</body>
</html>