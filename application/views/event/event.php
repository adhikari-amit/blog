<?php include('head.php'); ?>

<body>

    <?php include("header.php"); ?>
    <br>
    <br>
    <!-- ========== Start Main Content ========== -->
    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="row">
                        <?php foreach ($workshops as $workshop) : ?>
                            <div class="col-sm-12">
                                <div class="post-item">
                                    <div class="post-thumbnail">
                                        <a href='<?= base_url("eventdetails/{$workshop->workshop_slug}"); ?>'> <img class="img-responsive" src="<?= $workshop->image_path ?>" alt="..." style="height: 500px; width:100%;"></a>
                                    </div>
                                    <div class="post-category">
                                        <ul class="post-categories">
                                            <?php if ($workshop->categories) : ?>
                                                <li>
                                                    <a><?= $workshop->categories ?></a>
                                                </li>
                                            <?php endif ?>
                                            <?php if ($workshop->category2) : ?>
                                                <li>
                                                    <a><?= $workshop->category2 ?></a>
                                                </li>
                                            <?php endif ?>
                                            <?php if ($workshop->category3) : ?>
                                                <li>
                                                    <a><?= $workshop->category3 ?></a>
                                                </li>
                                            <?php endif ?>

                                        </ul>
                                    </div>
                                    <div class="post-header">
                                        <h3 class="post-title">
                                            <a  href="<?= base_url("eventdetails/{$workshop->workshop_slug}"); ?>"><?= $workshop->workshop_name ?></a>
                                        </h3>
                                        <span class="post-date">
                                            <i class="fa fa-calendar"></i>
                                            <a ><?= $workshop->workshop_date ?></a>
                                        </span>

                                    </div>
                                    <div class="post-content">
                                        <p><?= $workshop->workshop_description; ?></p>
                                    </div>
                                    <div class="post-footer">
                                        <div class="author-info pull-left">

                                        </div>
                                        <div class="read-more pull-right">
                                            <a href="<?= base_url("eventdetails/{$workshop->workshop_slug}"); ?>">More details<i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>

                    <!-- pagination -->

                    <div class="clearfix"></div>
                    <?= $this->pagination->create_links(); ?>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="sidebar">

                        <div class="widget categories-widget">
                            <h3 class="widget-title">Categories</h3>
                            <?php foreach ($categories as $category) : ?>
                                <div class="category-item">
                                    <a href="<?= base_url("category/{$category->slug}"); ?>"><?= $category->title ?></a>
                                    <span class="count">(<?= $this->articlesmodel->numofarticles_category($category->title); ?>)</span>
                                </div>
                            <?php endforeach ?>
                        </div>
                        <div class="widget recent-posts-widget">
                            <h3 class="widget-title">Recent Posts</h3>
                            <?php foreach ($topfour as $topfour) : ?>
                                <div class="recent-post-item">
                                    <div class="recent-post-widget-thumbnail">
                                        <a href="<?= base_url("blog/article/{$topfour->slug}") ?>">
                                            <img class="img-responsive" src="<?= $topfour->image_path ?>" alt="...">
                                        </a>
                                    </div>
                                    <div class="recent-post-widget-content">
                                        <h4 class="recent-post-widget-title">
                                            <a href="<?= base_url("article/{$topfour->slug}"); ?>"><?= $topfour->title ?></a>
                                        </h4>
                                        <div class="recent-post-widget-info">
                                            <?php $topfour_author = $this->articlesmodel->find_article_author($topfour->author); ?>
                                            <span class="author">
                                                <i class="fa fa-edit"></i>
                                                <a href='<?= base_url("author/{$topfour_author->slug}") ?>'><?= $topfour->author ?></a>
                                            </span>
                                            <span class="date">
                                                <i class="fa fa-calendar"></i>
                                                <a><?= $topfour->created_at ?></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                        <div class="widget newsletter">
                            <div class="widget widget_mc4wp_form_widget">
                                <h3 class="widget-title">Subscribe</h3>
                                <?php echo form_open('blog/newslatter'); ?>
                                <label>Fill your email below to subscribe to our newsletter</label>
                                <?php echo form_error('email', '<p style="color:red">', '</p>') ?>
                                <?php $data = array(
                                    'name'          => 'email',
                                    'id'            => 'email',
                                    'placeholder'   => "enter youre email",
                                    'type'          => "email",
                                    'value' => set_value('email'),
                                );
                                echo form_input($data);
                                ?>
                                <?php $data = array(
                                    'name'          => 'submit',
                                    'value'         => 'Subscribe',
                                    'type'          => 'submit',
                                );
                                echo form_submit($data);
                                ?>
                                <!-- <input type="submit" value="Subscribe"> -->

                                <?= form_close(); ?>
                            </div>
                        </div>

                        <div class="widget follow-widget">
                            <h3 class="widget-title">Follow Us</h3>
                            <ul class="social-icons-menu list-unstyled">
                                <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

    </section>

    <!-- ========== End Main Content ========== -->

    <?php include('footer.php'); ?>
    <!-- ========== Start Scroll To Top ========== -->

    <a href="#" class="scroll-top">
        <span><i class="fa fa-arrow-up"></i></span>
    </a>

    <!-- ========== End Scroll To Top ========== -->
    <?php include('foot.php'); ?>
</body>

</html>