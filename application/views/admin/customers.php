<?php include("admin_head.php"); ?>
<body>
   <?php include("admin_header.php"); ?>
    
     <div class="container-fluid my-5 ">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col" style="width: 5%;">Sr. No.</th>
            <th scope="col" style="width: 20%;">Customer Name</th>
            <th scope="col" style="width: 30%;">Customer Email</th>
            <th scope="col" style="width: 45%;">Query</th>
           </tr>
        </thead>
        <tbody>

        <?php   if(count($customers)): ?>

          <?php  $count=$this->uri->segment(3,0); ?>

         <?php  foreach($customers as $customer): ?>

            <tr class="table-success">
            <th scope="row"><?= ++$count ?></th>
            <td><?= $customer->customer_name ?></td>
            <td><?= $customer->customer_email ?></td>
            <td><?= $customer->message ?></td>
          </tr> 
        <?php  endforeach; ?>
      <?php else: ?>

        <tr colspan="3"> No Record Found</tr>
         <?php endif;?>

        </tbody>
      </table>
       
</div>

   <?php include("admin_footer.php"); ?>

 <script type="text/javascript" src="<?= base_url('assets/bootstrap/js/bootstrap.js');?>"> </script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script type="text/javascript" src="<?= base_url('assets/js/tagsinput.js');?>"> </script>

</body>
</html>


