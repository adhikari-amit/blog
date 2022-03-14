<?php include("admin_head.php"); ?>
<body>
   <?php include("admin_header.php"); ?>
    
  <!-- This is Flash data for successfully inserting Article -->
      <?php  if($success=$this->session->flashdata('success')): ?>
            <div class="alert alert-dismissible alert-success">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              <strong>Well! </strong> <a href="#" class="alert-link"><?= $success ?></a>.
            </div>
      <?php endif; ?>



      <div class="container-fluid my-5 ">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Sr. No.</th>
            <th scope="col">Title</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

        <?php  	if(count($articles)): ?>

          <!-- For article number -->
          <?php  $count=$this->uri->segment(3,0); ?>
          <!--  -->

         <?php  foreach($articles as $article): ?>

            <tr class="table-success">
            <th scope="row"><?= ++$count ?></th>
            <td><?= $article->title ?></td>
            <td> 
                 
                 <!-- <button type="button" class="btn btn-outline-danger btn-sm">Delete</button>  -->
                 <?= anchor("admin/delete_article/{$article->id}","Delete",['class'=>'btn btn-outline-danger btn-sm']) ?>
                  
                 <!-- <button type="button" class="btn btn-outline-dark btn-sm">Edit</button> -->
                 <?= anchor("admin/edit_article/{$article->id}","Edit",['class'=>'btn btn-outline-info btn-sm']) ?>
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

   <?php include("admin_footer.php"); ?>

 <script type="text/javascript" src="<?= base_url('assets/bootstrap/js/bootstrap.js');   ?>"></script> 


</body>
</html>
