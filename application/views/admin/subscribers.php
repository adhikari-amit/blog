<?php include("admin_head.php"); ?>
<body>
   <?php include("admin_header.php"); ?>
    
     <div class="container-fluid my-5 ">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Sr. No.</th>
            <th scope="col">Email</th>
           </tr>
        </thead>
        <tbody>

        <?php   if(count($subscribers)): ?>

          <?php  $count=$this->uri->segment(3,0); ?>

         <?php  foreach($subscribers as $subscriber): ?>

            <tr class="table-success">
            <th scope="row"><?= ++$count ?></th>
            <td><?= $subscriber->email ?></td>
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

  <a type="button" class="btn btn-primary btn-lg ms-5 my-5" href="<?= base_url('admin/write_newslatter')?>"> Send Newslatter</a>
   <?php include("admin_footer.php"); ?>

 <script type="text/javascript" src="<?= base_url('assets/bootstrap/js/bootstrap.js');?>"> </script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script type="text/javascript" src="<?= base_url('assets/js/tagsinput.js');?>"> </script>

</body>
</html>


