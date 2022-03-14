<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Articles</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css'); ?>" >
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/tagsinput.css'); ?>" >
  <script type="text/javascript" src="<?=base_url('ckeditor/ckeditor.js');?>"> </script>

</head>
<body>
   <?php include("adminworkshop_header.php"); ?>
    
    <div class="container my-5">
      <?php echo form_open_multipart('adminworkshop/store_workshop'); ?>
  
        <?php  if($faliure=$this->session->flashdata('faliure')): ?>
            <div class="alert alert-dismissible alert-success">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              <strong>Hurrah! </strong> <a href="#" class="alert-link"><?= $faliure ?></a>.
            </div>
        <?php endif; ?>


      <fieldset>
        <legend>Add Workshop</legend>

        <div class="form-group">
        <label  class="form-label mt-4">Workshop Name</label>
         <?php $data = array(
            'name'          => 'name',
            'id'            => 'name',
            'class'         =>'form-control',
            'placeholder'   =>"Name of the Workshop...",
            'value'         => set_value('name'),
            );

            echo form_input($data);
         ?>
        <?php echo form_error('name', '<p class="text-danger">', '</p>') ?>

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
        <label  class="form-label mt-4">Workshop Date</label>
         <?php $data = array(
            'name'          => 'workshop_date',
            'id'            => 'workshop_date',
            'type'          =>'date',
            'class'         =>'form-control',
            'value'         => set_value('workshop_date'),
            );

            echo form_input($data);
         ?>
        <?php echo form_error('workshop_date', '<p class="text-danger">', '</p>') ?>

        </div>
         <div class="form-group">
        <label  class="form-label mt-4">Workshop Time</label>
         <?php $data = array(
            'name'          => 'workshop_time',
            'id'            => 'workshop_time',
            'type'          =>'time',
            'class'         =>'form-control',
            'value'         => set_value('workshop_time'),
            );

            echo form_input($data);
         ?>
        <?php echo form_error('workshop_time', '<p class="text-danger">', '</p>') ?>

        </div>  

        <div class="form-group">
        <label  class="form-label mt-4">Venue</label>
         <?php $data = array(
            'name'          => 'venue',
            'id'            => 'venue',
            'class'         =>'form-control',
            'placeholder'   =>"Description",
            'value'         => set_value('venue'),
            );

            echo form_input($data);
         ?>
        <?php echo form_error('venue', '<p class="text-danger">', '</p>') ?>

        </div>
        <div class="form-group">
        <label  class="form-label mt-4">Status</label>
        <?php

        $options = array();
        $options['']='';
        $options['completed']='complete';
        $options['upcoming']='upcoming';
          $data = array(
            'name'          => 'status',
            'id'            => 'status',
            'class'         =>'form-select',
            'options'       => $options,
            'value'         => set_value('status'),
          );

          echo form_dropdown($data);
        ?>
        <?php echo form_error('status', '<p class="text-danger">', '</p>') ?>

        </div>

        <div class="form-group">
        <label class="form-label mt-4">Price</label> 
        <?php 
         $data = array(
            'name'          => 'price',
            'id'            => 'price',
            'class'         =>'form-control',
            'value'         => set_value('price'),
            );
           
            echo form_input($data);
           ?>
           <?php echo form_error('price', '<p class="text-danger">', '</p>') ?>
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

        <div class="d-grid gap-2 my-3">
          <?php $data = array(
            'name'          => 'add',
            'value'         => 'Add Workshop',
            'type'          =>'submit',
            'class'         =>'btn btn-lg btn-primary',
            );

            echo form_submit($data);
          ?>
        </div>
      </fieldset>

       <?= form_close(); ?>
    </div>

   <?php include("adminworkshop_footer.php"); ?>

 <script type="text/javascript" src="<?= base_url('assets/bootstrap/js/bootstrap.js');?>"> </script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</body>
</html>


