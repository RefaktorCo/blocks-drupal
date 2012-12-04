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

  
   <div id="slider_wrapper"> 
    <div id="slider_wrapper_after">
   <div class="row">
     <div class="twelve columns">
     <div id="banner">  				
			<div class="oneByOne_item">
			<img src="<?php echo $root;?>/images/example1/item1/wordpress-256x256.png" class="wp1_3" alt=""></img>			            
			<img src="<?php echo $root;?>/images/example1/item1/wordpress-128x128.png" class="wp1_2" alt=""></img>			    
			<img src="<?php echo $root;?>/images/example1/item1/wordpress-64x64.png" class="wp1_1" alt=""></img>  			
			<span class="txt1"><a href="http://themeforest.net/user/sike">I'm Drupal</a></span>
			<span class="txt2">Above is a hyperlink ;)</span>												
		</div>
		<div class="oneByOne_item">                                 	
			<img src="<?php echo $root;?>/images/slider_1.jpg" class="bigImage" data-animate="bounceIn"></img>
			<span class="slide2Txt1" data-animate="bounceIn">Hover to pause</span>								
			<span class="slide2Txt2" data-animate="rollIn">I'm a rollIn animation</span>											
			<span class="slide2Txt3">Now you can customize each element's animation</span>														
		</div>	
		
		<div class="oneByOne_item">
			<span class="wp1">Touch Screen</span>			
			<span class="wp2">Please Wipe Left or Right</span>															
			<img src="<?php echo $root;?>/images/example1/item2/wordpress-64x64.png" class="wp1" data-animate="lightSpeedIn" alt=""></img>
			<img src="<?php echo $root;?>/images/example1/item2/wordpress-128x128.png" class="wp2" data-animate="lightSpeedIn" alt=""></img>			
			<img src="<?php echo $root;?>/images/example1/item2/wordpress-256x256.png" class="wp3" data-animate="lightSpeedIn" alt=""></img>
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
       <div class="twelve columns">
         <div id="box1"></div>         
     </div>
     </div>  
       
     <div class="row">   
       <div  class="six columns">
         <div class="row">      
       
				    <div class="six columns">     
				       <div class="tile1 live-tile" data-mode="slide" data-stops="0" data-stack="true" style="height:195px; background-color: #666;">   
				        <!-- adding the 'full' class to an 'img' or 'a' tag causes it to fill the entire tile -->
				        <div class="tile_contents">
				            <i class="general foundicon-heart"></i>
				            <p>Title goes here</p>
				        </div>
				        <div class="tile_contents" style="background: pink;">
				            <p style="padding-top:55%; color: black;"><a href="#" class="button" data-reveal-id="myModal_15">Click to open</a></p>
				        </div>
				       </div>
				    </div>
				    
				    <div class="six columns">     
				       <div class="tile1 live-tile" data-mode="slide" data-stops="0" data-stack="true" style="height:195px; background-color: #666;">   
				        <!-- adding the 'full' class to an 'img' or 'a' tag causes it to fill the entire tile -->
				        <div class="tile_contents">
				            <i class="general foundicon-heart"></i>
				            <p>Title goes here</p>
				        </div>
				        <div class="tile_contents" style="background: pink;">
				            <p style="padding-top:55%; color: black;"><a href="#" class="button" data-reveal-id="myModal_15">Click to open</a></p>
				        </div>
				       </div>
				    </div>

<div class="six columns">     
				       <div class="tile1 live-tile" data-mode="slide" data-stops="0" data-stack="true" style="height:195px; background-color: #666;">   
				        <!-- adding the 'full' class to an 'img' or 'a' tag causes it to fill the entire tile -->
				        <div class="tile_contents">
				            <i class="general foundicon-heart"></i>
				            <p>Title goes here</p>
				        </div>
				        <div class="tile_contents" style="background: pink;">
				            <p style="padding-top:55%; color: black;"><a href="#" class="button" data-reveal-id="myModal_15">Click to open</a></p>
				        </div>
				       </div>
				    </div>


