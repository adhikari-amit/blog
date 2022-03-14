<div class="footer text-center">
    <div class="footer-info">
      <div class="container">
        <div class="row">
          <br>            
          <img class="img-responsive-header" src="<?=base_url('assets/images/footer.webp') ?>" alt="..." style="width:45%; height:40%; margin-left:30px">
        </div>
        <div class="row">
          <br>
          <div class="footerlinks">
            <h3>Discover</h3>
            <a class="linksinfooter" href="/authors">Our Authors</a>
            <a class="linksinfooter" href="/about">About Us</a>
            <a class="linksinfooter" href="/submitarticle">Submit Article</a>
            <a class="linksinfooter" href="/tandc">Terms of Use</a>
          </div>
        </div>
        <div class="row">
          <br>
          <div class="footerlinks">
            <h4>Connect with Us</h4>
            <ul class="social-icons-menu list-unstyled">
              <li><a target="_blank" href="https://www.facebook.com/kahaniyaa.official"><i class="fab fa-facebook"></i></a></li>
              <li><a target="_blank" href="https://www.instagram.com/kahaniyaa.official/"><i class="fab fa-instagram"></i></a></li>
              <li><a target="_blank" href="https://kahaniyaa.com/contactus"><i class="fa fa-envelope"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright-only">

      <p class="copyright">Copyright © 2021 Kahaniyaa. All rights reserved.
    </div>
  </div>

  <div id="myModal" class="modal1" >

    <div class="modal-content" style="position: absolute; bottom: 15px; right:0px; ">
      <span class="close" id="close">&times;</span>
      <div class="col-md-8 col-sm-12 col-xs-12">
      <center>
        <h3>Subscribe to our newsletter</h3>
      </center>
      <br>
      <center>
        <p>Get our kahaniyaas directly delivered to your mailbox.</p>
      </center>
        <?php echo form_open('blog/newslatter'); ?>
        <label>Email</label>
        <div class="form-group">
          <?php echo form_error('email', '<p style="color:red">', '</p>') ?>
          <?php $data = array(
            'name'          => 'email',
            'id'            => 'email',
            'placeholder'   => "enter youre email",
            'type'          => "email",
            'class'         => 'form-control',
            'value' => set_value('email'),
          );
          echo form_input($data);
          ?>
        </div>
        <?php $data = array(
          'name'          => 'submit',
          'value'         => 'Subscribe',
          'class'         => 'form-control',
          'style'         =>'background-color:#f3a079; color:white',
          'type'          => 'submit',
        );
        echo form_submit($data);
        ?>
        <?= form_close(); ?>
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12">
        <br>
       <center> <img src="<?= base_url('assets/images/rio.png') ?>" alt="..." style="width:75%; height:50%"></center>
      </div>


    </div>
  </div>