  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Articles</title>
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css'); ?>" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
   <?php include("admin_header.php"); ?>
   <div class="container">
   <?php echo form_open_multipart('admin/add_author'); ?>
    
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

   <?= form_close(); ?>
   </div>


      <?php include("admin_footer.php"); ?>

 <script type="text/javascript" src="<?= base_url('assets/bootstrap/js/bootstrap.js');   ?>"></script> 


</body>
</html>
