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
      
    <div class="container my-5">

    <?php echo form_open_multipart('admin/update_category'); ?>
    <?php echo form_hidden('category_id',($category->category_id )); ?>

      <fieldset>
        <legend>Edit Category</legend>

        <div class="form-group">
         <label  class="form-label mt-4">Category</label>
         <?php $data = array(
            'name'          => 'title',
            'id'            => 'title',
            'class'         =>'form-control',
            'placeholder'=>"Enter Category Title",
            'value' => set_value('title',$category->title),
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
            'value' => set_value('desc',$category->description),
            );

            echo form_textarea($data);
         ?>

        <?php echo form_error('desc', '<p class="text-danger">', '</p>') ?>
          
        </div> 

        <div class="form-group">
          <label  class="form-label mt-4">Image</label>
         <?php $data = array(
            'name'          =>'image',          
            'class'         =>'form-control',
            'value'         =>set_value('image',$category->image_path),     
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
