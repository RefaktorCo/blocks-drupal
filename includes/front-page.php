<?php
  function blocks_front_page($page){
  global $root; 
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
     
        <div class="row">
		      <div class="six columns">
		        <div class="row">      
		       
						   <div class="six columns services">  
						     <div class="services_content">  
						       <div class="team_image"> 
						         <img src="<?php echo $root;?>/images/team3.jpg" alt="team"> 
						       </div>
						       <div class="team_image_hover">
						       <h2>Steve MqQueen - CEO</h2>
						       <p><a href="#" data-reveal-id="team1_modal"><i class="general foundicon-search"></i></a></p>
						       </div>
						     </div>        
						   </div>
						    
						   <div class="six columns services">  
						     <div class="services_content">   
						      <div class="team_image"> 
						         <img src="<?php echo $root;?>/images/team2.jpg" alt="team"> 
						       </div>
						       <div class="team_image_hover">
						          <h2>Robyn Sullivan - VP </h2>
						       <p><a href="#" data-reveal-id="team2_modal"><i class="general foundicon-search"></i></a></p>
						       </div>				      
						     </div>        
						   </div>
						    
						   <div class="six columns services">  
						     <div class="services_content">   
						      <div class="team_image"> 
						         <img src="<?php echo $root;?>/images/team1.jpg" alt="team"> 
						       </div>
						       <div class="team_image_hover">
						          <h2>Aiko Takahashi - Design </h2>
						       <p><a href="#" data-reveal-id="team3_modal"><i class="general foundicon-search"></i></a></p>
						       </div>				      
						     </div>        
						   </div>
		
						   <div class="six columns services">      
					       <div class="tile_contents tile-green">
					         <a href="#" data-reveal-id="map_modal"><i class="general foundicon-location"></i>
					         <p>Find Us</p></a>
					       </div>
						   </div>   
						    
		         </div>
		      </div>    
		    
		 	    <div class="six columns">
			      <div class="row">    
		      
		          <div class="six columns services">     
					      <div class="tile_contents tile-red">
					        <a href="#"><i class="general foundicon-globe"></i>
				          <p>Global Presence</p></a>
				        </div>
						  </div>			
						    
						  <div class="six columns services">     
						  	 <div class="tile_contents tile-dark-green">
						       <a href="#"><i class="general foundicon-compass"></i>
					         <p>Effective Solutions</p></a>
						     </div>
						  </div>					    
						     				    
						  <div class="six columns services">  
						    <div class="services_content">   
						      <div class="team_image"> 
						        <img src="<?php echo $root;?>/images/team4.jpg" alt="team"> 
						      </div>
						      <div class="team_image_hover">
						        <h2>Frank Douglas - Marketing </h2>
						        <p><a href="#" data-reveal-id="team4_modal"><i class="general foundicon-search"></i></a></p>
						      </div>				      
						    </div>         
						  </div>
						    			    
						  <div class="six columns services">       
					      <div class="tile_contents tile-orange">
					        <a href="#" data-reveal-id="contact_modal"><i class="general foundicon-phone"></i>
					        <p>Contact Us</p></a>
					      </div>
					    </div>				    
						     
				    </div>
				  </div> 
        </div> 			    
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
       
    <!-- Google Map Modal -->  
  	<div id="map_modal" class="reveal-modal large">
      <div id="google_map">
        <iframe width="1170" height="370" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=900+Bagby+St+Houston,+TX+77002&amp;sll=33.687,-117.774252&amp;sspn=0.324522,0.682526&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=900+Bagby+St,+Houston,+Harris,+Texas+77002&amp;ll=29.761779,-95.370008&amp;spn=0.003725,0.012864&amp;z=17&amp;iwloc=A&amp;output=embed"></iframe><br />      
      </div>
     <a class="close-reveal-modal">&#215;</a>
    </div>
    
    <!-- Team Modal 1 -->
    <div id="team1_modal" class="reveal-modal medium">
      <div class="team_bio_modal">
	      <h1>Steve McQueen - CEO</h1>
	      <img src="<?php echo $root;?>/images/team3.jpg" alt="team"> 
	      <h2>Bio</h2>
	      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
	      <h2>Connect</h2>
	      <a href="http://facebook.com" target="_blank"><i class="social foundicon-facebook"></i></a> <a href="http://twitter.com" target="_blank"><i class="social foundicon-twitter"></i></a> <a href="http://linkedin.com" target="_blank"><i class="social foundicon-linkedin"></i></a>
	      <a class="close-reveal-modal">&#215;</a>
      </div>
    </div>
    
    <!-- Team Modal 2 -->
    <div id="team2_modal" class="reveal-modal medium">
      <div class="team_bio_modal">
	      <h1>Robyn Sullivan - Vice President</h1>
	      <img src="<?php echo $root;?>/images/team2.jpg" alt="team"> 
	      <h2>Bio</h2>
	      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
	      <h2>Connect</h2>
	      <a href="http://facebook.com" target="_blank"><i class="social foundicon-facebook"></i></a> <a href="http://twitter.com" target="_blank"><i class="social foundicon-twitter"></i></a> <a href="http://linkedin.com" target="_blank"><i class="social foundicon-linkedin"></i></a>
	      <a class="close-reveal-modal">&#215;</a>
      </div>
    </div>
    
    <!-- Team Modal 3 -->
    <div id="team3_modal" class="reveal-modal medium">
      <div class="team_bio_modal">
	      <h1>Aiko Takahashi - Design</h1>
	      <img src="<?php echo $root;?>/images/team1.jpg" alt="team"> 
	      <h2>Bio</h2>
	      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
	      <h2>Connect</h2>
	      <a href="http://facebook.com" target="_blank"><i class="social foundicon-facebook"></i></a> <a href="http://twitter.com" target="_blank"><i class="social foundicon-twitter"></i></a> <a href="http://linkedin.com" target="_blank"><i class="social foundicon-linkedin"></i></a>
	      <a class="close-reveal-modal">&#215;</a>
      </div>
    </div>
    
    <!-- Team Modal 3 -->
    <div id="team4_modal" class="reveal-modal medium">
      <div class="team_bio_modal">
	      <h1>Frank Douglas - Marketing</h1>
	      <img src="<?php echo $root;?>/images/team4.jpg" alt="team"> 
	      <h2>Bio</h2>
	      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
	      <h2>Connect</h2>
	      <a href="http://facebook.com" target="_blank"><i class="social foundicon-facebook"></i></a> <a href="http://twitter.com" target="_blank"><i class="social foundicon-twitter"></i></a> <a href="http://linkedin.com" target="_blank"><i class="social foundicon-linkedin"></i></a>
	      <a class="close-reveal-modal">&#215;</a>
      </div>
    </div>
    
    <!-- End front page modal markup -->  
<?php }
?>