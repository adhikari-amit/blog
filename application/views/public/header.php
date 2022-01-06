  <!-- ====================== Primary Page Layout ============================ -->  
    
    <!-- Switch Panel -->
    <div id="switch">
        <div class="content-switcher">        
      <p>Color Options:</p>
      <ul class="header">           
        <li><a href="#" onclick="setActiveStyleSheet('1'); return false;" class="button color switch" style="background-color:#cfa144"></a></li>
        <li><a href="#" onclick="setActiveStyleSheet('2'); return false;" class="button color switch" style="background-color:#9b59b6"></a></li>
        <li><a href="#" onclick="setActiveStyleSheet('3'); return false;" class="button color switch" style="background-color:#2ecc71"></a></li>
        <li><a href="#" onclick="setActiveStyleSheet('4'); return false;" class="button color switch" style="background-color:#e74c3c"></a></li>
        <li><a href="#" onclick="setActiveStyleSheet('5'); return false;" class="button color switch" style="background-color:#34495e"></a></li> 
        <li><a href="#" onclick="setActiveStyleSheet('6'); return false;" class="button color switch" style="background-color:#f1c40f"></a></li>
        <li><a href="#" onclick="setActiveStyleSheet('7'); return false;" class="button color switch" style="background-color:#3498db"></a></li>
      </ul>        
      <div class="clear"></div>    
      <div id="hide">
        <img src="<?= base_url('assets/images/close.png');?>" alt=""> 
      </div>
        </div>
  </div>
  <div id="show" style="display: block;">
        <div id="setting"></div>
    </div>
    <!-- Switch Panel --> 
      
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

  
  
