<?php 

function blocks_bootstrap_slider($page){
  global $root; 
  $slide_number = theme_get_setting('slides_number');
?>
					<div class="row">
            <div class="span12">
              <div id="myCarousel" class="carousel slide">
              
						   	<div class="carousel-inner">
							    <?php $i = '1'; while ($i <= $slide_number) { ?>
							    <div class="<?php if ($i == '1') {echo "active ";} ?>item">
							      <a href="<?php echo theme_get_setting('slide_url_'.$i.''); ?>">
							      	<img src="<?php print file_create_url(theme_get_setting('slide_path_'.$i.'')); ?>">
							      </a>
							      <?php if (theme_get_setting('slide_caption_'.$i.'') != '') : ?>
							    	<div class="carousel-caption">
								    	<p><?php echo theme_get_setting('slide_caption_'.$i.''); ?></p>
								    </div><!-- end caption -->
								    <?php endif; ?>
							    </div><!-- end item -->
							    <?php $i++; } ?>
							  </div>
							  <!-- end carousel-inner -->
							
							  <!-- Carousel nav -->
							  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
							  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
						  
						  </div>
						  <!-- end myCarousel -->            
						</div>
				  </div>
				  
				  <script type="text/javascript">
						jQuery(document).ready(function ($) {
						  $('.carousel').carousel({
						    interval: 5000
						  })
						})
				  </script>
          
<?php }


function blocks_nivo_slider($page){
  global $root; 
  $slide_number = theme_get_setting('slides_number');
?>
					<div class="row">
            <div class="span12">
              <div class="slider-wrapper theme-default">
                
                <div id="slider" class="nivoSlider">
	                <?php $i = '1'; while ($i <= $slide_number) { ?>  
	                	<a href="<?php echo theme_get_setting('slide_url_'.$i.''); ?>">
	                  	<img src="<?php print file_create_url(theme_get_setting('slide_path_'.$i.'')); ?>" alt="slider" title="#htmlcaption<?php echo $i;?>">
	                  </a>
	                <?php $i++; } ?>              
                </div>
                
                <?php $i = '1'; while ($i <= $slide_number) { ?> 
		            <div id="htmlcaption<?php echo $i;?>" class="nivo-html-caption">
                 <?php echo theme_get_setting('slide_caption_'.$i.''); ?>
                </div>
			          <?php $i++; } ?> 
			          
	            </div>
            </div>
          </div>
          
          <script type="text/javascript">
	          jQuery(document).ready(function ($) {
	          	$('#slider').nivoSlider();
	          });
	        </script>
<?php }

function blocks_elastic_image_slider($page){
  global $root; 
  $slide_number = theme_get_setting('slides_number');
?>
					<div class="row">
            <div class="span12">
              <div id="ei-slider" class="ei-slider">
              
                <ul class="ei-slider-large">
	                <?php $i = '1'; while ($i <= $slide_number) { ?>
	                <li>
	                	<a href="<?php echo theme_get_setting('slide_url_'.$i.''); ?>">
	                  	<img src="<?php print file_create_url(theme_get_setting('slide_path_'.$i.'')); ?>" alt="slider">
	                  </a>
	                  <?php if (theme_get_setting('slide_caption_'.$i.'') != '') : ?>
	                  <div class="ei-title">
	                  	<?php echo theme_get_setting('slide_caption_'.$i.''); ?>
	                  </div>
	                  <?php endif; ?>
	                </li>
	                <?php $i++; } ?>        
                </ul>
                <!-- ei-slider-large -->
                
		            <ul class="ei-slider-thumbs">
		            	<li class="ei-slider-element">Current</li>
		              <?php $i = '1'; while ($i <= $slide_number) { ?>
				          <li><a href="#">Slide <?php echo $i; ?></a><img src="<?php print file_create_url(theme_get_setting('slide_path_'.$i.'')); ?>" alt="thumb" height="60" width="150" /></li>
				          <?php $i++; } ?>
			          </ul>
			          <!-- ei-slider-thumbs -->
	            </div>
	            <!-- ei-slider -->
            </div>
          </div>
          
          <script type="text/javascript">
	          jQuery(document).ready(function ($) {
	          	$('#ei-slider').eislideshow({
								animation			: 'center',
								autoplay			: true,
								slideshow_interval	: 3000,
								titlesFactor		: 0
						  });
						  
						  
	          });
	        </script>
<?php }

