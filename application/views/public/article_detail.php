<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Article Detail</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css'); ?>" >

    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/whatsappshare/src/button.css'); ?>" >

</head>
<body>
   <?php include("header.php"); ?>
   <div class="container">
   <h1 class="my-5 ms-5"><?= $article->title ?></h1>
   <p class="my-5 ms-5">Published On: <?= date($article->created_at) ?></p>
   <p class="my-5 ms-5">Author:<?=($article->author) ?></p>
   <p class="my-5 ms-5">Total Views:<?=($article->article_views) ?></p>

   <div class="card text-center">
      <img src="<?= $article->image_path ?>" alt="" style="height:445px; margin: 15px;">
  </div>
  
   <div class="container">
   <?= htmlspecialchars_decode($article->body) ?>      
 </div>

   <!-- <?php if(! is_null($article->image_path)): ?> -->
 
  
</div>
   
    <?php endif?>
 </div>
  <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
 
 <!-- <a href="whatsapp://send?text=<?=base_url('/article') ?>" data-action="share/whatsapp/share">Share via Whatsapp</a> -->
<iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&layout=button&size=small&width=67&height=20&appId" width="67" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
<a href="whatsapp://send" data-text="Take a look at this awesome website:" data-href="" class="wa_btn wa_btn_s" style="display:none">Share</a>
<script async src="https://telegram.org/js/telegram-widget.js?15" data-telegram-share-url="https://core.telegram.org/widgets/share"></script>
   <?php include("footer.php"); ?>

 <script type="text/javascript" src="<?= base_url('assets/bootstrap/js/bootstrap.js');   ?>"></script>
 <script type="text/javascript">if(typeof wabtn4fg==="undefined"){wabtn4fg=1;h=document.head||document.getElementsByTagName("head")[0],s=document.createElement("script");s.type="text/javascript";s.src="<?= base_url('assets/whatsappshare/dist/whatsapp-button.js'); ?>";h.appendChild(s);}</script>
</body>
</html>



