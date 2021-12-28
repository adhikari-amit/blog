<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Articles</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css'); ?>" >
  <script type="text/javascript" src="<?=base_url('ckeditor/ckeditor.js');?>"> </script>

</head>
<body>
   <?php include("admin_header.php"); ?>
    
    <div class="container my-5">
      <?php echo form_open_multipart('admin/store_article'); ?>
      <?php echo form_hidden('user_id',$this->session->userdata('user_id')); ?>
  
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
            'placeholder'   =>"Title of the Article",
            'value'         => set_value('title'),
            );

            echo form_input($data);
         ?>
        <?php echo form_error('title', '<p class="text-danger">', '</p>') ?>

        </div>

        <div class="form-group">
        <label  class="form-label mt-4">Description</label>
         <?php $data = array(
            'name'          => 'desc',
            'id'            => 'desc',
            'class'         =>'form-control',
            'rows'          =>'6',
            'placeholder'   =>"Description",
            'value'         => set_value('desc'),
            );

            echo form_textarea($data);
         ?>
        <?php echo form_error('desc', '<p class="text-danger">', '</p>') ?>

        </div>
        
        <div class="form-group">
        <label  class="form-label mt-4">Author</label>
        <?php

        $options = array();
        foreach ($authors as $author)
        {
         $options[$author->name] = $author->name;
        
        }

          $data = array(
            'name'          => 'author',
            'id'            => 'author',
            'class'         =>'form-select',
            'options'       => $options,
            'value'         => set_value('author'),
          );

          echo form_dropdown($data);
        ?>
        <?php echo form_error('author', '<p class="text-danger">', '</p>') ?>

        </div>

        <div class="form-group">
        <label class="form-label mt-4">Categories</label>

       <?php 

        $options = array();
        foreach ($category as $category){
         $options[$category->title] = $category->title;
       }
         $data = array(
            'name'          => 'category',
            'id'            => 'category',
            'class'         =>'form-select',
            'options'       => $options,
            'value'         => set_value('category'),
            );
           
            echo form_dropdown($data);
           ?>
           <?php echo form_error('category', '<p class="text-danger">', '</p>') ?>
        </div>

        <div class="form-group">
        <label  class="form-label mt-4">Publication Time</label>
         <?php $data = array(
            'name'          => 'created_at',
            'id'            => 'created_at',
            'type'          =>'date',
            'class'         =>'form-control',
            'value'         => set_value('created_at'),
            );

            echo form_input($data);
         ?>
        <?php echo form_error('created_at', '<p class="text-danger">', '</p>') ?>

        </div>



         <div class="form-group">
          <label  class="form-label mt-4">Image</label>
         <?php $data = array(
            'name'          => 'image',          
            'class'         =>'form-control',        
            );

            echo form_upload($data);
         ?>
           <?php if(isset($upload_error)) echo $upload_error ?>

        </div>

        <div class="form-group">
          <label  class="form-label mt-4">Article</label>
          <?php 

          $data = array(
            'name'          => 'article',
            'id'            => 'article',
            'rows'          =>'10',         
            'class'         => 'form-control',
            'placeholder'   =>"Write Here...",
            'value'         => set_value('article'),
            );

            echo form_textarea($data);
           ?>

        <?php echo form_error('article', '<p class="text-danger">', '</p>') ?>
          
        </div>
        <div class="d-grid gap-2 my-3">
          <!-- <button class="btn btn-lg btn-primary" type="submit">Submit</button> -->
          <?php $data = array(
            'name'          => 'add',
            'value'         => 'Add Article',
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

 <script type="text/javascript" src="<?= base_url('assets/bootstrap/js/bootstrap.js');?>"> </script>
 
  <script>
       CKEDITOR.replace( 'article',
                {
                   
                    height: 300,
                    filebrowserUploadUrl: " <?= base_url('ckeditor/ajax.php?type=file');  ?>",
                    filebrowserImageUploadUrl:"<?= base_url('ckeditor/ajax.php?type=image')  ;?>" ,

                }
             );
  </script>
</body>
</html>
