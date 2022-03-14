<?php include("head.php"); ?>

<body>

	<?php include("header.php"); ?>
	<section class="main-content single-page contact">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="post-item">
						<div class="post-header">
							<h3 class="post-title">Submit Your Article</h3>
							<br>
							<?php if ($message) : ?>
								<center>
									<p style="color:green;"><?= $message ?></P>
								</center>
							<?php else : ?>
								<center>
									<p style="color:red;">
										Please Wait for confirmation before refreshing the page.
									</p>
								</center>
							<?php endif ?>
						</div>
						<div class="row">
							<div class="col-md-10 col-md-offset-1 col-sm-offset-0">
								<div class="post-content">

									<?php echo form_open_multipart('blog/alreadyauthor_store_article') ?>
									<div class="contact-form">
										<div class="row">
											<div class="col-sm-12	">
												<label>Choose youre Email from below list.</label>
												<div class="form-group">
													<?php
													$options = array();
													$options[1] = "";
													foreach ($authors as $author) {
														$options[$author->email] = $author->email;
													}
													$data = array(
														'name'          => 'email',
														'id'            => 'email',
														'options'       => $options,

														'class'         => "form-control",
														'value' => set_value('email'),
													);

													echo form_dropdown(html_escape($data));
													?>
													<?php echo form_error('email', '<p style="color:red;">', '</p>') ?>
												</div>
											</div>
											<div class="col-sm-12">
												<div class="form-group">
													<?php $data = array(
														'name'          => 'categories',
														'id'            => 'categories',
														'placeholder'   => "Enter Categories",
														'type'          => "text",
														'class'         => "form-control",
														'value' => set_value('categories'),
													);

													echo form_input(html_escape($data));
													?>
													<?php echo form_error('categories', '<p style="color:red;">', '</p>') ?>
												</div>
											</div>
											<div class="col-sm-12">
												<div class="form-group">
													<?php $data = array(
														'name'          => 'tags',
														'id'            => 'tags',
														'placeholder'   => "Enter tags (Comma separated)",
														'type'          => "text",
														'class'         => "form-control",
														'value' => set_value('tags'),
													);

													echo form_input(html_escape($data));
													?>
													<?php echo form_error('tags', '<p style="color:red;">', '</p>') ?>
												</div>
											</div>


											<div class="col-sm-6">
												<label>Article Cover Images (Dimensions: 1200px X 600px)</label>
												<div class="form-group">
													<?php $data = array(
														'name'          => 'cover',
														'id'            => 'cover',

														'class'         => "form-control",

													);
													echo form_upload($data);
													?>
													<?php if (isset($upload_error1)) echo $upload_error1 ?>
												</div>
											</div>
											<div class="col-sm-6">
												<label>Article (Only .docx / word File allowed)</label>
												<div class="form-group">
													<?php $data = array(
														'name'          => 'article',
														'id'            => 'article',
														'class'         => "form-control",

													);
													echo form_upload($data);
													?>
													<?php if (isset($upload_error)) echo $upload_error ?>
												</div>
											</div>
											<div class="col-sm-12">
												<button class="contact-btn main-btn" type="submit" name="send">Submit</button>
											</div>

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
	<div class="footer text-center">
		<div class="footer-info">
			<div class="container">
				<div class="row">
					<br>
					<img class="img-responsive-header" src="<?= base_url('assets/images/footer1.webp') ?>" alt="..." style="width:45%; height:40%; margin-left:30px">
					<!-- <h1 class="site-logo-name" style="font-family: Samarkan; font-size:35px ">Kahaniyaa..</h1> -->
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

			<?php $year = date("Y");
			?>
			<p class="copyright">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright © 2020-<?= $year ?> Kahaniyaa. All rights reserved.<br>Designed and Developed by <a target="_blank" href="https://thetg.in"> Tranzposing Gradient</a>
		</div>
	</div>
	<?php include('foot.php'); ?>
</body>

</html>