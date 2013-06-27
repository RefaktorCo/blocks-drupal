<?php
function blocks_header($page){
  global $root; 
?>
   
  <div id="main_wrapper">
  <header>
    <div class="container">
       
      <div id="top_header" > 
      <div class="row">
        <div class="six columns">
          <ul class="header_icons left">
            <li><a href="#" data-reveal-id="login_modal"><i class="general foundicon-settings"></i></a></li>
            <li> <a href="#" data-reveal-id="contact_modal"><i class="general foundicon-mail"></i></a></li>
          </ul>
        </div>
        <div class="six columns">
          <?php if($page['header_top_left']) { print render($page['header_top_left']); } ?>
        </div>
      </div> 
      </div> 
      
      <div class="row">  
        <div class="three columns branding" >
          <?php if (theme_get_setting('branding_type') == 'logo'): ?>
            <a href="<?php print url('<front>');?>"><img src="<?php print file_create_url(theme_get_setting('bg_path')); ?>" /></a>
          <?php endif; ?>
          <?php if (theme_get_setting('branding_type') == 'text'): ?>
            <a href="<?php print url('<front>');?>">
              <h1 id="main_title_text"><?php print variable_get('site_name'); ?></h1>
              <h2 id="main_title_slogan"><?php print variable_get('site_slogan'); ?></h2>
            </a>
          <?php endif; ?>
        </div>
      	<div class="nine columns"> 
          <div id="nav">
            <!-- begin menu -->
             <nav class="top-bar">
              <ul class="left">
              <li class="name">
	              <h1>
	                <a href="#">
	                  Select a page 
	                </a>
	              </h1>
	            </li>
              <li class="toggle-topbar"><a href="#"></a></li>
              </ul>
              <section class="menu_wrap">
				          <?php print theme('links__system_main_menu', array(
				            'attributes' => array(
				              'id' => 'main-menu-links',
				              'class' => array('links', 'clearfix'),
				            ),
				            'heading' => array(
				              'text' => t('Main menu'),
				              'level' => 'h2',
				              'class' => array('element-invisible'),
				            ),
				          )); 
				          ?>
              </section>
             </nav>
				      </div> 
				        
				    </div> 
				 
            <!-- end menu -->   
          </div> 
        </div>
        <!-- end main span2 -->  
       
       <?php //blocks_style_switch(); ?>
          
  </header> 
  
  <!-- Header login modal (block region) -->    
    <div id="login_modal" class="reveal-modal medium">
	    <?php if(!$page['header_login']) {?>
        <h2>Add the user menu block here or your own custom code</h2>
      <?php } else { print render($page['header_login']); }?>  
      <a class="close-reveal-modal">&#215;</a>
    </div>

    <!-- Header contact modal (block region) -->  
    <div id="contact_modal" class="reveal-modal medium">
      <?php if(!$page['header_contact']) {?>
        <h2>Add the contact block here or your own custom code</h2>
      <?php } else { print render($page['header_contact']); }?> 
      <a class="close-reveal-modal">&#215;</a>
    </div>

<?php }
?>