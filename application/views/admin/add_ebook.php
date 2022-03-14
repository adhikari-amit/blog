<?php include("admin_head.php"); ?>

</head>
<body>
   
   <?php include("admin_header.php"); ?>
      
    <div class="container my-5">

    <?php echo form_open_multipart('admin/upload_ebook'); ?>

      <fieldset>
        <legend>Add Ebook</legend>

        <div class="form-group">
         <label  class="form-label mt-4">Ebook Name</label>
         <?php $data = array(
            'name'          => 'name',
            'id'            => 'name',
            'class'         =>'form-control',
            'placeholder'=>"Ebook Name:",
            'value' => set_value('name'),
            );

            echo form_input(html_escape($data));
         ?>
           <?php echo form_error('name', '<p class="text-danger">', '</p>') ?>

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
          <label  class="form-label mt-4">Banner</label>
         <?php $data = array(
            'name'          => 'banner',          
            'class'         =>'form-control',        
            );

            echo form_upload($data);
         ?>
           <?php if(isset($upload_error1)) echo $upload_error1 ?>

        </div>

        <div class="form-group">
          <label  class="form-label mt-4">Ebook</label>
         <?php $data = array(
            'name'          => 'ebook',          
            'class'         =>'form-control',        
            );

            echo form_upload($data);
         ?>
           <?php if(isset($upload_error)) echo $upload_error ?>

        </div>
        <div class="d-grid gap-2 my-3">

          <?php $data = array(
            'name'          => 'add',
            'value'            => 'Add Ebook',
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
