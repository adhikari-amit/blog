<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Articles</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css'); ?>" >

</head>
<body>
   <?php include("admin_header.php"); ?>
    
    <div class="container my-5">
      <!-- <form> -->
      <?php echo form_open_multipart('admin/store_article'); ?>

      <!-- A hidden form input field. -->
      <?php echo form_hidden('user_id',$this->session->userdata('user_id')); ?>
      <?php echo form_hidden('created_at', date('Y-m-d_H:i:s')) ?>
      
      
       <!-- This is Flash data for successfully inserting Article -->
        <?php  if($faliure=$this->session->flashdata('faliure')): ?>
            <div class="alert alert-dismissible alert-success">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              <strong>Hurrah! </strong> <a href="#" class="alert-link"><?= $faliure ?></a>.
            </div>
        <?php endif; ?>


      <fieldset>
        <legend>Add Article</legend>

        <div class="form-group">
        <label  class="form-label mt-4">Title</label>
         <?php $data = array(
            'name'          => 'title',
            'id'            => 'title',
            'class'         =>'form-control',
            'placeholder'=>"Title of the Article",
            'value' => set_value('title'),
            );

            echo form_input($data);
         ?>
        <?php echo form_error('title', '<p class="text-danger">', '</p>') ?>

        </div>
        <div class="form-group">
          <label  class="form-label mt-4">Article</label>
          <?php $data = array(
            'name'          => 'article',
            'id'            => 'article',         
            'class'         => 'form-control',
            'rows'          =>'6',
            'placeholder'=>"Write Here...",
            'value' => set_value('article'),
            );

            echo form_textarea($data);
         ?>

        <?php echo form_error('article', '<p class="text-danger">', '</p>') ?>
          
        </div>
         <div class="form-group">
          <label  class="form-label mt-4">Title</label>
         <?php $data = array(
            'name'          => 'image',
          
            'class'         =>'form-control',
        
            );

            echo form_upload($data);
         ?>
           <?php if(isset($upload_error)) echo $upload_error ?>

        </div>
        <div class="d-grid gap-2 my-3">
          <!-- <button class="btn btn-lg btn-primary" type="submit">Submit</button> -->

          <?php $data = array(
            'name'          => 'add',
            'value'            => 'Add Article',
            'type'          =>'submit',
            'class'         =>'btn btn-lg btn-primary',
            );

            echo form_submit($data);
          ?>
        </div>
      </fieldset>
       <?= form_close(); ?>
    </div>



  
   <?php include("admin_footer.php"); ?>

 <script type="text/javascript" src="<?= base_url('assets/bootstrap/js/bootstrap.js');   ?>"></script> 


</body>
</html>
