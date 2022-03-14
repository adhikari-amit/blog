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
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Banner</th>
            <th scope="col">Ebook</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

        <?php  	if(count($ebooks)): ?>

          <!-- For article number -->
          <?php  $count=$this->uri->segment(3,0); ?>
          <!--  -->

         <?php  foreach($ebooks as $ebook): ?>

            <tr class="table-success">
            <th scope="row"><?= ++$count ?></th>
            <td><?=$ebook->ebook_name ?></td>
            <td><?= $ebook->description ?></td>
            <td>
              <a href="<?= $ebook->ebook_banner_path ?>" download> <button class="btn"><i class="fa fa-download"></i> Download</button></a>
            </td>
            <td>
              <a href="<?= $ebook->ebook_path ?>" download> <button class="btn"><i class="fa fa-download"></i> Download</button></a>
            </td>       
            <td>                  
                <?= anchor("admin/delete_ebook/{$ebook->ebook_id}","Delete",['class'=>'btn btn-outline-danger btn-sm']) ?>  
            </td>
          </tr> 
        <?php  endforeach; ?>
      <?php else: ?>
      	<tr colspan="3"> No Record Found</tr>
         <?php endif;?>

        </tbody>
      </table>
      <a type="button" class="btn btn-primary btn-lg ms-5 my-5" href="<?= base_url('admin/add_ebook')?>"> + </a>

</div>

   <?php include("admin_footer.php"); ?>

 <script type="text/javascript" src="<?= base_url('assets/bootstrap/js/bootstrap.js');   ?>"></script> 


</body>
</html>
