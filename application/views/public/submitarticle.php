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
							<div class="row">
								<div class="col-md-10 col-md-offset-1 col-sm-offset-0">
									<div class="post-content">
										<div class="row">

											<img src="<?= base_url('assets/images/process.png') ?>" alt="..." style="width:100%;height:auto" class="img-responsive">

										</div>

									</div>
								</div>
							</div>
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

									<?php echo form_open_multipart('blog/store_article') ?>
									<div class="contact-form">
										<a href="<?= base_url('authorsubmitarticle'); ?>">
											<p style="color:blue;">Already an author?</p>
										</a>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<?php $data = array(
														'name'          => 'name',
														'id'            => 'name',
														'placeholder'   => "Author name",
														'type'          => "text",
														'class'         => "form-control",
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
														'placeholder'   => "Youre email",
														'type'          => "email",
														'class'         => "form-control",
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
														'name'          => 'bio',
														'id'            => 'bio',
														'placeholder'   => "Youre Bio",
														'class'         => "form-control",
														'value' => set_value('bio'),
													);

													echo form_textarea(html_escape($data));
													?>
													<?php echo form_error('bio', '<p style="color:red">', '</p>') ?>

												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<?php $data = array(
														'name'          => 'facebook',
														'id'            => 'facebook',
														'placeholder'   => "Facebook profile url",
														'type'          => "text",
														'class'         => "form-control",
														'value' => set_value('facebook'),
													);

													echo form_input(html_escape($data));
													?>
													<?php echo form_error('facebook', '<p style="color:red;">', '</p>') ?>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<?php $data = array(
														'name'          => 'instagram',
														'id'            => 'instagram',
														'placeholder'   => "Instagram profile url",
														'type'          => "text",
														'class'         => "form-control",
														'value' => set_value('instagram'),
													);

													echo form_input(html_escape($data));
													?>
													<?php echo form_error('instagram', '<p style="color:red;">', '</p>') ?>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<?php $data = array(
														'name'          => 'twitter',
														'id'            => 'twitter',
														'placeholder'   => "Twitter profile url",
														'type'          => "text",
														'class'         => "form-control",
														'value' => set_value('twitter'),
													);

													echo form_input(html_escape($data));
													?>
													<?php echo form_error('twitter', '<p style="color:red;">', '</p>') ?>
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
												<input id="checkme" type="checkbox" value="yes" checked="checked">
												<label> I accept the <a href="<?= base_url('tnc'); ?>">Terms of Service</a>.</label>
											</div>
											<br>
											<div class="col-sm-12">
												<button id="submitarticle" class="contact-btn main-btn" type="submit" name="send">Submit</button>
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

	<div class="footer text-center">
		<div class="footer-info">
			<div class="container">
				<div class="row">
					<br>
					<img class="img-responsive-header" src="<?= base_url('assets/images/footer.webp') ?>" alt="..." style="width:45%; height:40%; margin-left:30px">
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
						<?php
						$sociallinks = $this->socialmodel->sociallinks();
						?>
						<h4>Connect with Us</h4>
						<ul class="social-icons-menu list-unstyled">
							<li><a target="_blank" href="<?= $sociallinks->facebook ?>"><i class="fab fa-facebook"></i></a></li>
							<li><a target="_blank" href="<?= $sociallinks->instagram ?>"><i class="fab fa-instagram"></i></a></li>
							<li><a href="<?= base_url('contact'); ?>"><i class="fa fa-envelope"></i></a></li>
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
	<script>
		var checker = document.getElementById('checkme');
		var sendbtn = document.getElementById('submitarticle');

		checker.onchange = function() {
			if (this.checked) {
				sendbtn.disabled = false;
			} else {
				sendbtn.disabled = true;
			}

		}
	</script>
</body>

</html>