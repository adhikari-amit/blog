<?php include("head.php"); ?>
<body>

<?php include("header.php"); ?>
<section class="main-content single-page contact">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="post-item">
                <div class="post-header">
                    <h3 class="post-title">Contact</h3>
                </div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-sm-offset-0">
						<div class="post-content">
							<div class="row">
								<div class="col-sm-4">
									<div class="contact-box">
										<div class="title-box">
											<div class="icon-box">
												<i class="fa fa-map-marker"></i>
											</div>
											<div class="name-box">
												<h4>Location</h4>
											</div>
										</div>
										<div class="content-box">
											<p>Kolkata,</p>
											<p>West Bengal</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="contact-box">
										<div class="title-box">
											<div class="icon-box">
												<i class="fa fa-envelope"></i>
											</div>
											<div class="name-box">
												<h4>Email</h4>
											</div>
										</div>
										<div class="content-box">
											<p>kahaniyaa1@gmail.com</p>
											<p>kahaniyaasubmissions@gmail.com</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="contact-box">
										<div class="title-box">
											<div class="icon-box">
												<i class="fa fa-phone"></i>
											</div>
											<div class="name-box">
												<h4>Phone</h4>
											</div>
										</div>
										<div class="content-box">
											<p>+91 70033-67320</p>
											<p>+91 80176-48525</p>
										</div>
									</div>
								</div>
							</div>
							<div>
							<center><h3>Get in touch!</h3></center>                  
		                      <?php if($message): ?>
		                          <center><p style="color:green;"><?= $message ?></P> </center>
		                      <?php else: ?>
		                          <center>  <p style="color:red;"> 
		                        Please Wait for confirmation before refreshing the page.
		                          </p>  </center>
		                      <?php endif ?>
                            </div>
                            <?php echo form_open('blog/contact_form') ?>    
							<div class="contact-form">
                                <div class="row">
                                    <div class="col-sm-6">
										<div class="form-group">
						                    <?php $data = array(
						                        'name'          => 'name',
						                        'id'            => 'name',
						                        'placeholder'   =>"Name: ",
						                        'type'          =>"text",
						                        'class'         =>"form-control",
						                        'value' => set_value('name'),
						                        );

						                        echo form_input(html_escape($data));          
						                    ?>
                                            <?php echo form_error('name', '<p style="color:red;">', '</p>') ?>
					                    </div>
									</div>
                                    <div class="col-sm-6">
										<div class="form-group">
										    <?php $data = array(
						                        'name'          => 'email',
						                        'id'            => 'email',
						                        'placeholder'   =>"E-Mail: ",
						                        'type'          =>"email",
						                        'class'         =>"form-control",
						                        'value' => set_value('email'),
						                        );

                                               echo form_input(html_escape($data));          
                                            ?>
                                            <?php echo form_error('email', '<p style="color:red;">', '</p>') ?>
					                    </div>
                                    </div>
									<div class="col-sm-12">
										<div class="form-group">
										    <?php $data = array(
						                        'name'          => 'mobile',
						                        'id'            => 'mobile',
						                        'placeholder'   =>"Mobile: ",
						                        'type'          =>"tel",
						                        'class'         =>"form-control",
						                        'value' => set_value('mobile'),
						                        );

                                               echo form_input(html_escape($data));          
                                            ?>
                                            <?php echo form_error('mobile', '<p style="color:red;">', '</p>') ?>
					                    </div>
                                    </div>
									<div class="col-sm-12">
										<div class="form-group">
										   <?php $data = array(
						                        'name'          => 'message',
						                        'id'            => 'message',
						                        'placeholder'   =>"Message",
						                        'class'         =>"form-control",
						                        'value' => set_value('message'),
						                        );

						                        echo form_textarea(html_escape($data));          
						                    ?>
                                            <?php echo form_error('message', '<p style="color:red">', '</p>') ?>

					                    </div>
									</div>
									<!-- Button Send Message -->
									<div class="col-sm-12">
					                    <button class="contact-btn main-btn" type="submit" name="send">Send Message</button>
									</div>
								    <!-- Form Message  -->
				                    <div class="form-message text-center"><span></span></div>
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

<!-- ========== Start Footer ========== -->

         <!-- ========== End Scroll To Top ========== -->
    
        <?php include('footer.php'); ?>
        <?php include('foot.php'); ?>
</body>
</html>