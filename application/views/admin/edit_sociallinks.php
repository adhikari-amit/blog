<?php include("admin_head.php"); ?>
<body>
   
   <?php include("admin_header.php"); ?>
      
    <div class="container my-5">

    <?php echo form_open('admin/update_sociallinks'); ?>
    <?php echo form_hidden('social_id',($sociallinks->social_id )); ?>

      <fieldset>
        <legend>Edit Social Links</legend>

        <div class="form-group">
         <label  class="form-label mt-4">Whatsapp</label>
         <?php $data = array(
            'name'          => 'whatsapp',
            'id'            => 'whatsapp',
            'class'         =>'form-control',
            'placeholder'=>"Whatsapp..",
            'value' => set_value('whatsapp',$sociallinks->whatsapp),
            );

            echo form_input($data);
         ?>
           <?php echo form_error('whatsapp', '<p class="text-danger">', '</p>') ?>

        </div>
    
         
         <div class="form-group">
          <label  class="form-label mt-4">Facebook</label>
          <?php $data = array(
            'name'          => 'facebook',
            'id'            => 'facebook',         
            'class'         => 'form-control',
           
            'placeholder'=>"Facebook...",
            'value' => set_value('facebook',$sociallinks->facebook),
            );

            echo form_input($data);
         ?>

        <?php echo form_error('facebook', '<p class="text-danger">', '</p>') ?>
          
        </div> 
          <div class="form-group">
          <label  class="form-label mt-4">Twitter</label>
          <?php $data = array(
            'name'          => 'twitter',
            'id'            => 'twitter',         
            'class'         => 'form-control',
            
            'placeholder'=>"Twitter...",
            'value' => set_value('twitter',$sociallinks->twitter),
            );

            echo form_input($data);
         ?>

        <?php echo form_error('twitter', '<p class="text-danger">', '</p>') ?>
          
        </div> 
          <div class="form-group">
          <label  class="form-label mt-4">Linkedin</label>
          <?php $data = array(
            'name'          => 'linkedin',
            'id'            => 'linkedin',         
            'class'         => 'form-control',
            'placeholder'=>"Linkedin...",
            'value' => set_value('linkedin',$sociallinks->linkedin),
            );

            echo form_input($data);
         ?>

        <?php echo form_error('linkedin', '<p class="text-danger">', '</p>') ?>
          
        </div> 
        <div class="form-group">
          <label  class="form-label mt-4">Instagram</label>
          <?php $data = array(
            'name'          => 'instagram',
            'id'            => 'instagram',         
            'class'         => 'form-control',
            'placeholder'=>"Instagram...",
            'value' => set_value('instagram',$sociallinks->instagram),
            );

            echo form_input($data);
         ?>

        <?php echo form_error('instagram', '<p class="text-danger">', '</p>') ?>
          
        </div> 


        <div class="d-grid gap-2 my-3">

          <?php $data = array(
            'name'          => 'add',
            'value'            => 'UPDATE',
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
