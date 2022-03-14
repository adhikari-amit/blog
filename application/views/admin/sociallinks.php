<?php include("admin_head.php"); ?>
<body>
   <?php include("admin_header.php"); ?>
   
    <?php  if($success=$this->session->flashdata('success')): ?>
            <div class="alert alert-dismissible alert-success">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              <strong>Well! </strong> <a href="#" class="alert-link"><?= $success ?></a>.
            </div>
      <?php endif; ?>
      <?php  if($faliure=$this->session->flashdata('faliure')): ?>
            <div class="alert alert-dismissible alert-danger">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              <strong>alash! </strong> <a href="#" class="alert-link"><?= $faliure ?></a>.
            </div>
      <?php endif; ?>
    
     <div class="container-fluid my-5 ">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col" style="width: 5%;">Sr. No.</th>
            <th scope="col" style="width: 15%;">Whatsapp</th>
            <th scope="col" style="width: 20%;">Facebook</th>
            <th scope="col" style="width: 15%;">Twitter</th>
            <th scope="col" style="width: 15%;">Linkedin</th>
            <th scope="col" style="width: 15%;">Instagram</th>
             <th scope="col" style="width: 15%;">Action</th>
           </tr>
        </thead>
        <tbody>

        <?php   if($sociallinks): ?>

          <?php  $count=$this->uri->segment(3,0); ?>

            <tr class="table-success">
            <th scope="row"><?= ++$count ?></th>
            <td><?= $sociallinks->whatsapp; ?></td>
            <td><?= $sociallinks->facebook; ?></td>
            <td><?= $sociallinks->twitter; ?></td>
            <td><?= $sociallinks->linkedin; ?></td>
            <td><?= $sociallinks->instagram; ?></td>
            <td><?= anchor("admin/edit_sociallinks","Edit",['class'=>'btn btn-outline-warning btn-sm']) ?></td>
          </tr> 
       
      <?php else: ?>

        <tr colspan="3"> No Record Found</tr>
         <?php endif;?>

        </tbody>
      </table>
       
</div>

   <?php include("admin_footer.php"); ?>

 <script type="text/javascript" src="<?= base_url('assets/bootstrap/js/bootstrap.js');?>"> </script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

</body>
</html>


