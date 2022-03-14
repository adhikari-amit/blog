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
            <th scope="col">Email</th>
            <th scope="col">Banner</th>
            <th scope="col">Article</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

        <?php  	if(count($submitted_articles)): ?>

          <!-- For article number -->
          <?php  $count=$this->uri->segment(3,0); ?>
          <!--  -->

         <?php  foreach($submitted_articles as $article): ?>

            <tr class="table-success">
            <th scope="row"><?= ++$count ?></th>
            <td><?= anchor("admin/event_author/{$article->event_id}" ,$article->author_name) ?> </a></td>
            <td><?= $article->author_email ?></td>
            <td>
              <a href="<?= $article->article_cover ?>" download> <button class="btn"><i class="fa fa-download"></i> Download</button></a></td>
            <td><a href="<?= $article->article ?>" download><button class="btn"><i class="fa fa-download"></i> Download</button></a>
            </td>
            <td>                  
                <?= anchor("admin/delete_event_article/{$article->event_id}","Delete",['class'=>'btn btn-outline-danger btn-sm']) ?>
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
