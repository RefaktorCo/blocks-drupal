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
         
        <?php if ($logo): ?>
        <div class="four columns smalltoppadding">
		      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
		        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
		      </a>
        </div>
	    <?php endif; ?>
			<!--END LOGO -->   
			<!-- NAME AND SLOGAN --> 
	    <?php if ($site_name || $site_slogan): ?>
	 
	      <div id="name-and-slogan"<?php if ($disable_site_name && $disable_site_slogan) { print ' class="hidden"'; } ?>>
	
	        <?php if ($site_name): ?>
	          <h1 id="main_title_text"<?php if ($disable_site_name) { print ' class="hidden"'; } ?>>
	            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
	          </h1>
	        <?php endif; ?>
	
	        <?php if ($site_slogan): ?>
	          <h2 id="main_title_slogan"<?php if ($disable_site_slogan) { print ' class="hidden"'; } ?>>
	            <?php print $site_slogan; ?>
	          </h2>
	        <?php endif; ?>

	      </div>  
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

  
<div id="heading_wrapper">
   <?php print render($page['page_heading']); ?>  
   <?php if (!drupal_is_front_page()): ?>
   <div class="row">
    <div class="twelve columns">
      <h2 class="page_heading_text"><?php print $title; ?></h2>
      <div id="breadcrumbs"><h3><?php if (theme_get_setting('breadcrumbs') == '1') {print $breadcrumb . $title; } ?></h3></div>
    </div>
  </div>
  <?php endif;?>
</div>
          
<div class="row">
      
  <div id="main_content_wrap" class="<?php if (($page['sidebar_first']) OR ($page['sidebar_second'])) { echo "eight columns";} else { echo "twelve columns"; } ?>">           
    <div id="main_content" class="clearfix">
      <?php print render($title_prefix); ?>
      <?php print render($title_suffix); ?>
     	 
     	<?php if ($tabs = render($tabs)): ?>
		    <div id="drupal_tabs" class="tabs">
		    <?php print render($tabs); ?>
		    </div>
		  <?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>
     	
     	<?php print render($page['content']); ?>
    </div>
  </div>
  
  <?php if (($page['sidebar_first']) OR ($page['sidebar_second'])): ?>
  <div class="four columns">
    <div id="sidebar_wrap">
    	<?php if ($page['sidebar_first']): ?>
    	<aside id="sidebar-first" role="complementary" class="sidebar clearfix">
      <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
      <?php endif; ?>
      <?php if ($page['sidebar_second']): ?>
      <aside id="sidebar-second" role="complementary" class="sidebar clearfix">
      <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-first -->
      <?php endif; ?>
    </div>        
  </div>
  <?php endif; ?>
  
</div>
      
<?php print $messages; ?>
<?php blocks_footer($page);?>