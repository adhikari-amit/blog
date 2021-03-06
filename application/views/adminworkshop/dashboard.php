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
   <?php include("adminworkshop_header.php"); ?>
    
  <!-- This is Flash data for successfully inserting Article -->
      <?php  if($success=$this->session->flashdata('success')): ?>
            <div class="alert alert-dismissible alert-success">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              <strong>Well! </strong> <a href="#" class="alert-link"><?= $success ?></a>.
            </div>
      <?php endif; ?>
      <?php  if($faliure=$this->session->flashdata('faliure')): ?>
            <div class="alert alert-dismissible alert-danger">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              <strong>Alash! </strong> <a href="#" class="alert-link"><?= $faliure ?></a>.
            </div>
      <?php endif; ?>
   

      <div class="container-fluid my-5 ">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Sr. No.</th>
            <th scope="col">WorkShop Name</th>
            <th scope="col">Venue</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

        <?php   if(count($workshops)): ?>

          <!-- For article number -->
          <?php  $count=$this->uri->segment(3,0); ?>
          <!--  -->

         <?php  foreach($workshops as $workshop): ?>

            <tr class="table-success">
            <th scope="row"><?= ++$count ?></th>
            <td><?= $workshop->workshop_name; ?></td>
            <td><?= $workshop->workshop_venue; ?></td>
            <td><?= $workshop->price; ?></td>
            <td> 
              <?= anchor("adminworkshop/delete_workshop/{$workshop->workshop_id}","Delete",['class'=>'btn btn-outline-danger btn-sm']) ?>
              <?= anchor("adminworkshop/edit_workshop/{$workshop->workshop_id}","Edit",['class'=>'btn btn-outline-warning btn-sm']) ?>
            </td>
          </tr> 
        <?php  endforeach; ?>
      <?php else: ?>

        <tr colspan="3"> No Record Found</tr>
         <?php endif;?>

        </tbody>
      </table>
       
<!-- Pagination -->
 <?= $this->pagination->create_links(); ?> 

</div>


   <?php include("adminworkshop_footer.php"); ?>

 <script type="text/javascript" src="<?= base_url('assets/bootstrap/js/bootstrap.js');   ?>"></script> 


</body>
</html>
