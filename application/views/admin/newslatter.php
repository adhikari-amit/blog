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
      <?php echo form_open('admin/send_newslatter'); ?>
  
        <?php  if($faliure=$this->session->flashdata('faliure')): ?>
            <div class="alert alert-dismissible alert-success">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              <strong>Hurrah! </strong> <a href="#" class="alert-link"><?= $faliure ?></a>.
            </div>
        <?php endif; ?>


      <fieldset>
        <legend>Write Newslatter</legend>

        <div class="form-group">
        <label  class="form-label mt-4">Title</label>
         <?php $data = array(
            'name'          => 'subject',
            'id'            => 'subject',
            'class'         =>'form-control',
            'placeholder'   =>"Subject",
            'value'         => set_value('subject'),
            );

            echo form_input($data);
         ?>
        <?php echo form_error('subject', '<p class="text-danger">', '</p>') ?>

        </div>

        <div class="form-group">
        <label  class="form-label mt-4">Message</label>
         <?php $data = array(
            'name'          => 'message',
            'id'            => 'message',
            'class'         =>'form-control',
            'rows'          =>'6',
            'placeholder'   =>"Write Youre Latter...",
            'value'         => set_value('message'),
            );

            echo form_textarea($data);
         ?>
        <?php echo form_error('message', '<p class="text-danger">', '</p>') ?>

        </div>


        <div class="d-grid gap-2 my-3">
          <?php $data = array(
            'name'          => 'add',
            'value'         => 'Send NewsLatter',
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
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

</body>
</html>


