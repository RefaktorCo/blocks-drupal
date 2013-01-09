<?php 
  blocks_header($page); // Call Header 
  global $root; // call full theme path
?>

  <?php if (theme_get_setting('enable_slider') == '1') : ?>
		<div id="heading_wrapper" class="slider_wrap"> 
    	<div id="heading_wrapper_after">
	    	<div class="row">
		    	<div class="twelve columns">
			    	<div id="banner">  		
     
				      <div class="oneByOne_item">
								<img src="<?php echo theme_get_setting('slide1_img1');?>" class="slide1_img1" alt="slider">	            
								<img src="<?php echo theme_get_setting('slide1_img2');?>" class="slide1_img2" alt="slider">		    
								<img src="<?php echo theme_get_setting('slide1_img3');?>" class="slide1_img3" alt="slider">			
								<span class="slide1_txt1"><?php echo theme_get_setting('slide1_txt1');?></span>
								<span class="slide1_txt2"><?php echo theme_get_setting('slide1_txt2');?></span>												
							</div>
     
					    <div class="oneByOne_item">
								<span class="slide2_txt1"><?php echo theme_get_setting('slide2_txt1');?></span>			
								<span class="slide2_txt2"><?php echo theme_get_setting('slide2_txt2');?></span>	
								<img src="<?php echo theme_get_setting('slide2_img1');?>" class="slide2_img1" data-animate="lightSpeedIn" alt="slider">		
								<img src="<?php echo theme_get_setting('slide2_img2');?>" class="slide2_img2" data-animate="lightSpeedIn" alt="slider">	
								<img src="<?php echo theme_get_setting('slide2_img3');?>" class="slide2_img3" data-animate="lightSpeedIn" alt="slider">
							</div>   
		
							<div class="oneByOne_item">                                 	
								<img src="<?php echo theme_get_setting('slide3_img1');?>" class="slide3_img1" data-animate="bounceIn" alt="slider">
								<span class="slide3_txt1" data-animate="bounceIn"><?php echo theme_get_setting('slide3_txt1');?></span>								
								<span class="slide3_txt2" data-animate="rollIn"><?php echo theme_get_setting('slide3_txt2');?></span>											
								<span class="slide3_txt3"><?php echo theme_get_setting('slide3_txt3');?></span>														
							</div>	     
     		
						</div>    
					</div>
				</div>  
			</div> 
		</div>
  <?php endif; ?>
  
   <?php if (theme_get_setting('enable_services') == '1') : ?>
		<div class="row">
      <div class="twelve columns">
        <div class="hr_beside">
          <div class="heading_title"><?php echo theme_get_setting('services_title');?></div>
        </div>
      </div>
    </div> 
     
    <div class="row">   
      <div class="twelve columns">
      <?php if(!$page['services']) {?>
        <h2>Add a block to the "Front Page Services" block or edit the page--front.tpl template to remove this placeholder content.</h2>
      <?php } else { print render($page['services']); }?>   
	    </div>	   
    </div>
      
    <?php endif; ?>
    
    <?php if (theme_get_setting('enable_highlight') == '1') : ?>       
    <div id="highlight">
      <div class="row">
        <div class="one columns highlight_icon">
          <i class="general foundicon-idea"></i>
        </div>
        <div class="eleven columns">
          <h1 class="highlight_text"><?php echo theme_get_setting('highlight_text');?></h1>
        </div>
      </div>
    </div>
    <?php endif; ?>
  
    <?php if (theme_get_setting('enable_recent_posts') == '1') : ?>         
    <div class="row">
      <div class="twelve columns">
        <div class="hr_beside">
          <div class="heading_title"><?php echo theme_get_setting('recent_posts_title');?></div>
        </div>
      </div>
    </div> 
     
    <div class="row">
      <?php print render($page['front_blog']); ?>     
    </div>
    <?php endif; ?> 
     
    <?php if (theme_get_setting('enable_recent_projects') == '1') : ?>             
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
    <?php endif ?>  

  </div>
  <!-- end main wrapper -->    
  
  <!-- Begin front page modal markup -->    
    <?php print render($page['modal_markup']); ?>       
  <!-- End front page modal markup -->  

<?php blocks_footer($page); // Call Footer ?>