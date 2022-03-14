<?php include("admin_head.php"); ?>
<body>
   
    <?php include("admin_header.php"); ?>
      
    <div class="container my-5">
      <!-- <form> -->
      <?php echo form_open_multipart('admin/update_author'); ?>
      <?php echo form_hidden('author_id',($author->author_id )); ?>

      <fieldset>
        <legend>Add Author</legend>

        <div class="form-group">
         <label  class="form-label mt-4">Name</label>
         <?php $data = array(
            'name'          => 'name',
            'id'            => 'name',
            'class'         =>'form-control',
            'placeholder'=>"Enter Author Name",
            'value' => set_value('name',$author->name),
            );

            echo form_input(html_escape($data));
         ?>
           <?php echo form_error('name', '<p class="text-danger">', '</p>') ?>

        </div>
        <div class="form-group">
          <label  class="form-label mt-4">Facebook</label>
          <?php $data = array(
            'name'          => 'facebook',
            'id'            => 'facebook',         
            'class'         => 'form-control',
            'placeholder'=>"Enter Facebook Url",
            'value' => set_value('facebook',$author->facebook),
            );

            echo form_input($data);
         ?>

        <?php echo form_error('facebook', '<p class="text-danger">', '</p>') ?>
          
        </div>

        <div class="form-group">
          <label  class="form-label mt-4">Instagram</label>
          <?php $data = array(
            'name'          => 'instagram',
            'id'            => 'instagram',         
            'class'         => 'form-control',
            'placeholder'=>"Enter instagram Username",
            'value' => set_value('instagram',$author->instagram),
            );

            echo form_input($data);
         ?>

        <?php echo form_error('instagram', '<p class="text-danger">', '</p>') ?>
          
        </div>
        
         <div class="form-group">
          <label  class="form-label mt-4">Twitter</label>
          <?php $data = array(
            'name'          => 'twitter',
            'id'            => 'twitter',         
            'class'         => 'form-control',
            'placeholder'=>"Enter Twitter Username",
            'value' => set_value('twitter',$author->twitter),
            );

            echo form_input($data);
         ?>

        <?php echo form_error('facebook', '<p class="text-danger">', '</p>') ?>
          
        </div>
         
         <div class="form-group">
          <label  class="form-label mt-4">Bio</label>
          <?php $data = array(
            'name'          => 'bio',
            'id'            => 'bio',         
            'class'         => 'form-control',
            'rows'          =>'6',
            'placeholder'=>"Write Here...",
            'value' => set_value('bio',$author->bio),
            );

            echo form_textarea($data);
         ?>

        <?php echo form_error('bio', '<p class="text-danger">', '</p>') ?>
          
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
            'value'            => 'Add Author',
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
