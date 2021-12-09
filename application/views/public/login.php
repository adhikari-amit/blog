<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Articles</title>
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css'); ?>" >

</head>
<body>
   <?php include("header.php"); ?>
   
       
    <div class="container my-5">
    <!-- <form> -->
      <?php echo form_open('login/admin_login'); ?>
      <fieldset>
        <legend>Admin Login</legend>

        <?php  if($error=$this->session->flashdata('login_faild')): ?>
            <div class="alert alert-dismissible alert-danger">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              <strong>Oh snap! </strong> <a href="#" class="alert-link"><?= $error ?></a>. try submitting again.
            </div>
        <?php endif; ?>

        <div class="form-group">
          <label  class="form-label mt-4">Username</label>
         <!--     <input type="text" class="form-control" id="username" placeholder="Enter Username" >  -->
         <?php $data = array(
            'name'          => 'username',
            'id'            => 'username',
            'class'         =>'form-control',
            'placeholder'=>"Enter Username",
            'value' => set_value('username'),
            );

            echo form_input($data);
         ?>
           <?php echo form_error('username', '<p class="text-danger">', '</p>') ?>

        </div>
        <div class="form-group">
          <label  class="form-label mt-4">Password</label>
         <!--  <input type="password" class="form-control" id="password" placeholder="Password"> -->

          <?php $data = array(
            'name'          => 'password',
            'id'            => 'password',
            'type'          => 'password',
            'class'         => 'form-control',
            'placeholder'=>"Enter Password",
            );

            echo form_input($data);
         ?>

        <?php echo form_error('password', '<p class="text-danger">', '</p>') ?>
          
        </div>
        <div class="d-grid gap-2 my-3">
          <!-- <button class="btn btn-lg btn-primary" type="submit">Submit</button> -->

          <?php $data = array(
            'name'          => 'submit',
            'value'            => 'Login',
            'type'          =>'submit',
            'class'         =>'btn btn-lg btn-primary',
            );

          echo form_submit($data);
         ?>
        </div>
      </fieldset>
    
    </form>

    </div>

   <?php include("footer.php"); ?>

 <script type="text/javascript" src="<?= base_url('assets/bootstrap/js/bootstrap.js');   ?>"></script> 


</body>
</html>
