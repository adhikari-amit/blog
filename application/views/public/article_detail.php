<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Article Detail</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css'); ?>" >

</head>
<body>
   <?php include("header.php"); ?>
   <div class="container">
   <h1 class="my-5 ms-5"><?= $article->title ?></h1>
   <p class="my-5 ms-5">Published On: <?= date($article->created_at) ?></p>


   <div class="container">
   	<p><?= $article->body ?></p>
   </div>

   <?php if(! is_null($article->image_path)): ?>
 
    <img src="<?= $article->image_path ?>" alt="">
    <?php endif?>
 </div>
   <?php include("footer.php"); ?>

 <script type="text/javascript" src="<?= base_url('assets/bootstrap/js/bootstrap.js');   ?>"></script> 


</body>
</html>