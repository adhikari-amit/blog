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
   <style type="text/css">
      .post-content {

         -webkit-user-select: none;
         -webkit-touch-callout: none;
         -moz-user-select: none;
         -ms-user-select: none;
         user-select: none;
         color: #cc0000;
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
                           <img class="img-responsive" src="<?= $article->image_path ?>" alt="...">
                        </div>
                        <div class="post-category">
                           <?php $article_category_slug = $this->articlesmodel->find_categoryslug($article->categories); ?>
                           <ul class="post-categories">
                              <li>
                                 <a href="<?= base_url("category/{$article_category_slug->slug}"); ?>"><?= $article->categories ?></a>
                              </li>
                              <?php if ($article->category2) : ?>
                                 <li>
                                    <a><?= $article->category2 ?></a>
                                 </li>
                              <?php endif ?>
                              <?php if ($article->category3) : ?>
                                 <li>
                                    <a><?= $article->category3 ?></a>
                                 </li>
                              <?php endif ?>
                           </ul>
                        </div>
                        <div class="post-header">
                           <h3 class="post-title"><?= $article->title ?></h3>
                           <span class="post-date">
                              <i class="fa fa-calendar"></i>
                              <a href="#"><?= $article->created_at ?></a>
                           </span>
                           <span class="post-comments">
                              <i class="fa fa-eye"></i>
                              <a href="single.html#respond" class="comment-url"><?= $article->article_views ?></a>
                           </span>
                        </div>
                        <div class="post-content">
                           <?= htmlspecialchars_decode($article->body) ?>
                        </div>
                        <div class="post-footer">
                           <div class="post-tags pull-left">
                              <div class="post-tags pull-left">
                                 <span class="title">Tags: </span>
                                 <?php foreach ($article_tags as $article_tag) : ?>
                                    <a href="tags" rel="tag"><?= $article_tag->tag ?></a>
                                 <?php endforeach ?>
                              </div>
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
                     <!-- Author bio -->
                     <div class="author-box" style="background-color:#efefef; ">
                        <div class="author-image">
                           <a href='<?= base_url("author/{$author->slug}") ?>'><img class="img-responsive" src="<?= $author->image_path ?>" alt="" height="107" width="107"></a>
                        </div>
                        <div class="author-info">
                           <a href='<?= base_url("author/{$author->slug}") ?>'>
                              <h3 class="author-name" style="color:#fffff;"><?= $author->name ?></h3>
                           </a>
                           <p class="author-desc"><?= $author->bio ?></p>
                           <div class="social-icons">
                              <ul class="social-icons-menu list-unstyled">
                                 <li><a href="<?= $author->twitter ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                 <li><a href="<?= $author->instagram ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>

                                 <li><a href="<?= $author->facebook ?>" target="_blank"><i class="fab fa-facebook"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="related-posts">
                        <h4 class="related-posts-title">You may also like</h4>
                        <div class="row">
                           <?php foreach ($related_articles as $related_article) : ?>
                              <div class="col-md-6">
                                 <div class="related-post">
                                    <div class="post-thumbnail" style="height:38vh">
                                       <a href="<?= base_url("blog/article/{$related_article->slug}") ?>">
                                          <img class="img-responsive" src="<?= $related_article->image_path ?>" alt="...">
                                       </a>
                                    </div>
                                    <div class="post-info">
                                       <div class="post-category">
                                          <?php $related_article_category_slug = $this->articlesmodel->find_categoryslug($related_article->categories); ?>
                                          <ul class="post-categories">

                                             <li>
                                                <a href="<?= base_url("category/{$related_article_category_slug->slug}"); ?>"><?= $related_article->categories ?></a>
                                             </li>
                                             <?php if ($related_article->category2) : ?>
                                                <li>
                                                   <a><?= $related_article->category2 ?></a>
                                                </li>
                                             <?php endif ?>
                                             <?php if ($related_article->category3) : ?>
                                                <li>
                                                   <a><?= $related_article->category3 ?></a>
                                                </li>
                                             <?php endif ?>
                                          </ul>
                                       </div>
                                       <div class="post-header">
                                          <h3 class="post-title">
                                             <a href="<?= base_url("blog/article/{$related_article->slug}") ?>">
                                                <?= $related_article->title; ?>
                                             </a>
                                          </h3>
                                          <span class="author">
                                             <i class="fa fa-edit"></i>
                                             <a href="author.html"><?= $related_article->author; ?></a>
                                          </span>
                                          <span class="date">
                                             <i class="fa fa-calendar"></i>
                                             <a href="#"><?= $related_article->created_at ?></a>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           <?php endforeach ?>
                        </div>
                     </div>
                     <div class="comments">
                        <h3 class="comments-count"><?php echo count($comments) ?> Comments</h3>
                        <?php if ($comments) : ?>
                           <ul class="list-unstyled comments-list">
                              <?php foreach ($comments as $comment) : ?>
                                 <li class="comment">
                                    <div class="comment-body">
                                       <div class="comment-author">
                                          <img alt="" src="<?= base_url('assets/images/avatar.png') ?>" class="avatar" height="64" width="64">
                                          <cite class="fn"><?= $comment->user_name ?></cite>
                                          <span class="says">says:</span>
                                       </div>
                                       <div class="comment-meta commentmetadata">
                                          <a href="#"><?= $comment->createdOn ?></a>
                                          <a class="comment-edit-link" href="#"></a>
                                       </div>
                                       <h5><?= $comment->comments ?></h5>
                                       <div class="reply">
                                       </div>
                                    </div>
                                 </li>
                              <?php endforeach ?>
                           </ul>
                        <?php endif ?>
                        <div id="respond" class="comment-respond">
                           <h3 class="comment-reply-title">Leave a Reply</h3>
                           <?php echo form_open('blog/add_comments'); ?>
                           <?php echo form_hidden('article_id', $article->id); ?>
                           <?php echo form_hidden('time', date("Y/m/d")); ?>
                           <?php echo form_hidden('article_slug', $article->slug); ?>
                           <div class="comment-form">
                              <label class="label">Comment</label>
                              <?php echo form_error('comment', '<p style="color:red">', '</p>') ?>
                              <?php $data = array(
                                 'name'          => 'comment',
                                 'id'            => 'comment',
                                 'type'          => 'textarea',
                                 'placeholder'   => "Comment*",
                                 'value'         => set_value('comment'),
                              );
                              echo form_textarea($data);
                              ?>

                              <div class="row">
                                 <div class="col-sm-12">
                                    <label class="label">Name</label>
                                    <?php echo form_error('name', '<p style="color:red">', '</p>') ?>
                                    <?php $data = array(
                                       'name'          => 'name',
                                       'id'            => 'name',
                                       'type'          => 'text',
                                       'placeholder'   => "Name *",
                                       'value'         => set_value('name'),
                                    );

                                    echo form_input($data);
                                    ?>
                                 </div>
                              </div>

                              <p class="form-submit">
                                 <?php $data = array(
                                    'name'          => 'submit',
                                    'value'         => 'Post Comment',
                                    'type'          => 'submit',
                                    'class'         => 'submit',
                                 );
                                 echo form_submit($data);
                                 ?>
                              </p>
                           </div>
                           <?= form_close(); ?>

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
                  <div class="widget categories-widget">
                     <h3 class="widget-title">Most Viewed</h3>
                     <?php foreach ($most_articles as $mostviewed) : ?>
                        <div class="category-item">
                           <a href="<?= base_url("blog/article/{$mostviewed->slug}") ?>"><?= $mostviewed->title ?></a>
                           <span class="count">(<?= $mostviewed->article_views ?>)</span>
                        </div>
                     <?php endforeach ?>
                  </div>
                  <div class="widget recent-posts-widget">
                     <h3 class="widget-title">Recent Posts</h3>
                     <?php foreach ($new_articles as $newarticle) : ?>
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
                        <!-- <input type="submit" value="Subscribe"> -->

                        <?= form_close(); ?>
                     </div>
                  </div>
                  <div class="widget tags-widget">
                     <h3 class="widget-title">Tags</h3>
                     <ul class="tags-list list-unstyled">
                        <?php foreach ($tags as $tag) : ?>
                           <li><a href="<?= base_url("tag/{$tag->tag_slug}"); ?>"><?= $tag->tag ?></a></li>
                        <?php endforeach ?>
                     </ul>
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
         <?php $year = date("Y");
         ?>
         <p class="copyright">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright © 2020-<?= $year ?> Kahaniyaa. All rights reserved.<br>Designed and Developed by <a target="_blank" href="https://thetg.in"> Tranzposing Gradient</a>
      </div>
   </div>


   <?php include('foot.php'); ?>
</body>

</html>