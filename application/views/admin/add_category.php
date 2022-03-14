<?php include("admin_head.php"); ?>

</head>
<body>
   
   <?php include("admin_header.php"); ?>
      
    <div class="container my-5">

    <?php echo form_open_multipart('admin/add_category'); ?>

      <fieldset>
        <legend>Add Category</legend>

        <div class="form-group">
         <label  class="form-label mt-4">Category</label>
         <?php $data = array(
            'name'          => 'title',
            'id'            => 'title',
            'class'         =>'form-control',
            'placeholder'=>"Enter Category Title",
            'value' => set_value('title'),
            );

            echo form_input(html_escape($data));
         ?>
           <?php echo form_error('title', '<p class="text-danger">', '</p>') ?>

        </div>
    
         
         <div class="form-group">
          <label  class="form-label mt-4">Description</label>
          <?php $data = array(
            'name'          => 'desc',
            'id'            => 'desc',         
            'class'         => 'form-control',
            'rows'          =>'6',
            'placeholder'=>"Write Here...",
            'value' => set_value('desc'),
            );

            echo form_textarea($data);
         ?>

        <?php echo form_error('desc', '<p class="text-danger">', '</p>') ?>
          
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
            'value'            => 'Add Category',
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

<script type="text/javascript" src="<?= base_url('assets/bootstrap/js/bootstrap.js');?>"></script> 


</body>
</html>
