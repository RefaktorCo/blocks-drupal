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


   <div class="row" >
     <div style="margin-top: 150px;"></div>
       <div id="about" class="six columns">
         <div class="row">      
       
				    <div class="twelve columns">     
				       <div id="tile1" class="live-tile red" data-mode="slide" data-stops="0" data-stack="true" style="height:390px;">   
				        <!-- adding the 'full' class to an 'img' or 'a' tag causes it to fill the entire tile -->
				        <div class="tile_contents">
				            <i class="foundicon-heart"></i>
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
				       <div class="live-tile green" data-mode="flip" data-initdelay="300">   
				        <!-- adding the 'full' class to an 'img' or 'a' tag causes it to fill the entire tile -->
				        <div class="tile_contents">
				            <i class="foundicon-smiley"></i>
				            <p>Title goes here</p>
				        </div>
				        <div class="tile_contents">
				            <i class="foundicon-phone"></i>
				            <p>Other title</p>
				        </div>
				       </div>
				    </div>
				    
				      <div class="six columns">     
				       <div class="live-tile orange" data-direction="horizontal" data-mode="flip" data-initdelay="400">   
				        <!-- adding the 'full' class to an 'img' or 'a' tag causes it to fill the entire tile -->
				        <div class="tile_contents">
				            <i class="foundicon-photo"></i>
				            <p>Title goes here</p>
				        </div>
				        <div class="tile_contents">
				            <i class="foundicon-flag"></i>
				            <p>Other title</p>
				        </div>
				       </div>
				    </div>
				    
				     <div class="six columns">     
				       <div class="live-tile green" data-mode="flip" data-initdelay="300">   
				        <!-- adding the 'full' class to an 'img' or 'a' tag causes it to fill the entire tile -->
				        <div class="tile_contents">
				            <i class="foundicon-smiley"></i>
				            <p>Title goes here</p>
				        </div>
				        <div class="tile_contents">
				            <i class="foundicon-phone"></i>
				            <p>Other title</p>
				        </div>
				       </div>
				    </div>
				    
				     
				    
		      </div>
		    </div>  
			
      </div>
  
    
     <div class="row">
      <div class="twelve columns">
        <div class="projects_carousel">
          <div class="carousel_navigation">
		        <a id="prev" class="prev" href="#">&lt;</a>
						<a id="next" class="next" href="#">&gt;</a>
          </div>
          
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
		          <img src="<?php echo $root;?>/images/portfolio_2.jpg">
          </li>  
           <li>
		          <img src="<?php echo $root;?>/images/portfolio_3.jpg" >
          </li>  
           <li>
		          <img src="<?php echo $root;?>/images/portfolio_4.jpg" >
          </li>  
           <li>
		          <img src="<?php echo $root;?>/images/portfolio_1.jpg" >
          </li>  
           <li>
		          <img src="<?php echo $root;?>/images/portfolio_2.jpg" >
          </li>  
           <li>
		          <img src="<?php echo $root;?>/images/portfolio_3.jpg" >
          </li>  
           <li>
		          <img src="<?php echo $root;?>/images/portfolio_4.jpg" >
          </li>  
          
         
        
        </ul>
      
        
             </div>
             
      </div>
      </div>
    </div>

       
  
   
  <!-- end main wrap -->     

  
  


  <?php print render($page['front_blog']); ?> 
  
  
    
    <div id="myModal" class="reveal-modal large">
  <h2>Awesome. I have it.</h2>
  <p class="lead">Your couch.  It is mine.</p>
  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
  <a class="close-reveal-modal">&#215;</a>
</div>
 
         
             
    <!-- end main body container -->  
<?php }
?>