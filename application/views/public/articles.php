<?php include('head.php'); ?>

<body>

  <?php include("header.php"); ?>

  <!-- ========== Start Main Content ========== -->
  <section class="main-content">

    <!-- ========== Start Random Posts ========== -->
    <div class="random-posts">
      <?php foreach ($mostviewed_articles as $article) : ?>
        <div class="item-box">
          <div class="overlay">
            <div class="post-thumbnail">
              <a href="<?= base_url("article/{$article->slug}") ?>">
                <img class="img-responsive" src="<?= $article->image_path ?>" alt="..." style="height:400px;">
              </a>
            </div>
            <div class="item-box-content">
              <div class="categories">
                <?php $category_slug = $this->articlesmodel->find_categoryslug($article->categories); ?>
                <div class="post-category">
                  <ul class="post-categories">
                    <li>
                      <a href="<?= base_url("category/{$category_slug->slug}"); ?>"><?= $article->categories ?></a>
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
              </div>
              <h3 class="post-title">
                <a href="<?= base_url("article/{$article->slug}") ?>"><?= $article->title ?></a>
              </h3>
              <div class="author-info">
                <?php $article_author = $this->articlesmodel->find_article_author($article->author); ?>
                <span class="author-avatar">
                  <a href='<?= base_url("author/{$article_author->slug}") ?>'><img class="#" src="<?= $article_author->image_path ?>" alt="..."></a>
                </span>
                <span class="author-name">
                  <a href='<?= base_url("author/{$article_author->slug}") ?>'><?= $article->author; ?></a>
                </span>
              </div>
              <span class="post-date">
                <i class="fa fa-calendar"></i>
                <a><?= $article->created_at; ?></a>
              </span>
              <span class="post-comments">
                <i class="fa fa-eye"></i>
                <a class="comment-url"><?= $article->article_views ?></a>
              </span>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
    <!-- ========== End Random Posts ========== -->

    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-12">
          <div class="row">
            <?php foreach ($next_articles as $next_article) : ?>
              <div class="col-sm-12">
                <div class="post-item">
                  <div class="post-thumbnail">
                    <a href="<?= base_url("article/{$next_article->slug}") ?>">
                      <img class="img-responsive" src="<?= $next_article->image_path ?>" alt="..." style="height: 500px; width:100%;">
                    </a>
                  </div>
                  <div class="post-category">
                    <?php $next_article_category_slug = $this->articlesmodel->find_categoryslug($next_article->categories); ?>
                    <ul class="post-categories">
                      <li>
                        <a href="<?= base_url("category/{$next_article_category_slug->slug}"); ?>"><?= $next_article->categories ?></a>
                      </li>
                      <?php if ($next_article->category2) : ?>
                        <li>
                          <a><?= $next_article->category2 ?></a>
                        </li>
                      <?php endif ?>
                      <?php if ($next_article->category3) : ?>
                        <li>
                          <a><?= $next_article->category3 ?></a>
                        </li>
                      <?php endif ?>

                    </ul>
                  </div>
                  <div class="post-header">
                    <h3 class="post-title">
                      <a href="<?= base_url("article/{$next_article->slug}") ?>"><?= $next_article->title ?></a>
                    </h3>
                    <span class="post-date">
                      <i class="fa fa-calendar"></i>
                      <a><?= $next_article->created_at ?></a>
                    </span>
                    <span class="post-comments">
                      <i class="fa fa-eye"></i>
                      <a class="comment-url"><?= $next_article->article_views ?></a>
                    </span>
                  </div>
                  <div class="post-content">
                    <p><?= $next_article->description; ?></p>
                  </div>
                  <div class="post-footer">
                    <div class="author-info pull-left">
                      <?php $nextarticle_author = $this->articlesmodel->find_article_author($next_article->author); ?>
                      <span class="author-avatar">
                        <a href='<?= base_url("author/{$nextarticle_author->slug}") ?>'><img class="img-responsive" src="<?= $nextarticle_author->image_path ?>" alt="..."></a>
                      </span>
                      <span class="author-name">
                        <a href='<?= base_url("author/{$nextarticle_author->slug}") ?>'><?= $next_article->author ?></a>
                      </span>
                    </div>
                    <div class="read-more pull-right">
                      <a href="<?= base_url("article/{$next_article->slug}") ?>">Continue Reading<i class="fa fa-angle-double-right"></i></a>
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


      <div class="category-owl">
        <?php foreach ($categories as $category_item) : ?>
          <div class="category-item" style="width: 50vw;">
            <div class="category-bg" style="background-image: url('<?= $category_item->image_path ?>');"></div>
            <div class="category-info">
              <a href="<?= base_url("category/{$category_item->slug}"); ?>"><?= $category_item->title ?></a>
              <span class="count"><?= $this->articlesmodel->numofarticles_category($category_item->title); ?></span>
            </div>
          </div>
        <?php endforeach ?>


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