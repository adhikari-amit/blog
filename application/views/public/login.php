<?php include('head.php'); ?>
    <body>
      <?php include("header.php"); ?>
        <section class="main-content single-page contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="post-item">
                            <div class="post-header">
                                <h3 class="post-title">Admin Login</h3>                                
                  </div>
                   <?php  if($error=$this->session->flashdata('login_faild')): ?>
                      <div class="alert alert-dismissible alert-danger" style="margin:auto; width: 50%;">
                        <strong>Oh snap! </strong> <a href="#" class="alert-link"><?= $error ?></a>. try submitting again.
                      </div>
                   <?php endif; ?>

              <?php echo form_open('login/admin_login'); ?>   
              <div class="contact-form" style="width:50%; margin:auto;">
                    
                      <div class="row">
                        <div class="col-sm-12">
                        <div class="form-group">
                      <?php $data = array(
                         'name'          => 'username',
                        'id'            => 'username',
                        'type'          => 'text',
                        'class'         =>'form-control',
                        'placeholder'   =>"Name",
                        'value'         => set_value('username'),
                          );

                         echo form_input($data);
                      ?>
                  <?php echo form_error('username', '<p>', '</p>') ?>
                          </div>
                        </div>
                                             
                        <div class="col-sm-12">
                          <div class="form-group">
                          <?php $data = array(
                            'name'          => 'password',
                            'id'            => 'password',
                            'class'         => 'form-control',
                            'type'          => 'password',
                            'placeholder'   => "Password",
                            );

                            echo form_input($data);
                          ?>
                  <?php echo form_error('password', '<p>', '</p>') ?>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <?php $data = array(
                              'name'          => 'submit',
                              'value'         => 'Login',
                              'type'          => 'submit',
                              'class'         => 'contact-btn',
                              'style'         =>'width:100%'
                              );
                              echo form_submit($data);
                            ?>
                          </div>
                        </div>
                       </div>
                        </div>
                   <?= form_close(); ?>
                
                  </div> 
                </div>
              </div>
                        </div>
                    </div>
                    </div>
                </div>
        </section>

     <!-- ========== Start Scroll To Top ========== -->

     <a href="#" class="scroll-top">
       <span><i class="fa fa-arrow-up"></i></span>
     </a>

     <!-- ========== End Scroll To Top ========== -->

        <?php include('footer.php'); ?>
        <?php include('foot.php'); ?>
    </body>
</html>