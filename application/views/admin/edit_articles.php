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
   <? php include("admin_header.php"); ?>


    
    <div class="container my-5">
      <!-- <form> -->
      <?php echo form_open('admin/update_article'); ?>
      <?php echo form_hidden('article_id',($article->id )); ?>
      

      
       <!-- This is Flash data for successfully inserting Article -->
        <?php  if($faliure=$this->session->flashdata('faliure')): ?>
            <div class="alert alert-dismissible alert-success">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              <strong>Hurrah! </strong> <a href="#" class="alert-link"><?= $faliure ?></a>.
            </div>
        <?php endif; ?>


      <fieldset>
        <legend>Edit Article</legend>

        <div class="form-group">
          <label  class="form-label mt-4">Title</label>
         <?php $data = array(
            'name'          => 'title',
            'id'            => 'title',
            'class'         =>'form-control',
            'placeholder'=>"Title of the Article",
            'value' => set_value('title',$article->title),
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
            'value' => set_value('article',$article->body),
            );

            echo form_textarea($data);
         ?>

        <?php echo form_error('article', '<p class="text-danger">', '</p>') ?>
          
        </div>
        <div class="d-grid gap-2 my-3">
          <!-- <button class="btn btn-lg btn-primary" type="submit">Submit</button> -->

          <?php $data = array(
            'name'          => 'add',
            'value'            => 'Edit Article',
            'type'          =>'submit',
            'class'         =>'btn btn-lg btn-primary',
            );

            echo form_submit($data);
          ?>
        </div>
      </fieldset>
    
    </form>

    </div>



  
   <?php include("admin_footer.php"); ?>

 <script type="text/javascript" src="<?= base_url('assets/bootstrap/js/bootstrap.js');   ?>"></script> 


</body>
</html>