<div class="six columns">     
				       <div class="tile1 live-tile" data-mode="slide" data-stops="0" data-stack="true" style="height:195px; background-color: #666;">   
				        <!-- adding the 'full' class to an 'img' or 'a' tag causes it to fill the entire tile -->
				        <div class="tile_contents">
				            <i class="general foundicon-heart"></i>
				            <p>Title goes here</p>
				        </div>
				        <div class="tile_contents" style="background: pink;">
				            <p style="padding-top:55%; color: black;"><a href="#" class="button" data-reveal-id="myModal_15">Click to open</a></p>
				        </div>
				       </div>
				    </div>

				    
      </div>
    </div>    
    
    <div id="about" class="six columns">
      <div class="row">    
				     				    
				     <div class="twelve columns">     
				       <div class="live-tile red" data-mode="flip" data-initdelay="300">   
				        <!-- adding the 'full' class to an 'img' or 'a' tag causes it to fill the entire tile -->
				        <div class="tile_contents">
				            <i class="general foundicon-smiley"></i>
				            <p>Title goes here</p>
				        </div>
				        <div class="tile_contents">
				            <i class="general foundicon-phone"></i>
				            <p>Other title</p>
				        </div>
				       </div>
				    </div>
				    
				      <div class="six columns">     
				       <div class="live-tile orange" data-direction="horizontal" data-mode="flip" data-initdelay="400">   
				        <!-- adding the 'full' class to an 'img' or 'a' tag causes it to fill the entire tile -->
				        <div class="tile_contents">
				            <i class="general foundicon-photo"></i>
				            <p>Title goes here</p>
				        </div>
				        <div class="tile_contents">
				            <i class="general foundicon-flag"></i>
				            <p>Other title</p>
				        </div>
				       </div>
				    </div>
				    
				     <div class="six columns">     
				       <div class="live-tile green" data-mode="flip" data-initdelay="300">   
				        <!-- adding the 'full' class to an 'img' or 'a' tag causes it to fill the entire tile -->
				        <div class="tile_contents">
				            <i class="general foundicon-location"></i>
				            <p><a href="#" style="line-height: 12px" data-reveal-id="map_modal">Find Us</a></p>
				        </div>
				        <div class="tile_contents">
				            <i class="general foundicon-phone"></i>
				            <p>Other title</p>
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

  
         
    <div id="about" class="row">
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
        
          <li>
            <div class="carousel_item_wrapper"> 
              <div class="carousel_item_content">
	              <div class="carousel_item_image">
			            <img src="<?php echo $root;?>/images/portfolio_1.jpg">
	              </div>
	              <div class="carousel_item_description">
	                <h3>Test</h3>
	              </div>
              </div>
            
	            <div class="carousel_item_hover">
	              <p>Testing hover</p>
	              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
	              <p><a href="<?php echo $root;?>/images/portfolio_1.jpg" rel="lightbox" title="Beautiful, isn't it?">Click here</a> to view a picture inside Slimbox.</p>
	            </div>
            </div>  
            
          </li>  
          
          <li>
            <div class="carousel_item_wrapper"> 
              <div class="carousel_item_content">
	              <div class="carousel_item_image">
			            <img src="<?php echo $root;?>/images/portfolio_2.jpg">
	              </div>
	              <div class="carousel_item_description">
	                <h3>Test</h3>
	              </div>
              </div>
            
	            <div class="carousel_item_hover">
	              <p>Testing hover</p>
	              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
	              <p><a href="<?php echo $root;?>/images/portfolio_2.jpg" rel="lightbox" title="Beautiful, isn't it?">Click here</a> to view a picture inside Slimbox.</p>
	            </div>
            </div>  
            
          </li>  
          
          <li>
            <div class="carousel_item_wrapper"> 
              <div class="carousel_item_content">
	              <div class="carousel_item_image">
			            <img src="<?php echo $root;?>/images/portfolio_3.jpg">
	              </div>
	              <div class="carousel_item_description">
	                <h3>Test</h3>
	              </div>
              </div>
            
	            <div class="carousel_item_hover">
	              <p>Testing hover</p>
	              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
	              <p><a href="<?php echo $root;?>/images/portfolio_3.jpg" rel="lightbox" title="Beautiful, isn't it?">Click here</a> to view a picture inside Slimbox.</p>
	            </div>
            </div>  
            
          </li>  
          
          <li>
            <div class="carousel_item_wrapper"> 
              <div class="carousel_item_content">
	              <div class="carousel_item_image">
			            <img src="<?php echo $root;?>/images/portfolio_4.jpg">
	              </div>
	              <div class="carousel_item_description">
	                <h3>Test</h3>
	              </div>
              </div>
            
	            <div class="carousel_item_hover">
	              <p>Testing hover</p>
	              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
	              <p><a href="<?php echo $root;?>/images/portfolio_4.jpg" rel="lightbox" title="Beautiful, isn't it?">Click here</a> to view a picture inside Slimbox.</p>
	            </div>
            </div>  
            
          </li>  
          
          <li>
            <div class="carousel_item_wrapper"> 
              <div class="carousel_item_content">
	              <div class="carousel_item_image">
			            <img src="<?php echo $root;?>/images/portfolio_1.jpg">
	              </div>
	              <div class="carousel_item_description">
	                <h3>Test</h3>
	              </div>
              </div>
            
	            <div class="carousel_item_hover">
	              <p>Testing hover</p>
	              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
	              <p><a href="<?php echo $root;?>/images/portfolio_1.jpg" rel="lightbox" title="Beautiful, isn't it?">Click here</a> to view a picture inside Slimbox.</p>
	            </div>
            </div>  
            
          </li>  
          
          <li>
            <div class="carousel_item_wrapper"> 
              <div class="carousel_item_content">
	              <div class="carousel_item_image">
			            <img src="<?php echo $root;?>/images/portfolio_2.jpg">
	              </div>
	              <div class="carousel_item_description">
	                <h3>Test</h3>
	              </div>
              </div>
            
	            <div class="carousel_item_hover">
	              <p>Testing hover</p>
	              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
	              <p><a href="<?php echo $root;?>/images/portfolio_2.jpg" rel="lightbox" title="Beautiful, isn't it?">Click here</a> to view a picture inside Slimbox.</p>
	            </div>
            </div>  
            
          </li>  
          
          <li>
            <div class="carousel_item_wrapper"> 
              <div class="carousel_item_content">
	              <div class="carousel_item_image">
			            <img src="<?php echo $root;?>/images/portfolio_3.jpg">
	              </div>
	              <div class="carousel_item_description">
	                <h3>Test</h3>
	              </div>
              </div>
            
	            <div class="carousel_item_hover">
	              <p>Testing hover</p>
	              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
	              <p><a href="<?php echo $root;?>/images/portfolio_3.jpg" rel="lightbox" title="Beautiful, isn't it?">Click here</a> to view a picture inside Slimbox.</p>
	            </div>
            </div>  
            
          </li>  
          
          <li>
            <div class="carousel_item_wrapper"> 
              <div class="carousel_item_content">
	              <div class="carousel_item_image">
			            <img src="<?php echo $root;?>/images/portfolio_4.jpg">
	              </div>
	              <div class="carousel_item_description">
	                <h3>Test</h3>
	              </div>
              </div>
            
	            <div class="carousel_item_hover">
	              <p>Testing hover</p>
	              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
	              <p><a href="<?php echo $root;?>/images/portfolio_4.jpg" rel="lightbox" title="Beautiful, isn't it?">Click here</a> to view a picture inside Slimbox.</p>
	            </div>
            </div>  
            
          </li>  
          
         
        
        </ul>
      
        
       </div>      
      </div>
    </div>
      
   
    
  <div class="row">
       <div class="twelve columns">
         <h3>Isotope Playground</h3>
         <hr>
       </div>
     </div>   
    
  <div class="row">
    <div class="twelve columns">
    <div class="row">    
     <section id="options" class="clearfix">
	      <ul id="filters" class="option-set clearfix" data-option-key="filter">
	        <li><a href="#filter" data-option-value="*" class="selected small button">All</a></li>
	        <li><a href="#filter" data-option-value=".cat_1" class="small button">Cat. 1</a></li>
	        <li><a href="#filter" data-option-value=".cat_2" class="small button">Cat. 2</a></li>
	        <li><a href="#filter" data-option-value=".cat_3" class="small button">Cat. 3</a></li>
	      </ul>
      </section>
    
      <div id="isotope_test" style="clear: both; float: none;">
    
       
    <div class="three columns switch cat_1" data-category="cat_1">
      <div class="portfolio_item">
        <div class="portfolio_image">
          <img src="<?php echo $root;?>/images/portfolio_1.jpg">
          
        </div>
        <div class="portfolio_text">
        Portfolio 1
        </div>
      </div>  
    </div>
    
    <div class="three columns switch cat_1" data-category="cat_1 cat_2">
      <div class="portfolio_item">
        <div class="portfolio_image">
          <img src="<?php echo $root;?>/images/portfolio_2.jpg">
        </div>
        <div class="portfolio_text">
        Portfolio 2
        </div>
      </div>  
    </div>
    
    <div class="three columns switch cat_2" data-category="cat_2">
      <div class="portfolio_item">
        <div class="portfolio_image">
          <img src="<?php echo $root;?>/images/portfolio_3.jpg">
        </div>
        <div class="portfolio_text">
        Portfolio 3
        </div>
      </div>  
    </div>
    
    <div class="three columns switch cat_3" data-category="cat_3 cat_2">
      <div class="portfolio_item">
        <div class="portfolio_image">
          <img src="<?php echo $root;?>/images/portfolio_4.jpg">
        </div>
        <div class="portfolio_text">
        Portfolio 4
        </div>
      </div>  
    </div>
    
    <div class="three columns switch cat_1" data-category="cat_1 cat_3">
      <div class="portfolio_item">
        <div class="portfolio_image">
          <img src="<?php echo $root;?>/images/portfolio_4.jpg">
        </div>
        <div class="portfolio_text">
        Portfolio 5
        </div>
      </div>  
    </div>
    
    <div class="three columns switch cat_1" data-category="cat_1">
      <div class="portfolio_item">
        <div class="portfolio_image">
          <img src="<?php echo $root;?>/images/portfolio_3.jpg">
        </div>
        <div class="portfolio_text">
        Portfolio 6
        </div>
      </div>  
    </div>
    
    <div class="three columns switch cat_2" data-category="cat_2 cat_1">
      <div class="portfolio_item">
        <div class="portfolio_image">
          <img src="<?php echo $root;?>/images/portfolio_2.jpg">
        </div>
        <div class="portfolio_text">
        Portfolio 7
        </div>
      </div>  
    </div>
    
    <div class="three columns switch cat_3" data-category="cat_3">
      <div class="portfolio_item">
        <div class="portfolio_image">
          <img src="<?php echo $root;?>/images/portfolio_1.jpg">
        </div>
        <div class="portfolio_text">
        Portfolio 8
        </div>
      </div>  
    </div>
    
    <div class="three columns switch cat_3" data-category="cat_3">
      <div class="portfolio_item">
        <div class="portfolio_image">
          <img src="<?php echo $root;?>/images/portfolio_1.jpg">
        </div>
        <div class="portfolio_text">
        Portfolio 8
        </div>
      </div>  
    </div>
    
       <div class="three columns switch cat_3" data-category="cat_3">
      <div class="portfolio_item">
        <div class="portfolio_image">
          <img src="<?php echo $root;?>/images/portfolio_2.jpg">
        </div>
        <div class="portfolio_text">
        Portfolio 8
        </div>
      </div>  
    </div>

   <div class="three columns switch cat_3" data-category="cat_3">
      <div class="portfolio_item">
        <div class="portfolio_image">
          <img src="<?php echo $root;?>/images/portfolio_3.jpg">
        </div>
        <div class="portfolio_text">
        Portfolio 8
        </div>
      </div>  
    </div>

   <div class="three columns switch cat_3" data-category="cat_3">
      <div class="portfolio_item">
        <div class="portfolio_image">
          <img src="<?php echo $root;?>/images/portfolio_4.jpg">
        </div>
        <div class="portfolio_text">
        Portfolio 8
        </div>
      </div>  
    </div>






      </div>
    </div>
    </div>
  </div>
  
 
  <!-- end main wrap -->     

  
    <div id="map_modal" class="reveal-modal large">
      <div id="google_map">
                <iframe width="1170" height="370" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=900+Bagby+St+Houston,+TX+77002&amp;sll=33.687,-117.774252&amp;sspn=0.324522,0.682526&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=900+Bagby+St,+Houston,+Harris,+Texas+77002&amp;ll=29.761779,-95.370008&amp;spn=0.003725,0.012864&amp;z=17&amp;iwloc=A&amp;output=embed"></iframe><br />      
              </div>

     <a class="close-reveal-modal">&#215;</a>
    </div>
      
    <div id="login_modal" class="reveal-modal medium">
	    <?php if(!$page['header_login']) {?>
        <h2>Add the user menu block here or your own custom code</h2>
      <?php } else { print render($page['header_login']); }?>  
      <a class="close-reveal-modal">&#215;</a>
    </div>



    <div id="contact_modal" class="reveal-modal medium">
      <?php if(!$page['header_contact']) {?>
        <h2>Add the contact block here or your own custom code</h2>
      <?php } else { print render($page['header_contact']); }?> 
      <a class="close-reveal-modal">&#215;</a>
    </div>

  
  
    
    <div id="myModal" class="reveal-modal large">
  <h2>Awesome. I have it.</h2>
  <p class="lead">Your couch.  It is mine.</p>
  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
  <a class="close-reveal-modal">&#215;</a>
</div>
 
         
             
    <!-- end main body container -->  
<?php }
?>