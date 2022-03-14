<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="FusionBlog - Personal Blog Theme">
    <meta name="keywords" content="Html, Css, jQuery, JavaScript, FusionBlog, blog, personal blog, template, news theme">

    <title>FusionBlog - Personal Blog Theme</title>

    <link rel="icon" href="images/icon.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap">
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/css/slick.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/fontawesome/css/all.min.css'); ?>">
    <style>
        #rox {
            background-color: #f3a079;
            color: white;
        }

        #rox:hover {
            background-color: #000;
            color: white;
        }
    </style>

</head>

<body>

    <?php include('header.php'); ?>

    <!-- ========== Start Single Post ========== -->
    <section class="main-content post-single">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="post-item">
                                <div class="post-thumbnail">
                                    <a href='<?= base_url("eventdetails/{$event->workshop_slug}"); ?>'> <img class="img-responsive" src="<?= $event->image_path ?>" alt="..." style="height: 500px; width:100%;"></a>
                                </div>
                                <div class="post-category">
                                    <ul class="post-categories">
                                        <?php if ($event->categories) : ?>
                                            <li>
                                                <a href="category.html"><?= $event->categories ?></a>
                                            </li>
                                        <?php endif ?>
                                        <?php if ($event->category2) : ?>
                                            <li>
                                                <a><?= $event->category2 ?></a>
                                            </li>
                                        <?php endif ?>
                                        <?php if ($event->category3) : ?>
                                            <li>
                                                <a><?= $event->category3 ?></a>
                                            </li>
                                        <?php endif ?>
                                    </ul>
                                </div>
                                <div class="post-header">
                                    <h3 class="post-title"><?= $event->workshop_name ?></h3>
                                    <span class="post-date">
                                        <i class="fa fa-calendar"></i>
                                        <a href="#"><?= $event->workshop_date ?></a>
                                    </span>

                                </div>
                                <div class="post-content">
                                    <?= $event->workshop_description ?>
                                </div>
                                <div class="post-footer">
                                    <div class="author-info pull-left">
                                        <?php if ($event->status == "upcoming") : ?>
                                            <a href="<?= base_url('submitarticle') ?>"><button id="rox" type="submit" class="form-control">Submit</button></a>
                                        <?php else : ?>
                                            <button id="rox" type="submit" class="form-control" disabled>Submit</button>
                                        <?php endif ?>

                                    </div>
                                    <div class="social-icons pull-right">
                                        <ul class="social-icons-menu list-unstyled">
                                            <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-3 col-sm-12">
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
                            <?php foreach ($topfour as $newarticle) : ?>
                                <div class="recent-post-item">
                                    <div class="recent-post-widget-thumbnail">
                                        <a href="<?= base_url("blog/article/{$newarticle->slug}") ?>">
                                            <img class="img-responsive" src="<?= $newarticle->image_path ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="recent-post-widget-content">
                                        <h4 class="recent-post-widget-title">
                                            <a href="<?= base_url("blog/article/{$newarticle->slug}") ?>"><?= $newarticle->title ?></a>
                                        </h4>
                                        <div class="recent-post-widget-info">
                                            <span class="author">
                                                <i class="fa fa-edit"></i>
                                                <a href="author.html"><?= $newarticle->author ?></a>
                                            </span>
                                            <span class="date">
                                                <i class="fa fa-calendar"></i>
                                                <a href="#"><?= $newarticle->created_at ?></a>
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
                                <?php echo form_error('email', '<p>', '</p>') ?>
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
        </div>
    </section>

    <!-- ========== Start Scroll To Top ========== -->

    <a href="#" class="scroll-top">
        <span><i class="fa fa-arrow-up"></i></span>
    </a>

    <!-- ========== End Scroll To Top ========== -->
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
    <?php include('foot.php'); ?>
</body>

</html>