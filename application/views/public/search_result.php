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
   
   <h1 class="my-5 ms-5">Searched Articles</h1>
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
   <?php  $count=$this->uri->segment(4,0); ?>
    <!--  -->
    <?php foreach ($articles as $article): ?>
    
    <tr class="table-success">
      <th scope="row"><?= ++$count ?></th> 
      <!-- <th scope="row">1</th> -->
      <td><?= $article->title ?></td>
      <td><?= $article->created_at ?></td>

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