function blocks_front_page($page){
  global $root; 
?>

<!-- main span12 -->

  
   <div id="heading_wrapper"> 
    <div id="heading_wrapper_after">
   <div class="row">
     <div class="twelve columns">
     <div id="banner">  				
			<div class="oneByOne_item">
			<img src="<?php echo $root;?>/images/slider/drupal.png" class="slide1_3" alt=""></img>			            
			<img src="<?php echo $root;?>/images/slider/html5.png" class="slide1_2" alt=""></img>			    
			<img src="<?php echo $root;?>/images/slider/css3.png" class="slide1_1" alt=""></img>  			
			<span class="slide1_txt1">Built on Drupal 7</span>
			<span class="slide1_txt2">Powered by HTML5 and CSS3</span>												
		</div>
		
		
		<div class="oneByOne_item">
			<span class="slide2_1">Touch Screen</span>			
			<span class="slide2_2">Please Wipe Left or Right</span>															
			<img src="<?php echo $root;?>/images/example1/item2/wordpress-64x64.png" class="slide2_1" data-animate="lightSpeedIn" alt=""></img>
			<img src="<?php echo $root;?>/images/example1/item2/wordpress-128x128.png" class="slide2_2" data-animate="lightSpeedIn" alt=""></img>			
			<img src="<?php echo $root;?>/images/example1/item2/wordpress-256x256.png" class="slide2_3" data-animate="lightSpeedIn" alt=""></img>
		</div>   
		
		<div class="oneByOne_item">                                 	
			<img src="<?php echo $root;?>/images/slider_1.jpg" class="bigImage" data-animate="bounceIn"></img>
			<span class="slide2Txt1" data-animate="bounceIn">Hover to pause</span>								
			<span class="slide2Txt2" data-animate="rollIn">I'm a rollIn animation</span>											
			<span class="slide2Txt3">Now you can customize each element's animation</span>														
		</div>	              		
		</div>    
     </div>
   </div>  
  </div> 
  
 </div>
  
   
   <div id="about" class="row">
       <div class="twelve columns">
         <div class="hr_beside">
           <div class="heading_title">Who We Are</div>
         </div>
        
       </div>
     </div> 
     
     
            
     <div class="row">   
       <div class="six columns">
         <div class="row">      
       
				    <div class="six columns services">  
				      <div class="services_content">  
				        <div class="team_image"> 
				          <img src="<?php echo $root;?>/images/team3.jpg"> 
				        </div>
				        <div class="team_image_hover">
				        <h2>Steve MqQueen - CEO</h2>
				        <p><a href="#" style="line-height: 12px" data-reveal-id="team1_modal"><i class="general foundicon-search"></i></a></p>
				        </div>
				      </div>        
				    </div>
				    
				    <div class="six columns services">  
				      <div class="services_content">   
				       <div class="team_image"> 
				          <img src="<?php echo $root;?>/images/team2.jpg"> 
				        </div>
				        <div class="team_image_hover">
				           <h2>Robyn Sullivan - VP </h2>
				        <p><a href="#" style="line-height: 12px" data-reveal-id="team2_modal"><i class="general foundicon-search"></i></a></p>
				        </div>				      
				      </div>        
				    </div>
				    
				    <div class="six columns services">  
				      <div class="services_content">   
				       <div class="team_image"> 
				          <img src="<?php echo $root;?>/images/team1.jpg"> 
				        </div>
				        <div class="team_image_hover">
				           <h2>Aiko Takahashi - Design </h2>
				        <p><a href="#" style="line-height: 12px" data-reveal-id="team3_modal"><i class="general foundicon-search"></i></a></p>
				        </div>				      
				      </div>        
				    </div>

				       <div class="six columns services">     
				       <div style="background-color: #8FAD30;">   
				          <div class="tile_contents">
				            <a href="#" data-reveal-id="map_modal"><i class="general foundicon-location"></i>
				            <p>Find Us</p></a>
				          </div>
				       </div>
				    </div>


				    
      </div>
    </div>    
    
    <div class="six columns">
      <div class="row">    
      
      <div class="six columns services">     
				       <div style="background-color: #C95D3B;">   
				        	<div class="tile_contents">
				            <a href="#"><i class="general foundicon-globe"></i>
			                 <p>Global Presence</p></a>
				          </div>
				       </div>
				    </div>			
				    
				    <div class="six columns services">     
				       <div style="background-color: #17954c;">   
				        	<div class="tile_contents">
				            <a href="#"><i class="general foundicon-compass"></i>
			                 <p>Effective Solutions</p></a>
				          </div>
				       </div>
				    </div>			
				     				    
				     				    
				    <div class="six columns services">  
				      <div class="services_content">   
				       <div class="team_image"> 
				          <img src="<?php echo $root;?>/images/team4.jpg"> 
				        </div>
				        <div class="team_image_hover">
				           <h2>Frank Douglas - Marketing </h2>
				        <p><a href="#" data-reveal-id="team4_modal"><i class="general foundicon-search"></i></a></p>
				        </div>				      
				      </div>        
				    </div>
				    
				   				    
				    <div class="six columns services">     
				       <div style="background-color: #DB8916;">   
				        	<div class="tile_contents">
				            <a href="#" data-reveal-id="contact_modal"><i class="general foundicon-phone"></i>
				            <p>Contact Us</p></a>
				          </div>
				       </div>
				    </div>				    
				     
				    
		      </div>
		    </div>  
			
      </div>
      
        
    <div id="highlight">
      <div class="row">
        <div class="one columns highlight_icon">
          <i class="general foundicon-idea"></i>
        </div>
        <div class="eleven columns">
          <h1 class="highlight_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h1>
        </div>
      </div>
    </div>

  
         
    <div id="recent" class="row">
       <div class="twelve columns">
         <div class="hr_beside">
           <div class="heading_title">Recent Posts</div>
         </div>
       </div>
     </div> 
     
     <div class="row">
       <?php print render($page['front_blog']); ?>     
     </div>
     
     
        
           <div id="about" class="row">
       <div class="twelve columns">
         <div class="hr_beside">
           <div class="heading_title">Recent Projects</div>
            <div class="carousel_navigation">
		        <a id="prev" class="prev" href="#" style="line-height: 12px"><i class="general foundicon-left-arrow"></i></a>
					  <a id="next" class="next" href="#" style="line-height: 12px"><i class="general foundicon-right-arrow"></i></a>
						
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
      


    
    </div>
  
 
  <!-- end main wrap -->    
  
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
	      <img src="<?php echo $root;?>/images/team3.jpg"> 
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
	      <img src="<?php echo $root;?>/images/team2.jpg"> 
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
	      <img src="<?php echo $root;?>/images/team1.jpg"> 
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
	      <img src="<?php echo $root;?>/images/team4.jpg"> 
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