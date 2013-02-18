<?php blocks_header($page); ?>

  <div id="heading_wrapper">
    <div id="heading_wrapper_after">
   	  <div class="row">
        <div class="twelve columns">
          <h2 class="page_heading_text"><?php print $title; ?></h2>
          <div id="breadcrumbs"><h3><?php if (theme_get_setting('breadcrumbs') == '1') {print $breadcrumb . $title; } ?></h3></div>
        </div>
      </div>
    </div> 
  </div>
          
  <div class="row">
    <div id ="main_content_wrap" class="<?php if (theme_get_setting('page_layout') == 'sidebar_right') { echo "twelve columns"; } else { echo "twelve columns"; } ?>">
      <div id="main_content">
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
  </div>
          
  <div class="row">
    <div class="twelve columns">
      <div class="hr_beside">
        <div class="heading_title"><?php echo theme_get_setting('recent_projects_title');?></div>
        <div class="carousel_navigation">
          <a id="prev" class="prev" href="#"><i class="general foundicon-left-arrow"></i></a>
			    <a id="next" class="next" href="#"><i class="general foundicon-right-arrow"></i></a>
        </div>
      </div>
    </div>
  </div> 
 
	<div class="row">
	  <div class="twelve columns">
	    <div class="projects_carousel">  
	      <ul id="recent_projects">
	        <?php print render($page['recent_projects']); ?>       
	      </ul>
	   </div>      
	  </div>
	</div>
 
<?php blocks_footer($page); ?>