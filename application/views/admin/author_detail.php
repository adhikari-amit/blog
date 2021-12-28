<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Article Detail</title>
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css'); ?>" >

</head>
<body>
   <?php include("admin_header.php"); ?>
   <div class="container">
   <h1 class="my-5 ms-5"><?= $authors->name ?></h1>
   <!-- <p class="my-5 ms-5">Published On: <?= date($article->created_at) ?></p> -->


   <div class="container">
    <p><?= $authors->bio ?></p>
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