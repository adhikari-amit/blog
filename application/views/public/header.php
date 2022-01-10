  <!-- ====================== Primary Page Layout ============================ -->  
      
  <!-- ======================== MENU ========================== -->  
  
  <div class="header-top">
      <header class="cd-main-header grey-2-section">
      <a class="cd-logo animsition-link" href="<?= base_url('blog');?>"><img src="<?=base_url('assets/images/logo.png');?>" alt="Logo"></a>

      <nav class="cd-nav">
      <ul id="cd-primary-nav" class="cd-primary-nav is-fixed">
        <li>
          <a href="<?= base_url('blog');?>" class="animsition-link">Home</a>
        </li>
        
        <li>
          <a href="" class="animsition-link">Contact</a>
        </li>
      </ul> <!-- primary-nav -->
    </nav><ul class="cd-header-buttons">
        <li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
        <li><a class="cd-nav-trigger" href="#cd-primary-nav"><span></span></a></li>
      </ul> <!-- cd-header-buttons -->
    </header>
    
     <!-- cd-nav -->

    <div id="cd-search" class="cd-search">
        <?php echo form_open('blog/search_item'); ?>
        <?php $data = array(
            'name'          => 'query',
            'id'            => 'query',
            'placeholder'   =>"Search..",
            'type'          =>"text",
            'value' => set_value('query'),
            );

            echo form_input($data);          
        ?>
      <?= form_close(); ?>

    </div>  
  
  </div>

  
  
