<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Articles</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css'); ?>" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
   <?php include("admin_header.php"); ?>

  <div class="container"> 

    <table class="table table-hover">
    <thead>
      <tr>
        <th class="text-danger" scope="col">Type</th>
        <th class="text-danger" scope="col">Description</th>
      </tr>
    </thead>
    
    <tbody>
         <?php foreach ($category as $category): ?> 
      <tr >
       
        <th scope="row"><?=$category->title ?></th>
        <td><?=$category->description ?></td>

      </tr>
          <?php endforeach?>
    </tbody>
    
  </table>

</div>


   <a type="button" class="btn btn-primary btn-lg ms-5 my-5" href="<?= base_url('admin/new_category')?>"> + </a>
   <?php include("admin_footer.php"); ?>

 <script type="text/javascript" src="<?= base_url('assets/bootstrap/js/bootstrap.js');   ?>"></script> 


</body>
</html>
