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

  <div class="container"> 

    <table class="table table-hover" style="width: 100%;">
    <thead>
      <tr>
        <th class="text-danger" scope="col" style="width: 15%;">Type</th>
        <th class="text-danger" scope="col" style="width: 70%;">Description</th>
        <th scope="col" style="width: 15%;">Action</th>
      </tr>
    </thead>
    
    <tbody>
         <?php foreach ($category as $category): ?> 
      <tr >
        <td><?= anchor("admin/category_detail/{$category->slug}" ,$category->title) ?></td>
        <td><?=$category->description ?></td>
        <td> 
            <?= anchor("admin/delete_category/{$category->category_id }","Delete",['class'=>'btn btn-outline-danger btn-sm'])?>
            <?= anchor("admin/edit_category/{$category->slug}","Edit",['class'=>'btn btn-outline-success btn-sm']) ?>
        </td>
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

