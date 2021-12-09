<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Articles</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css'); ?>" >

</head>
<body>
   <?php include("header.php"); ?>
   
   <h1 class="my-5 ms-5">Articles</h1>
   <div class="container-fluid">
   	 <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Sr. No</th>
      <th scope="col">Article Title</th>
      <th scope="col">Published On</th>
    </tr>
  </thead>
  <tbody>

  <?php  if(count($articles)):  ?>  

    <!-- For article number -->
   <?php  $count=$this->uri->segment(3,0); ?>
    <!--  -->
    <?php foreach ($articles as $article): ?>
    
    <tr class="table-success">
      <th scope="row"><?= ++$count ?></th>
      <td><?= anchor("user/article/{$article->id}" ,$article->title) ?></td>
      <!-- <td><?=date('y-m-d H:i:s',strtotime($article->created_at));  ?></td>  -->
      <td> <?= $article->created_at ?></td> 

    </tr>
  <?php endforeach; ?>
  <?php else: ?>

  <tr colspan="3"> No Record Found</tr>
   <?php endif;?>

  </tbody>
</table>
<!-- Pagination -->
 <?= $this->pagination->create_links(); ?> 

   </div>
   
   <?php include("footer.php"); ?>

 <script type="text/javascript" src="<?= base_url('assets/bootstrap/js/bootstrap.js');   ?>"></script> 


</body>
</html>