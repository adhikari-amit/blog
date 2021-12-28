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